<!DOCTYPE html>
 <html lang="en" >
    <head>
	<?php include 'shared/head.php'?> 
	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	<style>
	@media only screen and (max-height: 566px) 
	{
		#logoheight{
			display:none;
			
		}
		
	}
	@media only screen and (max-width: 775px) 
	{
		#logoheight{
			display:none;
			
		}
		
	}
	@media only screen and (min-width: 776px)
    {
	
	#mobileview{
	   display:none;	
	}
	
	@import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro);
@import url(https://fonts.googleapis.com/css?family=Teko:700);
.snip1543 {
  background-color: #fff;
  color: #ffffff;
  display: inline-block;
  font-family: 'sinkin-sans', Arial, sans-serif;
  font-size: 16px;
  margin: 10px 5px;
  max-width: 415px;
  min-width: 260px;
  overflow: hidden;
  position: relative;
  text-align: left;
  width: 100%;
  -webkit-transform: translateZ(0);
  transform: translateZ(0);
}

.snip1543 *,
.snip1543 *:before,
.snip1543 *:after {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.45s ease;
  transition: all 0.45s ease;
}

.snip1543 img {
  backface-visibility: hidden;
  max-width: 100%;
  vertical-align: top;
}

.snip1543:before,
.snip1543:after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: '';
  background-color: #b81212;
  opacity: 0.5;
  -webkit-transition: all 0.45s ease;
  transition: all 0.45s ease;
}

.snip1543:before {
  -webkit-transform: skew(30deg) translateX(-80%);
  transform: skew(30deg) translateX(-80%);
}

.snip1543:after {
  -webkit-transform: skew(-30deg) translateX(-70%);
  transform: skew(-30deg) translateX(-70%);
}

.snip1543 figcaption {
  position: absolute;
  top: 0px;
  bottom: 0px;
  left: 0px;
  right: 0px;
  z-index: 1;
  bottom: 0;
  padding: 25px 40% 25px 20px;
}

.snip1543 figcaption:before,
.snip1543 figcaption:after {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #f5a421;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
  content: '';
  opacity: 0.5;
  z-index: -1;
}

.snip1543 figcaption:before {
  -webkit-transform: skew(30deg) translateX(-100%);
  transform: skew(30deg) translateX(-100%);
}

.snip1543 figcaption:after {
  -webkit-transform: skew(-30deg) translateX(-90%);
  transform: skew(-30deg) translateX(-90%);
}

.snip1543 h3,
.snip1543 p {
  margin: 0;
  opacity: 0;
  letter-spacing: 1px;
}

.snip1543 h3 {
  font-family: 'Teko', sans-serif;
  font-size: 36px;
  font-weight: 700;
  line-height: 1em;
  text-transform: uppercase;
}

.snip1543 p {
  font-size: 0.9em;
}

.snip1543 a {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index: 1;
}

.snip1543:hover h3,
.snip1543.hover h3,
.snip1543:hover p,
.snip1543.hover p {
  -webkit-transform: translateY(0);
  transform: translateY(0);
  opacity: 0.9;
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}

.snip1543:hover:before,
.snip1543.hover:before {
  -webkit-transform: skew(30deg) translateX(-20%);
  transform: skew(30deg) translateX(-20%);
  -webkit-transition-delay: 0.05s;
  transition-delay: 0.05s;
}

.snip1543:hover:after,
.snip1543.hover:after {
  -webkit-transform: skew(-30deg) translateX(-10%);
  transform: skew(-30deg) translateX(-10%);
}

.snip1543:hover figcaption:before,
.snip1543.hover figcaption:before {
  -webkit-transform: skew(30deg) translateX(-40%);
  transform: skew(30deg) translateX(-40%);
  -webkit-transition-delay: 0.15s;
  transition-delay: 0.15s;
}

.snip1543:hover figcaption:after,
.snip1543.hover figcaption:after {
  -webkit-transform: skew(-30deg) translateX(-30%);
  transform: skew(-30deg) translateX(-30%);
  -webkit-transition-delay: 0.1s;
  transition-delay: 0.1s;
}
				a {
  color: #dc006c;
}
small {
  color: #333;
}
.logo {
  font: 84px 'Arial Narrow', sans-serif;/* I picked this font because it's the closest looking 'web safe' font http://cssfontstack.com/ */
  color: #fefefe;
  text-transform: uppercase;
  letter-spacing: -4px;
}

