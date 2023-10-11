<!--<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>
    <body class="antialiased">
        <h2>Linkcard Template 1</h2>
        <h3>Precio: $2000 MXN</h3>
        <form action="{{route('paypal')}}" method="post">
            @csrf
            <input type="hidden" name="price" value="2000">
            <button type="submit">Pagar</button>
        </form>
    </body>
</html>-->

@extends('layouts.inicio')
@extends('layouts.app')
