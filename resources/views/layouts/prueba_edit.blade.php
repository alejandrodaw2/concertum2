@extends("../layouts.app")

@section('content')
    <div class="row">
        <div class="col-8">
            <div class="card card-title border-0">
                <div class="card-body">
                    <form method="post" action="/esdeveniments/{{$esdeveniment->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="titol">Pon un nombre con gancho!</label>
                                <input type="text" class="form-control" name="titol" value="{{$esdeveniment->titol}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="artista">Artista invitado</label>
                                <input type="text" class="form-control" name="artista" value="{{$esdeveniment->artista}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" name="descripcion">{{$esdeveniment->descripcion}}</textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="diaHora">Fecha y Hora </label>
                                <input type="datetime-local" class="form-control" name="diaHora" placeholder="AAAA-MM-DD HH:MM" value="{{$esdeveniment->diaHora}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="lloc">Lugar del evento</label>
                                <input type="text" class="form-control" name="lloc" value="{{$esdeveniment->lloc}}">
                            </div>
                            <div class="form-group col">
                                <label for="aforament">Aforo</label>
                                <input type="number" class="form-control" name="aforament" value="{{$esdeveniment->aforament}}">
                            </div>
                            <div class="form-group col">
                                <label for="entradas">Entradas a la venta*</label>
                                <input type="text" class="form-control" name="entradas" value="{{$esdeveniment->entradas}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="path" >
                                    <i class="far fa-image"></i>
                                </label>
                                <input onchange="cambiar();" class="d-none" id="path" type=file name="path">
                                <small>Añade una foto</small>
                                <div id="info"></div>
                            </div>
                        </div>
                        <input type="submit" value="Editar Esdeveniment" name="submit">

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function cambiar(){
            var pdrs = document.getElementById('path').files[0].name;
            document.getElementById('info').innerHTML = pdrs;
        }
    </script>

@endsection
