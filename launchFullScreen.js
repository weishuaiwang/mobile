function launchFullScreen(element) { 
  if(element.requestFullScreen) { 
    element.requestFullScreen(); 
  } else if(element.mozRequestFullScreen) { 
    element.mozRequestFullScreen(); 
  } else if(element.webkitRequestFullScreen) { 
    element.webkitRequestFullScreen(); 
  } 
} 

launchFullScreen(document.documentElement); // the whole page 
launchFullScreen(document.getElementById("videoElement")); // any individual element 