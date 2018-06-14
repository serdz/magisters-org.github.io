<?php
defined('ACCESS') or die();
if(cfgSET('cfgOnOff') == "off" && $status != 1) {
	include "includes/errors/tehwork.php";
	exit();
} elseif(cfgSET('cfgOnOff') == "off" && $status == 1) {
	print '<p align="center" class="warn">вЂ”Р°Р№С‚ РѕС‚РєР»СЋС‡РµРЅ Рё РЅРµРґРѕСЃС‚СѓРїРµРЅ РґР»В¤ РѕСЃС‚Р°Р»СЊРЅС‹С… РїРѕР»СЊР·РѕРІР°С‚РµР»РµР№!</p>';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" >
<head>
<meta http-equiv="content-type" content="text/html; charset=windows-1251" />







   <title><?php print $title; ?></title>
<meta name="keywords" content="<?php print $keywords; ?>" />
<meta name="description" content="<?php print $description; ?>" />
<link href="/files/styles.css" type="text/css" rel="stylesheet" />
<script language="javascript" src="/files/scripts.js"></script>

  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="author" content="Super User" />
  <meta name="generator" content="Joomla! - Open Source Content Management" />
  <title>Features</title>
  <script src="/business/media/system/js/mootools-core.js" type="text/javascript"></script>
  <script src="/business/media/system/js/core.js" type="text/javascript"></script>
  <script src="/business/media/system/js/caption.js" type="text/javascript"></script>
  <script src="/business/media/system/js/mootools-more.js" type="text/javascript"></script>
  <script type="text/javascript">
window.addEvent('load', function() {
				new JCaption('img.caption');
			});
  </script>




<link rel="stylesheet" href="/business/templates/hot_business/css/template_css.css" type="text/css" />
<link rel="stylesheet" href="/business/templates/hot_business/css/layout.css" type="text/css" />











<style type="text/css">









<!--

#navacc li{
	background:url("/images/regbut2.png") no-repeat; 
	color:#999; 
	font-weight: bold;
	width:242px; 
	height:30px; 
	line-height:30px; 
	vertical-align:middle;
	margin: 7px 3px 10px 18px;
#	text-align: center;
	margin-top:5px;
	padding-left: 20px;
}

#navacc li:hover{
opacity: 0.8;
}












body {
	font-size:13px;
	color:#666666;
}

a:link,a:visited {
	color:#6EA100;
}

.button {
	background:#6EA100;
}

.button1 {
	background:#003c59;
}

.button2 {
	background:#6ea017;
}

.inputbox:focus, textarea.rapid_contact:focus {
	box-shadow:0px 0px 5px #6EA100;
}

.sectiontableheader {
	border-bottom:1px dotted #6EA100;
}

.header_wrap {
	height:70px;
	margin:0 auto;
	background: #00212d; /* Old browsers */
	background: -moz-linear-gradient(top, #00212d 0%, #00212d 50%, #002e3f 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#00212d), color-stop(50%,#00212d), color-stop(100%,#002e3f)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #00212d 0%,#00212d 50%,#002e3f 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #00212d 0%,#00212d 50%,#002e3f 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #00212d 0%,#00212d 50%,#002e3f 100%); /* IE10+ */
	background: linear-gradient(top,  #00212d 0%,#00212d 50%,#002e3f 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00212d', endColorstr='#002e3f',GradientType=0 ); /* IE6-8 */
}

.logo_text, .logo_text a, .logo_text span {
	color:#FFFFFF !important;
}

.header,#topmenu_wrap2,.gallery,.upper,.main_area,.bottom,.footer,.footer2,.footer3,.footer4,.topPanelModules {
	width:1000px;
}


body {
	background: url(/images/bg.png) repeat;
	font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
	font-weight:300;
	text-align: left;
	text-decoration: none;
}

#content_wrap {
	width:680px;
}

#column_left {
	width:320px;
    margin-right:0px;
}

#column_right {
	width:0px;
    margin-left:0px;
}

.componentheading, h1 {
	color:#003B5A;
}

