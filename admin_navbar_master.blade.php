<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title')</title>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!--Icon-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--CSS-->
    <link href="{{asset('css/headandfooter_navbar.css')}}" rel="stylesheet">

</head>

<body>
    <!--Header-->
    <header>
        <div class="container">
            <div class="row">

                <div class="col-md-4" style="font-size: 20px; margin: auto;">
                    <a href="/admin_console">F&M Co., Ltd</a>
                </div>

                <div class="col-md-4 text-center">
                    <a href="/admin_console"><b>Snacks & Drinks</b></a>
                </div>

                <div class="col-md-4" id="rightheader">
                    <a href="/admin_console"><button type="button" class="btn btn-dark btn-sm">CONSOLE</button></a>
                    <a href="/"><button type="button" class="btn btn-danger btn-sm">LOG OUT <i class="fa fa-sign-out" aria-hidden="true"></i></button></a>
                </div>

            </div>
        </div>
    </header>

    <!--Navbar-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-4 menu">
                <a href="/admin_pdl_snacks">SNACKS</a>
            </div>
            <div class="col-4 menu">
                <a href="/admin_pdl_bakery">BAKERY</a>
            </div>
            <div class="col-4 menu">
                <a href="/admin_pdl_drinks">DRINKS</a>
            </div>
        </div>
    </div>

    @yield('content')

    <!--Java Script-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>

</html>