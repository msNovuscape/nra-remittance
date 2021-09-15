@extends('frontend.master')
@section('content')
<section class="innerpage section-padding-50 msg-central-bank">
        <div class="container">
            <h1>{{$single_gallery->title}}</h1>
            <span class="card__date">{{ $single_gallery->created_at->format('M j, Y') }}</span>
            @if($single_gallery->count() > 0)
            <figure>
                <img src="{{ asset( 'storage/' . $single_gallery->image_path ) }}">
            </figure>
            <article class="innerpage-article-content">
                <p>{{$single_gallery->description}}</p>
                
            </article>
            @else
            <article class="innerpage-article-content">
                <p>Data not available!</p>
                
            </article>
            @endif
        </div>
    </section>
@endsection