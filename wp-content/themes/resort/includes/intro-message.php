<?php 
$settings = array(
				'homepage_intro_message_heading' => '',
				'homepage_intro_message_content' => '',
				'homepage_intro_message_button_label' => '',
				'homepage_intro_message_button_url' => ''
			);
					
$settings = woo_get_dynamic_values( $settings );
?>
<?php if ( '' != $settings['homepage_intro_message_heading'] ) { ?>

<section id="intro-message" >
	<div class="col-full">
		<div class="get-quote">
			<p></p>
			<h2><?php echo $settings['homepage_intro_message_heading']; ?></h2>
			</div>
			<table id="intro-pricing">
			  <tr>
			    <th>Guests</th>
			    <th>3 days</th>
			    <th>4 days</th>
			    <th>5 days</th>
			    <th>6 days</th>
			    <th>7 days</th>
			  </tr>
			  <tr>
			    <td>1</td>
			    <td colspan="5">Solo travelers please contact us for best pricing and options.</td>
			  </tr>
			  <tr>
			    <td>2</td>
			    <td>$450</td>
			    <td>$550</td>
			    <td>$630</td>
			    <td>$710</td>
			    <td>$790</td>
			  </tr>
			  <tr>
			    <td>3 - 4</td>
			    <td>$400</td>
			    <td>$500</td>
			    <td>$580</td>
			    <td>$660</td>
			    <td>$740</td>
			  </tr>
			  <tr>
			    <td>4+</td>
			    <td colspan="5">Larger groups, please contact us for best pricing and options.</td>
			  </tr>
			</table>
			<p><i>* Pricing in $USD. Exclusive offer only available through direct booking.</i></p>
			<p><?php echo $settings['homepage_intro_message_content']; ?></p>

			<a class="button" href="<?php echo $settings['homepage_intro_message_button_url']; ?>"><?php echo $settings['homepage_intro_message_button_label']; ?></a>
			
		
	</div>
</section><!--/#intro-message-->
<?php } ?>