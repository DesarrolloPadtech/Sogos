@extends('layouts.header')



@section('content')

    <section class="section section-shaped section-md">
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
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h1 class="display-1 text-white">
                        SOPORTE
                    </h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row h-100 justify-content-center">
                        <div class="col-10">
                            <h3 class="h4 text-white font-weight-bold text-center">¿Tienes algun problema con tu conexión de internet?</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card bg-secondary shadow border-0" style="border-radius: 15px;">
                        <div class="card-body px-lg-5 py-lg-5">
                            @if ($errors->any())
                                <div class="alert alert-danger mb-3">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @isset($message)
                                <div class="alert alert-success mb-3">
                                    <ul class="mb-0">
                                        <li>{{ $message }}</li>
                                    </ul>
                                </div>
                            @endisset
                            <form role="form" id="form-contacto" method="POST" action="/soporte">
                                @csrf
                                @method('POST')
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">
                                                <input class="form-control" name="cliente" placeholder="Número de cliente" type="text" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="tipo">¿Que tipo de error tienes?</label>
                                            <select class="form-control" id="tipo" name="tipo" required>
                                                <option value="" selected disabled></option>
                                                <option value="No tengo internet">No tengo internet</option>
                                                <option value="Velocidad baja o intermitencia en señal">Velocidad baja o intermitencia en señal</option>
                                                <option value="Falla en modem">Falla en modem</option>
                                                <option value="Daño en antena">Daño en antena</option>
                                                <option value="otro">Otro</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="input-group input-group-alternative mb-3">
                                                <input class="form-control" name="otro" placeholder="Tengo otro tipo de error" type="text">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary mt-4">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('extra-js')


    <script src="https://www.google.com/recaptcha/api.js"></script>

@endsection
