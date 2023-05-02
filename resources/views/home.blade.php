@extends('header')

<div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345
                    </p>
                    <h1 class="intro-title mb-4 ">
                      <span class="color-b">204 </span> Mount
                      <br> Olive Road Two
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Louer | 50 000 F Cfa</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Rino
                      <br> Venda Road Five
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Louer | 50 000 F Cfa</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Doral, Florida
                      <br> 78345
                    </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">204 </span> Alira
                      <br> Roan Road One
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">Louer | 50 000 F Cfa</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

@section('content')
    <section class="about container" id="about">
        <div class="about-img">
            <img src="img/about.jpg" alt="">
        </div>
        <div class="about-text">
            <span>A Propos</span>
            <h2>Nous offrons le meilleur
                Propriété pour vous!</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. voluptatum illo dolores at! Ut nulla corrupti eaque
                expedita.</p>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. temporibus possimus quibusdam quos?</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellat nihil.</p>
            <a href="#" class="btn1">En savoir plus</a>
        </div>
    </section>

    <section class="properties container" id="properties">
        <div class="heading">
            <span>Recent</span>
            <h2>Nos propriétés en vedette</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, alias.</p>
        </div>
        <div class="properties-container container">
            <!-- Box 1-->
            @foreach ($properties as $property)
                <div class="col">
                    @include('property.card1')
                </div>
            @endforeach
        </div>
    </section>
@endsection


