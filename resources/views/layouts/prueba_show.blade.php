

<div class="jumbotron">



    <!--OJO con la / del img src -->
    <img src="/{{$esdeveniment->path}}" width="600px" class="card-img-top" alt="...">

    <h1 class="display-4">{{$esdeveniment->titol}}</h1>
    <h1 class="display-4">{{$esdeveniment->artista}}</h1>
    <hr class="my-4">
    <p class="lead">{{$esdeveniment->descripcion}}</p>
    <p class="lead">{{$esdeveniment->lloc}}</p>

    <p>Fecha : {{$esdeveniment->diaHora}}</p>

    <p>Aforo: {{$esdeveniment->aforament}}</p>

    <p>Entradas : {{$esdeveniment->entradas}}</p>


</div>
<br>
