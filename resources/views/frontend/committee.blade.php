@extends('frontend.master')

@section('content')
        <!-- Teams start -->
        <section class="teams-list section-padding-50">
            <div class="container">
                <article class="section__header">
                    <h1>Our Officer</h1>
                </article>
                <div class="grid grid-cols-3 grid-gap-30">
                    @foreach($executive_committees as $executive_committee)
                    <div class="card card--team">
                        <figure class="card__img">
                            <img src="{{ asset( 'storage/' . $executive_committee->image_path ) }}" class="circle" alt="team">
                        </figure>
                        <article class="card__body text-center">
                            <h3>{{$executive_committee->first_name}} {{$executive_committee->last_name}}</h3>
                            <div class="card__meta flex flex-content-between">
                                <div class="card__meta-designation">{{$executive_committee->last_name}} <br> <span class="text">{{$executive_committee->designation}}</span></div>
                                <div class="card__meta-designation">Location <br> <span class="text">{{$executive_committee->address}},{{$executive_committee->city}},{{$executive_committee->country}}</span></div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!-- Teams end -->

        @endsection