@extends('layouts.app')

@section('content')
    <h1 class="text-center fw-bold">Editar Linkcard</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <p class="login-box-msg">@include('message.flash-message')</p>
                    <form method="POST" action="{{ route('editLinkcard') }}">
                    @csrf
                        <div class="card-header">{{ __('Conóceme') }}</div>
                            <div class="card-body">
                                <div class="row justify-content-center mb-3"> 
                                    <div class="col-md-8">
                                        <label for="lc_bio" class="">{{ __('Descripción') }}</label>
                                        <textarea id="lc_bio" type="text" class="form-control @error('lc_bio') is-invalid @enderror" name="lc_bio" value="{{ old('lc_bio') }}" required autocomplete="lc_bio" placeholder="Breve descripción de tu entorno laboral." autofocus></textarea>
                                        @error('lc_bio')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!--<div class="row justify-content-center mb-3"> 
                                    <div class="col-md-4">
                                        <label for="lc_bio" class="">{{ __('Fecha de Nacimiento') }}</label>
                                        <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lc_bio" class="">{{ __('Linkcard') }}</label>
                                        <input type="url" class="form-control" id="exampleFormControlInput1" pattern="https://.*" placeholder="https://example.com">
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-3"> 
                                    <div class="col-md-4">
                                        <label for="lc_bio" class="">{{ __('Teléfono') }}</label>
                                        <input type="tel" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lc_bio" class="">{{ __('Edad') }}</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" pattern="https://.*" placeholder="https://example.com">
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-3"> 
                                    <div class="col-md-4">
                                        <label for="lc_bio" class="">{{ __('Email') }}</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lc_bio" class="">{{ __('Freelance') }}</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" pattern="https://.*" placeholder="https://example.com">
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row justify-content-center mb-3"> 
                                    <div class="col-md-4">
                                        <label for="lc_bio" class="">{{ __('Idioma 1') }}</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="lc_bio" class="">{{ __('Idioma 2') }}</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1">
                                        @error('')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="card-header">{{ __('Educación') }}</div>
                                <div class="card-body">
                                    <div class="row justify-content-center mb-3"> 
                                        <div class="col-md-3">
                                            <label for="lc_school_1" class="">{{ __('Escuela') }}</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1">
                                            @error('')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lc_since_1" class="">{{ __('Fecha') }}</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo: 2010-2015">
                                            @error('')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lc_since_1" class="">{{ __('Título') }}</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1">
                                            @error('')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            <div class="card-header">{{ __('Experiencia') }}</div>
                                <div class="card-body">
                                    <div class="row justify-content-center mb-3"> 
                                        <div class="col-md-3">
                                            <label for="lc_school_1" class="">{{ __('Empresa') }}</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1">
                                            @error('')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lc_since_1" class="">{{ __('Fecha') }}</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ejemplo: 2010-2015">
                                            @error('')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lc_since_1" class="">{{ __('Puesto') }}</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1">
                                            @error('')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-3">
                                            <label for="lc_since_1" class="">{{ __('Descripción del Puesto') }}</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1">
                                            @error('')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            <div class="card-header">{{ __('Contáctame') }}</div>
                                <div class="card-body">
                                    <div class="row justify-content-center mb-3">
                                        <div class="col-md-8">
                                            <label for="lc_school_1" class="">{{ __('Mapa Google') }}</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1">
                                            @error('')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>-->
                                
                                <center>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="bi bi-floppy"></i>
                                            {{ __('Guardar') }}
                                        </button>
                                    </div>
                                </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
