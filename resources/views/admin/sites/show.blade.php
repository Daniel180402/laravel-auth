@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <h1>Ecco le informazioni che hai cercato!</h1>
            </div>
            <div class="col-4 d-flex justify-content-center">
                <div class="card mb-5" style="width: 18rem;">
                    <img src="{{ $site->image_url }}" class="card-img-top" alt="{{ $site->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $site->title }}</h5>
                        <p class="card-text">{{ $site->author }}</p>
                        <p class="card-text">{{ $site->description }}</p>
                        <a href="{{ route('admin.sites.index') }}" class="btn btn-primary">back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection