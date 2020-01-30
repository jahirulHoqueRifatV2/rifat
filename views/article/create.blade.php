@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.css">
@endsection


@section('body-part')

    <div id="wrapper">
        <div id="page" class="container">

            <form class="" action="/articles" method="post">
                @csrf

                <div class="field">
                    <label class ="label"for="title">Title</label>
                    <div class="control">

                        <input class ="input" type="text" name="title" value="">
                        @if ($errors->has('title'))
                            <p class "help is-danger">{{$errors->first('title')}}</p>
                        @endif
                    </div>
                </div>

                <div class="field">
                    <label class ="label"for="excerpt">Excerpt</label>
                    <div class="control">

                        <input class ="textarea" type="textarea" name="excerpt" value="">
                        @if ($errors->has('excerpt'))
                            <p class "help is-danger">{{$errors->first('excerpt')}}</p>
                        @endif
                    </div>
                </div>

                <div class="field">

                    <label class ="label"for="body">Body</label>
                    <div class="control">

                        <input class ="textarea" type="textarea" name="body" value="">
                        @if ($errors->has('body'))
                            <p class "help is-danger">{{$errors->first('body')}}</p>
                        @endif
                    </div>

                </div>

                <div class="field is-grouped">
                    <div class="control">
                        <button class =" button is-link "type="submit" name="button">Submit</button>
                    </div>

                </div>

            </form>

        </div>
    </div>

@endsection
