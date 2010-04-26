<?php
/*
Plugin Name: Grapefile
Plugin URI:  http://gdsweb.ca
Description: Share MP3s, AVIs, ZIPs, DOCs and IMAGES via Your Admin Page. No Database Required. Plug n Play. Assumes WordPress Install is in ROOT. Visit www.grapefile.info BEFORE Every Upgrade or Risk Losing Your Files!
Author: Kris Jonasson, Rick Hill, GraphicDreams
Version: 1.0
Author URI: http://krisjaydesigns.com

Copyright 2010 Kris Jonasson  http://krisjaydesigns.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/ 

// Addition To Options List
add_action('admin_menu', 'grape_file');

function grape_file() {
    // Adds Options Submenu:
    add_menu_page('Grapefile', '<img src="../wp-content/plugins/Grapefile/gfile.a.png" alt=""/>', 0, 'krsone', 'krs_one');
}

function krs_one() { ?>
<div class="wrap">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/ajaxupload.js"></script>
<script type= "text/javascript">/*<![CDATA[*/
$(document).ready(function(){

	/* Grapefile */
	var button = $('#button1'), interval;
	new AjaxUpload(button,{
		//action: '<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/grapeupload.php', // Names The File To Handle The Upload
		action: '<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/grapeupload.php', 
		name: 'userfile',
		onSubmit : function(file, ext){
                if (! (ext && /^(mp3)$/i.test(ext))){
                        // extension is not allowed
                        alert('Error: invalid file extension');
                        // cancel upload
                        return false;
                }
			// change button text, when user selects file			
			button.text('Uploading');
			
			// If you want to allow uploading only 1 file at time,
			// you can disable upload button
			this.disable();
			
			// U -> Up -> Upl-> Uplo -> Uploa-> Upload -> Uploadi-> Uploadin -> Uploading-> Your -> File
			interval = window.setInterval(function(){
				var text = button.text();
				if (text.length < 19){
					button.text(text + '.');					
				} else {
					button.text('Uploading');				
				}
			}, 200);
		},
		onComplete: function(file, response){
			button.text('Upload MP3');
						
			window.clearInterval(interval);
						
			// enable upload button
			this.enable();
			
			// add file to the list
			$('<li></li>').appendTo('#example1 .files').text(file);	
					
		}
	});

});/*]]>*/</script>
<script type= "text/javascript">/*<![CDATA[*/
$(document).ready(function(){

			/* Grapefile */
	var button = $('#button2'), interval;
	new AjaxUpload(button2,{
		//action: '<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/grapeupload2.php', // Names The File To Handle The Upload
		action: '<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/grapeupload2.php', 
		name: 'userfile',
		onSubmit : function(file, ext){
                if (! (ext && /^(avi)$/i.test(ext))){
                        // extension is not allowed
                        alert('Error: invalid file extension');
                        // cancel upload
                        return false;
                }
			// change button text, when user selects file			
			button.text('Uploading');
			
			// If you want to allow uploading only 1 file at time,
			// you can disable upload button
			this.disable();
			
			// U -> Up -> Upl-> Uplo -> Uploa-> Upload -> Uploadi-> Uploadin -> Uploading-> Your -> File
			interval = window.setInterval(function(){
				var text = button.text();
				if (text.length < 19){
					button.text(text + '.');					
				} else {
					button.text('Uploading');				
				}
			}, 200);
		},
		onComplete: function(file, response){
			button.text('Upload AVI');
						
			window.clearInterval(interval);
						
			// enable upload button
			this.enable();
			
			// add file to the list
			$('<li></li>').appendTo('#example1 .files').text(file);	
					
		}
	});

});/*]]>*/</script>
<script type= "text/javascript">/*<![CDATA[*/
$(document).ready(function(){

			/* Grapefile */
	var button = $('#button3'), interval;
	new AjaxUpload(button3,{
		//action: '<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/grapeupload3.php', // Names The File To Handle The Upload
		action: '<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/grapeupload3.php', 
		name: 'userfile',
		onSubmit : function(file, ext){
                if (! (ext && /^(jpg|png|jpeg|gif)$/i.test(ext))){
                        // extension is not allowed
                        alert('Error: invalid file extension');
                        // cancel upload
                        return false;
                }
			// change button text, when user selects file			
			button.text('Uploading');
			
			// If you want to allow uploading only 1 file at time,
			// you can disable upload button
			this.disable();
			
			// U -> Up -> Upl-> Uplo -> Uploa-> Upload -> Uploadi-> Uploadin -> Uploading-> Your -> File
			interval = window.setInterval(function(){
				var text = button.text();
				if (text.length < 19){
					button.text(text + '.');					
				} else {
					button.text('Uploading');				
				}
			}, 200);
		},
		onComplete: function(file, response){
			button.text('Upload IMG');
						
			window.clearInterval(interval);
						
			// enable upload button
			this.enable();
			
			// add file to the list
			$('<li></li>').appendTo('#example1 .files').text(file);	
					
		}
	});

});/*]]>*/</script>
<script type= "text/javascript">/*<![CDATA[*/
$(document).ready(function(){

			/* Grapefile */
	var button = $('#button4'), interval;
	new AjaxUpload(button4,{
		//action: '<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/grapeupload4.php', // Names The File To Handle The Upload
		action: '<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/grapeupload4.php', 
		name: 'userfile',
		onSubmit : function(file, ext){
                if (! (ext && /^(zip)$/i.test(ext))){
                        // extension is not allowed
                        alert('Error: invalid file extension');
                        // cancel upload
                        return false;
                }
			// change button text, when user selects file			
			button.text('Uploading');
			
			// If you want to allow uploading only 1 file at time,
			// you can disable upload button
			this.disable();
			
			// U -> Up -> Upl-> Uplo -> Uploa-> Upload -> Uploadi-> Uploadin -> Uploading-> Your -> File
			interval = window.setInterval(function(){
				var text = button.text();
				if (text.length < 19){
					button.text(text + '.');					
				} else {
					button.text('Uploading');				
				}
			}, 200);
		},
		onComplete: function(file, response){
			button.text('Upload ZIP');
						
			window.clearInterval(interval);
						
			// enable upload button
			this.enable();
			
			// add file to the list
			$('<li></li>').appendTo('#example1 .files').text(file);	
					
		}
	});


});/*]]>*/</script>
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/themes/ui-darkness/jquery-ui.css" type="text/css" media="all" />

