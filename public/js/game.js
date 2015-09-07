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
})/**
 * Created by hydra on 15/9/7.
 */
