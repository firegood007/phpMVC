<?php
/* Smarty version 3.1.30, created on 2017-04-27 18:05:48
  from "D:\wampserver\wamp\www\MVC\template\index\show.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_590216dc9daa63_09646773',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33b09f485ddce01e2d80843157788ca008d0b6de' => 
    array (
      0 => 'D:\\wampserver\\wamp\\www\\MVC\\template\\index\\show.html',
      1 => 1493309138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:index/header.html' => 1,
    'file:index/notice.html' => 1,
    'file:index/foot.html' => 1,
  ),
),false)) {
function content_590216dc9daa63_09646773 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:index/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/show.css">
<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/show.js"><?php echo '</script'; ?>
>
  <div class="container">
      <h1 class="text-center sss">
          <?php echo $_smarty_tpl->tpl_vars['result']->value["stitle"];?>

          <br>
          <span class="author">作者:
              <span class="name author-name" attr="<?php echo $_smarty_tpl->tpl_vars['result']->value['uid'];?>
" sid="<?php echo $_smarty_tpl->tpl_vars['result']->value['sid'];?>
">
                  <?php echo $_smarty_tpl->tpl_vars['result']->value["sname"];?>

              </span>
          </span>
          <span class="time">时间:
              <span class="date">
                  <?php echo $_smarty_tpl->tpl_vars['result']->value["stime"];?>

              </span>
          </span>
      </h1>
      <div class="con">
      <?php echo $_smarty_tpl->tpl_vars['result']->value["scon"];?>

      </div>
      <!--交互-->
      <?php if ($_smarty_tpl->tpl_vars['guanzhu']->value == "true") {?>
      <a href="javascript:;" class="btn btn-success guanzhu" style="display:none">关注</a>
      <a href="javascript:;" class="btn btn-success quxiaoguanzhu">取消关注</a>
      <?php } elseif ($_smarty_tpl->tpl_vars['guanzhu']->value == "false") {?>
      <a href="javascript:;" class="btn btn-success guanzhu">关注</a>
      <a href="javascript:;" class="btn btn-success quxiaoguanzhu" style="display: none">取消关注</a>
      <?php } elseif ($_smarty_tpl->tpl_vars['guanzhu']->value == "nosession") {?>
      <a href="javascript:;" class="btn btn-success guanzhu">关注</a>
      <a href="javascript:;" class="btn btn-success quxiaoguanzhu" style="display: none">取消关注</a>
      <?php } elseif ($_smarty_tpl->tpl_vars['guanzhu']->value == "self") {?>
      <a href="javascript:;" class="btn btn-success guanzhu">被关注数</a>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['love']->value == "true") {?>
      <a href="javascript:;" class="btn btn-success loveBtn" style="display:none">收藏</a>
      <a href="javascript:;" class="btn btn-success loveCancel" >取消收藏</a>
      <?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "false") {?>
      <a href="javascript:;" class="btn btn-success loveBtn" >收藏</a>
      <a href="javascript:;" class="btn btn-success loveCancel" style="display:none">取消收藏</a>
      <?php } elseif ($_smarty_tpl->tpl_vars['love']->value == "nosession") {?>
      <a href="javascript:;" class="btn btn-success loveBtn" >收藏</a>
      <a href="javascript:;" class="btn btn-success loveCancel" style="display:none">取消收藏</a>
      <?php }?>
      <br><br>
      <div class="submit submit1">

          <textarea  class="form-control mcon" rows="3"></textarea><br>
          <a href="javascript:;" class="btn btn-primary message-btn">留言</a>
          <a href="javascript:;" class="btn btn-danger">取消</a>
      </div>
      <div class="message">
      	
      	
      	<!--隐藏的Box-->
      	<div class="liuyanbox" style="display: none">
              <div class="liuyan">
                  <div class="userinfo">
                      <div class="phone">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>        	
                 	<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['toux'];?>
" alt="" />
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
         
                      </div>
                      <div class="info">
                          <div class="name">11</div>
                          <div class="time">11</div>
                      </div>
                  </div>
                  <div class="liuyancon">
                      11
                  </div>
                  <a href="javascript:;" class="btn btn-default replyBtn replyBtn1" uid2="11" pid="11">回复1</a>
              </div>
              <div class="reply">

                  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['v']->value["son"], 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
                  <div class="replylist">
                      <div class="replycon">
                          <span><?php echo $_smarty_tpl->tpl_vars['v1']->value["uname"];?>
</span>
                          <div class="replyinfo">
                              <?php echo $_smarty_tpl->tpl_vars['v1']->value["mcon"];?>

                          </div>

                      </div>

                      <div class="replystate">
                          <div class="time"><?php echo $_smarty_tpl->tpl_vars['v1']->value["mtime"];?>
</div>
                          <a href="javascript:;" class="btn btn-default replyBtn replyBtn2" uid2="<?php echo $_smarty_tpl->tpl_vars['v1']->value['uid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">回复2</a>
                      </div>

                  </div>

                  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


              </div>

              <div class="submit submit2">

                  <textarea  class="form-control" rows="3"></textarea><br>
                  <a href="javascript:;" class="btn btn-primary replyBtn3">回复</a>
                  <a href="javascript:;" class="btn btn-danger">取消</a>
              </div>
          </div>
          
          
          
          
          
          <?php if (count($_smarty_tpl->tpl_vars['arr']->value) < 1) {?>
          <h3>没有留言</h3>
          <?php } else { ?>
          <h3>共有 <span><?php echo count($_smarty_tpl->tpl_vars['liuyanArr']->value);?>
</span>条留言</h3>
          
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['arr']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
          <div class="liuyanbox">
             <div class="liuyan">
             <div class="userinfo">
                 <div class="phone">
                 	<img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['toux'];?>
" alt="" />
                 </div>
                 <div class="info">
                       <div class="name"><?php echo $_smarty_tpl->tpl_vars['v']->value["username"];?>
</div>
                     <div class="time"><?php echo $_smarty_tpl->tpl_vars['v']->value["mtime"];?>
</div>
                 </div>
             </div>
              <div class="liuyancon">
                    <?php echo $_smarty_tpl->tpl_vars['v']->value["mcon"];?>

              </div>
              <a href="javascript:;" class="btn btn-default replyBtn replyBtn1" uid2="<?php echo $_smarty_tpl->tpl_vars['v']->value['uid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">回复1</a>
          </div>
        <div class="reply" mid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result5']->value, 'v1');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->value) {
?>
           <?php if ($_smarty_tpl->tpl_vars['v1']->value["mid"] == $_smarty_tpl->tpl_vars['v']->value["mid"]) {?>
            <div class="replylist">
              <div class="replycon">
              	<?php if ($_smarty_tpl->tpl_vars['v1']->value["uid1name"] == $_smarty_tpl->tpl_vars['dangqian']->value) {?>
                <span class="me">我  回复:</span>
              	<?php } else { ?>
                  <span class="me"><?php echo $_smarty_tpl->tpl_vars['v1']->value["uid1name"];?>
回复:</span>
                <?php }?>
                  <span class="other"><?php echo $_smarty_tpl->tpl_vars['v1']->value["uid2name"];?>
</span>
                  <div class="replyinfo">
                     <?php echo $_smarty_tpl->tpl_vars['v1']->value["hcon"];?>

                  </div>
              </div>
                <div class="replystate">
                    <div class="time"><?php echo $_smarty_tpl->tpl_vars['v1']->value["mtime"];?>
</div>
                    <a href="javascript:;" class="btn btn-default replyBtn replyBtn2" uid2="<?php echo $_smarty_tpl->tpl_vars['v1']->value['uid1'];?>
" pid="<?php echo $_smarty_tpl->tpl_vars['v']->value['mid'];?>
">回复2</a>
                </div>
            </div>
              <?php }?>
                 <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

          </div>

              <div class="submit submit2">

                  <textarea  class="form-control" rows="3"></textarea><br>
                  <a href="javascript:;" class="btn btn-primary huifu">回复</a>
                  <a href="javascript:;" class="btn btn-danger">取消</a>
              </div>
          </div>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


          <?php }?>


      </div>

  </div>
   <div class="mask">

   </div>
   <?php $_smarty_tpl->_subTemplateRender("file:index/notice.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <div class="notice">操作成功</div>
 <?php $_smarty_tpl->_subTemplateRender("file:index/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
       <?php }
}
