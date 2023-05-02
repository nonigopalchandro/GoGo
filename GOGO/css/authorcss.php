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
	width:300px;
	margin:10px auto;
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
	position:relative;
	top:0px;
	margin-bottom:40px;
	text-align:left;
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