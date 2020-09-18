<div id="addinsoft-3">
    <h4 class="mb-0 text-center mb-2">
      <a class="text-uppercase"  data-toggle="collapse" data-target="#addinsoft-research" aria-expanded="true" aria-controls="collapseOne">
        research & development
      </a>
    </h2>
</div>
<div id="addinsoft-research" class="collapse" aria-labelledby="addinsoft-3" data-parent="#accordionExample">
    <div class="row justify-content-center">
      @foreach($researchs as $research)
          <div class="col-md-3 col-8 text-center">
              <div class="flip-card mb-4">
                  <div class="flip-card-inner">
                      <div class="flip-card-front">
                      <img src="{{ $research->image }}" alt="{{ $research->alt }}" style="width:200px;height:200px;">
                      <p>{{ $research->name }} {{ $research->firstname }}</p>  
                      </div>
                      <div class="flip-card-back">
                      <h2>{{ $research->name }} {{ $research->firstname }}</h1> 
                      <p>{{ $research->title }}</p> 
                      <p class="font-italic">{{ $research->function }}</p>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
    </div>
</div>