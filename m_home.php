<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />

	<meta name="mobile-web-app-capable" content="yes">
	<meta name="android-mobile-web-app-capable" content="yes" />

	<meta name="HandheldFriendly" content="true"/>

	<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css">
    
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<script src="https://code.jquery.com/jquery-1.10.2.min.js">
	</script>
	<script src="https://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js">
	</script>
	<script src="includes/js/jquery.mobile.lazyloader.js">
	</script>

	<script type="application/x-javascript"> addEventListener("load", function() {setTimeout(hideURLbar, 0); }, true); function hideURLbar(){ window.scrollTo(0,1); }
	</script>

	<script>

	//$(document).ready(function(){
	//  $("form").submit(function(){
	//    window.location.href = "http://www.google.com";
	//  });
	//});

		$(document).ready(function() {
			
            $( "#ggbar_submit" ).click(function( event ) {
                $.post( "m_home.php", $( "#ggbar" ).serialize() );
			});
            
            $('.icon_comment').click(function(){
            	$('#gg_main_1').show();
				$('#ggbar').focus();
                $(this).hide();
				$('.icon_comment_yel').show();
            });
            
			$('.recents_all').children().click(function(){
				
				$(this).css({
					"border":"2px solid"
					, "border-bottom-color":"#DA3943"
					, "border-top-color":"#DA3943"
					, "border-right-color":"#FFFFFF"
					, "border-left-color":"#FFFFFF"
					, "margin":"1px 8px 2px 8px"
					, "border-bottom-left-radius":"9px"
					, "border-bottom-right-radius":"9px"
					, "border-top-left-radius":"9px"
					, "border-top-right-radius":"9px"
				});
                
                $(this).attr("id","recents_op_1");
				
				$(this).siblings().css({
					"border":"1px solid"
					, "border-bottom-color":"#85B4CC"
					, "border-top-color":"#85B4CC"
					, "border-right-color":"#FFFFFF"
					, "border-left-color":"#FFFFFF"
					, "margin":"-1px 10px 0px 10px"
					, "border-bottom-left-radius":"0px"
					, "border-bottom-right-radius":"0px"
					, "border-top-left-radius":"0px"
					, "border-top-right-radius":"0px"
				});
                
                $(this).siblings().attr("id","recents_op_not");
				
				$(this).css({
					"opacity":"1"
				});
				
				$(this).siblings().css({
					"opacity":".1"
				});
			
			});

			$(document).on("scrollstart",function(){

                $("#recents_op_1").siblings().css({
                    "opacity":".6"
                    , "border":"1px solid"
                    , "border-bottom-color":"#85B4CC"
                    , "border-top-color":"#85B4CC"
                    , "border-right-color":"#FFFFFF"
                    , "border-left-color":"#FFFFFF"
                    , "margin":"-1px 10px 0px 10px"
                    , "border-bottom-left-radius":"0px"
                    , "border-bottom-right-radius":"0px"
                    , "border-top-left-radius":"0px"
                    , "border-top-right-radius":"0px"
                });

                $("#recents_op_1").css({
                    "border":"2px solid"
                    , "border-bottom-color":"#DA3943"
                    , "border-top-color":"#DA3943"
                    , "border-right-color":"#FFFFFF"
                    , "border-left-color":"#FFFFFF"
                    , "margin":"1px 8px 2px 8px"
                    , "border-bottom-left-radius":"9px"
                    , "border-bottom-right-radius":"9px"
                    , "border-top-left-radius":"9px"
                    , "border-top-right-radius":"9px"
                });
				
			});

            $('.icon_comment_yel').click(function(){
            	$('#gg_main_1').hide();
				$('#ggbar').blur();
                $(this).hide();
				$('.icon_comment').show();
            });

		});

	</script>

	<style>
		.ajax-progress-throbber {
			display: none;
		}

		.ui-body-a,

		.ui-page-theme-a .ui-body-inherit,

		html .ui-bar-a .ui-body-inherit,

		html .ui-body-a .ui-body-inherit,

		html body .ui-group-theme-a .ui-body-inherit,
		html .ui-panel-page-container-a {
			border-color: #DA3943 /*{a-body-border}*/;
		}

		.ui-page-theme-a .ui-btn:focus,
		html .ui-bar-a .ui-btn:focus,
		html .ui-body-a .ui-btn:focus,
		html body .ui-group-theme-a .ui-btn:focus,
		html head + body .ui-btn.ui-btn-a:focus,
		/* Focus buttons and text inputs with div wrap */
		.ui-page-theme-a .ui-focus,
		html .ui-bar-a .ui-focus,
		html .ui-body-a .ui-focus,
		html body .ui-group-theme-a .ui-focus,
		html head + body .ui-btn-a.ui-focus,
		html head + body .ui-body-a.ui-focus {
			-webkit-box-shadow: 0 0 12px #da3943 /*{a-active-background-color}*/;
			-moz-box-shadow: 0 0 12px #da3943 /*{a-active-background-color}*/;
			box-shadow: 0 0 12px #da3943 /*{a-active-background-color}*/;
		}

		.ui-page-theme-a .ui-btn:hover,
		html .ui-bar-a .ui-btn:hover,
		html .ui-body-a .ui-btn:hover,
		html body .ui-group-theme-a .ui-btn:hover,
		html head + body .ui-btn.ui-btn-a:hover {
			background-color: #DA3943 /*{a-bhover-background-color}*/;
			border-color: #ffffff /*{a-bhover-border}*/;
			color: #ffffff /*{a-bhover-color}*/;
			text-shadow: 0 /*{a-bhover-shadow-x}*/ 0 /*{a-bhover-shadow-y}*/ 0 /*{a-bhover-shadow-radius}*/ #ffffff /*{a-bhover-shadow-color}*/;
		}

		.ui-overlay-a,
		.ui-page-theme-a,
		.ui-page-theme-a .ui-panel-wrapper {
			background-color: #FFFFFF /*{a-page-background-color}*/;
			border-color: #FFFFFF /*{a-page-border}*/;
			text-shadow: 0 /*{a-page-shadow-x}*/ 0px /*{a-page-shadow-y}*/ 0 /*{a-page-shadow-radius}*/ #FFFFFF /*{a-page-shadow-color}*/;
		}

		.ui-page-theme-a .ui-btn:active,
		html .ui-bar-a .ui-btn:active,
		html .ui-body-a .ui-btn:active,
		html body .ui-group-theme-a .ui-btn:active,
		html head + body .ui-btn.ui-btn-a:active {
			background-color: #DA3943 /*{a-bdown-background-color}*/;
			border-color: #ffffff /*{a-bdown-border}*/;
			color: #ffffff /*{a-bdown-color}*/;
			text-shadow: 0 /*{a-bdown-shadow-x}*/ 0 /*{a-bdown-shadow-y}*/ 0 /*{a-bdown-shadow-radius}*/ #ffffff /*{a-bdown-shadow-color}*/;
		}

		.ui-page-theme-a .ui-btn,
		html .ui-bar-a .ui-btn,
		html .ui-body-a .ui-btn,
		html body .ui-group-theme-a .ui-btn,
		html head + body .ui-btn.ui-btn-a,
		/* Button visited */
		.ui-page-theme-a .ui-btn:visited,
		html .ui-bar-a .ui-btn:visited,
		html .ui-body-a .ui-btn:visited,
		html body .ui-group-theme-a .ui-btn:visited,
		html head + body .ui-btn.ui-btn-a:visited {
			background-color: #DA3943 /*{a-bup-background-color}*/;
			border-color: #DA3943 /*{a-bup-border}*/;
			color: #ffffff /*{a-bup-color}*/;
			text-shadow: 0 /*{a-bup-shadow-x}*/ 0px /*{a-bup-shadow-y}*/ 0 /*{a-bup-shadow-radius}*/ #ffffff /*{a-bup-shadow-color}*/;
		}

		.ui-corner-all {
			-webkit-border-radius: 0em /*{global-radii-blocks}*/;
			border-radius: 0em /*{global-radii-blocks}*/;
		}
		/* Buttons */
		.ui-btn-corner-all,
		.ui-btn.ui-corner-all,
		/* Slider track */
		.ui-slider-track.ui-corner-all,
		/* Flipswitch */
		.ui-flipswitch.ui-corner-all,
		/* Count bubble */
		.ui-li-count {
			-webkit-border-radius: 0.0em /*{global-radii-buttons}*/;
			border-radius: 0.0em /*{global-radii-buttons}*/;
		}
		/* Icon-only buttons */
		.ui-btn-icon-notext.ui-btn-corner-all,
		.ui-btn-icon-notext.ui-corner-all {
			-webkit-border-radius: 1em;
			border-radius: 1em;
		}
		/* Radius clip workaround for cleaning up corner trapping */
		.ui-btn-corner-all,
		.ui-corner-all {
			-webkit-background-clip: padding;
			background-clip: padding-box;
		}
		/* Popup arrow */
		.ui-popup.ui-corner-all > .ui-popup-arrow-guide {
			left: 0em /*{global-radii-blocks}*/;
			right: 0em /*{global-radii-blocks}*/;
			top: 0em /*{global-radii-blocks}*/;
			bottom: 0em /*{global-radii-blocks}*/;
		}
		.ui-corner-all {
			-moz-border-radius:    0    /*{global-radii-blocks}*/;
			-webkit-border-radius:    0    /*{global-radii-blocks}*/;
			border-radius:    0    /*{global-radii-blocks}*/;
		}

		.ui-btn-corner-all {
			-moz-border-radius:    0    /*{global-radii-buttons}*/;
			-webkit-border-radius:    0    /*{global-radii-buttons}*/;
			border-radius:    0    /*{global-radii-buttons}*/;
		}

		.ui-focus {
		 -moz-box-shadow: none !important;
		 -webkit-box-shadow: none !important;
		 box-shadow: none !important;
		}

		.ui-shadow {
			box-shadow:  0px 0px 0px 0px #FFFFFF;
			shadow: none;
			border: none;
		}
        
        #icon_comment_yel, #icon_comment, #ggbar_submit, a:link    {border-color: #DA3943;}
        #icon_comment_yel, #icon_comment, #ggbar_submit, a:visited {border-color: #DA3943;}
        #icon_comment_yel, #icon_comment, #ggbar_submit, a:hover   {border-color: #DA3943;}
        #icon_comment_yel, #icon_comment, #ggbar_submit, a:active  {border-color: #DA3943;}
        
		#ggbar_submit, input:link	{border-color: #DA3943; background-color: #DA3943;}
        #ggbar_submit, input:visited	{border-color: #DA3943; background-color: #DA3943;}
        #ggbar_submit, input:hover	{border-color: #DA3943; background-color: #DA3943;}
        #ggbar_submit, input:active	{border-color: #DA3943; background-color: #DA3943;}

		#icon_bars, a:link    {border-color: #DA3943;}
        #icon_bars, a:visited {border-color: #DA3943;}
        #icon_bars, a:hover   {border-color: #DA3943;}
        #icon_bars, a:active  {border-color: #DA3943;}
		
	</style>

