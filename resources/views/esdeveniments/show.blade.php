@extends("../layouts.plantilla")
@extends('layouts.app')
@section("cabecera")
    LEER REGISTROS

@endsection

@section("contenido")
    <a href="/">Volver inicio</a>

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
                <td><a href="{{route('esdeveniments.edit',$esdeveniment->id)}}">{{$esdeveniment->titol}}</a></td>
                <td>{{$esdeveniment->artista}}</td>
                <td>{{$esdeveniment->descripcion}}</td>
                <td>{{$esdeveniment->diaHora}}</td>
                <td>{{$esdeveniment->lloc}}</td>
                <td>{{$esdeveniment->aforament}}</td>
                <td>{{$esdeveniment->entradas}}</td>

                <td><img src="/{{$esdeveniment->path}}"></td>


            </tr>

    </table>

    <!-----------------------------------------------------Modal EDITAR--------------------------------------------->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Editar</button>


    @if($esdeveniment->entradas == $esdeveniment->aforament)
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Segur?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Tancar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Confirma que qioeres editar</p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('esdeveniments.edit',$esdeveniment->id)}}">EDITAR</a>


                    </div>



                </div>
            </div>
        </div>
    @else
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">No se puede editar</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Tancar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Se han vendido entradas no se puede editar el eveniment</p>
                    </div>

                </div>
            </div>
        </div>

    @endif



    <!-----------------------------------------------------Modal EDITAR--------------------------------------------->




<!-----------------------------------------------------Modal BORRAR--------------------------------------------->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Eliminar</button>


   @if($esdeveniment->entradas == $esdeveniment->aforament)
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
                       <form method="post" action="/esdeveniments/{{$esdeveniment->id}}">
                           @csrf
                           <input type="hidden" name="_method" value="DELETE">
                           <input type="submit" name="enviar" value="Confirmar" class="btn btn-primary">
                       </form>
                   </div>
               </div>
           </div>
       </div>
       <!------------------------------------------------------------------------------------>
   @else
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

    @endif
    <!-------------------------------------MODAL BORRAR----------------------------------------------->













@section("pie")

@endsection
