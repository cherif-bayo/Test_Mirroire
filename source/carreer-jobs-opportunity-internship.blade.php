@extends('_layouts.content')

@section('body')
<div itemscope="" itemtype="http://schema.org/WebPage" class="container article-content">
    <div class="wrapper">
    <div class="row mt-4 d-flex">
            <div class="col-md-12 mt-4">
                <div class="row">
                    <div class="col-md-12">
                        <h4 itemprop="name" class="font-weight-bold text-uppercase">mission</h3>
                        <p itemprop="description">Make data analysis and statistics accessible to all.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach($videos as $video)
                        <div class="col-md-4 col-12 text-center">
                            <iframe width="300" height="200" src="https://www.youtube.com/embed/{{ $video->src }}" allowfullscreen>
                            </iframe>
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 itemprop="name" class="font-weight-bold text-uppercase">vision</h3>
                        <p itemprop="description">Become the best-rated applied mathematics software suite.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 itemprop="name" class="font-weight-bold text-uppercase">values</h3>
                        <p itemprop="description">Our teams are a diverse group of individuals born in different countries and from various backgrounds. We take great pleasure in working together and serving users from around the world. Although our area of expertise is extremely technical. we know that all our users aren’t. This is why, every day, we do our very best to improve XLSTAT and offer our users tools that are just as powerful as they are easy to use.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 itemprop="name" class="font-weight-bold text-uppercase">data factory: a great place to work in bordeaux</h3>
                        <ul>
                            <li>
                                400 m² : Private laboratory dedicated to Data Science
                            </li>
                            <li>
                                4 expert companies including Addinsoft
                            </li>
                            <li>
                                45 Phd, Engineers, developers
                            </li>
                            <li>
                                25 workshops / events / training per year
                            </li>
                        </ul>
                        <h5 class="font-weight-bold text-uppercase">Advantage</h5>
                        <ul>
                            <li>
                                An exceptional working environment in the heart of Bordeaux
                            </li>
                            <li>
                                50% of public transport costs (TBM) covered
                            </li>
                            <li>
                                Company insurance Allianz
                            </li>
                            <li>
                                A co-optation bonus for recommending someone who has been recruited
                            </li>
                            <li>
                                PEE (Company Savings Plan)
                            </li>
                            <li>
                                Teleworked Friday
                            </li>
                            <li>
                                A birth bonus (during a happy event)
                            </li>
                        </ul>
                        <p>Join our team of experts and scientists!</p>
                        <h5 class="font-weight-bold text-uppercase">job offers</h5>
                        <p>Help us build new applied mathematics solutions : jobs@addinsoft.com</p>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection