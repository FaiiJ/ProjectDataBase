@extends('Template.admin_master')
@section('title','Sign in')

<!--CSS-->
<link href="{{asset('css/admin_login.css')}}" rel="stylesheet">

@section('content')

<!--Sign in-->
<hr style="margin-top: -2px;">
<article>
    <div class="container">

        <section>
            <h2 style="text-align: center;">SIGN IN</h2>

            <form action="/action_page.php">
                <div class="row justify-content-center">
                    <div class="col-5 ">
                        <div class="form-group">
                            <input type="text" class="form-control" id="usr" placeholder="username">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-5 ">
                        <div class="form-group">
                            <input type="password" class="form-control" id="pwd" placeholder="password">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="button" class="btn btn-outline-success btn-lg">SIGN IN</button>
                </div>

            </form>
        </section>

    </div>
</article>


@endsection

<!--Javascript-->
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>