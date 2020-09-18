<footer class="container-fluid py-5">
  <div class="row justify-content-center">
    <div class="col-md-4 text-center">
      <p class="text-quatriary font-weight-bold">{{ $page->copyright }}<p>
    </div>
    <ul class="col-md-4 nav nav-mention">
    @foreach($rgpds as $rgpd)
      <li class="btn-mention">
        <a href="{{ $rgpd->href }}" >{{ $rgpd->title }}</a>
      </li>
    @endforeach
    </ul>
    <ul class="nav col-md-4 social-nav ">
    @foreach($socials as $social)
      <li class="btn-social">
        <a class="{{ $social->class }}" href="{{ $social->href }}" target="_blank"></a>
      </li>
    @endforeach
    </ul>
  </div>
</footer>
