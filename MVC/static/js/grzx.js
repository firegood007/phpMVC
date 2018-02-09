$(function(){
	$(".cont").each(function(index){
		$(this).click(function(){
			$(".scnr").css("display","none").eq(index).css("display","block")
		})
	})
})
