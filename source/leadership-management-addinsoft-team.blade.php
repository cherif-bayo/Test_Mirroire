@extends('_layouts.content')

@section('body')
<div class="container-fluid article-content"></div>
<div itemscope="" itemtype="http://schema.org/WebPage" class="container">
    <div class="wrapper">
    
                <div class="row mt-4 justify-content-center">
                    <div class="col-md-12">
                        <h1 class="my-4">Leadership</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p itemprop="description">Mr. Fahmy began developing XLSTAT in 1993 while still a Master’s student at AgroParisTech and then at the University of California at Berkeley. After completing his PhD in statistics, Thierry Fahmy worked for two years at IBM in the Data Mining team before starting several companies, including Addinsoft. From 2002 onwards, Fahmy has focused his work on developing XLSTAT. </p>
                        <p itemprop="description">With a doctorate in computer science from the École Polytechnique, Antoine Jeanjean worked for 6 years as a consulting research engineer for the Bouygues Group, within the LocalSolver scientific department. In 2009, he co-founded with 3 Recommerce partners, where he was R&D director for 10 years. In 2020, he joined Addinsoft as Managing Director.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <h4 itemprop="name" class="font-weight-bold text-uppercase">the team</h3>
                        <p itemprop="description">Present in Europe, North America and Asia, the company is comprised of highly creative, experienced and talented individuals who come together to facilitate and improve your decision making needs.
                        </p>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                <hr>
                    @include('_partials.direction-content')
                <hr>
                    @include('_partials.research-content')
                <hr>
                    @include('_partials.tech-content')
                <hr>
                    @include('_partials.sales-content')
                <hr>
                    @include('_partials.customer-content')
                </div>
               
                <div class="row mt-4">
                    <div class="col-md-12">
                        <h4 itemprop="name" class="font-weight-bold text-uppercase">our value</h3>
                        <p itemprop="description">Requirement - Creativity - Humility - Commitment - Expertise - Simplicity</p>
                    </div>
                </div>
           
    </div>
</div>
@endsection