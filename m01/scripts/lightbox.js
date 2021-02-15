const openLighBox = function(event){
	console.log(event.target.src);

	//Change the content of the lightbox
	$(".lightbox-content").html("<img src='" + event.target.src + "'>");


	//Add a class to the lightbox to show it
	$(".lightbox").addClass("active");
}

//Document Ready
$(function(){

	$("body").on("click", ".gallery img", openLighBox);

	$(".lightbox-back").on("click", function(){
		$(".lightbox").removeClass("active");
	})
	
});