@extends("../layouts.app_usuarios")


@section("content")

    <div class="row">
        @foreach($esdeveniments as $esdeveniment)

            <div class="col-4 m-auto p-3 pl-2" style="padding-left: 10px">
                <div class="card  "  style="width:300px;">
                    <img src="{{$esdeveniment->path}}" width="300px" class="card-img-top" alt="...">
                    <div class="card-body">

                        <h3 class="card-title"><a href="{{route('esdeveniments.show',$esdeveniment->id)}}">{{$esdeveniment->titol}}</a></h3>
                        <h5 class="card-title">{{$esdeveniment->artista}}</h5>
                        <h5 class="card-title">{{$esdeveniment->diaHora}}</h5>

                    </div>
                </div>
            </div>





        @endforeach
    </div>
@endsection









