@extends("../layouts.app")



@section("content")

    <button type="button" class="btn btn-warning"><a href="{{route('esdeveniments.edit',$esdeveniment->id)}}">EDITAR<i class="far fa-edit"></i></a></button>






    <!-----------------------------------------------------Modal BORRAR--------------------------------------------->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Eliminar<i class="fas fa-trash-alt"></i></button>


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


    <div class="row d-flex justify-content-center">
        <div class="col-6 ">
    <div class="jumbotron">



        <!--OJO con la / del img src -->
        <img src="/{{$esdeveniment->path}}" width="600px" class="card-img-top" alt="...">

        <h1 class="display-4">{{$esdeveniment->titol}}</h1>
        <h1 class="display-4">{{$esdeveniment->artista}}</h1>
        <hr class="my-4">
        <p class="lead">{{$esdeveniment->descripcion}}</p>
        <p class="lead"><i class="fas fa-map-marked-alt"></i>{{$esdeveniment->lloc}}</p>

        <p>Fecha : {{$esdeveniment->diaHora}}</p>

        <p>Aforo: {{$esdeveniment->aforament}}</p>

        <p>Entradas : {{$esdeveniment->entradas}}</p>


    </div>
        </div>
    </div>
    <br>








@endsection




