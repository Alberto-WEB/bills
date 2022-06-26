@extends('includes.menu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos Disponibles') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                       
                        @if (session('succes'))
                            <br>
                            {{ session('succes') }}
                        @endif
                        <form action="{{ route('client.buy') }}" method="POST">
                            @csrf
                            
                            <select name="product_id" id="product" required>
                                <option value="">Seleciona tu producto</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}"
                                            @if ($product->stock == 0)
                                                disabled
                                            @endif
                                            >
                                            {{ $product['name'] }} Precio: {{ $product['price'] }}</option>
                                    @endforeach
                            </select>
                            <br><br>
                            <button type="submit">Comprar</button>
                        </form>
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
