@extends('layout')

@section('body-part')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>Article:</h2>
                    <br><br>

                    <h3>{{$article->title}}</h3>
                    <p><img src="/css/images/banner.jpg" alt="" class="image image-full" /> </p>
                    <p>{{$article->excerpt}}</p>
                    <p>{{$article->body}}</p>
                </div>

            </div>

        </div>
    </div>
@endsection
