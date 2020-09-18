<div id="addinsoft-5">
    <h4 class="mb-0 text-center mb-4">
      <a class="text-uppercase" data-toggle="collapse" data-target="#addinsoft-direction" aria-expanded="true" aria-controls="collapseOne">
        direction
      </a>
    </h2>
  </div>
  <div id="addinsoft-direction" class="collapsed show" aria-labelledby="addinsoft-5" data-parent="#accordionExample">
    <div class="row justify-content-center">
      @foreach($directions as $direction)
          <div class="col-md-3 col-8 text-center">
              <div class="flip-card mb-4">
                  <div class="flip-card-inner">
                      <div class="flip-card-front">
                      <img src="{{ $direction->image }}" alt="{{ $direction->alt }}" style="width:200px;height:200px;">
                      <p>{{ $direction->name }} {{ $direction->firstname }}</p>   
                      </div>
                      <div class="flip-card-back">
                      <h2>{{ $direction->name }} {{ $direction->firstname }}</h1> 
                      <p>{{ $direction->title }}</p> 
                      <p class="font-italic">{{ $direction->function }}</p>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
  </div>
  </div>