/* stuff for both words */
.logo span {
  position: relative;
}
.logo span:before,
.logo span:after {
  content: '';
  position: absolute;
  border-width: 32px;/* makes a nice, big 64px square */
  border-style: solid;
  border-color: transparent;
  height: 0;
  z-index: 10;
}

/* stuff for 1st word */
.logo .word1 {
  color: #dc006c;
  margin-right: -38px;
  transform: rotateY(180deg);/* using Prefix free */
  display: inline-block;/* required for transform */
  z-index: 10;/* stack 1st word on top */
}
.logo .word1:before {
  right: -4px;/* would be left, but we flipped the word */
  top: -9px;
  border-top-color: #282828;/* match background color */
  border-right-color: #282828;/* would be left, but we flipped the word */
}
.logo .word1:after {
  left: 17px;/* would be right, but we flipped the word */
  bottom: -15px;
  border-bottom-color: #282828;
  border-left-color: #282828;/* would be right, but we flipped the word */
}

/* stuff for 2nd word */
.logo .word2 {
  z-index: 0;/* stack 2nd word below */
}
.logo .word2:before {
  left: -4px;
  top: -6px;
  border-top-color: #282828;
  border-left-color: #282828;
}
.logo .word2:after {
  right: -4px;  
  bottom: 4px;
  border-bottom-color: #282828;
  border-right-color: #282828;
}
	</style>
	</head>
    <body class="home page page-id-12375 page-template-default  scrolled hide-nav-fries" style="background-color:black">
   
     <div id="logoheight">
	
		<div class="container" >

			
			<div id="cbp-fbscroller" class="cbp-fbscroller"  >
				
				<?php include'shared/sidenav.php'?>
					  <img src="procomLogo.png" alt="profile-sample6" style="	position: fixed;
	z-index: 2;
	right: 1%;
	top: 10%;
	width: 22%;
	height:15%;
	-webkit-transform: translateY(-50%);
	-moz-transform: translateY(-50%);
	-ms-transform: translateY(-50%);
	transform: translateY(-50%);
	background-color:transparent;"/>
	
				<br/>

<!--<section id="fbsection" >
<div>	
</div>
</section>-->
	<style scope="scope">
	
	</style>
            <h1 class="logo" style="display:block;">
  <span class="word1" style="color:#f5a421">MEET</span>
  <span class="word2">THE Sponsors</span>
</h1>

			<div id="form" style="font-family: 'sinkin-sans', Arial, sans-serif;width:80%; display:block; heigth:100%; background-color:black; margin-top:3%; padding-left:2%;margin-left:5%; opacity: 1.0; padding:3%; margin-bottom:8%;padding-right:5%;overflow:visible;">
		
<div style="float:left;">
		<figure class="snip1543 wow slideInLeft" data-wow-delay="300ms">
  <img src="image/VD.jpg" alt="sample108" />
  <figcaption>
    <h3>Venture Dive</h3>
    <p>The only skills I have the patience to learn are those that have no real application in life.</p>
  </figcaption>
  <a href="#"></a>
</figure>
</div>
<div style="float:left; margin-left:2%;">


<figure class="snip1543 wow slideInLeft" data-wow-delay="300ms">
  <img src="image/GFK.jpg" alt="sample108" />
  <figcaption>
    <h3>GFK Etilize</h3>
    <p>The only skills I have the patience to learn are those that have no real application in life.</p>
  </figcaption>
  <a href="#"></a>
</figure>
</div>


<div style="float:left;">
		<figure class="snip1543 wow slideInLeft" data-wow-delay="300ms">
  <img src="image/Procom-White.png" alt="sample108" />
  <figcaption>
    <h3>To Be Announced</h3>
    <p></p>
  </figcaption>
  <a href="#"></a>
</figure>
</div>
<div style="float:left; margin-left:2%;">


<figure class="snip1543 wow slideInLeft" data-wow-delay="300ms">
  <img src="image/Procom-White.png" alt="sample108" />
  <figcaption>
    <h3>To Be Announced</h3>
    <p></p>
  </figcaption>
  <a href="#"></a>
</figure>
</div>

<div style="clear:both;"></div>	
		</div>
		

		</div>
		</div>
       </div>
	   
	   <div id="mobileview">
	   
  </div>
	</body>
 </html>
 