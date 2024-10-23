@extends('layouts.hometemp')

@section('home')
    {{-- <button type="button" class="btn btn-primary" style="margin-top:100px;">
        {{ $category }} <span class="badge text-bg-secondary">@</span>
    </button> --}}
    <!-- Default dropend button -->
    <div class="btn-group dropend" style="margin-top:100px;">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            {{ $catebuton }}
        </button>
        <ul class="dropdown-menu dropdown-menu-dark">
            <!-- Dropdown menu links -->
            @foreach ($category as $cate)
                <li><a class="dropdown-item" href="/categories/{{ $cate->name }}">{{ $cate->name }}</a></li>
            @endforeach
        </ul>
        <a href="/home" class="btn btn-primary ms-3">Back</a>
    </div>

    <form class="d-flex" role="search" style="margin-top:10px;">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
    @foreach ($tokohs as $tokoh)
        <div class="card view" style="margin-top:30px;">
            <div class="card-image">
                <img src="../img/{{ $tokoh->image }}" class="card-img">
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $tokoh->name }}</h5>
                <p class="card-text">{!! $tokoh->excerpt !!}</p>
                <a class="btn btn-primary" href="/home/{{ $tokoh->name }}">View More</a>
            </div>
        </div>
    @endforeach
@endsection