.contentheading, h2, h3, h4, .contentheading a, h2 a {
	color:#13597E !important;
}

h2 a:hover {
	color:#333333;
}

#column_right div.moduletable, #column_right div.moduletable_contact,
#column_left div.moduletable, #column_left div.moduletable_contact {
    color:#666666;
}

div.moduletable h3, div.moduletable_contact h3 {
	color:#13597E;
}

#topmenu_wrap {
	border-top:1px solid #1a5c7f;
	background: #003c59; /* Old browsers */
	background: -moz-linear-gradient(top,  #003c59 0%, #1a5c7f 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#003c59), color-stop(100%,#1a5c7f)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top,  #003c59 0%,#1a5c7f 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top,  #003c59 0%,#1a5c7f 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top,  #003c59 0%,#1a5c7f 100%); /* IE10+ */
	background: linear-gradient(top,  #003c59 0%,#1a5c7f 100%); /* W3C */
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#003c59', endColorstr='#1a5c7f',GradientType=0 ); /* IE6-8 */
}

#nav li a {
    color:#92C2DD;
}

#nav > li {
	border:1px solid #003c59;
}

#nav > li#current, #nav > li.active, #nav > li:hover {
	background:#003345;
    color:#FFFFFF !important;
}

#nav > li:hover a {
	color:#FFFFFF !important;
}

#nav > li a:hover, #nav > li.active > a {
    color:#FFFFFF !important;
}

#nav li.active ul li a,
#nav li ul li a,
#nav li:hover ul li a {
	color:#000000 !important;
}

#nav li:hover ul li a:hover,
#nav li.active ul li a:hover,
#nav li ul li#current a:hover {
    color:#13597E !important;
}

#nav li ul li {
	border:none;
}

ul.menu li a:link,ul.menu li a:visited,
ul.newsfeed li a:link, ul.newsfeed li a:visited {
	color:#666666;
}

ul.menu li a:hover,
ul.newsfeed li a:hover {
	color:#13597E !important;
}

#column_left li.active a:link,#column_left li.active a:visited,
#column_right li.active a:link,#column_right li.active a:visited {
	color:#FFFFFF !important;
}

#column_left li.active ul li a:link,#column_left li.active ul li a:visited,
#column_right li.active ul li a:link,#column_right li.active ul li a:visited {
	color:#666666 !important;
}

#column_left li.active > a:link,#column_left li.active > a:visited,
#column_right li.active > a:link,#column_right li.active > a:visited {
    background:#13597E;
}

.footer_copyright1, .footer_copyright1 a:link, .footer_copyright1 a:visited,
.footer_copyright2, .footer_copyright2 a:link, .footer_copyright2 a:visited {
	color:#155A80;
}

.upper .module_padding {
	width:0px;
}

.upper h1 {
	color:#FFFFFF !important;
    text-shadow:1px 1px 0px #005a7b;
}

.bottom .module_padding {
	width:1000px;
}

.footer_wrap {
	background:#155a80;
}

.footer_wrap2, .footer_wrap2_bottom {
	background-color:#3F2323;
}

.footer .module_padding {
	width:220px;
    background:none;
}

.footer2 .module_padding {
	width:0px;
    background:none;
}

.footer3 .module_padding {
	width:0px;
    background:none;
}

.footer div.moduletable h3, .footer div.moduletable a:link, .footer div.moduletable a:visited {
	color:#13597E;
}

.footer div.moduletable {
	color:#333333;
}

.footer ul.menu li a:link,.footer ul.menu li a:visited, .footer ul.menu li a:hover {
	color:#92c2dd !important;
}

.footer2 div.moduletable h3, .footer2 div.moduletable a:link, .footer2 div.moduletable a:visited {
	color:#FFFFFF;
}

.footer2 div.moduletable {
	color:#BBBBBB;
}

.footer3 div.moduletable h3 {
	color:#155A80;
}

.footer3 div.moduletable, .footer3 div.moduletable ul.menu li a:link, .footer3 div.moduletable ul.menu li a:visited {
	color:#155A80;
}

