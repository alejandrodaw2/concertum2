@extends("../layouts.plantilla")
@extends('layouts.app')
@section("cabecera")
    INSERTAR REGISTROS

@endsection

@section("contenido")
    <form method="post" action="/esdeveniments" enctype="multipart/form-data">
        @csrf
        <label>Nombre del evento</label>
        <input type="text" id="titol" name="titol"><br>
        <label>Artista</label>
        <input type="text" id="artista" name="artista"><br>
        <label>Descripción</label>
        <textarea id="descripcion" name="descripcion"></textarea><br>
        <label>Dia Hora</label>
        <input type="date" name="diaHora" id="diaHora" value="{{$now->format('Y-m-d-H:i')}}"><br>
        <label>Lloc</label>
        <textarea id="lloc" name="lloc"></textarea><br>
        <label>Aforament</label>
        <input type="number" id="aforment" name="aforament"><br>
        <label>Entrades</label>
        <input type="number" id="entradas" name="entradas"><br>
        <label>Selecciona la imatge a pujar</label>
        <input type="file" name="path" id="path"><br>
        <input type="submit" value="Crear Esdeveniment" name="submit"><br>
@endsection
