@extends("../layouts.app")



@section("content")

    <div class="row">
        @foreach($esdeveniments as $esdeveniment)

            <div class="col-4 m-auto">
                <div class="card  "  style="width:300px;">
                    <img src="{{$esdeveniment->path}}" width="300px" class="card-img-top" alt="...">
                    <div class="card-body">
                        7777
                        <h5 class="card-title"><a href="{{route('esdeveniments.show',$esdeveniment->id)}}">{{$esdeveniment->titol}}</a></h5>
                        <h3 class="card-title">{{$esdeveniment->artista}}</h3>
                        <h3 class="card-title">{{$esdeveniment->diaHora}}</h3>

                    </div>
                </div>
            </div>





        @endforeach
    </div>




@endsection









@section("pie")

@endsection
