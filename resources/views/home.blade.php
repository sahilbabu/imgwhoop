@extends('layouts.default-layout')

@section('content')
<div class="inner" style="min-height:700px;">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2> Gallery Styles </h2>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-success">
                                <div class="panel-heading">
                                    Different Animations Example
                                </div>
                                <div class="panel-body">
                                    <p style="text-align:center">
                                        <a id="example1" href="theme_assets/img/demoBig.jpg" title="Lorem ipsum dolor sit amet"><img src="theme_assets/img/1G.jpg" alt=""></a>
                                        <a id="example2" href="theme_assets/img/demoBig2.jpg" title="Lorem ipsum dolor sit amet"><img src="theme_assets/img/2G.jpg" alt=""></a>
                                        <a id="example3" href="theme_assets/img/demoBig.jpg" title="Etiam quis mi eu elit temp"><img src="theme_assets/img/1G.jpg" alt=""></a>
                                        <a id="example4" href="theme_assets/img/demoBig2.jpg" title="Cras neque mi, semper leon"><img src="theme_assets/img/2G.jpg" alt=""></a>
                                    </p>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Different Title Positions Example
                                </div>
                                <div class="panel-body">
                                    <p style="text-align:center">
                                        <a id="example5" href="{{public_path('assets/img/demoBig.jpg')}}" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><img src="theme_assets/img/1G.jpg" alt="1"></a>

                                        <a id="example6" href="assets/img/demoBig2.jpg" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit"><img src="theme_assets/img/2G.jpg" alt=""></a>

                                        <a id="example7" href="assets/img/demoBig.jpg" title="Lorem ipsum dolor sit amet"><img src="theme_assets/img/1G.jpg" alt=""></a>

                                        <a id="example8" href="assets/img/demoBig2.jpg" title="Lorem ipsum dolor sit amet"><img src="theme_assets/img/2G.jpg" alt=""></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
