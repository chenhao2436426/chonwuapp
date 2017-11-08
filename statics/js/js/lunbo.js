var Ban=document.getElementById("banner");
var ul=document.getElementById("ul");
var li=ul.getElementsByTagName("li");
var pagNav=document.getElementById("pagNav");
var ImgH=li[0].getElementsByTagName("img")[0].height;
var Left=document.getElementById("left");
var right=document.getElementById("right");
var index=0;
var animated=false;
Ban.style.height=ImgH+"px";

for(var i=0;i<li.length-2;i++){
    var a=document.createElement("a");
    if(i==0){
        a.setAttribute("class","cur");
    }
    pagNav.appendChild(a);
}
var icon=pagNav.getElementsByTagName("a");
for(var j=0;j<icon.length;j++){
    icon[j].index=j;
    icon[j].onclick=function () {
        if(animated){
            return;
        }
        var y=(this.index-index)*(-100);
        animate(y);
        index=this.index;
        showBtn();
    }
}
function showBtn() {
    for(var x=0;x<icon.length;x++){
        if(icon[x].getAttribute("class")=="cur"){
            icon[x].className="";
        }
    }
    icon[index].className="cur";
}
function animate(offset) {
    animated=true;
    var speed=offset/20;
    var newLeft=parseInt(ul.style.left)+offset;
    var go=function () {
        if(speed>0&&parseInt(ul.style.left)<newLeft||speed<0&&parseInt(ul.style.left)>newLeft){
            ul.style.left=parseInt(ul.style.left)+speed+"%";
            setTimeout(go,25);
        }else{
            if(newLeft<-100*icon.length){
                ul.style.left=-100+"%";
            }
            if(newLeft>-100){
                ul.style.left=-100*icon.length+"%";
            }
            animated=false;
        }
    };
    go();
}
Left.onclick=function () {
    if(animated){
        return;
    }
    index--;
    if(index<0){
        index=icon.length-1;
    }
    animate(100);
    showBtn();
};
right.onclick=function () {
    if (animated){
        return;
    }
    index++;
    if (index>icon.length-1){
        index=0;
    }
    animate(-100);
    showBtn();
};
function lunbo() {
    right.onclick();
}
var timer=setInterval(lunbo,3000);
Ban.onmouseover=function () {
    clearInterval(timer);
};
Ban.onmouseout=function () {
    timer=setInterval(lunbo,3000);
};