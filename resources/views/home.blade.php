@extends('master')


@section('content')
<div class="container-full" id="main">
    <div class="row">
        <div class="col-sm-8">
            <h1>Välkommen till Kodknackaren</h1>

            <img class="margin-b-1 img-responsive" src="http://placehold.it/1000x300" alt="">

            <p class="lead">Har du alltid drömt om att göra en egen hemsida, ett spel 
                eller kanske en app till mobilen? Då är det hög tid att lära dig programmering.
            </p>
            <p>
                <strong>Kodknackaren</strong> är en serie med kurser med fokus på programmering. På ett 
                enkelt och humoristiskt sätt förklarar författaren Robert och assistenten Knacke hur 
                datorn och webben fungerar, och därefter hur du kan skapa dina egna program.
            </p>
            <p>
                Kurserna finns både i videoform och i textform och är indelade i lektioner. När du har 
                läst eller tittat klart på en lektion får du ett antal interaktiva övningar som du kan 
                testa dina kunskaper med. Skulle något vara oklart, kan du kommentera direkt på sidan
                och snabbt få svar från någon av våra kunniga experter.
            </p>
            <p>
                Och bäst av allt, det är gratis. <strong>Bli en kodknackare du också, idag!</strong>
            </p>
            <hr>

            <nav>
                <ul class="pager">
                    <!--                                                <li class="previous"><a href="#"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Older</a></li>-->
                    <li class="next"><a href="{{URL::to('/kurs/introduktionskurs') }}">Till introduktionskursen<span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a></li>
                </ul>
            </nav>


        </div>

        <div class="col-sm-4" style="margin-top: 1em;">
            <!-- Search -->
            <div class="well">
                <h4 class="margin-t-0">Sök</h4>
                <form action="#">
                    <div class="input-group">
                        <label class="sr-only" for="search-form">Sök på sidan</label>
                        <input type="text" class="form-control" id="search-form">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <span class="glyphicon glyphicon-search"></span>
                                <span class="sr-only">Sök</span>
                            </button>
                        </span>
                    </div>
                </form>
            </div>


            <h3>Senaste nytt</h3>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Sidebar panel widget</h4>
                </div>
                <div class="panel-body">
                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>

            <!-- Panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">Sidebar panel widget</h4>
                </div>
                <div class="panel-body">
                    <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
