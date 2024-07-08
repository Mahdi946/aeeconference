
 
  const Counters=document.querySelectorAll(".counters");
Counters.forEach(element => {
    let dataset=element.dataset;
    let value= dataset.countvalue;
    let i=0;
 

    let counterVal=setInterval(() => {
      element.innerHTML=i;
      i++;
      if(+i > +value){
      clearInterval(counterVal)
    }
    }, 10);
    

});
 
// Update the count down every 1 second
