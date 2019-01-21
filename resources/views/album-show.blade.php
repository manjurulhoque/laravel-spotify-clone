@extends('layouts.base')

@section('content')

    <div class="entityInfo">

        <div class="leftSection">
            <img src="{{ asset($album->album_image) }}">
        </div>

        <div class="rightSection">
            <h2>{{ $album->title }}</h2>
            <p role="link" tabindex="0">
                By {{ $album->artist->name }}</p>
            <p>{{ $album->songs->count() }} songs</p>

        </div>

    </div>


    <div class="tracklistContainer">
        <ul class="tracklist">
            @foreach($album->songs as $song)
                <li class='tracklistRow'>
                    <div class='trackCount'>
                        <img class='play' src='{{ asset('images/icons/play-white.png') }}'>
                        <span class='trackNumber'>{{ $song->id }}</span>
                    </div>

                    <div class='trackInfo'>
                        <span class='trackName'>{{ $song->title }}</span>
                        <span class='artistName'>{{ $album->artist->name }}</span>
                    </div>

                    <div class='trackOptions'>
                        <input type='hidden' class='songId' value="">
                        <img class='optionsButton' src='{{ asset('images/icons/more.png') }}'
                             onclick='showOptionsMenu(this)'>
                    </div>

                    <div class='trackDuration'>
                        <span class='duration'>{{ $song->duration }}</span>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <nav class="optionsMenu">
        <input type="hidden" class="songId">
        <select class="item playlist">
            <option value="">Add to playlist</option>
        </select>
    </nav>

@endsection
