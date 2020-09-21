<div id="addinsoft-1">
    <h4 class="mb-0 text-center mb-2">
      <a class="text-uppercase" data-toggle="collapse" data-target="#addinsoft-tech" aria-expanded="true" aria-controls="collapseOne">
        tech
      </a>
    </h2>
</div>
<div id="addinsoft-tech" class="collapse" aria-labelledby="addinsoft-1" data-parent="#accordionExample">
    <div class="row justify-content-center">
        @foreach($techs as $tech)
            <div class="col-md-3 col-6 text-center">
                <div class="flip-card mb-4">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                        <img src="{{ $page->s3Assets }}{{ $tech->image }}" alt="{{ $tech->alt }}" loading="lazy" style="width:200px;height:200px;">
                        <p>{{ $tech->name }} {{ $tech->firstname }}</p>
                        </div>
                        <div class="flip-card-back">
                            <h2>{{ $tech->name }} {{ $tech->firstname }}</h1> 
                            <p>{{ $tech->title }}</p> 
                            <p class="font-italic">{{ $tech->function }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>