@extends('layout.header')

@section('conteudo')

<div class='container p-4'>
    <div class='row justify-content-center'>
        <div class="col-auto">
            <div class='row'>
                <img src='{{url('/public/assets/logosmall.png')}}'>
            </div>
        </div>
    </div>
</div>

<div class='container p-4 text-white'>
    <form action='{{route('add')}}' method="POST">
        @csrf
        <div class='row'>
            <div class="form-group col-8">
                <input name='produto' class="form-control form-control-lg" type="text" placeholder="Produto">
            </div>
            <div class="form-group col-2">
                <input name='qtd' class="form-control form-control-lg" type="number" placeholder="Qtd" min='1'>
            </div>
            <div class="form-group col-2">
                <button type='submit' class='btn btn-success btn-lg'><i class="bi bi-plus-lg"></i></button>
            </div>
        </div>
    </form>
</div> 

<div class='container p-4'>
    <div class='row justify-content-center'>
        <div class="col">
            <div class='row'>
                <div class='row text-white'>
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                            <th class="col-md-10">Produto</th>
                            <th class="col-md-1">Qtd</th>
                            <th class="col-md-1"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($itens as $i)
                                @if (array_key_exists('1',$i)) 
                                    <tr>
                                        <td>{{$i['0']}}</td>
                                        <td>{{$i['1']}}</td>
                                        <td><a class='btn btn-danger btn-small' href='{{url("/remove/".$i['linha'])}}'><i class="bi bi-trash"></i></a></td>
                                    </tr>                                    
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection