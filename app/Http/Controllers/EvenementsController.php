<?php

namespace App\Http\Controllers;

use App\Evenement;
use App\Ville;
use Illuminate\Http\Request;
use DB;
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
        return view('pages.event');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'titre' => 'required',
            'description' => 'required',
            /*'dateDebut' => 'required',
            'heureDebut' => 'required',
            'dateFin' => 'required',
            'heureFin' => 'required',
            'telephone' => 'required',
            'telephoneCell' => 'required',
            'email' => 'required',
            'numeroMaison' => 'required',
            'nomRue' => 'required',
            //'email' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'prix' => 'required',
            'organisateur_id'=>'required',
            'ville_id' => 'required',
            'categorie_id' => 'required',
            'ambiamce_id' => 'required',
            'categorieAge_id' => 'required',*/

        ]);

        //create event

        $event = new Evenement;

        $event->titre = $request->input('titre');
        $event->description = $request->input('description');
        $event->dateDebut = $request->input('dateDebut');
        $event->heureDebut = $request->input('heureDebut');
        $event->dateFin = $request->input('dateFin');
        $event->heureFin = $request->input('heureFin');
        $event->telephone = $request->input('telephone');
        //$event->telephoneCell = $request->input('telephoneCell');
        $event->image = $request->input('image');
        $event->lienFacebook = $request->input('lienFacebook');
        $event->email = $request->input('email');
        $event->numeroMaison = $request->input('numeroMaison');
        $event->nomRue = $request->input('nomRue');
        $event->descriptionAdresse = $request->input('descriptionAdresse');
        $event->latitude = $request->input('latitude');
        $event->longitude = $request->input('longitude');
        $event->prix = $request->input('prix');
        $event->organisateur_id = $request->input('organisateur_id');
        $event->ville_id =  $request->input('ville_id');
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
