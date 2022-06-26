@extends('includes.menu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                   
                      {{--  <label for="">Seleciona tu producto: </label>
                        <select>
                            @foreach ($products as $product)
                                <option >
                                    Nombre: {{ $product->name }},
                                    Precio: {{ $product->price }}  + IVA
                                </option>
                            @endforeach
                        </select>
                        <br>
                        <button type="submit">Comprar</button> --}}
                        
                    <ul>
                        @foreach ($products as $product)
                            <li>{{ $product->name }}</li>
                            <li>{{ $product->price }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
