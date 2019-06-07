<?php

namespace App\Http\Controllers;

use App\Evenement;
use App\Province;
use App\Ville;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Validator;


class EvenementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retourner tous les evenements

        //$evenement = Evenement::orderBy('distance', 'asc')->get();
        //return view('evenement.index')->with('evenement', $evenement);
        $lat = 13.452740;
        $lon = -16.578030;

        $evenements = Evenement::select('image', 'titre', 'latitude', 'longitude', DB::raw('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')->orderBy('distance', 'asc')->get();
        //$evenements = DB::table('Evenement')
        //->select('image', 'titre', 'latitude', 'longitude', raw(('sqrt(pow((latitude - ' . $lat . '),2) + pow((longitude - ' . $lon . '),2)) as distance'), 'id')
        //->orderBy('distance')
        //->get();

        return json_encode($evenements);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        info($request);

        $validator = Validator::make($request->all(),[
        //$validator = $this->validate($request,[
            'titre' => 'required',
            'description' => 'required',
            'dateDebut' => 'required',
            'heureDebut' => 'required',
            'dateFin' => 'required',
            'heureFin' => 'required',
            'telephone' => 'required',
            'cellulaire' => 'required',
            'image' => 'image|nullable|max:1999',
            'lienFacebook' => 'nullable',
            'email' => 'required',
            'numeroMaison' => 'required',
            'nomRue' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'prix' => 'required',
            'organisateur_id'=>'required',
            'ville_id' => 'required',
            'categorie_id' => 'required',
            'ambiance_id' => 'required',
            'categorieAge_id' => 'required',

        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        // Valider les images

        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // verifier si la ville est dans la base de données et l'ajouter si non
        $villeEntrer = $request->input('ville_id');
        $idVilleTemp =  Ville::select ('id') ->where ('ville', $villeEntrer)->get();

        if(count($idVilleTemp)>0){
            $ville =  Ville::select('id')->where('ville',$villeEntrer)->value('id');
        }
        else {

            DB::table('villes')->insert([
                'ville' => $request->input('ville_id'),
                //'province_id' => Province::select('id')->where('province',$request->input('provinces_id'))->value('id')
                'province_id' =>$request->input('province_id'),
            ]);
            $ville =  Ville::select('id')->where('ville',$request->input('ville_id'))->value('id');

        }

        //create event

        $event = new Evenement;

        $event->titre = $request->input('titre');
        $event->description = $request->input('description');
        $event->dateDebut = $request->input('dateDebut');
        $event->heureDebut = $request->input('heureDebut');
        $event->dateFin = $request->input('dateFin');
        $event->heureFin = $request->input('heureFin');
        $event->telephone = $request->input('telephone');
        $event->cellulaire = $request->input('cellulaire');
        $event->image = 'http://192.168.2.20:81/storage/images/'.$fileNameToStore;
        $event->lienFacebook = $request->input('lienFacebook');
        $event->email = $request->input('email');
        $event->numeroMaison = $request->input('numeroMaison');
        $event->nomRue = $request->input('nomRue');
        $event->descriptionAdresse = $request->input('descriptionAdresse');
        $event->latitude = $request->input('latitude');
        $event->longitude = $request->input('longitude');
        $event->prix = $request->input('prix');
        $event->organisateur_id = $request->input('organisateur_id');
        $event->ville_id = $ville;
        //$event->provinces_id = ($request->input('provinces_id'));
        $event->categorie_id = $request->input('categorie_id');
        $event->ambiance_id = $request->input('ambiance_id');
        $event->categorieAge_id = $request->input('categorieAge_id');

        //echo $event->ville_id;
        $event->save();

        return redirect('/')->with('success','Post Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $evenement = Evenement::select('titre', 'prix','numeroMaison', 'email', 'nomRue', 'categorieAge_id', 'description',
            'ambiance_id', 'telephone', 'lienFacebook', 'image', 'latitude', 'longitude')->where('id', $id)->get();

        //$evenement = Evenement::select(DB::raw("CONCAT('numeroMaison', ' ', 'nomRue') AS addresse"))->where('id', $id)->get();
        return json_encode($evenement);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
