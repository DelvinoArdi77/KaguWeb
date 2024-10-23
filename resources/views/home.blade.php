@extends('layouts.hometemp')

@section('home')
    <!-- carousel waifu -->
    <div id="carouselwaifu" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselwaifu" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselwaifu" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselwaifu" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active c-item" data-bs-interval="2000">
                <img src="../img/katou.png" class="d-block w-100 c-img" alt="">
                <div class="carousel-caption">
                    <h5>Katou Megumi</h5>
                    <p>Saenai Heroine no Sodatekata</p>
                </div>
            </div>
            <div class="carousel-item c-item" data-bs-interval="2000">
                <img src="../img/ranni.jpg" class="d-block w-100 c-img" alt="">
                <div class="carousel-caption">
                    <h5>Ranni</h5>
                    <p>Elden Ring</p>
                </div>
            </div>
            <div class="carousel-item c-item" data-bs-interval="2000">
                <img src="../img/wakamo.png" class="d-block w-100 c-img" alt="">
                <div class="carousel-caption">
                    <h5>Kosaka Wakamo</h5>
                    <p>Blue Archive</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselwaifu" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselwaifu" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- responsive slide card -->
    <div class="card-slide-container swiper">
        <div class="card-slide-content">
            <div class="card-wrapper swiper-wrapper">

                @foreach ($tokohs as $tokoh)
                    <div class="card swiper-slide">
                        <div class="image-content">
                            <span class="overlay"></span>
                            <div class="card-image">
                                <img src="../img/{{ $tokoh->image }}" alt="" class="card-img">
                            </div>
                        </div>

                        <div class="card-content">
                            <h2 class="name">{{ $tokoh->name }}</h2>
                            <p class="description">{{ $tokoh->excerpt }}</p>
                            <a class="btn btn-primary card-btn" href="/home/{{ $tokoh->name }}">View More</a>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
@endsection
