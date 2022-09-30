const secondOut = document.getElementById('second');
const tensOut = document.getElementById('tens');
const start = document.getElementById('start');
const stop = document.getElementById('stop');
const reset = document.getElementById('reset');

let seconds = 00;
let tens = 00;
let Interval;

function startTimer(){
    tens++;

    if(tens < 9){
       tensOut.innerHTML = "0" + tens;
    }
    if(tens > 9){
        tensOut.innerHTML = tens;
    }
    if(tens > 99){
        seconds++;
        secondOut.innerHTML = '0' + seconds;
        tens=0;
        tensOut.innerHTML = '0' + 0;   
    }
    if(seconds > 9){
        secondOut.innerHTML = seconds;
    }
}

start.onclick = ()=>{
    Interval  = setInterval(startTimer);
}

stop.onclick = ()=>{
    clearInterval(Interval);
}

reset.onclick = ()=>{
    clearInterval(Interval);
    seconds = "00";
    tens = "00";
    secondOut.innerHTML =seconds;
    tensOut.innerHTML =tens;
}