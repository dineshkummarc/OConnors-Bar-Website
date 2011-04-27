<h2><?php echo $page['Page']['title']; ?></h2>

<?php echo $page['Page']['body']; ?>

<iframe class='google_map' width="642" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=O'Connors+Bar,+5-7+Ann+St,+Ballycastle,+BT54+6AA,+United+Kingdom&amp;sll=53.800651,-4.064941&amp;sspn=14.745606,39.506836&amp;ie=UTF8&amp;hq=O'Connors+Bar,&amp;hnear=7+Ann+St,+Ballycastle,+Moyle+BT54+6,+United+Kingdom&amp;ll=55.202925,-6.249011&amp;spn=0.004286,0.013776&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe>

<p><a href="http://www.google.co.uk/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=O'Connors+Bar,+5-7+Ann+St,+Ballycastle,+BT54+6AA,+United+Kingdom&amp;sll=53.800651,-4.064941&amp;sspn=14.745606,39.506836&amp;ie=UTF8&amp;hq=O'Connors+Bar,&amp;hnear=7+Ann+St,+Ballycastle,+Moyle+BT54+6,+United+Kingdom&amp;ll=55.202925,-6.249011&amp;spn=0.004286,0.013776&amp;z=16&amp;iwloc=A">View Larger Map</a></p>

<div class='separator'></div>

<!-- open links_container -->
<div class='links_container'>
	<h3>Links</h3>
	
	<ul class='links'>
	<?php 
		echo "<li>" . $this->Html->link('Paintball Madness, Ballycastle ( www.paintball-madness.co.uk )', 'http://paintball-madness.co.uk', array('target' => '_blank')) . "</li>";
		echo "<li>" . $this->Html->link('Ballycastle United Football Club ( www.ballycastleunited.com )', 'http://ballycastleunited.com', array('target' => '_blank')) . "</li>";		
	?>
	</ul>
</div><!-- links_container -->