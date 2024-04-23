
let countDownDate = new Date("Thursday 21 November 2024 15:37:25").getTime();
const Day=document.querySelector("#dayCount");
const Hours=document.querySelector("#hoursCount");
const Minute=document.querySelector("#minutesCount");
const Seconds=document.querySelector("#secondsCount");
// Update the count down every 1 second
let counterDayTime= setInterval(function() {
    
  // Get today's date and time
  let now = new Date().getTime();
    
  // Find the distance between now and the count down date
  let distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  let days = Math.floor(distance / (1000 * 60 * 60 * 24));
  let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  let seconds = Math.floor((distance % (1000 * 60)) / 1000);

  if(Day!==null){
     Day.innerHTML=days;
  Hours.innerHTML=hours;
  Minute.innerHTML=minutes;
  Seconds.innerHTML=seconds;
  }
 
  // Output the result in an element with id="demo"


  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(counterDayTime);
    if(Day!==null){
    Day.innerHTML='...';
    Hours.innerHTML='...';
    Minute.innerHTML='...';
    Seconds.innerHTML='...';
    }
  }
}, 1000);