				<div id="partners">
					<ul>
						<li><a class="bersih">BERSIH 2.0</a></li>
						<li><a class="niei" href="http://www.niei.org.my/">NIEI</a></li>
						<li><a class="meonet">MEONET</a></li>
						<li><a href="http://seacem.com" class="seacem">Southeast Asian Centre for e-Media</a></li>
					</ul>
				</div>	
			</div>
		
		</div>
		<!-- / main body -->

	</div>
	<!-- / wrapper -->
	

 
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
