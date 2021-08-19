@extends('layouts.main')
@section('title', 'inserir')



@section('content')

 <div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>crie sua postagem</h1>

    
    <form action="/store" method="POST">
    @csrf
        <div class="form-group">
            <label for="titulo">Titulo Postagem</label>
            <input type="text" class="form-control" id='title' name='title'>

        </div>
        <div class="form-group">
            <label for="descrition">Descrição</label>
            <input type="text" class="form-control" id='descrition' name='descrition'>

        </div>
        <div class="form-group">
            <label for="localization">Localização</label>
            <input type="text" class="form-control" id='localization' name='localization'>

        </div>
        <div class="form-group">
            <label for="date">Data</label>
            <input type="date" class="form-control" id='date' name='date'>

        </div>
        
        
        <input type="submit" class="btn btn-primary" value="criar postagem">

    </form>

 </div>


@endsection