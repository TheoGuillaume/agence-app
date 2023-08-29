@extends('base')

@section('title', 'Se connecter')

@section('content')
    <div class="container mt-2">
        <h1>Se connecter</h1>
        <div class="card mt-2" style="margin : auto; display: flex; justify-content: center;">
            <div class="card-body">
                <form action="{{ route('login') }}" method="post" class="vstack gag-3">
                    @csrf
                    @include('shared.flash')

                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Email',
                        'name' => 'email',
                    ])

                    @include('shared.input', [
                        'class' => 'col',
                        'label' => 'Mot de passe',
                        'name' => 'password',
                    ])

                    <br>
                    <button class="btn btn-primary">
                        Se connecter
                    </button>
                </form>
            </div>
        </div>
    </div>

@endsection
