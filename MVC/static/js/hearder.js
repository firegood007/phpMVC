$(function(){
	$("body").on("click",function(e){
		if(e.target.className=="dropdown-toggle"){
		$(".dropdown-menu li").css({"transform":"rotateY(0deg)","opacity":"1"});
		$(".dropdown-menu").slideDown(500);
		}else if(e.target.className!="dropdown-toggle"){
		$(".dropdown-menu li").css({"transform":"rotateY(90deg)","opacity":"0"})
		$(".dropdown-menu").slideUp(500);	
		}
	})
//	$('.btn-warning').click(function(){
//		var value=$('.form-control').val();
//			if(value!=""){
//				$.ajax({
//					url:"index.php?m=index&f=index&a=sousuo",
//					method:"get",
//					data:{value:value},
//					success:function(e){
//					$('html').html(e);		
//					}
//				})
//			}else{
//				alert("请输入搜索内容！")
//			}
//	})
	$(window).scroll(function(){
		if($(this).scrollTop()>=700){
			$(".returntop").css("display","block").click(function(){
			$('body').animate({scrollTop:0},800,function(){
			$("body").clearQueue();
			})
			})
		}else if($(this).scrollTop()<700){
			$(".returntop").css("display","none").click(function(){
			$('body').unbind("click")
			})
		}
	})
	
})
