@extends('master')

@section("content")

<div class="row" id="courseTop">
    <h3>{{$courseName}}</h3>
    <h2 class="h2 pull-left" id="lessonName">Lektion {{$lessonNr}} &ndash; {{$lessonName}}</h2>

    <span class="pull-right" id="courseTopRight">Hoppa till 
        <select id="lessonChooser">
            @for($i = 0; $i < count($lessonNames); $i++)
            <option>Lektion {{$i+1}} -- {{$lessonNames[$i]}}</option>
            @endfor
        </select>
        <button class="btn btn-default" id="toggleBookMode">
            Byt till bokläge
        </button>
    </span>
</div>

<div class="row" id="learnContainer">
    <div id="learnZone" class="col-lg-4">
        <h4>Lektion</h4>

<!--            <iframe width="100%" height="300" src="https://www.youtube.com/embed/2a4Uxdy9TQY" frameborder="0" allowfullscreen></iframe>-->

    </div>

    <div id="codeZone" class="col-lg-4">
        <div class="row" id="runStopCode">
            <h4 class="pull-left learnHeader">Kod</h4>
            <div class="pull-right learnButtons">
                <button class="btn btn-default glyphicon glyphicon-play" id="runButton" title="Kör koden i kodfönstret."></button>
                <button class="btn btn-default glyphicon glyphicon-stop" disabled title="Stoppar den aktuella körningen."></button> 
            </div>
        </div>
        <pre id="editor"></pre>
    </div>

    <div id="outputZone" class="col-lg-4 resizable">
        <div class="row">
            <h4 class="pull-left learnHeader">Utdata</h4>
            <div class="pull-right learnButtons">
                <button class="btn btn-default glyphicon glyphicon-trash" id="clearOutput" title="Rensar utdatafönstret."></button>
            </div>
        </div>
        <pre id="output">Ingen utdata att visa.</pre>
    </div>
</div>
@endsection

@section("extrajavascript")
<script src="{{ URL::asset('assets/js/coderunner.js') }}" type="text/javascript" charset="utf-8"></script>


<script src="{{ URL::asset('assets/js/ace.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ URL::asset('assets/js/theme-xcode.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ URL::asset('assets/js/ext-language_tools.js') }}" type="text/javascript" charset="utf-8"></script>
<script src="{{ URL::asset('assets/js/mode-python3.js') }}" type="text/javascript" charset="utf-8"></script>


<script>
var editor = ace.edit("editor");
editor.setTheme("ace/theme/xcode");
editor.getSession().setMode("ace/mode/python3");
</script>

<script type="text/python">
from javascript import JSObject, console
from browser import window, document, alert

def run():
    document['output'].value=''
    try:
        exec(alert("hi"))
        state = 1
    except Exception as exc:
        state = 0

    return state
    
document['runButton'].bind('click', run)
</script>


@endsection
