@extends('layouts.hometemp')

@section('home')
    <div class="card view" style="width:auto; margin-top:100px;">
        <div class="card-image">
            <img src="../img/{{ $tokoh->image }}" class="card-img">
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $tokoh->name }}</h5>
            <h6>Category: <a
                    href="/categories/{{ $tokoh->category->name }}"class="btn btn-outline-primary">{{ $tokoh->category->name }}</a>
            </h6>
            <p class="card-text">{!! $tokoh->description !!}</p>
            <a href="/home" class="btn btn-primary">Back</a>
        </div>
    </div>
@endsection