</head>

<body id="gg_home">

	<div class="gg_header" style="background-color: #DA3943; position: fixed; height: 50px; width: 100%; margin: 0; padding: 0; z-index: 999; border: 0;">

		<p style="margin: 8px auto 0px auto;font-family: Arial; font-size: 30px; font-weight: 100; text-align:center;color:#FFFFFF; text-shadow: 0;">
        	<i id="icon_bars" class="fa fa-bars icon_bars" style='float: left; font-size: 27px; margin: 5px 0px 0px 15px;'>
            </i>
		Guess Gather
        	<i class="fa fa-bolt icon_comment" style='float: right; font-size: 27px; margin: 5px 15px 0px 0px; color: #FFFFFF';>
            </i>
			<i class="fa fa-bolt icon_comment_yel" style='display: none; float: right; font-size: 27px; margin: 5px 15px 0px 0px; color: #FFFF11';'>
            </i>
		</p>

	</div>
	
	<div id="gg_main_1" style="display: none; position: fixed; margin: 60px 3% -20px 3%; width: 94%; padding: 0; z-index: 999;">
    
		<form method="post" action="m_home.php">

            <div data-role="controlgroup" data-type="vertical" style="max-width: 570px; padding: 0; margin: 0px 0px 0px 0px; border-right-style: solid; border-right-width: 0px; border-right-color: #DA3943; background-color: #DA3943">
            
                <label for="ggbar" class="ui-hidden-accessible">ggbar</label>
                <textarea maxlength="200" name="ggbar" id="ggbar" style="resize: none; margin: 0; box-shadow: none !important;" placeholder="Make a guess, or search a guess."></textarea>
                <input style="max-height: 29px; margin: 0px 0px 0px 0px; background-color: #DA3943;" type="submit" value="Submit" id="ggbar_submit" data-mini="true">
                
            </div>
			
		</form>
			
	</div>

	<div id="gg_mobile" data-theme="a" style="margin: 60px 0px 10px 0px;">
		
		<div class='recents_all'">

			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 0px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>
			
			<div class='recents' style="border: 1px solid; opacity: .6; border-bottom-color: #85B4CC; border-top-color: #85B4CC; border-right-color: #FFFFFF; border-left-color: #FFFFFF; margin: -1px 10px 10px 10px;">
			
				<p style="font-family: Trebuchet MS; font-size: 18px; text-align: left; margin: 5px 10px 0px 10px; word-wrap:break-word; color: #056194; font-weight:600;">Hello World!</p>
				<p style="font-family: Trebuchet MS; font-size: 16px; text-align: left; margin: 0px 10px 5px 30px; word-wrap:break-word; color: #76848E;">FROM SPACE</p>
			
			</div>

		</div>

	</div>

