@extends('panel.layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('assets/css/stores.css') }}">

    <div class="pagetitle">
        <h1>Store 2</h1>
    </div>

    <section id="qout" class="qout box-stamp pt-4 px-5">
        <div class="container mt-5 col-md-12">
            <div class="card p-4 bg-gradient rounded-4" style="background: linear-gradient(45deg, #74b9ff, #a29bfe);">

                <div class="row g-4 text-center">

                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="custom-hover">
                            <div class="card h-100 shadow-sm d-flex align-items-center justify-content-center">
                                <h4>Main</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="custom-hover">
                            <div class="card h-100 shadow-sm d-flex align-items-center justify-content-center">
                                <h4>Delevery Sheet 1</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="custom-hover">
                            <div class="card h-100 shadow-sm d-flex align-items-center justify-content-center">
                                <h4>Delevery Sheet 2</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="custom-hover">
                            <div class="card h-100 shadow-sm d-flex align-items-center justify-content-center">
                                <h4>Delevery Script</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="custom-hover">
                            <div class="card h-100 shadow-sm d-flex align-items-center justify-content-center">
                                <h4>Confirm Sheet</h4>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <a href="#" class="custom-hover">
                            <div class="card h-100 shadow-sm d-flex align-items-center justify-content-center">
                                <h4>Script To Confirm</h4>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
