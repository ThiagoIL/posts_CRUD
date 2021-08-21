@extends('layouts.main')
@section('title',  $post->title)



@section('content')

 <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>edite sua postagem</h1>

    
    <form action="/update/{{$post->id}}" method="POST">
    @csrf
    @method('PUT')
        <div class="form-group">
            <label for="titulo">Titulo Postagem</label>
            <input type="text" class="form-control" id='title' name='title' value='{{$post->title}}'>

        </div>
        <div class="form-group">
            <label for="description">Descrição</label>
            <input type="text" class="form-control" id='description' name='description' value='{{$post->description}}'>

        </div>
        <div class="form-group">
            <label for="localization">Localização</label>
            <input type="text" class="form-control" id='localization' name='localization' value='{{$post->localization}}'>

        </div>
        <div class="form-group">
            <label for="date">Data</label>
           
            <input type="date" class="form-control" id='date' name='date' value="{{ $post->date->format('Y-m-d')}}" >

        </div>
        
        
        <input type="submit" class="btn btn-primary "style="alignment='center-right'" value="Atualizar">

    </form>

 </div>


@endsection