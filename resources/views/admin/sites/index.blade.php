@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 my-3 d-flex justify-content-center">
                <h1>Websites:</h1>
            </div>
            @foreach ($sites as $site)
            <div class="col-3 d-flex justify-content-center">
                <div class="card mb-5" style="width: 18rem;">
                    <img src="{{ $site->image_url }}" class="card-img-top" alt="{{ $site->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $site->title }}</h5>
                        <p class="card-text">Series: {{ $site->author }}</p>
                        <p class="card-text">Release Date: {{ $site->description }}</p>
                        <a href="{{route('admin.sites.show',$site->id)}}" class="btn btn-primary">Info</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

