@extends("../layouts.app")



@section("content")

    <div class="row ">
        @foreach($esdeveniments as $esdeveniment)
            <div class="col-4  flex-column align-items-start">
            <div class="col-10 mt-3 mb-2 d-flex align-items-start">
                <div class="card  "  style="width:300px;">
                    <img src="{{$esdeveniment->path}}" width="200" height="200"class="card-img-top" alt="...">
                    <div class="card-body">

                        <h3 class="card-title"><a href="{{route('esdeveniments.show',$esdeveniment->id)}}">{{$esdeveniment->titol}}</a></h3>
                        <h5 class="card-title">{{$esdeveniment->artista}}</h5>
                        <h5 class="card-title">{{$esdeveniment->diaHora}}</h5>

                    </div>
                </div>
            </div>
            </div>





        @endforeach
    </div>
@endsection









