@extends('_layouts.content')

@section('body')
<div class="container-fluid article-content"></div>
<div itemscope="" itemtype="http://schema.org/WebPage" class="container">
    <div class="wrapper">
    <div class="row mt-4 d-flex">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h1 itemprop="name" class="my-4">News</h3>
                        <ul>
                            <li>
                                01/10/2020 : News 1 - Description 1
                            </li>
                            <li>
                                01/10/2020 : News 2 - Description 2
                            </li>
                            <li>
                                01/10/2020 : News 3 - Description 3
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 itemprop="name" class="font-weight-bold text-uppercase">press release</h3>
                        <ul>
                            <li>
                                01/10/2020 : Press Release 1 - Description 1 - Download pdf
                            </li>
                            <li>
                                01/10/2020 : Press Release 2 - Description 2 - Download pdf
                            </li>
                            <li>
                                01/10/2020 : Press Release 3 - Description 3 - Download pdf

                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 itemprop="name" class="font-weight-bold text-uppercase">press kit</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 itemprop="name" class="font-weight-bold text-uppercase">download</h3>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection