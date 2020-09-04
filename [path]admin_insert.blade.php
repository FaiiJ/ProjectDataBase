@extends('Template.admin_navbar_master')
@section('title','Insert')

<!--CSS-->
<link href="{{asset('css/admin_insertandedit.css')}}" rel="stylesheet">

@section('content')

<!--Sign in-->
<article>
    <section>
        <div class="container">
            <h2>INSERT</h2>
        </div>
    </section>

    <section>
        <div class="cotainer">
            <div class="row">
                <div class="col-md-4 col-sm-12"></div>

                <!--DETAIL-->
                <div class="col-md-4 col-sm-12" style="margin-top: 1%;">
                    <div class="row justify-content-center">
                        <!--NAME-->
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="productName" placeholder="Product Name" required>
                            </div>
                        </div>
                        <!--PRICE-->
                        <div class="col-12">
                            <div class="form-group">
                                <input type="number" class="form-control" id="productPrice" placeholder="Price" required>
                            </div>
                        </div>
                        <!--SIZE-->
                        <div class="col-12">
                            <div class="form-group">
                                <input type="text" class="form-control" id="productSize" placeholder="Product Size" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12"></div>
            </div>
        </div>
    </section>

    <section>
        <!--BUTTON-->
        <div class="row">
            <div class="col-md-6 col-sm-12" style="text-align: end;">
                <a href="/admin_console"><button type="button" class="btn btn-success">SAVE</button></a>
            </div>
            <div class="col-md-6 col-sm-12">
                <a href="/admin_console"><button type="button" class="btn btn-danger">BACK</button></a>
            </div>
        </div>
    </section>
</article>

@endsection

<!--Javascript-->
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>