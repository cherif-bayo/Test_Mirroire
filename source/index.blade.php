@extends('_layouts.master')

@section('body')

<div class="container-fluid">
  <div class="row d-flex">
  @foreach($softwares as $software)
    <div class="col-md-6 col-lg-6 col-xl-3 col-12 product-content" id="{{ $software->id }}" itemscope itemtype="http://schema.org/Product">
      <div class="row justify-content-center">
        <div class="col-md-10 text-center">
          <img itemprop="brand" src="{{ $software->image }}" alt="{{ $software.alt-img }}" >
        </div>
        <div class="col-md-10 text-content">
          <h5 itemprop="name" class="text-white">{{ $software->headline }}</h5>
          <p itemprop="description" class="text-white">{{ $software->content }}</p>
        </div>
        <div class="row product-boomrang-content">
          <div class="col-md-6 text-center">
            <img itemprop="image" src="{{ $software->boomerang }}" alt="{{ $software->alt-img }}">
          </div>
          <div itemprop="url"class="col-md-6 d-flex align-items-center">
            <a href="{{ $software->link }}" class="text-white font-weight-bold" target="_blank">{{ $software->linkLabel }}</a>
          </div>
        </div>
       
        <div class="overlay">
          <div class="text-center" itemprop="url">
            <a href="{{ $software->trial }}" class="btn btn-outline-light btn-lg" role="button" aria-pressed="true" target="_blank">{{ $software->trials }}</a>
            <a href="{{ $software->order }}" class="btn btn-outline-light btn-lg" role="button" aria-pressed="true" target="_blank">{{ $software->orders }}</a>
          </div>
          
          <div class="text-center product-separator"></div>
          
          <div class="text text-white text-center mt-4">
            <iframe width="300" height="200" src="https://www.youtube.com/embed/T5Syzsf5IeI" allowfullscreen>
            </iframe>
          </div>
          <div class="hidden" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">Rated <span itemprop="ratingValue">98%</span>/5 based on <span itemprop="reviewCount">10000</span> customer reviews
          </div>
        </div>
      </div>
    </div>
    @endforeach

  </div>
</div>


@endsection

