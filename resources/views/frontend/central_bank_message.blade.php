@extends('frontend.master')

@section('content')
    <section class="innerpage section-padding-50 msg-central-bank">
        <div class="container">
            <h1>Message From Central Bank</h1>
            @if($message->isNotEmpty())
            
            <figure>
                <img src="{{ asset( 'storage/' . $message->first()->image_path ) }}" alt="">
            </figure>
            <article class="innerpage-article-content">
            <b>{{$message->first()->title}}</b>
                <p>{{$message->first()->description}}</p>
                
            </article>
            @else
            <article class="innerpage-article-content">
                <p>Message is currently empty!</p>
                
            </article>
            @endif
        </div>
    </section>
@endsection