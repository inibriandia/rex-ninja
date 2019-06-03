

<script type="text/javascript">
    $('#datetimepicker').datetimepicker({
        format: 'yyyy-mm-dd'
    });
</script>
@extends('layouts.app')

@section('content')
    <h1>Create Posts</h1>
    {!! Form::open(['action' => 'EvenementsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('titre','Titre')}}
        {{Form::text('titre','',['class' => 'form-control','placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textarea('description', '',['id'=>'article-ckeditor','class' => 'form-control','placeholder' => 'Description text'])}}
    </div>
    <div class="form-group">
        {{Form::label('dateDebut','Datedebut')}}
        {{Form::date('dateDebut',null,['class' => 'form-control'])}}
    </div>

    <div class="form-group">
        {{Form::label('heureDebut','HeureDebut')}}
        {{Form::time('heureDebut', '',['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('dateFin','Date de Fin')}}
        {{Form::date('dateFin','',['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('heureFin','HeureFin')}}
        {{Form::time('heureFin', '',['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('telephone','Telephone')}}
        {{Form::text('telephone','',['class' => 'form-control','placeholder' => 'Telephone'])}}
    </div>
    <div class="form-group">
        {{Form::label('cellulaire','Cellulaire')}}
        {{Form::text('cellulaire','',['class' => 'form-control','placeholder' => 'Cellulaire'])}}
    </div>
    <div class="form-group">
        {{Form::label('image','Image')}}
        {{Form::file('image')}}
    </div>
    <div class="form-group">
        {{Form::label('lienFacebook','Lien Facebook')}}
        {{Form::text('lienFacebook','',['class' => 'form-control','placeholder' => 'page:Bellenature'])}}
    </div>
    <div class="form-group">
        {{Form::label('email','Email')}}
        {{Form::text('email',old('email'),['class' => 'form-control','placeholder' => 'Email'])}}
    </div>
    <div class="form-group">
        {{Form::label('numeroMaison','Numero maison')}}
        {{Form::text('numeroMaison','',['class' => 'form-control','placeholder' => '655'])}}
    </div>
    <div class="form-group">
        {{Form::label('nomRue','nom de la rue')}}
        {{Form::text('nomRue','',['class' => 'form-control','placeholder' => 'pizza street'])}}
    </div>
    <div class="form-group">
        {{Form::label('descriptionAdresse','Description de l\'adresse')}}
        {{Form::textarea('descriptionAdresse','',['class' => 'form-control','placeholder' => 'par ex: porte de derriere'])}}
    </div>
    <div class="form-group">
        {{Form::label('latitude','Latitude')}}
        {{Form::text('latitude','',['class' => 'form-control','placeholder' => '45.589566'])}}
    </div>
    <div class="form-group">
        {{Form::label('longitude','Longitude')}}
        {{Form::text('longitude','',['class' => 'form-control','placeholder' => '253.784596'])}}
    </div>
    <div class="form-group">
        {{Form::label('prix','Prix')}}
        {{Form::text('prix','',['class' => 'form-control','placeholder' => '0'])}}
    </div>
    <div class="form-group">
        {{Form::label('organisateur_id','num Organisateur')}}
        {{Form::text('organisateur_id','',['class' => 'form-control','placeholder' => '2'])}}
    </div>
    <div class="form-group">
        {{Form::label('ville_id','num ville')}}
        {{Form::text('ville_id','',['class' => 'form-control','placeholder' => '1'])}}
    </div>
    <div class="form-group">
        {{Form::label('province_id','Province')}}
        {{Form::select('province_id',$provinces, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('categorie_id','num categorie')}}
        {{Form::text('categorie_id','',['class' => 'form-control','placeholder' => '5'])}}
    </div>
    <div class="form-group">
        {{Form::label('ambiance_id','num Ambiance')}}
        {{Form::text('ambiance_id','',['class' => 'form-control','placeholder' => '3'])}}
    </div>
    <div class="form-group">
        {{Form::label('categorieAge_id','num categorie Age')}}
        {{Form::text('categorieAge_id','',['class' => 'form-control','placeholder' => '2'])}}
    </div>
    <div>
        {{Form::label('pays','Pays')}}
        {{Form::select('id', $pays, null, ['class' => 'form-control'])}}
    </div>

    <div>
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>

@endsection
