<html>
<head>
	<style type='text/css'>
		body { background: #0d0d0d; color: #eeeeee; font-family: Arial, sans-serif; font-size: 13px; line-height: 18px; }
	
		a { text-decoration: none; cursor: pointer; color: #f5c11c; }
		a:hover { text-decoration: underline !important; }
	</style>
</head>

<body>
	<!-- wrapper table -->
	<table cellpadding='0' cellspacing='0' border='0' style='width:100%; border-collapse:collapse;'>
		<tr>
			<td style='background-color:#0d0d0d;'>
			
				<!-- content table -->
				<table cellpadding='0' cellspacing='0' width='550' bgcolor='#0d0d0d' border='0' align='center' style='background-color:#0d0d0d; width:550px!important; margin:0 auto!important;  text-align:left!important; border-collapse:collapse;'>
					<tr>
						<td width='550' style='width: 550px; margin: 0; padding: 0 0 10px 0;'>
							<a href='http://oconnorsbar.ie' target='_blank'><img src='http://oconnorsbar.ie/img/email/bg_banner_oconnors_bar_email.jpg' alt="O'Connor's Bar Ballycastle" width='550' height='280' border='none' /></a>
						</td>
					</tr>
					
					<tr>
						<td width='550' style='width: 550px; margin: 0; padding: 20px 0 20px 0;'>
							<table cellpadding='0' cellspacing='0' border='0' align='center' width='364' style='border: 3px solid #C9C9C9;' >
								<tr>
									<td width='364' style='width: 364px; margin: 0; padding: 0;'>
										<a href='http://oconnorsbar.ie/events' target='_blank'><img src='http://oconnorsbar.ie/img/email/bg_heading_upcoming_events.jpg' alt="Upcoming Events" width='364' height='24' border='none' /></a>
									</td>
								</tr>
								
							<?php 
								if(!empty($upcomingEvents)): 
									$event_count = 0;

									foreach($upcomingEvents as $event):
										$timestamp = strtotime($event['Event']['start_date']);
										$startDate = date("D j M", $timestamp);
									
										echo "<tr>\n";
										echo "<td>\n";
										
										echo "<p style='color: #dfdfdf !important; font-weight: bold; font-size: 14px !important; line-height: 130% !important; margin: 0 10px 5px 10px; !important;'>" . $startDate . "</p>\n";
										echo "<p style='font-size: 13px !important; line-height: 130% !important; margin: 0 10px 10px 10px; !important;'><a href='http://oconnorsbar.ie/events' target='_blank'>" . htmlentities($event['Event']['title']) . "</a></p>\n";
										
										echo "</td>\n";
										echo "</tr>\n";
										
										$event_count++;
									endforeach;
								endif; 
							?>
							</table>
						</td>
					</tr>
				</table><!-- content table -->
			
			</td>
		</tr>
		
		<tr>
			<td>
				<p style='text-align: center;'>If you do not wish to receive weekly updates from O'Connor's Bar, <a href='http://oconnorsbar.ie/subscribers/unsubscribe'>please click here to unsubscribe</a>.</p>
			</td>
		</tr>
	</table><!-- wrapper table -->
</body>
</html>	