@extends('base')

@section('content')
    <div class="bg-light p-5 mb-5 text-center">
        <div class="container">
            <h1>Agence loren ispn</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus illum velit dolorum non vitae odit et qui
                harum repellat cupiditate esse sapiente, nulla ipsa voluptates itaque nam repellendus asperiores omnis.
            </p>
        </div>
    </div>

    <div class="container">
        <h2>Nos derniers biens</h2>
        <div class="row">
            @foreach ($properties as $property)
                <div class="col">
                    @include('property.card')
                </div>
            @endforeach
        </div>

    </div>

@endsection
