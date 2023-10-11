@extends('layouts.inicio')
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (auth()->user()->is_admin == 1)
                <a href="{{url('admin/routes')}}">Admin</a>
            @else
                <h1 class="text-center">Bienvenido <span class="text-primary">{{ Auth::user()->name }}</span></h1>
                <p>Instrucciones
                    <ol>
                        <li>Elige la plantilla que más te guste y da clic en el botón "Pagar".</li>
                        <li>Inicia sesión en tu cuenta PayPal.</li>
                        <li>Selecciona el método de pago y da clic en el botón para continuar.</li>
                        <li>¡Empieza a usar tu Linkcard!</li>
                    </ol>
                </p>
                <a class="nav-link fw-bold" href="{{ route('linkcardTemplateOne') }}">{{ __('Regístrate aquí') }}</a>
            @endif
        </div>
    </div>
</div>
@endsection