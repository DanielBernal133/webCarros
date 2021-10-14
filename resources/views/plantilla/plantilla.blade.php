<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Venta Vehiculos</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href={{ asset('assets/favicon.ico')}} />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href={{ asset('css/styles.css')}} rel="stylesheet" />
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href={{ asset('https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i')}}
            rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href={{ asset('css/sb-admin-2.css')}} rel="stylesheet">
        <script src={{ asset('https://kit.fontawesome.com/e0a1bf980c.js')}} crossorigin="anonymous"></script>

        <!-- Custom styles for this page -->
        <link href={{ asset('vendor/datatables/dataTables.bootstrap4.min.css')}} rel="stylesheet">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
                <!-- Page content-->
                <div class="contendor container-fluid">
                    @yield('contenedor')
                    @yield('contenedor2')

                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src={{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js')}}></script>
        <!-- Core theme JS-->
        <script src={{ asset('js/scripts.js')}}></script>
        <script src={{ asset('vendor/jquery/jquery.min.js')}}></script>
    <script src={{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ asset('vendor/jquery-easing/jquery.easing.min.js')}}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ asset('js/sb-admin-2.min.js')}}></script>

    <!-- Page level plugins -->
    <script src={{ asset('vendor/datatables/jquery.dataTables.min.js')}}></script>
    <script src={{ asset('vendor/datatables/dataTables.bootstrap4.min.js')}}></script>

    <!-- Page level custom scripts -->
    <script src={{ asset('js/demo/datatables-demo.js')}}></script>
    </body>
</html>
