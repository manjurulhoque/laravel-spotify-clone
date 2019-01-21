@extends('layouts.base')

@section('content')

    <div class="entityInfo">

        <div class="centerSection">
            <div class="userInfo">
                <h1>{{ auth()->user()->full_name }}</h1>
            </div>
        </div>

        <div class="buttonItems">
            <button class="button"><a href="{{ route('profile.edit') }}">USER DETAILS</a></button>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <button class="button" onclick="event.preventDefault();document.getElementById('logout-form').submit();">LOGOUT</button>
        </div>

    </div>

@endsection
