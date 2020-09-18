<div id="addinsoft-4">
    <h4 class="mb-0 text-center mb-4">
      <a class="text-center text-uppercase" data-toggle="collapse" data-target="#addinsoft-customer" aria-expanded="true" aria-controls="collapseOne">
        customer service
      </a>
    </h2>
  </div>
  <div id="addinsoft-customer" class="collapse" aria-labelledby="addinsoft-4" data-parent="#accordionExample">
    <div class="row justify-content-center">
      @foreach($customers as $customer)
          <div class="col-md-3 col-8 text-center">
              <div class="flip-card mb-4">
                  <div class="flip-card-inner">
                      <div class="flip-card-front">
                      <img src="{{ $customer->image }}" alt="{{ $customer->alt }}" style="width:200px;height:200px;">
                      <p>{{ $customer->name }} {{ $customer->firstname }}</p>
                      </div>
                      <div class="flip-card-back">
                        <h2>{{ $customer->name }} {{ $customer->firstname }}</h1> 
                        <p>{{ $customer->title }}</p> 
                        <p class="font-italic">{{ $customer->function }}</p>
                      </div>
                  </div>
              </div>
          </div>
      @endforeach
    </div>
  </div>