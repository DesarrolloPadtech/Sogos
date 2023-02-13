@extends('layouts.header')



@section('content')

    <section class="section section-md section-shaped pt-0">
        <div class="shape shape-style-1 shape-primary">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="container-fluid py-md">
            <div class="row row-grid justify-content-center align-items-center">
                <div class="col-md-6 text-center">
{{--                    <h1 class="display-1 text-white">PAQUETES</h1>--}}
                </div>
            </div>
            {{--<div class="row row-grid justify-content-between align-items-center">
                <div class="col-md-4">
                    <a href="/contacto">
                        <img src="{{ asset('/assets/img/paquetes/paquete_1.png') }}" class="w-100 img-fluid main-paquetes">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/contacto">
                        <img src="{{ asset('/assets/img/paquetes/paquete_2.png') }}" class="w-100 img-fluid main-paquetes">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="/contacto">
                        <img src="{{ asset('/assets/img/paquetes/paquete_3.png') }}" class="w-100 img-fluid main-paquetes">
                    </a>
                </div>
            </div>--}}
            <div class="row row-grid justify-content-between align-items-center">
                <div class="col-md-12">
                    <a href="/contacto">
                        <img src="{{ asset('/assets/img/paquetes/paquetes.jpg') }}" class="w-100 img-fluid">
                    </a>
                </div>
            </div>
        </div>
        <!-- SVG separator -->
        <div class="separator separator-bottom separator-skew">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </section>

@endsection


@section('extra-js')



@endsection
