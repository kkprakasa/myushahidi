	<div id="mainmiddle" class="floatbox withright">


		<!-- mainmenu -->
		<div id="mainmenu" class="clearingfix">
		
			<ul>
				
					<li id="sitemsg">
						Sebarang aduan berkenaan pilihanraya boleh dibuat melalui salah satu cara berikut: 
					</li>
								
				<?php //nav::main_tabs($this_page); ?>
				<li>Sms aduan <span>019-1234567</span></li>
				<li>Hantar tweet <span>#jom_pantau</span></li>
				<li>E-mail aduan <span>pru13@komas.org</span></li>

				<li>Isi borang aduan <span><a href="http://www.pru13.info/ushahidi/reports/submit" class="iba">Klik sini</a></span></li>
			</ul>		

		
		</div>
				<!-- / mainmenu -->
	<div id="content">
		<div class="content-bg">
			<!-- start block -->
			<div class="big-block">
				<h5><?php echo Kohana::lang('ui_admin.feeds').': '.$pagination_stats; ?></h5>
				<div class="report_rowtitle">
					<div class="report_col2">
						<strong><?php echo Kohana::lang('feeds.title');?></strong>
					</div>
					<div class="report_col3">
						<strong><?php echo Kohana::lang('feeds.date');?></strong>
					</div>
					<div class="report_col4">
						<strong><?php echo Kohana::lang('feeds.source');?></strong>
					</div>
				</div>
				<?php
					foreach ($feeds as $feed)
					{
						$feed_id = $feed->id;
						$feed_title = text::limit_chars($feed->item_title, 40, '...', True);
						$feed_link = $feed->item_link;
						$feed_date = date('M j Y', strtotime($feed->item_date));
						$feed_source = text::limit_chars($feed->feed->feed_name, 15, "...");
									
						print "<div class=\"report_row1\">";
						print "		<div class=\"report_details report_col2\">";
						print "			<a href=\"$feed_link\">" . $feed_title . "</a>";
						print "		</div>";
						print "		<div class=\"report_date report_col3\">";
						print $feed_date;
						print "		</div>";
						print "		<div class=\"report_location report_col4\">";
						print $feed_source;
						print "		</div>";
						print "</div>";
					}
				?>
				<?php echo $pagination; ?>
			</div>
			<!-- end block -->
		</div>
	</div>
</div>