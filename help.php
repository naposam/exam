<?php include 'inc/header.php'; ?>
 <?php
	Session::checkLogin();
?>
<head>
	<style type="text/css">
		body{
			background-color: #7c0f14
			margin:0;
			padding: 0;
			height: 100vh

		}
      #particles-js{
      	position: absolute;
        left: 0px;
         top: 0px;
        z-index: -1;
      	background-color: #7c0f14;
      	width: 100%;
      }

		body {
  overflow: hidden
}

.box {
    margin: 0 auto;
    position: relative;
    color: #feb090;
    width: 570px;
    height: 50px;
    font-size: 2rem;
    box-sizing: border-box;
}
.box-inner {
    position: relative;
}

.box-next {
    opacity: 0;
    transition: all 1s ease;
    font-size: inherit
}

.box > div > span, .box > span {
    display: block;
    transition: all 1s ease;
    position: absolute;
    top:0px;
    left: 0;
    width: 100%;
    height: 100%;
}

.box > div > span {
    top:7px;
}

.box > div > span:not(:first-child) {
    opacity: 0;
}

.box > div > span.hover-me {
    transition-duration: .1s;
}

.box > span.l-top, .box > span.l-bottom {
    border-top: 2px solid #b17b64;
    transform: scale(0, 1);
    transform-origin: left;
    transition-duration: .2s
}

.box > span.l-left, .box > span.l-right {
    border-left: 2px solid #b17b64;
    transform: scale(1, 0);
    transform-origin: top;
    transition-duration: .3s
}

.box > span.l-bottom {
    top: 48px;
    transition-delay: .5s
}

.box > span.l-right {
    left: 568px;
    transition-delay: .5s
}

.box:hover > span.l-top, .box:hover > span.l-left, .box:hover > span.l-bottom, .box:hover > span.l-right {
    opacity: 1;
    transform: scale(1, 1);
     cursor: pointer;
}

.box:hover > div > span.hover-me {
    left: -150px;
    opacity: 0;
    cursor: pointer;
}

.box:hover > div > span.hi {
    opacity: 1;
    left: 14px;
     cursor: pointer;
}

.box:hover > div > span.message {
    opacity: 1;
    left: 65px;
    transition-delay: .25s;
    transition-duration: .2s;
     cursor: pointer;
}

body > div.box:first-child:after {
    content: '\25bc';
    position:absolute;
    left: 47%;
    top: 50px;
    opacity: 0;
    transition: all .2s ease;
}

body > div.box:first-child:hover:after {
    opacity: 1;
}

.box:hover + div.box-next {
    opacity: 1;
    margin-top: 32px
}



	</style>
</head>
<body >
	<div id="particles-js"></div>
	
<div class="main">


	
	<div class="">
	<div class="box">
    <span class="l-top"></span>
    <span class="l-left"></span>
    <div class="box-inner">
      <span class="hover-me">INSTRUCTIONS</span>
      <span class="hi">Hi!</span>
      <span class="message" >Read The Instructions carefully &#8609 </span>
    </div>
    <span class="l-right"></span>
    <span class="l-bottom"></span>
</div>
<div class="box box-next">
   <ol>
   	<li>Register with your fullname, email, password and username</li>
   	<li>One email cannot be registered more than one</li>
   	<li>You have 60 seconds to answer one question</li>
   	<li>The system will skip to the next question after 60 seconds if not answer</li>
   	<li>The system save scores automatically</li>
   	<li>You can view score history any time you log into the system</li>
   	
   </ol>
</div>
	</div>	
</div>

<?php include 'inc/footer.php'; ?>

<script type="text/javascript" src="css/particles.js"></script>
<script type="text/javascript" src="css/app.js"></script>
</body>