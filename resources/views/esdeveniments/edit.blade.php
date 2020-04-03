@extends("../layouts.plantilla")
@extends('layouts.app')
@section("cabecera")
    INSERTAR REGISTROS

@endsection




@section("contenido")
    <form method="post" action="/esdeveniments/{{$esdeveniment->id}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PUT">
          <label>Nombre del evento</label>
        <input type="text" id="titol" name="titol" value="{{$esdeveniment->titol}}"><br>



        <label>Artista</label>
        <input type="text" id="artista" name="artista" value="{{$esdeveniment->artista}}"><br>
        <label>Descripción</label>
        <textarea id="descripcion" name="descripcion" >{{$esdeveniment->descripcion}}</textarea><br>
        <label>Dia Hora</label>
        <input type="text" name="diaHora" id="diaHora" value="{{$esdeveniment->diaHora}}"><br>
        <label>Lloc</label>
        <textarea id="lloc" name="lloc" >{{$esdeveniment->lloc}}</textarea><br>
        <label>Aforament</label>
        <input type="number" id="aforment" name="aforament" value="{{$esdeveniment->aforament}}"><br>
        <label>Entrades</label>
        <input type="number" id="entradas" name="entradas" value="{{$esdeveniment->entradas}}"><br>
        <label>Cambia la imatge a pujar</label>
        <img src="/{{$esdeveniment->path}}"><br>

        <input type="file" name="path" id="path"><br>
        <input type="submit" value="Editar Esdeveniment" name="submit">
@endsection

@section("pie")






@endsection

