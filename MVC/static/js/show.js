$(function(){
    //设置遮罩的宽高
    $(".mask").css("height",$(window).height());
    /*关注*/
    $(".guanzhu").click(function(){
        $.ajax({
            url:"index.php?m=index&f=show&a=guanzhu",
            data:{
                near:location.href,
                uid2:$(".author-name").attr("attr")
            },
            success:function(e){
            	
                if(e.match("no")){
//              	alert(e)
                    $(".mask").css("display","block");
                    $(".notice-login").css("display","block")
                }else if(e.match("yes")){
                    $(".guanzhu").css("display","none");
                    $(".quxiaoguanzhu").css("display","inline-block");
                    $(".notice").css("display","block");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none")
                        $(".mask").css("display","none")

                    },2000)
                }
            }

        })
    })
    /*取消关注*/
    $(".quxiaoguanzhu").click(function(){
        $.ajax({
            url:"index.php?m=index&f=show&a=quxiaoguanzhu",
            data:{
                uid2:$(".author-name").attr("attr")
            },
            success:function(e){
                if(e.match("ok")){
                    $(".quxiaoguanzhu").css("display","none");
                    $(".guanzhu").css("display","inline-block");
                    $(".notice").css("display","block");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none")
                        $(".mask").css("display","none")

                    },2000)
                }else{
                    $(".notice").css("display","block").html("操作失败");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none").html("操作成功");
                        $(".mask").css("display","none")

                    },2000)
                }
            }
        })
    })
    /*收藏 */
    $(".loveBtn").click(function(){
        $.ajax({
            url:"index.php?m=index&f=show&a=shoucang",
            data:{
                near:location.href,
                sid:$(".author-name").attr("sid")
            },
            success:function(e){
                if(e.match("no")){
                    $(".mask").css("display","block");
                    $(".notice-login").css("display","block");
                }else if(e.match("yes")){
                    $(".loveBtn").css("display","none");
                    $(".loveCancel").css("display","inline-block");

                    $(".notice").css("display","block");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none")
                        $(".mask").css("display","none")

                    },2000)
                }
            }

        })
    })
//  /*取消收藏 */
    $(".loveCancel").click(function(){
        $.ajax({
            url:"index.php?m=index&f=show&a=lovecancel",
            data:{
                sid:$(".author-name").attr("sid")
            },
            success:function(e){
                if(e.match("ok")){
                    $(".loveCancel").css("display","none");
                    $(".loveBtn").css("display","inline-block");
                    $(".notice").css("display","block");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none")
                        $(".mask").css("display","none")

                    },2000)
                }else{
                    $(".notice").css("display","block").html("操作失败");
                    $(".mask").css("display","block")
                    setTimeout(function(){
                        $(".notice").css("display","none").html("操作成功");
                        $(".mask").css("display","none")
                    },2000)
                }
            }
        })
    })
//  /*发表留言
//  * uid1  自己
//  * uid2  对方
//  * sid   哪一篇文章
//  * pid  留言还是回复
//  * mtime  时间
//  * mcon   留言的内容 */
    $(".message-btn").click(function(){
//  	alert($(".mcon").val())
    	if($(".mcon").val()==""){
    		$(".mask").css("display","block");
            $(".notice-login").html("请输入留言内容哦~").css({"display":"block","text-align":"center","line-height":"100%"});
            setTimeout(function(){
            	$(".mask").css("display","none");
                $(".notice-login").css("display","none");
            },2000)
    		return 
    	}
        $.ajax({
            url:"index.php?m=index&f=show&a=add",
            data:{
                near:location.href,
                uid2:$(".author-name").attr("attr"),
                sid:$(".author-name").attr("sid"),
                mcon:$(".mcon").val()
            },
            success:function(e){	
            	var e= eval('(' + e + ')');
                if(e.message=="ok"){
                    //数据库插入成功以后要做的事情
                    //1. 创建 liuyanbox
                    var liuyanbox=$("<div class='liuyanbox'></div>").appendTo(".message");
                    //2.  克隆 留言的html结构
                    var liuyan=$(".liuyan:eq(0)").clone(true);
                    liuyanbox.append(liuyan);
                    //3. 要改掉留言里面的内容
                    liuyan.find(".name").html("我");
                    liuyan.find(".time").html(getDate());
                    liuyan.find(".liuyancon").html($(".mcon").val());   
                    //4. 创建输入框
                    var submit2=$(".submit2:eq(0)").clone(true);
                    liuyanbox.append(submit2);
                    //5. 留言情况
                    $(".mcon").val("");
                    $("message h3 span").text(e.mid);   
                }else if(e.message=="no"){
                    $(".mask").css("display","block");
                    $(".notice-login").css("display","block");
                }
            }
        })
    })
  var data={};
    $(".replyBtn,.btn-danger").click(function(){
        $(this).parents(".liuyanbox").find(".submit2").slideToggle(100);
       data.sid=$(".author-name").attr("sid");  //当前文章id
       data.uid2=$(this).attr("uid2");     //当前回复用户的id
       data.pid=$(this).attr("pid"); //哪个用户(id)留言下面的回复   (留言组)第一个留言的人
    })
$(".huifu").click(function(){
	    var that=$(this); 
        var mcon=that.parent().find("textarea").val();
	$.ajax({
		url:"index.php?m=index&f=show&a=reply",
		data:{
			    near:location.href,
                sid:data.sid,
                uid2:data.uid2,
                pid:data.pid,
                mcon:mcon
		},
		success:function(e){
			var e= eval('(' + e + ')');
			var obj=$(".reply[mid="+e.mid+"]")
			if(e.message=="ok"){
				 //1. clone replylist结构
                   var replylist=$(".replylist:eq(0)").clone(true).appendTo(obj);
                    //2.修改replylist里面的内容
                        //a. 修改名字
                    replylist.find(".replycon .me").html("我 : ")
                    replylist.find(".replycon .other").html(e.other)
                      // b. 修改内容
                    replylist.find(".replyinfo").html(mcon);
                       //c. 修改时间
                    replylist.find(".replystate .time").html(getDate());
                  //3 修改按钮上面的值
                    replylist.find(".replyBtn2").attr("uid2",e.uid);
                    replylist.find(".replyBtn2").attr("pid",replylist.parents(".message").find(".replyBtn1").attr("pid"));
                  
			}else if(e.message=="no"){
				$(".mask").css("display","block");
                $(".notice-login").css("display","block")
			}else if(e.message=="er"){
				alert("不可以给自己回复哦~")
			}
		}
	})
})
    $(".notice-login .btn").click(function(){
        $(".mask").css("display","none");
        $(".notice-login").css("display","none")
    })
    
    
    //点击量
    $.ajax({
        url:"index.php?m=index&f=show&a=hit",
        data:{
            sid:$(".author-name").attr("sid")
        },
        success:function(e){
            if(e=="ok"){
               $(".hit").html($(".hit").html()*1+1);
            }
        }
    })
})
function getDate(){
    var time=new Date();
    var year=time.getFullYear();
    var month=time.getMonth()+1;
    var day=time.getDate();
    var hours=time.getHours();
    var min=time.getMinutes();
    var sec=time.getSeconds();
    return year+"-"+month+"-"+day+" "+hours+":"+min+":"+sec;
}