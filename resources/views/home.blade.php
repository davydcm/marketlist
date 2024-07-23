@extends('layout.header')

@section('conteudo')

<div class='container'>
    <div class='row justify-content-center align-items-center vh-100'>
        <div class="col-auto">
            <div class='row'>
                <img src='{{url('/public/assets/logo.png')}}'>
            </div>
            <div class='row'>
                <a class='text-center btn btn-lg btn-success' href='{{route('mylist')}}'>ACESSAR LISTA</a>
            </div>
        </div>
    </div>
</div>
@endsection