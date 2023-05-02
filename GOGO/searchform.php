<div class='search-area'>
<div class='codehim-ss-bar'>
<form action="/search/query" target="_top">                          
<input type='text' id="TypeNow" autocomplete="off" oninput="undisableBtn()" name="s" value="<?php the_search_query(); ?>" placeholder="What Are You Looking For?"/>
<button type="submit" class="codehim-circle-search-button"> </button>
</form>
</div>
</div>

<style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"); 

.search-area {
 background: #f2f2f2;
 padding: 5px;
 border: 1px solid #f3f3f3;
 text-align: center;
 border-radius: 10px;
}

.codehim-ss-bar {
 padding: 5px;
 box-sizing: border-box;
}

.codehim-ss-bar input[type=text] {
 color: #444;
 caret-color: #000;
 font-size: 10pt;
 width: 80%;
 padding: 10px;
 display: inline;
 background: #fff;
 border: 1px solid #e6e6e6;
 outline: 0;
 border-radius: 30px 0 0 30px;
}

.codehim-circle-search-button:hover {
 box-shadow: 1px 2px 6px #444;
 color: #3EA055;
 background: #fff;
}

.codehim-ss-bar input[type=text]:focus {
 background: #fff;
 box-shadow: 1px 2px 8px #3EA055;
}

.codehim-circle-search-button {
 display: inline-block;
 margin-left: -33px;
 border: none;
 outline: 0;
 background: #3EA055;
 color: #fff;
 width: 50px;
 height: 50px;
 cursor: pointer;
 transition: .3s;
 -webkit-transition: .3s;
 -moz-transition: .3s;
 font-size: 14pt;
 border-radius: 50%;
}

.codehim-circle-search-button:before {
 content: "\f002";
 font-family: FontAwesome;
 font-weight: normal;
}
</style>