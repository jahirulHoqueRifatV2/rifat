@extends('layout')

@section('body-part')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>Articles:</h2>
                    <br><br>

                    @foreach ($articles as $article)
                        <h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
                        <p><img src="css/images/banner.jpg" alt="Image silo akta" class="image image-full" /> </p>
                        <p>{{$article->excerpt}}</p>
                        <br>

                    @endforeach

                </div>
            </div>

        </div>
    </div>
@endsection
