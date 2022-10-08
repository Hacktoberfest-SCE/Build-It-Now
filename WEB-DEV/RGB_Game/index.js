var numOfSquares = 6;

var colors =  generateRandomColors(numOfSquares);//spaces are important between values and six colors are given in th array and will loop through them and assign value to them in the div.square// function which will create the random 6 clors by shifting between the values of r,g,b.//to fix the number of squares when we shoft between the levels of playing
var squares = document.querySelectorAll(".square");

var pickedColor = pickColor();// to randomly pick and select a color from various color codes a function is created so as to use it again and again.

var colorDisplay = document.getElementById("colorDisplay");
 
var messageDisplay = document.querySelector("#message");// message will be displayed in it if clicked
 
var h1 = document.querySelector("h1");

var reset = document.querySelector("#reset");

var easyBtn = document.querySelector("#easyBtn");

var hardBtn = document.querySelector("#hardBtn");



easyBtn.addEventListener("click",function(){
   easyBtn.classList.add("selected");
   hardBtn.classList.remove("selected");
   numOfSquares = 3;
   colors = generateRandomColors(numOfSquares);
   pickedColor = pickColor();
   colorDisplay.textContent = pickedColor;
   for(var i =0; i<squares.length;i++){
       if(colors[i]){
           squares[i].style.backgroundColor = colors[i]; 
       }
       else{
           squares[i].style.display = "none";
       }
   }//hiding the last three squares
});

hardBtn.addEventListener("click",function(){
   hardBtn.classList.add("selected");
   easyBtn.classList.remove("selected");
   numOfSquares = 6;
   colors = generateRandomColors(numOfSquares);
   pickedColor = pickColor();
   colorDisplay.textContent = pickedColor;
   for(var i =0; i<squares.length;i++){
       
           squares[i].style.backgroundColor = colors[i]; 
           squares[i].style.display = "block";
       
   }
 });
 

reset.addEventListener("click",function(){
    //generate all new colors and pick new random colors and change colors of the squares.
    colors = generateRandomColors(numOfSquares);

    pickedColor = pickColor();

    // change the colordisplay to match pickedcolor
    colorDisplay.textContent = " "+ pickedColor; 
// changing color of background to initial color of background color.
    h1.style.backgroundColor = "steelblue";

    this.textContent = "NEW COLORS"

    messageDisplay.textContent = "";
    
    for (var i=0;i<squares.length;i++){
        squares[i].style.backgroundColor = colors[i];
    }
});

colorDisplay.textContent = "  "+ pickedColor;

for(var i = 0; i < squares.length ; i++){
    // add initial colors to square
    squares[i].style.backgroundColor = colors[i];
//looping through the values of the squares and assigning them the colors of array colors.
    // add click listeners to squares
    squares[i].addEventListener("click",function(){
        //grab color of clicked square abd compare to it with the pickedColor
        var clickedColor = this.style.backgroundColor;//color of that block or square of color is saved in it.
        
        if(clickedColor === pickedColor){
            messageDisplay.textContent = "Correct !";
            changeColors(clickedColor);
            h1.style.backgroundColor = clickedColor;
            document.querySelector("#reset").textContent = "PLAY AGAIN ?";
            
        }
        else{
           this.style.backgroundColor = "#232323";
           messageDisplay.textContent = "Try Again !";
        }
    });
}


function changeColors(color){
    // loop through all the squares
    for (var i =0; i<squares.length;i++){
        squares[i].style.backgroundColor = color;//change the color of each square to the right color choice that is selected
    }
}
function pickColor(){
  var randoms = Math.floor(Math.random()*(colors.length));// take the random no. between the three options and picks the random no.between it and save it in variable randoms.
  return colors[randoms];// return variable randoms and change in the color codes.
}
 
function generateRandomColors(num){
// make an array
var arr = [];
//add num random color to array
//repeat num times
for (var i=0;i<num;i++){
//get random color
arr.push(randomColor());//add the string to the array of colors onpushing
}
//return array

return arr;
}

function randomColor(){
 //pick a red from 0-255 pick a green from 0-255 and pick a blue from 0-255
  var r = Math.floor(Math.random() *256);
  var g = Math.floor(Math.random() *256);
  var b = Math.floor(Math.random() *256);
  //getting the colors from rgb values by taking random numbers from 0-255 excluding the 256 number
  return "rgb(" + r + ", " + g + ", " + b + ")";// extra spaces are given as css automatically adds spaces between the rgb values and commas.
}