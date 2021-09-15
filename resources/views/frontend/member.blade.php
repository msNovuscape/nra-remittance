@extends('frontend.master')

@section('content')
    <section class="innerpage section-padding-50 committee">
        <div class="container">
            <h1>Our Members</h1>
            <article class="innerpage-article-content table-data-content">
                <div class="table-responsive">
                    <table class="table bg-secondary th-border">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Contact</th>
                                <th>Visit Website</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($i = 1)
                            @foreach($members as $member)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$member->organization}}</td>
                                <td>{{$member->address}}</td>
                                <td>{{$member->phone}}</td>
                                <td><a href="{{$member->website_link}}" target="_blank">Link Here</a></td>
                            </tr>
                            @php($i++)
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </article>
        </div>
    </section>
@endsection