<script type="text/javascript">

		var loadedobjects=""
		var rootdomain="http://"+window.location.hostname

		function ajaxpage(url, containerid){
		var page_request = false
		if (window.XMLHttpRequest) // if Mozilla, Safari etc
		page_request = new XMLHttpRequest()
		else if (window.ActiveXObject){ // if IE
		try {
		page_request = new ActiveXObject("Msxml2.XMLHTTP")
	} 
		catch (e){
		try{
		page_request = new ActiveXObject("Microsoft.XMLHTTP")
	}
		catch (e){}
	}
	}
			else
			return false
			page_request.onreadystatechange=function(){
			loadpage(page_request, containerid)
		}
			page_request.open('GET', url, true)
			page_request.send(null)
		}

			function loadpage(page_request, containerid){
			if (page_request.readyState == 4 && (page_request.status==200 || window.location.href.indexOf("http")==-1))
			document.getElementById(containerid).innerHTML=page_request.responseText
		}

			function loadobjs(){
			if (!document.getElementById)
			return
			for (i=0; i<arguments.length; i++){
			var file=arguments[i]
			var fileref=""
			if (loadedobjects.indexOf(file)==-1){ //Check to see if this object has not already been added to page before proceeding
			if (file.indexOf(".js")!=-1){ //If object is a js file
			fileref=document.createElement('script')
			fileref.setAttribute("type","text/javascript");
			fileref.setAttribute("src", file);
		}
	else if (file.indexOf(".css")!=-1){ //If object is a css file
	fileref=document.createElement("link")
	fileref.setAttribute("rel", "stylesheet");
	fileref.setAttribute("type", "text/css");
	fileref.setAttribute("href", file);
	}
	}
		if (fileref!=""){
		document.getElementsByTagName("head").item(0).appendChild(fileref)
		loadedobjects+=file+" " //Remember this object as being already added to page
		}
		}
		}

</script>

<style type="text/css">
	#leftcolumn{
		float:left;
		width:140px;
		height: 440px;
		background:#f1f1f1;
		border: 1px solid #d2d2d2;
		padding: 5px;
		padding-left: 8px;
		padding-right: 8px;

}

	#leftcolumn a{
		padding: 3px 1px;
		display: block;
		width: 100%;
		text-decoration: none;
		font-weight: bold;
		border-bottom: 1px solid gray;
}

	#leftcolumn a:hover{
		background-color: #361636;
}

	#rightcolumn{
		float:left;
		background:#dedede;
		width:520px;
		min-height: 400px;
		border: 1px solid #d2d2d2;
		margin-left: 48px;
		padding: 5px;
		padding-bottom: 8px;
		margin-top: -420px;
}

	* html #rightcolumn{ /*IE only style*/
		height: 400px;
}
</style>

