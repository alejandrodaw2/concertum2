<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Plantilla</title>
<style>

    .imagenCabecera{
        float:right;
        padding-right: 150px;
        width: 150px;
    }

    .cabecera{
        text-align:center;
        font-size: x-large;
        font-family: Tahoma ,Tahoma , Geneva ,sans-serif;
        margin-bottom: 100px;
        color:#009900;
    }

    .contenido form , table{
        width: 500px;
        margin:0 auto;
    }


    .pie{
        position:fixed;
        bottom:0px;
        width:100%;

        font-size: 0.7em;
        margin-bottom: 15px;

    }


</style>


</head>
<body>
@include('sweet::alert')

<div class="cabecera">
    @yield("cabecera")
<img src="/images/logo.jpg" class="imagenCabecera">

</div>





<div class="contenido">
    @yield("contenido")


</div>




<div class="pie">
    @yield("pie")

    Pildoras informaticas.Cursos de informatica.Todos los derechos reservados.

</div>



</body>
</html>
