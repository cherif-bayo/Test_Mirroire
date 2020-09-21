<div id="addinsoft-2">
    <h4 class="mb-0 text-center">
      <a class="text-uppercase" data-toggle="collapse" data-target="#addinsoft-sales" aria-expanded="true" aria-controls="collapseOne">
        sales
      </a>
    </h2>
</div>
<div id="addinsoft-sales" class="collapse" aria-labelledby="addinsoft-2" data-parent="#accordionExample">
    <div class="row justify-content-center">
      @foreach($sales as $sale)
          <div class="col-md-3 col-6 text-center">
              <div class="flip-card mb-4">
                  <div class="flip-card-inner">
                      <div class="flip-card-front">
                      <img src="{{ $page->s3Assets }}{{ $sale->image }}" alt="{{ $sale->alt }}" loading="lazy" style="width:200px;height:200px;">
                      <p>{{ $sale->name }} {{ $sale->firstname }}</p> 
                      </div>
                      <div class="flip-card-back">
                        <h2>{{ $sale->name }} {{ $sale->firstname }}</h1> 
                        <p>{{ $sale->title }}</p> 
                        <p class="font-italic">{{ $sale->function }}</p>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
    </div>
</div>