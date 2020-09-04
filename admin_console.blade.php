@extends('Template.admin_navbar_master')
@section('title','Console')

<!--CSS-->
<link href="{{asset('css/admin_console.css')}}" rel="stylesheet">

@section('content')

<!--Sign in-->
<article>
    <!--Admin Name-->
    <section>
        <div class="container" style="text-align: center;">
            <p>ADMIN NAME : แง่มๆเขียนdbไว้กงนี้</p>
        </div>
    </section>

    <!--Console Table-->
    <section style="margin-top:-0.5%">
        <div class="container">
            <!--Insert button-->
            <div class="row" style="margin-bottom: 7px">
                <div class="col-12" style="text-align: end;">
                    <a href="/admin_insert"><button type="button" class="btn btn-outline-dark">INSERT</button></a>
                </div>
            </div>
            <!--Table-->
            <div class="row" style="text-align: center;">
                <!--Topic Table-->
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-3 col-sm-12" style="border: 1px solid #494241;">
                            <p style="padding-top: 5%;">PRODUCT PICTURE</p>
                        </div>
                        <div class="col-md-2 col-sm-12" style="border: 1px solid #494241;">
                            <p style="padding-top: 8%;">PRODUCT NAME</p>
                        </div>
                        <div class="col-md-2 col-sm-12" style="border: 1px solid #494241;">
                            <p style="padding-top: 8%;">SIZE</p>
                        </div>
                        <div class="col-md-2 col-sm-12" style="border: 1px solid #494241;">
                            <p style="padding-top: 8%;">PRICE</p>
                        </div>
                        <div class="col-md-3 col-sm-12" style="border: 1px solid #494241;">
                            <p style="padding-top: 5%;">MODIFY</p>
                        </div>
                    </div>
                </div>
                <!--Detail Product-->
                <div class="col-12">
                    <!--ใส่วนลูปตรงนี้ แทนทับคอมเม้นตรงนี้เลยฮะ-->
                    <div class="row">
                        <div class="col-md-3 col-sm-12" style="border: 1px solid #494241;">
                            <p>PICTURE</p>
                        </div>
                        <div class="col-md-2 col-sm-12" style="border: 1px solid #494241;">
                            <p>NAME</p>
                        </div>
                        <div class="col-md-2 col-sm-12" style="border: 1px solid #494241;">
                            <p>SIZE</p>
                        </div>
                        <div class="col-md-2 col-sm-12" style="border: 1px solid #494241;">
                            <p>PRICE</p>
                        </div>
                        <div class="col-md-3 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-12" style="border: 1px solid #494241;">
                                    <a href="/admin_edit" class="toolButton">EDIT</a>
                                </div>
                                <div class="col-md-6 col-sm-12" style="border: 1px solid #494241;">
                                    <p>DELETE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</article>

@endsection

<!--Javascript-->
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>