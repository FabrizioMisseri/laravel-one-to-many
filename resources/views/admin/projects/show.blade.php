@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-8 offset-2">
                <h1 class="mt-3">{{ $project->title }}</h1>
                <div class="mt-3">
                    <h5>{{ $project->slug }}</h5>
                    <p>{{ $project->description }}</p>
                </div>
                <p class="mt-3">{{ $project->content }}</p>
                <figure class="mt-4">
                    @if ($project->cover_image)
                        <img src="{{ asset('storage/' . $project->cover_image) }}" style="max-width: 500px">
                    @else
                        <div class="w-50 bg-secondary py-4 text-center d-inline-block text-light">
                            NO IMAGE
                        </div>
                    @endif
                </figure>
            </div>
        </div>
    </div>
@endsection
