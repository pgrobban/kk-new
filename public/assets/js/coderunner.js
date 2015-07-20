$("#runButton").on("click", runCode);

(function(){
    if(window.console && console.log){
        var old = console.log;
        console.log = function(args){
            old.call(console, args);
            $("#output").text(args);
        }
    }  
})();

function runCode() {
    var userCode = editor.getValue();
    
    
}