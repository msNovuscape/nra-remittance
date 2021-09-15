@extends('frontend.master')

@section('content')
    <section class="innerpage news-list-page section-padding-50">
        <div class="container">
            <h1>News</h1>

            <div class="grid grid-cols-3 grid-gap-30">
                @forelse($news as $new)
                <div class="card card--news-box">
                    <a href="{{route('welcome.single_news',['id' => $new->id])}}">
                        <figure>
                            <img src="{{ asset( 'storage/' . $new->image_path ) }}" alt="Image unavailable">
                        </figure>
                    </a>
                    <article class="card__body card--news-box__body">
                        <a href="{{route('welcome.single_news',['id' => $new->id])}}" class="card__title">{{$new->title}}</a>
                        <span class="card__date">{{ $new->created_at->format('M j, Y') }}</span>
                        <p>{{str_limit(strip_tags($new->description), 110)}}</p>
                            @if (strlen(strip_tags($new->description)) > 110)
                            <a href="{{route('welcome.single_news',['id' => $new->id])}}" class="btn btn-outline-third pill">Read More <i class="fa fa-long-arrow-right"></i></a>
                            @endif
                        
                    </article>
                </div>
                @empty
                <p>Data not available.</p>
                @endforelse
                
            </div>
        </div>
    </section>
@endsection