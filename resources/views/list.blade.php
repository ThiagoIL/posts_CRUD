@extends('layouts.main')
@section('title', 'list')



@section('content')
<table style="width:100%" class="table table-primary">
        <tr>
            <th scope="col">Titulo</th>
            <th scope="col">Descrição</th>
            <th scope="col">Local</th>
            <th scope="col">Data</th>
            <th scope="col">Editar</th>
            <th scope="col">Apagar</th>
            
        </tr>
    @foreach($posts as $poste)
    
    
        <tr>
            <td>{{ $poste->title }}</td>
            <td>{{ $poste->description }}</td>
            <td>{{ $poste->localization }}</td>
            <td>{{ date('d/m/Y', strtotime($poste->date)) }} </td>
            <td><a href="/updatecontrol/{{$poste->id}}"class="btn btn-info"><img src="img\edit.svg" alt=""></a></td>
            <td><a href="/delete/{{$poste->id}}" class="btn btn-danger"><img src="img\delet.svg" alt=""></a></td>
        </tr>
    
    @endforeach

</table>
@if(count($posts) == 0 )
       
        <h4 class="center-h4" style="text-align: center">Cadastre uma postagem para vizualizar</h4>
@endif

<a class="btn btn-primary btn-lg" href="/create" role="button">Cadastrar</a>
@endsection