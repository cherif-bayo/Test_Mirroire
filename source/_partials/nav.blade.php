
<nav class="navbar navbar-expand-lg navbar-light sticky-top site-nav">
  <a class="navbar-brand d-none d-lg-block brand" href="/">
    <img  src="{{ $page->s3Assets }}{{ $page->logo }}" alt="SITE-LOGO">
  </a>
  <a class="navbar-brand d-block d-lg-none text-uppercase brand-small" href="/">
    <img  src="{{ $page->logoMobile }}" alt="SITE-LOGO">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-md-auto">
    @foreach($navigations as $navigation)
        <li class="nav-item">
         <a class="nav-link font-weight-bold  {{ $page->selected( $navigation->url ) }}" href="/{{ $navigation->href }}">{{ $navigation->title }}</a>
        </li>
    @endforeach
    </ul>
    <div class="line"></div>
  </div>
</nav>


<!-- Navigation -->
   