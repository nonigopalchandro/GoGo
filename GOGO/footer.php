<div class="footer">
<center>CopyRight <?php echo comicpress_copyright(); ?> Reserved</center>
</div>

<style>
	@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
.btn-default {
    color: #333;
    background-color: #009688;
    border-color: #009688;
    border-radius:0px;
    color:#fff;
}

#blog-section{margin-top:40px;margin-bottom:80px;}
.content-title{padding:5px;background-color:#fff;}
.content-title h3 a{color:#34495E;text-decoration:none; transition: 0.5s;}
.content-title h3 a:hover{color:#F39C12; }
.content-footer{background-color:#F0F0F0;padding:10px;position: relative;border-bottom:2px solid pink;}
.content-footer span a {
    color: #fff;
    display: inline-block;
    padding: 6px 5px;
    text-decoration: none;
    transition: 0.5s;
}
.content-footer span a:hover{     
    color:#F39C12;   
}
	
aside{
margin-top: 30px;
-webkit-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
-moz-box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);
box-shadow: 1px 4px 16px 3px rgba(199,197,199,1);}
aside .content-footer>img {
    width: 33px;
    height: 33px;
    border-radius: 100%;
    margin-right: 10px;
    border: 2px solid #fff;
}

.user-ditels {
    width: 300px;
    top: -100px;
    height: 100px;
    padding-bottom: 99px;
    position: absolute;
    border: solid 2px #fff;
    background-color: #34495E;
    right: 25px;
    display: none;
    z-index: 1;
}
    
}
.user-small-img{cursor: pointer;}

.content-footer:hover .user-ditels  {
    display: block;
}


.content-footer .user-ditels .user-img{width: 100px;height:100px;float: left;}
.user-full-ditels h3 {
    color: #fff;
    display: block;
    margin: 0px;
    padding-top: 10px;
    padding-right: 28px;
    text-align: right;
}
.user-full-ditels p{    
    color: #fff;
    display: block;
    margin: 0px;
    padding-right: 20px;
    padding-top: 5px;
   text-align: right;}
.social-icon {
    background-color: #fff;
    margin-top: 10px;
    padding-right: 20px;
    text-align: right;
}
.social-icon>a{font-size:20px;text-decoration:none;padding: 5px;}
.social-icon a:nth-of-type(1){color:#4E71A8;}
.social-icon a:nth-of-type(2){color:#3FA1DA;}
.social-icon a:nth-of-type(3){color:#E3411F;}
.social-icon a:nth-of-type(4){color:#CA3737;}
.social-icon a:nth-of-type(5){color:#3A3A3A;}
	.thm img {
	max-width: 100%;
    height: auto;
    width: auto\9;
	}

</style>

<style>

.navbar {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 5px;
}

/*
headeer top
*/
.topbar{
  background-color: #90B400;
  padding: 0;
}

.topbar .container .row {
  margin:-7px;
  padding:0;
}

.topbar .container .row .col-md-12 { 
  padding:0;
}

.topbar p{
  margin:0;
  display:inline-block;
  font-size: 13px;
  color: #f1f6ff;
}

.topbar p > i{
  margin-right:5px;
}
.topbar p:last-child{
  text-align:right;
} 

header .navbar {
    margin-bottom: 0;
}

.topbar li.topbar {
    display: inline;
    padding-right: 18px;
    line-height: 52px;
    transition: all .3s linear;
}

.topbar li.topbar:hover {
    color: #1bbde8;
}

.topbar ul.info i {
    color: #131313;
    font-style: normal;
    margin-right: 8px;
    display: inline-block;
    position: relative;
    top: 4px;
}

.topbar ul.info li {
    float: right;
    padding-left: 30px;
    color: #ffffff;
    font-size: 13px;
    line-height: 44px;
}

.topbar ul.info i span {
    color: #aaa;
    font-size: 13px;
    font-weight: 400;
    line-height: 50px;
    padding-left: 18px;
}

ul.social-network {
  border:none;
  margin:0;
  padding:0;
}

ul.social-network li {
  border:none;  
  margin:0;
}

ul.social-network li i {
  margin:0;
}

ul.social-network li {
    display:inline;
    margin: 0 5px;
    border: 0px solid #2D2D2D;
    padding: 5px 0 0;
    width: 32px;
    display: inline-block;
    text-align: center;
    height: 32px;
    vertical-align: baseline;
    color: #000;
}

ul.social-network {
  list-style: none;
  margin: 5px 0 10px -25px;
  float: right;
}

.waves-effect {
    position: relative;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-tap-highlight-color: transparent;
    vertical-align: middle;
    z-index: 1;
    will-change: opacity, transform;
    transition: .3s ease-out;
    color: #fff;
}
a {
  color: #0a0a0a;
  text-decoration: none;
}

li {
    list-style-type: none;
}
.bg-image-full {
    background-position: center center;
    background-repeat: no-repeat;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}
.bg-dark {
    background-color: #222!important;
}

.mx-background-top-linear {
    background: -webkit-linear-gradient(45deg, #7ABD13 48%, #007E24 48%);
    background: -webkit-linear-gradient(left, #7ABD13 48%, #007E24 48%);
    background: linear-gradient(45deg, #7ABD13 48%, #007E24 48%);
}
</style>

<style>

@import url(https://fonts.googleapis.com/css?family=Orbitron:900|Roboto);

div,span,applet,object,iframe,input,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,font,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,dl,dt,dd,ol,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td{
	margin:0;
	padding:0;
	border: 0px;
}


a {
	text-decoration:none;
}

.profile-card {
	margin:10px;
	border-radius: 4px;
	overflow:hidden;
	background:#fff;
	position:relative;
	box-shadow:0 4px 4px rgba(0,0,0,0.2);
	text-align:right;
}

.profile-card > header {
	height:150px;
	width:100%;
	background: url(http://img.sonhlab.com/photo/small-tree-01.jpg) center bottom no-repeat #ccc;
	top:0px;
	margin-bottom:40px;
	text-align:left;
	background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.profile-card > header > a {
	width:64px;
	height:64px;
	position:absolute;
	right:20px;
	top:110px;
	border-radius: 50%;
	border:8px solid #eee;
	overflow:hidden;
	display:block;
	background:#fff;
	transition: border-color 0.5s;
	box-shadow:0 4px 4px rgba(0,0,0,0.2);
	z-index:9999;
}
.profile-card > header > a > img {
	width:48px;
	height:48px;
	padding:8px;
	transition: width 0.5s, height 0.5s, padding 0.5s;
}

.profile-card > header > a:hover {
	border-color:#fff;
	transition: border-color 0.5s;
}
.profile-card > header > a:hover > img {
	width:100%;
	height:100%;
	padding:0px;
	transition: width 0.5s, height 0.5s, padding 0.5s;
}

.profile-card > header > h1 {
	font-size:24px;
	font-family: 'Orbitron', sans-serif;
	font-weight:900;
	margin:0px 20px;
	padding:0;
	position:absolute;
	top:110px;
	color:#fff;
	line-height:40px;
	overflow:hidden;
	height:40px;
	z-index:9998;
}

.profile-card > header > h2 {
	font-size:16px;
	font-family: 'Roboto', sans-serif;
	margin:0px;
	padding:0 20px;
	position:absolute;
	top:150px;
	height:40px;
	line-height:40px;
	box-shadow: 0px -40px 30px rgba(0,0,0,0.8);
	display:block;
	width:100%;
	z-index:9997;
	text-align:left;
}

.profile-card > .profile-bio {
	position:relative;
	padding: 20px;
	font-size:14px;
	line-height:1.5;
	font-family: 'Roboto', sans-serif;
	text-align:left;
}

.profile-card > .profile-social-links {
	list-style:none;
	padding:0;
	position:relative;
	margin:0 20px;
	margin-bottom:20px;
	height:36px;
	display:inline-block;
}


.profile-card > .profile-social-links:hover a {
	opacity:0.3;
	-webkit-transition: opacity 0.5s; /* Safari */
    transition: opacity 0.5s;
}

.profile-card > .profile-social-links > li {
	position:relative;
	width:36px;
	height:36px;
	display:inline-block;
	overlfow:hidden;
}


.profile-card > .profile-social-links > li > a {
	width:28px;
	height:28px;
	display: block;
	border:4px solid #eee;
	border-radius: 50%;
	box-shadow:0 2px 2px rgba(0,0,0,0.2);
}
.profile-card > .profile-social-links > li > a > img {
	width:20px;
	height:20px;
	padding:4px;
	transition: width 0.5s, height 0.5s, padding 0.5s;
}


.profile-card > .profile-social-links a:hover {
	border:4px solid #fff;
	border-radius:50%;
	opacity:1;

	-webkit-transition: opacity 0.5s, border 0.5s, border-radius 0.5s; /* Safari */
    transition: opacity 0.5s, border 0.5s, border-radius 0.5s;
}
.profile-card > .profile-social-links a:hover img {
	width:100%;
	height:100%;
	padding:0px;
	transition: width 0.5s, height 0.5s, padding 0.5s;
}

</style>


<style>
.footer {
	font-size: 14px;
	border-top:2px solid #DFDFDF;
	background: #73BC2B; 
	overflow:hidden; 
	solid silver;
	color:white;
}

.footer img {
	margin-left:3px;
	margin-top:-7px;
	border-radius:30px;
	overflow:hidden;
	display:block;
	border: 1px solid #E0DDE0;
	float:right;
	width:30px;
	height:30px;
}
</style>

</body>
</html>