</body>
</html>

<?php
	date_default_timezone_set("UTC");
    $ggbar_guess = $_POST["ggbar"];
    //date("Y-m-d H:i:s", time()) = date_format(date_create(),"Y-m-d H:i:s")
    $count_spaces = substr_count(trim($ggbar_guess, ' '), ' ');
    $now_date_time = date_format(date_create(),"Y-m-d H:i:s");
    $con = mysqli_connect("mysql","gg_data_admin","Board590Palace","guessgather_dw");
    $userip = ($_SERVER['X_FORWARDED_FOR']) ? $_SERVER['X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Um... Well this is embarassing. This almost never happens.";
        /*"Failed to connect to MySQL: " . mysqli_connect_error();*/
    }

    $sql_del="DELETE FROM guess_log WHERE guess=''";

    if (!mysqli_query($con,$sql_del)) {
        die();
        /*die('Error: ' . mysqli_error($con));*/
    }

    // escape variables for security
    $ggbar_con = mysqli_real_escape_string($con, $_POST["ggbar"]);

    $sql="INSERT INTO guess_log (guess, time_entered, User_IP) VALUES (LOWER(TRIM(REPLACE(REPLACE(REPLACE(('$ggbar_guess'), '\n', ' '), '\r', ' '), '\t', ' '))), '$now_date_time', '$userip')";

    if (!mysqli_query($con,$sql)) {
        die();
        /*die('Error: ' . mysqli_error($con));*/
    }

    $sql_tmp="INSERT INTO guess_log_tmp (guess, time_entered, User_IP) VALUES (LOWER(TRIM(REPLACE(REPLACE(REPLACE(('$ggbar_guess'), '\n', ' '), '\r', ' '), '\t', ' '))), '$now_date_time', '$userip')";

    if (!mysqli_query($con,$sql_tmp)) {
        die();
        /*die('Error: ' . mysqli_error($con));*/
    }
    
    $sql_del_words="DELETE FROM guess_words WHERE word=''";

	if (!mysqli_query($con,$sql_del_words)) {
		die();
        /*die('Error: ' . mysqli_error($con));*/
	}

    $sql_del_tmp="DELETE FROM guess_log_tmp WHERE guess='' OR time_entered<DATE_SUB(NOW( ), INTERVAL 30 SECOND)";

    if (!mysqli_query($con,$sql_del_tmp)) {
        die();
        /*die('Error: ' . mysqli_error($con));*/
    }
    
    $sql_words="INSERT INTO guess_words(word) 
	select distinct TRIM(subject1) from (
	SELECT distinct substring(substring_index(Lower(TRIM(guess)),' ',1) from 1 for char_length(substring_index(Lower(TRIM(guess)),' ',1))) as subject1 FROM guess_log_tmp
	union
	SELECT substring(substring_index(Lower(TRIM(guess)),' ',-1*(char_length(guess)+0-char_length(replace(guess,' ','')))) from 1 for char_length(substring_index(guess,' ',-1*(char_length(guess)-char_length(replace(guess,' ','')))+0))-char_length(substring_index(guess,' ',-1*(char_length(guess)-char_length(replace(guess,' ',''))-1)))) FROM guess_log_tmp
	union
	SELECT substring(substring_index(Lower(TRIM(guess)),' ',-1*(char_length(guess)-char_length(replace(guess,' ','')))+1) from 1 for char_length(substring_index(guess,' ',-1*(char_length(guess)-char_length(replace(guess,' ','')))+1))-char_length(substring_index(guess,' ',-1*(char_length(guess)-char_length(replace(guess,' ',''))-2)))) FROM guess_log_tmp) a";

	if (!mysqli_query($con,$sql_words)) {
		die();
        /*die('Error: ' . mysqli_error($con));*/
	}

    for ($x=0; $x<=($count_spaces+1); $x++) {
	$sql_words="INSERT INTO guess_words(word) select distinct TRIM(subject1) from (SELECT substring(substring_index(Lower(TRIM(guess)),' ',-1*(char_length(guess)-char_length(replace(guess,' ','')))+(".($x+2).")) from 1 for char_length(substring_index(guess,' ',-1*(char_length(guess)-char_length(replace(guess,' ','')))+(".($x+2).")))-char_length(substring_index(guess,' ',-1*(char_length(guess)-char_length(replace(guess,' ',''))-(".($x+3)."))))) subject1 FROM guess_log_tmp) a";

    if (!mysqli_query($con,$sql_words)) {
        die();
        /*die('Error: ' . mysqli_error($con));*/
        }
    }

    mysqli_close($con);
?>
