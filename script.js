window.addEventListener("load",()=>{
setTimeout(
function open(event){
    document.getElementById("logincontainer1").style.display="block";
    document.getElementById("logincontainer1").style.transition="2s";
},3000
)
});
function close2(){
    document.getElementById("logincontainer1").style.display="none";
}
var a1 = 1;
function toggle(a){
    console.log(a);
    a1=a;
    document.getElementById("fullimg").src="tab"+a+".jpg";
    let blur1 = document.getElementById("box1");
    blur1.classList.toggle('active');
}
function close1(){
    document.getElementById("box1").style.display="none";
}
function leftside(){
    if(a1==1){
        document.getElementById("fullimg").src="tab"+5+".jpg";
            a1=5;
    }
    else{
        a1--;
        document.getElementById("fullimg").src="tab"+a1+".jpg";
    }
}
function rightside(){
    if(a1==5){
        a1=1;
        document.getElementById("fullimg").src="tab"+1+".jpg";
    }
    else{
        a1++;
        document.getElementById("fullimg").src="tab"+a1+".jpg";
    }
}
var s = "projectview";
function projectview(){
    document.getElementById(s).style.display="none";
    document.getElementById("projectview").style.display="block";
    s="projectview";
}
function interior(){
    document.getElementById(s).style.display="none";
    document.getElementById("interior").style.display="block";
    s="interior";
}
function amenities(){
    document.getElementById(s).style.display="none";
    document.getElementById("amenities").style.display="block";
    s="amenities";
}
function projectunit(){
    document.getElementById(s).style.display="none";
    document.getElementById("projectunit").style.display="block";
    s="projectunit";
}