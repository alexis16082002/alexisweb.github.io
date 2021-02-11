


let no=document.getElementById('no');
no.addEventListener("mousemove",function(e){
    let x= Math.round(Math.random() * 85);
    let y= Math.round(Math.random() * 85);


    no.style.left = x+"%";
    no.style.top = y+"%";

});
