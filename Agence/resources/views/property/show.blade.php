@extends('base')

@section('title', $property->title)

@section('content')
    <div class="container mt-2">
        <div class="row">
            <div class="col-5">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/static/img/baobab.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/static/img/baieanges.png" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-7">
                <h1>{{ $property->title }}</h1>
                <h2>{{ $property->rooms }} pièces - {{ $property->surface }}m²</h2>

                <div class="text-primary fw-bold" style="font-size: 4rem">
                    {{ number_format($property->price, thousands_separator: ' ') }} €
                </div>

                <hr>

                <div class="mt-4">
                    <h4>Intéressé par ce bien ?</h4>

                    @include('shared.flash')

                    <form class="vstack gap-3" action="{{ route('property.contact', $property) }}" method="post">
                        @csrf
                        <div class="row">
                            @include('shared.input', [
                                'class' => 'col',
                                'label' => 'Prenom',
                                'name' => 'firstname',
                            ])
                            @include('shared.input', [
                                'class' => 'col',
                                'label' => 'Nom',
                                'name' => 'lastname',
                            ])
                        </div>
                        <div class="row">
                            @include('shared.input', [
                                'class' => 'col',
                                'label' => 'Téléphone',
                                'name' => 'phone',
                            ])
                            @include('shared.input', [
                                'type' => 'email',
                                'class' => 'col',
                                'label' => 'Email',
                                'name' => 'email',
                            ])
                        </div>
                        @include('shared.input', [
                            'type' => 'textarea',
                            'class' => 'col',
                            'label' => 'Votre message',
                            'name' => 'message',
                        ])

                        <div class="mt-2">
                            <button class="btn btn-primary">
                                Nous contacter
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="mt-4">
            <p>{!! nl2br($property->description) !!}</p>
            <div class="row">
                <div class="col-8">
                    <h2>Caractéristique</h2>
                    <table class="table table-striped">
                        <tr>
                            <td>Surface habitable</td>
                            <td>{{ $property->surface }} m²</td>
                        </tr>
                        <tr>
                            <td>Pièces</td>
                            <td>{{ $property->rooms }}</td>
                        </tr>
                        <tr>
                            <td>Chambres</td>
                            <td>{{ $property->bedrooms }}</td>
                        </tr>
                        <tr>
                            <td>Etage</td>
                            <td>{{ $property->floor ?: 'Rez de chaussé' }}</td>
                        </tr>
                        <tr>
                            <td>Localisation</td>
                            <td>
                                {{ $property->address }} <br>
                                {{ $property->city }} ({{ $property->postal_code }})
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-4">
                    <h2>Spécificités</h2>
                    <ul class="list-group">
                        @forelse ($property->options as $option)
                            <li class="list-group-item">{{ $option->name }}</li>
                        @empty
                            <div class="col fw-bold text-danger">
                                Aucun Spécificités pour ce bien
                            </div>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>



@endsection
