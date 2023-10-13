@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('Dashboard')}}</div>
                <div class="card-body">
                    <table class="table table-bordered justify-content-center">
                        <thead class="text-center">
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th>Opciones</th>
                        </thead>
                        <tr class="text-center">
                            <td>1</td>
                            <td>User Test</td>
                            <td>user.test@email.com</td>
                            <td>
                                <button class="btn btn-info">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>2</td>
                            <td>Ingrid Martinez</td>
                            <td>ingrid.martinez@linkcard.com.mx</td>
                            <td>
                                <button class="btn btn-info">Editar</button>
                                <button class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection