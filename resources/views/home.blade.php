@extends('includes.menu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h5>Hola Bienvenido: {{ Auth::user()->name }}</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eligendi optio ducimus repudiandae tenetur officia temporibus odit ex cupiditate atque voluptate, eum exercitationem rerum repellat dolor porro! Ex soluta ab earum.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
