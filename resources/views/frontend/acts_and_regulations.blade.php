@extends('frontend.master')

@section('content')
    <section class="innerpage section-padding-50 arts-regulation">
        <div class="container">
            <h1>Acts & Regulations</h1>
            @if($acts->isNotEmpty())
            <article class="innerpage-article-content">
                <p>{{$acts->first()->title}}</p>
                <p>{{$acts->first()->description}}</p> 
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis officiis voluptas animi aut aliquid quo voluptatem cumque blanditiis sed aspernatur, dolor aliquam nemo ea inventore, illum necessitatibus in illo odio!</p> -->
            </article>
            @else
            <article class="innerpage-article-content">
                <p>There are no any data available!</p>
            </article>
            @endif
        </div>
    </section>
@endsection