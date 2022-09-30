// alert("hello");
// document.getElementsByClassName("drum").addEventListener("click",buttonClick);


for(var i=0;i<document.getElementsByClassName("drum").length;i++){
  document.getElementsByClassName("drum")[i].addEventListener("click",function(){
    var innerHtml=this.innerHTML;
    buttonClick(innerHtml);
  });

}
document.addEventListener("keypress",function(event){
  buttonClick(event.key);
  // alert("pressed");
})


function buttonClick(key){
  // this.style.color="#EAF6F6";
  // var innerHtml=this.innerHTML;
  switch (key) {
    case "w":
      var tom1=new Audio('sounds/tom-1.mp3');
      tom1.play();
      break;
    case "a":
      var tom2=new Audio('sounds/tom-2.mp3');
      tom2.play();
      break;
    case "s":
      var tom3=new Audio('sounds/tom-3.mp3');
      tom3.play();
      break;
    case "d":
      var tom4=new Audio('sounds/tom-4.mp3');
      tom4.play();
      break;
    case "j":
      var snare=new Audio('sounds/snare.mp3');
      snare.play();
      break;
    case "k":
      var crash=new Audio('sounds/crash.mp3');
      crash.play();
      break;
    case "l":
      var kick=new Audio('sounds/kick-bass.mp3');
      kick.play();
      break;
    default:
      console.log(innerHtml);
  }


  // var audio = new Audio('sounds/tom-1.mp3');
  // audio.play();
}
