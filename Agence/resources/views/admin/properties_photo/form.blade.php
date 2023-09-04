@extends('admin.admin')

@section('title', 'Ajout photo')

@section('content')
    <form action="{{ route('admin.property.storePhoto') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">
                Ajouter des photo correspondant au biens <strong>{{ $property->title }}</strong>
            </label>
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="formFileMultiple" name="image[]"
                multiple>
            @error('image')
                <div class="text-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
