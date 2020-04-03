@extends("../layouts.plantilla")
@extends('layouts.app')
@section("cabecera")
    LEER REGISTROS

@endsection

@section("contenido")
    <a href="/">Volver inicio</a>

   <!-------------------------------------------------------------------------->

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
        <tr>
            <td>{{$esdeveniment->titol}}</td>
            <td>{{$esdeveniment->artista}}</td>
            <td>{{$esdeveniment->descripcion}}</td>
            <td>{{$esdeveniment->diaHora}}</td>
            <td>{{$esdeveniment->lloc}}</td>
            <td>{{$esdeveniment->aforament}}</td>
            <td>{{$esdeveniment->entradas}}</td>

            <td><img src="/{{$esdeveniment->path}}"></td>


        </tr>

    </table><br>

    <!-----------------------------------------------------Modal BORRAR--------------------------------------------->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Comprar</button>



        <!---------------------------------------------------ModalBORRAR----------------------------------------------->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Segur?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Tancar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Confirma que vols eliminar l'esdeveniment</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel·lar</button>

                        <form method="post" action="/compres" enctype="multipart/form-data">
                            @csrf
                            <label>Numero entradas</label>
                            <input type="number" id="titol" name="numero_entradas"><br>

                            <input type="hidden" id="esdeveniment_id" name="esdeveniment_id" value="{{$esdeveniment->id}}">
                            <input type="submit" value="Crear Esdeveniment" name="submit"><br>

                        </form>


                    </div>
                </div>
            </div>
        </div>
        <!------------------------------------------------------------------------------------>
        <!---------------------------------------------------Boton----------------------------------------------->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">No se puede borrar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Tancar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Se han vendido entradas no se puede borrar el eveniment</p>
                    </div>

                </div>
            </div>
        </div>


    <!-------------------------------------MODAL BORRAR----------------------------------------------->











@section("pie")
    <!--   <button><a href="/crearDonacions?project_id={ {// $ projecte -> id } }">Hacer donacaion</a></button>-->

@endsection
