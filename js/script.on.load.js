$(document).ready(function(){
    $("#spanInfoImprim").hide();
    $("input[name^=enseignant-grid]").each(function(){
        $(this).change(function(){
            isEnseignantChecked();
        });
    })
});

function isEnseignantChecked()
{
    console.log('zez');
    var selected = false;
    $("input[name^=enseignant-grid]").each( function(){ 
        selected = ($(this).attr("checked") || selected)
    });
    console.log(selected);
    if(selected){
        $("#spanInfoImprim").show();
    }
    else
    {
        $("#spanInfoImprim").hide();
    }
}