.footer_wrap4 {
	background:#002C3D;
}

.footer4 ul.menu li a:link, .footer4 ul.menu li a:visited, .footer4 ul.menu li a:hover {
	color:#155A80 !important;
}

.topPanelModules .module_padding {
	width:0px;
    background:none;
}

.upper,.upper p,.upper div,.upper a:link,.upper a:visited {
	color:#000000;
}

.bottom,.bottom p,.bottom div {
	color:#333333;
}

.upper div.moduletable h3,
.upper div.moduletable h3 span {
	color:#FFFFFF;
}

.bottom div.moduletable h3,
.bottom div.moduletable h3 span {
	color:#13597E;
}

ul.menu li a:link,ul.menu li a:visited,
ul.newsfeed li a:link, ul.newsfeed li a:visited,
.header_menu a,
.footer ul.menu li a:link,.footer ul.menu li a:visited,
.moduletable {
	font-size:13px;
}

.moduletable .contentpaneopen,
.moduletable .article_separator {
	background:url(/business/templates/hot_business/images/bg_transparent_black.png);
}

a.pagenav {
	background:#13597E;
}

#top-panel {
	background:#000000;
	border-bottom:3px solid #000000;
}

.topPanelModules div.moduletable h3,.topPanelModules div.moduletable h3 span {
	color:#FFFFFF;
}

.topPanelModules div.moduletable {
	color:#FFFFFF;
}

.topPanelModules ul.menu li a:link,.topPanelModules ul.menu li a:visited,
.topPanelModules div.moduletable a:link, .topPanelModules div.moduletable a:visited, .topPanelModules div.moduletable a:hover {
	color:#92C2DD !important;
}-->
</style>

