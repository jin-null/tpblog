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
            <div class="blog-title"><IMG SRC="/Public/images/logo.png"  style="border:1px solid gray" BORDER="0" ALT="" align="absmiddle"> <a href="http://www.whphp.com">WHPHP</a></div>
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

<div id="mainWrapper">
    <div id="content" class="content">
        <div id="innerContent">
            <div class="commentbox">
                <TABLE cellpadding=3 cellspacing=3 width="680px">
                    <TR>
                        <TD colspan="2"><div class="block-title"><H5><IMG SRC="/Public/images/modify.gif" WIDTH="20" HEIGHT="23" BORDER="0" ALT="" align="absmiddle"> 编辑日志</H5></div>
                        </TD>
                    </TR>
                    <TR>
                        <TD colspan="2">
                            <form METHOD=POST id="form1" action="<?php echo U('update');?>">
                                <input type="hidden" name="id" value="<?php echo ($article["id"]); ?>">
                                <TABLE cellpadding=3 cellspacing=3 width="100%" style="font-size:14px">
                                    <TR>
                                        <TD colspan="2"><div id="result" class="result none"></div></TD>
                                    </TR>
                                    <TR>
                                        <TD class="tRight tTop" width="125px">标题：</TD>
                                        <TD class="tLeft"><input TYPE="text" class="huge text" check='Require' warning="标题不能为空" NAME="title" value="<?php echo ($article["title"]); ?>"></TD>
                                    </TR>
                                    <TR>
                                        <TD class="tRight" >分类：</TD>
                                      
                                    </TR>
                                    <TR>
                                        <TD class="tRight tTop" >日志：</TD>
                                        <TD class="tLeft"><textarea name="content" id="textContent" cols="45" rows="5"><?php echo ($article["content"]); ?></textarea></TD>
                                    </TR>
                                   
                                    <TR>
                                        <TD ></TD>
                                        <TD class="center">
                                            <div style="width:85%;color:gray">
                                                <div class="fLeft hMargin"><input TYPE="reset" class="submit small"  value="重 置" ></div>
                                                <div class="fLeft hMargin">
                                                    <input TYPE="submit" id="submit" value="保存日志"  class="submit small">
                                                </div>
                                            </div></TD>
                                    </TR>
                                </TABLE>
                            </form>
                            
                        </TD>
                    </TR>
                </TABLE>
            </div>
        </div>
   <!-- 版权信息区域 -->
    <div id="footer" class="footer" >
        <div id="innerFooter">Powered by 武汉长乐教育 |  <a target="_blank" href="http://www.whphp.com">whphp</a></div>
    </div>
</body>
</html>