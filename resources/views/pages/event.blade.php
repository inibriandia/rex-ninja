

<script type="text/javascript">
    $(function () {
        $( "#datepicker" ).datepicker({
            todayHighlight: true,
            autoclose: true,
        });
    });
</script>

    <h1>Create Posts</h1>
    {!! Form::open(['action' => 'EvenementsController@store', 'method' => 'POST']) !!}
    <div class="form-group">
        {{Form::label('titre','Titre')}}
        {{Form::text('title','',['class' => 'form-control','placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::textarea('description', '',['id'=>'article-ckeditor','class' => 'form-control','placeholder' => 'Description text'])}}
    </div>
    <div class="form-group">
        {{Form::label('dateDebut','Datedebut')}}
        {{Form::text('dateDebut',null,['class' => 'datepicker','id' => 'datepicker'])}}
    </div>

    <div class="form-group">
        {{Form::label('heureDebut','HeureDebut')}}
        {{Form::text('heureDebut', '',['class' => 'form-control','placeholder' => 'HeureDebut'])}}
    </div>
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class' => 'form-control','placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body', '',['id'=>'article-ckeditor','class' => 'form-control','placeholder' => 'Body text'])}}
    </div>
    {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}


