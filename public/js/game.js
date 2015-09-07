$(function(){
    var div = document.getElementById('levelbox');
    div.addEventListener('touchmove',function(event) {
        event.preventDefault();//阻止其他事件
        // 如果这个元素的位置内只有一个手指的话
        if (event.targetTouches.length == 1) {
            var touch = event.targetTouches[0];  // 把元素放在手指所在的位置
            div.style.left = touch.pageX + 'px';
            div.style.top = touch.pageY + 'px';
            div.style.background = "";
        }
    },false);
    var bottombox=document.getElementById('bottombox');
    bottombox.style.width=100+'%';

})
var pos=new Array();
var lvl1=new Array('19|84','23|80','27|75','31|71','35|67','33|58');
var lvl2=new Array('40|58','42|55','44|58','46|61','48|63','50|52');
var lvl3=new Array('52|60','54|62','56|64','58|66','60|68','61|60');
var lvl4=new Array('62|67','65|72','68|72','71|69','74|66','73|56');
pos.push(lvl1);
pos.push(lvl2);
pos.push(lvl3);
pos.push(lvl4);
function initMap(lvl,num){
    var obj=$("#mapPoint");
    console.log('x='+(lvl-1)+':y='+(num-1));
    var posArr=pos[lvl-1][num-1].split('|');
    $(obj).css('left',posArr[0]+'%').css('top',posArr[1]+'%');
}
