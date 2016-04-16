<!DOCTYPE html>

<html>
<!---------Load Jquery and javascript----------->
<script src="/static/jquery-list.js"></script>
<script src="/static/javascript.js"></script>
<!---------head----------->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Ishan Subedi </title>
<link rel="stylesheet" type="text/css" href="/static/index.css">
<link rel="stylesheet" type="text/css" href="/static/blog.css">
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="shortcut icon" type="image/x-icon" href="/static/img/icon.png" />
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</head>
<!---------head ends----------->

<body>



<!--------responsive menu------------>
<div id="res_menu">
<div id="res_menu_label">
<div id="line"></div><div id="line"></div><div id="line"></div>
</div>
</div>
<!---------Normal Menu----------->
<div id="menu2"></div>
<div id="menu">
<img class="logo" src="/static/img/logo.gif">
<div id="menu_tabs">
<a href="/"><p class="menu"> HOME </p></a>
<a href="/#about_home"><p class="menu"> ABOUT </p></a>
<a href="/#gallery_home"><p class="menu"> GALLERY </p></a>
<a href="/blog"><p class="menu"> BLOG </p></a>
<a href="/#services"><p class="menu"> SERVICES </p></a>
<a href="/#contact"><p class="menu"> CONTACT </p></a>

</div>
</div>



<!---------header section----------->
<div id="header" style="position:absolute;z-index:-10;height:100%;">
<div id="coverText">
<h1 class="header_head"> BLOG</h1>
<h2 class="header_head"> Welcome to my Blog</h2>
</div>
</div>


<div id="content" style="top:100%;">


{% for post in object_list %}
         <div id="post_list">
		 <a href="/blog/{{post.id}}"> <div class="post_img"> {{ post.PostImage|safe }} </div> </a>
         <h2 class="header1"><a href="/blog/{{post.id}}">  {{ post.title }}</a></h2>
         <h5 class="date_time">{{ post.date }}</h5>
        <div id="button"><a href="/blog/{{post.id}}"><text class="buttonDefault" > READ POST </text></a></div>
        </div>
{% endfor %}


<!--------footer section------------>
<div id="footer" style="margin-top:0px;">
<div id="footer_icons">
<a href="https://www.facebook.com/ishan.subedi.5"><img class="footer_icons" src="/static/img/fb.gif"></a>
<a href="https://twitter.com/ikushum"><img class="footer_icons" src="/static/img/twitter.gif"></a>
<a href="https://instagram.com/ishan_kushum"><img class="footer_icons" src="/static/img/insta.gif"></a>
</div>
<text class="footer"> &#169 2016 Ishan Subedi  </text>
<text class="footer"> All rights reserved </text>
<text class="footer"> Further details: ikushum@gmail.com </text>
</div>


</div>


