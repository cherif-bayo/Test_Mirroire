<footer class="container-fluid py-5 content-footer">
    <div class="row justify-content-center">
      <div class="col-md-4 text-center">
        <p class="text-white font-weight-bold">{{ $page->copyright }}<p>
      </div>
      <ul class="col-md-4 nav nav-mention">
      @foreach($rgpdsw as $rgpdw)
        <li class="btn-mention-w">
          <a href="{{ $rgpdw->href }}"  class="{{ $page->navSelected( $rgpdw->url ) }}">{{ $rgpdw->title }}</a>
        </li>
      @endforeach
      </ul>
      <ul class="nav col-md-4 social-nav ">
      @foreach($socialsw as $socialw)
        <li class="btn-social d-inline-flex">
          <a class="{{ $socialw->class }}" href="{{ $socialw->href }}" target="_blank"></a>
        </li>
      @endforeach
      </ul>
    </div>
</footer>
  