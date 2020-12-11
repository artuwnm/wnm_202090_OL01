window.onload=window.onresize=function(){
    if(document.getElementById("layout2").clientHeight<document.getElementById("layout1").clientHeight){
        document.getElementById("layout2").style.height=document.getElementById("layout1").getBoundingClientRect().height+"px";
    }
    else{
        document.getElementById("layout1").style.height=document.getElementById("layout2").getBoundingClientRect().height+"px";
    }
}