<!--[if lt IE 9]>
<style type="text/css">
.upper_wrap {
	-pie-background: linear-gradient(#82BCDD, #FFFFFF);
	behavior: url(/business/templates/hot_business/css/PIE.php);
}

.header_wrap {
	-pie-background: linear-gradient(#00212d, #002e3f);
	behavior: url(/business/templates/hot_business/css/PIE.php);
}

#topmenu_wrap {
	-pie-background: linear-gradient(#003c59, #1a5c7f);
	behavior: url(/business/templates/hot_business/css/PIE.php);
}
</style>
<![endif]-->

<script type="text/javascript" src="/business/templates/hot_business/js/jquery.min.js"></script>
<script type="text/javascript">
     jQuery.noConflict();
</script>


<!-- top menu -->
<script type="text/javascript">
function mainmenu(){
jQuery("#nav ul").css({display: "none"}); // Opera Fix
jQuery("#nav li").hover(function(){
		jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).slideDown('fast');
		},function(){jQuery(this).find('ul:first').css({visibility: "hidden"});	});}
jQuery(document).ready(function(){ mainmenu();});
</script>

<!-- featured module background -->
<script type="text/javascript">
jQuery(document).ready(function(){
	jQuery('div.module_padding').has('div.moduletable_featured').addClass('featured_bg');
});
</script>


<!-- reflection -->
<script type="text/javascript" src="/business/templates/hot_business/js/reflection.js"></script>

<!-- scrollTo -->
<link rel="stylesheet" href="/business/templates/hot_business/css/scrollTo.css" type="text/css" />
<script type="text/javascript" src="/business/templates/hot_business/js/scrollTo.js"></script>

</head>
<body>
<div class="main_container">
    <div class="header_wrap">
    	<div class="header">
            <div class="logo">
                <div class="logo_pad">
                    


<div class="custom"  >
	<div class="logo_text">



<a href="/"><img src="/logo.png"></a>





</div></div>


                </div>
            </div>
            <div class="header_menu">
                

<div class="custom"  >
	<div class="social_icons">


<a href="http://vk.com"><img src="/business/images/stories/linkedin.png" alt="linkedin" /></a> 




</div></div>

            </div>
        </div>
    </div>
        <div id="topmenu_wrap">
    	<div id="topmenu_wrap2">
            <div id="topmenu">
                <div id="topmenu_pad">
                    
<ul class="menu" id="nav">
 

<li class="item-102"><a href="/" >Главная</a></li>
<li class="item-102"><a href="/news/" >Новости</a></li>
<li class="item-102"><a href="/about/" >О проекте</a></li>
<li class="item-102"><a href="/rules/" >Правила</a></li>
<li class="item-102"><a href="/faq/" >FAQ</a></li>
<li class="item-102"><a href="/answers/" >Отзывы</a></li>
<li class="item-102"><a href="/contacts/" >Контакты</a></li>


<?php

if(!$login) {
?>
	
	<li class="item-102"><a href="/login/" >Войти</a></li>
<?php
} else {

?>

<li class="item-102"><a href="/deposit/" >Кабинет</a></li>
 
<?php

}

?>



</ul>

                </div>
            </div>
            <div class="register">
                <div class="register_pad">
                    
                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
                <div class="main_area_wrap">
        <div class="main_area">
            <div id="column_left">
			<div class="moduletable">
		<h3>Личный кабинет</h3>
<center>Ваш логин:<b> <?php print $login; ?> </b>  </center>     
					<div>
<ul class="menu">
 
<center><h3><font color="#000000"><b>Баланс</b></font> <font color="green"><b><?php print"$balance"; ?></font></b><font color="#000000">RUB</font></h3></center>


<li class="item-109 active"><a href="/enter/" >Пополнить баланс</a></li>
<li class="item-109 active"><a href="/deposit/" >Сделать вклад</a></li>
<li class="item-109 active"><a href="/deposits/" >Ваши вклады</a></li>
<li class="item-109 active"><a href="/withdrawal/" >Вывести средства</a></li>
<li class="item-109 active"><a href="/ref/" >Партнерская программа</a></li>
<li class="item-109 active"><a href="/stat/" >Статистика</a></li>
<li class="item-109 active"><a href="/profile/" >Профиль</a></li>
<li class="item-109 active"><a href="/exit.php" >Выход</a></li>

 




	
				
	
				








</ul>
</div>
		</div>
			<!--<div class="moduletable_contact">
		
		</div>-->
	
</div>
<div id="content_wrap">
    <div class="content_pad_noright">
		        
<div id="system-message-container">
</div>
        <div class="item-page">
	<h2>
			
		</h2>

	

<?php
	defined('ACCESS') or die();
	if(!$page) {
		include "includes/index.php";
	} elseif(file_exists("../".$page."/index.php")) {
		print "<h1>".$title."</h1><hr />";
		include "../".$page."/".$page."_ru.php";
	} else {
		include "includes/errors/404.php";
	}
?>


	
<hr />

	
	</div>
            </div>
</div>            <div class="clr"></div>


<br><br>




        </div>
    </div>
        <div class="bottom_wrap">
        <div class="bottom">
                        <div class="module_padding last">
                <div class="modulerow">
                    <div id="c1">
                        		<div class="moduletable">
					
					

<div class="custom"  ><center><img src="/images/1.png"></a></center>
	</div>
		</div>
	
                    </div>
                </div>
                <div class="clr"></div>
            </div>
                        <div class="clr"></div>
        </div>
    </div>
           
                <div class="footer_wrap4">
        <div class="footer4">
            <div class="footer_copyright1">
            	<div class="footer_copyright1_pad">
                	
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='//www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t13.12;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";"+Math.random()+
"' alt='' title='LiveInternet: показано число просмотров за 24"+
" часа, посетителей за 24 часа и за сегодня' "+
"border='0' width='1' height='1'><\/a>")
//--></script><!--/LiveInternet-->

                	<div class="clr"></div>
                
                </div>
            </div>
            <div class="footer_copyright2">
            	<div class="footer_copyright2_pad">
                	


                </div>
            </div>
            <div class="clr"></div>
        </div>
    </div>
</div>

<div id="message">
	<a href="#top" id="top-link"><img src="/business/templates/hot_business/images/top.png" width="53" height="53" alt="top" /></a>
</div>
</body>
</html>