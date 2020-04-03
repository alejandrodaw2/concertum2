<!DOCTYPE html>
<html>
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Template</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
        <script src="https://kit.fontawesome.com/e3989053af.js" ></script>

        <script src="https://kit.fontawesome.com/7a2419db80.js " crossorigin="anonymous"></script>    </head>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>

</head>
<body>
<style>
    .contenido{
        display:flex !important;
        justify-content: space-between;
    }

</style>

<header>
    <nav class="cabecera navbar navbar-expand-md bg-dark navbar-dark">
        @yield("cabecera")
        <a class="navbar-brand" href="/">CONCERTUM</a>


    </nav>
</header>



<div class="container" style="display: flex;">
    @yield("contenido")


</div>




<div class="pie">
    @yield("pie")
    <footer class="page-footer font-small black">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyleft:
            <a href="https://concertum.com/"> Concertum</a>
        </div>
        <!-- Copyright -->

    </footer>

</div>



</body>
</html>
