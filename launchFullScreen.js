// 找到适合浏览器的全屏方法 
function launchFullScreen(element) { 
  if(element.requestFullScreen) { 
    element.requestFullScreen(); 
  } else if(element.mozRequestFullScreen) { 
    element.mozRequestFullScreen(); 
  } else if(element.webkitRequestFullScreen) { 
    element.webkitRequestFullScreen(); 
  } 
} 
   
// 启动全屏模式 
launchFullScreen(document.documentElement); // the whole page 
launchFullScreen(document.getElementById("videoElement")); // any individual element 