<style type="text/css">

	#text {	margin: 25px; }
		ul { list-style: none; }

	.example {	
		padding: 0 20px;		
		width: 230px;
	}

	.wrapper {
		width: 758px;
		margin-bottom: 25px;
	}

	div.button {
		height: 26px;	
		width: 116px;
		background:url(<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/button.png) 0 0;
                border: 0px;
	
		font-size: 14px;
		color: #fff;
		text-align: center;
		padding-top: 15px;
		margin-right: 3px;
	}

	div.button.hover {
		background: url(<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/button.png) 0 56px;
		color: #fff;	
	}

</style>

<h2 style="margin-bottom:-25px;"><img src="<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/gfile.icon.png"/></h2>

	<div id="seedwrap" style="background:#fff;width:800px;border: 1px solid #d2d2d2;margin-bottom:20px;">

	<div id="text">
<ul>
	<li id="example1" class="example">
		<div class="wrapper" style="padding-top:16px;">

			<div id="button1" class="button" style="float:left;">Upload MP3</div>
			<div id="button2" class="button" style="float:left;">Upload AVI</div>
			<div id="button3" class="button" style="float:left;">Upload IMG</div>
			<div id="button4" class="button" style="float:left;">Upload ZIP</div>

		</div>
</div>

	</li>
	
</ul>	
	
<div id="grape_seed" style="width:758px;height:100%;padding-bottom:25px;background:#;">
<div id="leftcolumn" style="margin-left:10px;">
<img src="<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/gfile.png"/>
<a style="color:#000;"></a>
<a style="color:#000;">Search Our Stash</a>
<a href="javascript:ajaxpage('<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/filestore/mp3/index.php', 'rightcolumn');">&nbsp;&nbsp;&nbsp;&nbsp;MP3 Files&nbsp;&nbsp;</a>
<a href="javascript:ajaxpage('<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/filestore/avi/index.php', 'rightcolumn');">&nbsp;&nbsp;&nbsp;&nbsp;AVI Files&nbsp;&nbsp;</a>
<a href="javascript:ajaxpage('<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/filestore/doc/index.php', 'rightcolumn');">&nbsp;&nbsp;&nbsp;&nbsp;IMG Files&nbsp;&nbsp;</a>
<a href="javascript:ajaxpage('<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/filestore/zip/index.php', 'rightcolumn');">&nbsp;&nbsp;&nbsp;&nbsp;ZIP Files&nbsp;&nbsp;</a>
<div style="margin-top: 2em">Have a Problem/Bug? Submit a Ticket to Our Team!</div>
<a href="http://grapefile.info/ticket/" target="_blank">Get in Touch...</a><br />
<div style="margin-top: 2em">Have A Killer Idea? Want to Contribute?</div>
<a href="http://grapefile.info/contact/" target="_blank">Contact Us!</a>
</div>
<div id="rightcolumn"><img src="<?php bloginfo('url'); ?>/wp-content/plugins/Grapefile/grapefile.png"/></div>
<div style="clear: left; margin-bottom: 1em"></div>
</div>
		</div>
<h5 style="padding-left:5px;font-size:8px;width:800px;">Sharing of Copyright Materials Prohibited By Law | Use Own Descretion When Downloading | All Code &copy; 2010&nbsp;<a href="http://grapefile.info" target="_blank">GrapeFile</a>&trade;&nbsp;&amp;&nbsp;<a href="http://krisjaydesigns.com" target="_blank">Kris Jay</a>.&nbsp;&rarr; GrapeFile&trade; and Kris Jay Take No Responsibility for Anything that is/will be Uploaded, Downloaded, Shared or Stored within Our Demo.  All Files Are Stored Within The Plugin Itself, Making This A Database Free File Management System! ......Pretty F'n Neat!! :) If You Have Any Suggestions For GrapeFile&trade;, Swing By Kris Jays website And Drop A Note In The 'Suggestion Box' Today. If You Are A Programmer or Developer Looking To Work With This Killer Project, Shoot An Email To Us!</h5>
</div>
<? } ?>