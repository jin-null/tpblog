<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html static "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>武汉长乐教育PHP课程-博客系统开发</title>
    <link href="/Public/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
    <div id="innerHeader">
        <div id="blogLogo"></div>
        <div class="blog-header">
            <div class="blog-title">
                <IMG SRC="/Public/images/logo.png"  style="border:1px solid gray" BORDER="0" ALT="" align="absmiddle"> <a href="http://www.whphp.com">WHPHP</a>
            </div>
            <div class="blog-desc">武汉长乐教育PHP课程-博客系统开发</div>
        </div>
        <div id="menu">
            <ul>
                <li><a href="">日志首页</a></li>
                <li><a href="">撰写日志</a></li>
                <li><a href="">官方网站</a></li>
            </ul>
        </div>
    </div>
</div>
<!--中间部分-->
<div id="mainWrapper">
    <div id="content" class="content">
        <div id="innerContent">
           
            <div class="commentbox">
                <table cellpadding=3 cellspacing=3 width="680px" >
                    <tr>
                        <td colspan="2"><div class="block-title"><H5><IMG SRC="/Public/images/modify.gif" WIDTH="20" HEIGHT="23" BORDER="0" ALT="" align="absmiddle"> 发表新的日志</H5></div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <form METHOD=POST id="form1" action="<?php echo U('store');?>">
                                <table cellpadding=3 cellspacing=3 style="font-size:14px">
                                    <tr>
                                        <td colspan="2"><div id="result" class="result none"></div></td>
                                    </tr>
                                    <tr>
                                        <td class="tRight tTop" width="20%">标题：</td>
                                        <td class="tLeft"><input TYPE="text" class="huge text" check='Require' warning="标题不能为空" NAME="title"></td>
                                    </tr>
                                    <tr>
                                        <td class="tRight tTop" >类别：</td>
                                        <td class="tLeft">
                                            <select NAME="category_id" class="medium text">
                                                <?php if(is_array($categories)): $i = 0; $__LIST__ = $categories;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$category): $mod = ($i % 2 );++$i;?><option VALUE="<?php echo ($cateogry["id"]); ?>"><?php echo ($category["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="tRight tTop" >日志：</td>
                                        <td class="tLeft"><textarea name="content" id="textContent" cols="45" rows="5"></textarea></td>
                                    </tr>
                                   
                                    <tr>
                                        <td ></td>
                                        <td class="center">
                                            <div style="width:85%;color:gray">
                                                <div class="fLeft hMargin"><input TYPE="reset" class="submit small"  value="重 置" ></div>
                                                <div class="fLeft hMargin">
                                                    <input TYPE="submit" id="submit" value="发表日志" class="submit small">
                                                </div>
                                            </div></td>
                                    </tr>
                                </table>
                            </form>
                            
                        </td>
                    </tr>
                </table>
            </div>
        </div>

<div id="footer" class="footer" >
    <div id="innerFooter">Powered by 武汉长乐教育 |  <a target="_blank" href="http://www.whphp.com">whphp</a></div>
</div>
</body>
</html>