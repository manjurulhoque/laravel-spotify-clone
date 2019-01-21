@extends('layouts.base')

@section('content')

    <h1 class="pageHeadingBig">You Might Also Like</h1>

    <div class="gridViewContainer">

        @foreach($albums as $album)

            <div class='gridViewItem'>
                <a href="{{ route('albums.show', $album->id) }}">
                    <img src='{{ $album->album_image }}'>

                    <div class='gridViewInfo'>
                        {{ $album->title }}
                    </div>
                </a>

            </div>

        @endforeach

    </div>

@endsection
