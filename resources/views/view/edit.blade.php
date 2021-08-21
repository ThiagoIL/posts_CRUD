@extends('layouts.main')
@section('title', 'Editar:' . $posts->title)



@section('content')

 <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>crie sua postagem</h1>

    
    <form action="/update/{{$post->id}}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="titulo">Titulo Postagem</label>
            <input type="text" class="form-control" id='title' name='title' value='{{$post->title}}'>

        </div>
        <div class="form-group">
            <label for="descrition">Descrição</label>
            <input type="text" class="form-control" id='descrition' name='descrition' value='{{$post->discription}}'>

        </div>
        <div class="form-group">
            <label for="localization">Localização</label>
            <input type="text" class="form-control" id='localization' name='localization' value='{{$post->localization}}'>

        </div>
        <div class="form-group">
            <label for="date">Data</label>
            <input type="date" class="form-control" id='date' name='date' value='{{ date("d/m/Y", strtotime($poste->date)) }} '>

        </div>
        
        
        <input type="submit" class="btn btn-primary" value="criar postagem">

    </form>

 </div>


@endsection