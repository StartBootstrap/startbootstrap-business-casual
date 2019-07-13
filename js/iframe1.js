// !!! The function to change the 6 articles was in jQuery (and not in Javascript) so couldn't stay in this file. You can find it on "iframe1.html".
	


	// This is the function to change the 6 stylesheets; it is placed on the timeline dots
	
    function setStyleSheet(url){
       var stylesheet = document.getElementById("thestylesheet");
       stylesheet.setAttribute('href', url);
    }



// These are the 6 functions to change the 6 musics of the stylesheets; they are placed on the timeline dots, too

  function play1(){
       var x = document.getElementById("silence");
       var y = x.setAttribute('src', 'audio/sumerian.mp3');
	   y.play();
                 }

  function play2(){
       var x = document.getElementById("silence");
       var y = x.setAttribute('src', 'audio/typewriter.mp3');
	   y.play();	
                 }

  function play3(){
       var x = document.getElementById("silence");
       var y = x.setAttribute('src', 'audio/bauhaus.mp3');
	   y.play();	   
}

  function play4(){  
       var x = document.getElementById("silence");
       var y = x.setAttribute('src', 'audio/do-wah-diddy-diddy.mp3');
	   y.play();	   
}				 

  function play5(){
       var x = document.getElementById("silence");
       var y = x.setAttribute('src', 'audio/arcade.mp3');
	   y.play();
                 }				 

  function play6(){
       var x = document.getElementById("silence");
       var y = x.setAttribute('src', 'audio/future.mp3');
	   y.play();
                 }				 