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
            <td>{{ $poste->date }}</td>
            <td><a href="#"class="btn btn-info"><img src="img\edit.svg" alt=""></a></td>
            <td><a href="#" class="btn btn-danger"><img src="img\delet.svg" alt=""></a></td>
        </tr>
    @endforeach

</table>

<a class="btn btn-primary btn-lg" href="/create" role="button">Voltar</a>
@endsection