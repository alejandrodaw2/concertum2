@extends("../layouts.plantilla")
@extends('layouts.app')
@section("cabecera")
    LEER REGISTROS

@endsection

@section("contenido")


    <table border="1"> <!--esto es un expacio en blanco-->
        <tr>
            <td>titol</td>
            <td>artista</td>
            <td>descripcion</td>
            <td>diaHora</td>
            <td>lloc</td>
            <td>aforament</td>
            <td>entradas</td>
            <td>imagen</td>




        </tr>
        @foreach($esdeveniments as $esdeveniment)
            <tr>
                <td><a href="{{route('esdeveniments.show',$esdeveniment->id)}}">{{$esdeveniment->titol}}</a></td>
                <td>{{$esdeveniment->artista}}</td>
                <td>{{$esdeveniment->descripcion}}</td>
                <td>{{$esdeveniment->diaHora}}</td>
                <td>{{$esdeveniment->lloc}}</td>
                <td>{{$esdeveniment->aforament}}</td>
                <td>{{$esdeveniment->entradas}}</td>

                <td><img src="{{$esdeveniment->path}}"></td>


            </tr>
        @endforeach
    </table>
@endsection









@section("pie")

@endsection

