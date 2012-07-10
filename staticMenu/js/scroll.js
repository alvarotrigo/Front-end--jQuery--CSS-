;$(document).ready(function(){
	
	//by default, the static menu is hidden
	var showStaticMenuBar = false;

	//when scrolling...
	$(window).scroll(function() {
		//if the static menu is not yet visible...
		if(showStaticMenuBar == false){
			//if we scroll more than 40px, we show it 
			if($(window).scrollTop() >= 40){
				//showing the static menu
				document.getElementById("staticHeader").style.display = "block";
				
				//hidding the normal one 
				document.getElementById("header").style.display = "none";

				//we define it as showed
				showStaticMenuBar=true;
			}
		}
		//if the static menu is already visible...
		else{
			//if we didnt scroll more than 40 px... lets hide it!!
			if($(window).scrollTop() <= 40){
				//hidding the static menu one 
				document.getElementById("staticHeader").style.display = "none";

				//showing the normal one 
				document.getElementById("header").style.display = "block";

				//we define it as hidden
				showStaticMenuBar=false;
			}	
		}
	}
	);
});