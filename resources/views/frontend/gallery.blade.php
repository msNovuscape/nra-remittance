@extends('frontend.master')

@section('content')
    <section class="innepage gallery-content section-padding-50">
        <div class="container">
            <h1>Gallery</h1>

            <div class="grid grid-cols-4 grid-gap-30">
                @forelse($galleries as $gallery)
                <div class="card card--gallery">
                    <a href="{{route('welcome.single_gallery',['id' => $gallery->id])}}">
                        <figure>
                            <img src="{{ asset( 'storage/' . $gallery->image_path ) }}" alt="{{$gallery->title}}">
                        </figure>
                    </a>
                    <article class="card__body card--gallery__body">
                        <a href="{{route('welcome.single_gallery',['id' => $gallery->id])}}" class="card__title">{{$gallery->title}}</a>
                    </article>
                </div>
                @empty
                <p>No data available!</p>
                @endforelse
                
            </div>
        </div>
    </section>
@endsection