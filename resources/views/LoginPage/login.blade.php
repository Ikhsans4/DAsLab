<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fav icon -->
    <link rel="icon" type="image/x-icon" href="{{ url('img/icon/uskLogo.png') }}" style="width: 2px">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- admin LTE -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">

    <title>D'AsLab | Login</title>
</head>


<body class="bg-main">
    {{-- <button type="button" class="btn btn-danger toastrDefaultError text-light">
        Launch Error Toast
    </button> --}}

    <div class="container-fluid">
        <div class="row" style="position: fixed; bottom: 0; top:0; left: 0;right: 0;">
            <div class="col-md-6" style="background-color: #272a37; color: white;">
                <img src="{{ url('img/icon/uskLogo.png') }}" class="float-start mt-2 mx-3" style="width: 65px;"
                    alt="USK Logo">
                <div class="pt-4" style="margin-top: 7px">
                    <h5>D'AsLab</h5>
                </div>
                <!-- Content-->
                <div class="d-flex justify-content-center" style="margin-top: 12rem">
                    <form action="{{ url('login') }}" method="post">
                        @csrf
                        <div>
                            <h3 class="text-center text-uppercase">Login</h3>
                        </div>
                        <div class="mb-3">
                            <label for="npm" class="form-label">NPM</label>
                            <input type="tel" class="form-control r-10" id="npm" name="npm" placeholder="NPM"
                                style="width: 400px;" autofocus required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control r-10" id="password" name="password"
                                placeholder="Password" required>
                        </div>
                        <div class="text-center" style="margin-top: 2em;">
                            <button type="submit" class="btn btn-primary padd-button rounded-pill">LOGIN</button>
                        </div>
                    </form>
                </div>
                <!-- End Content -->
                {{-- <div class="d-flex justify-content-center col">
                </div> --}}
            </div>
            <div class="col-md-6 opacity-25" style="background-image: url('img/login.jpg'); background-size: cover;">
            </div>

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>



    {{-- <script>
        $('.toastrDefaultError').click(function() {
            toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
    </script> --}}
</body>

</html>
