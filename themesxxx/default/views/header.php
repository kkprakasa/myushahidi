<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<title><?php echo $site_name; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="distribution" content="global" />
	<meta name="geo.region" content="ID-JKT" />
	<meta name="geo.placename" content="Jakarta" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="author" content="AirPutih" />
	<meta name="robots" content="index,follow" />
	<meta name="googlebot" content="index,follow" />
	<meta name="revisit-after" content="1 week" />
	<meta name="expires" content="never" />
	<?php echo $header_block; ?>
	<?php
	// Action::header_scripts - Additional Inline Scripts from Plugins
	Event::run('ushahidi_action.header_scripts');
	?>
	<!--google fonts-->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Oswald">
	<!--google analytics-->
		<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-30369366-1']);
	  _gaq.push(['_setDomainName', 'korupedia.org']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>

<?php 
  // Add a class to the body tag according to the page URI
  
  // we're on the home page
  if (count($uri_segments) == 0) 
  {
    $body_class = "page-main";
  }
  // 1st tier pages
  elseif (count($uri_segments) == 1) 
  {
    $body_class = "page-".$uri_segments[0];
  }
  // 2nd tier pages... ie "/reports/submit"
  elseif (count($uri_segments) >= 2) 
  {
    $body_class = "page-".$uri_segments[0]."-".$uri_segments[1];
  };
    
  echo '<body id="page" class="'.$body_class.'" />';
  
?>

<!--facebook social-->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/jv_ID/all.js#xfbml=1&appId=362365973793626";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!--end facebook-social-->

	<!-- wrapper -->
	<div class="rapidxwpr floatholder">

		<!-- header -->
		<div id="header">
		<img id="logo-kor" src="<?php echo url::file_loc('img'); ?>media/img/LOGO.png" />
		<!-- mainmenu -->
				<div id="mainmenu" class="clearingfix">
					<ul>
						<?php nav::main_tabs($this_page); ?>
					</ul>
					
					<?php if ($allow_feed == 1) { ?>
					<div style="float:right;"><a href="<?php echo url::site(); ?>feed/"><img src="<?php echo url::file_loc('img'); ?>media/img/icon-feed.png" style="vertical-align: middle;" border="0"></a></div>
					<?php } ?>
					
				</div>
				<!-- / mainmenu -->

			<!-- searchbox -->
			<div id="searchbox">
				
				<!-- user actions -->
				<div id="loggedin_user_action" class="clearingfix">
					<?php /* if($loggedin_username != FALSE){ ?>
						<a href="<?php echo url::site().$loggedin_role;?>"><?php echo $loggedin_username; ?></a> [<a href="<?php echo url::site();?>logout/front"><?php echo Kohana::lang('ui_admin.logout');?></a>]
					<?php } else { ?>
						<a href="<?php echo url::site()."members/";?>"><?php echo Kohana::lang('ui_main.login'); ?></a>
					<?php } */?>
				</div><br/>
				<!-- / user actions -->
				
				<!-- languages -->
				<?php /*echo $languages;*/ ?>
				<!-- / languages -->

				<!-- searchform -->
				<?php echo $search; ?>
				<!-- / searchform -->

			</div>
			<!-- / searchbox -->
			
			<!-- logo -->
			<?php /* if($banner == NULL){ ?>
			<div id="logo">
				<h1><a href="<?php echo url::site();?>"><?php echo $site_name; ?></a></h1>
				<span><?php echo $site_tagline; ?></span>
			</div>
			<?php }else{ ?>
			<a href="<?php echo url::site();?>"><img src="<?php echo $banner; ?>" alt="<?php echo $site_name; ?>" /></a>
			<?php } */?>
			<!-- / logo -->
			
			<!-- submit incident -->
			<?php /* echo $submit_btn;*/ ?>
			<!-- / submit incident -->
			
		</div>
		<!-- / header -->

		<!-- main body -->
		<div id="middle">
			<div class="background layoutleft">

		
