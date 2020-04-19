@extends("../layouts.app_usuarios")




@section("content")
    <!-----------------------------------------------------Modal comprar--------------------------------------------->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fas fa-shopping-cart"></i>Comprar</button>


    @if($esdeveniment->entradas == 0)
    <!---------------------------------------------------Modal Boton----------------------------------------------->

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">No se puede realizar la compra</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Tancar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>No queden entrades disponibles per aquest eveniment</p>
                </div>

            </div>
        </div>
    </div>


    <!-------------------------------------MODAL BORRAR----------------------------------------------->
    @else
    <!---------------------------------------------------Modalcomprar----------------------------------------------->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmacion de compra</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Tancar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> Codigo y fecha de la compra: codigo {{$esdeveniment->id}} / fecha {{$esdeveniment->created_at}} </p>
                </div>
                <div class="modal-footer">


                    <form method="post" action="/compres" enctype="multipart/form-data">
                        @csrf


                        <input type="hidden" id="esdeveniment_id" name="esdeveniment_id" value="{{$esdeveniment->id}}">
                        <input type="submit" value="Continuar" name="submit"><br>

                    </form>


                </div>
            </div>
        </div>
    </div>
    @endif
    <!-------------------------------------------cierro Modal----------------------------------------->


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



@section("pie")
    <!--   <button><a href="/crearDonacions?project_id={ {// $ projecte -> id } }">Hacer donacaion</a></button>-->

@endsection
