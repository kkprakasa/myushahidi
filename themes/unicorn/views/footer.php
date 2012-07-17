			</div>
		</div>
		<!-- / main body -->

	</div>
	<!-- / wrapper -->
	
	<!-- footer -->
	<div id="footer" class="clearingfix">
 
		<div id="underfooter"></div>
				
		<!-- footer content -->
		<div class="rapidxwpr floatholder">
 
			<!-- footer credits -->
			<div class="footer-credits">
				<div class="ushahidi-credits">Powered by the &nbsp;<a href="http://www.ushahidi.com/"><img src="<?php echo url::file_loc('img'); ?>media/img/footer-logo.png" alt="Ushahidi" style="vertical-align:middle" /></a>&nbsp; Platform</div>
			</div>
			<!-- / footer credits -->
		

      
		

 
		</div>
		<!-- / footer content -->
 
	</div>
	<!-- / footer -->
 
	<?php echo $ushahidi_stats; ?>
	<?php echo $google_analytics; ?>
	<?php echo $cdn_gradual_upgrade; ?>
	
	<!-- Task Scheduler --><script type="text/javascript">$(document).ready(function(){$('#schedulerholder').html('<img src="<?php echo url::base(); ?>scheduler" />');});</script><div id="schedulerholder"></div><!-- End Task Scheduler -->
 
	<?php
	// Action::main_footer - Add items before the </body> tag
	Event::run('ushahidi_action.main_footer');
	?>
</body>
</html>
