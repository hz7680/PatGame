function addRule(){
    $("#ruleBox").append("<div><input type='text' class='input1' name='rule[]' /><a href='javascript:void(0)' onclick='removeRule(this)'></a></div>")
}
function removeRule(obj){
    $(obj).parent().remove();
}

function refresh(){
    location.reload(true);
}

$(function(){
    var page=$("#pagetag").val();
    $("#"+page).addClass('on');
})