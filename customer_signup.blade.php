@extends('Template.customer_master')
@section('title','Sign in')

<!--CSS-->
<link href="{{asset('css/customer_signup.css')}}" rel="stylesheet">

@section('content')

<!--Sign in-->
<hr style="margin-top: -2px;">
<article>
    <div class="container">

        <section>
            <h2 style="text-align: center;">SIGN UP</h2>
            </br>
            <form action="/action_page.php">
                <div class="row justify-content-center">
                    <div class="col-5 ">
                        <div class="form-group">
                            <input type="text" class="form-control" id="firstName" placeholder="Name" required>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5 ">
                        <div class="form-group">
                            <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5 ">
                        <div class="form-group">
                            <input type="text" class="form-control" id="tel" placeholder="Tel." required>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5 ">
                        <div class="form-group">
                            <input type="text" class="form-control" id="usr" placeholder="Username" required>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5 ">
                        <div class="form-group">
                            <input type="password" class="form-control" id="pwd" placeholder="Password" required>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <a href="/customer_login"><button type="button" class="btn btn-info btn-lg">Register</button></a>
                </div>
                <hr>
                <div class="signin">
                    <p>Already have an account? <a href="/customer_login">Sign in</a>.</p>
                </div>
            </form>
        </section>

    </div>
</article>


@endsection

<!--Javascript-->
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>