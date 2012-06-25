<?php
/*
Template Name: Donate
*/
?>

<?php get_header(); ?>
	<body>
	
	<?php get_template_part('logo')?>	
	
	
	<div id="content">
			
			<article class="article">
				<header>
					<h2><?php the_title(); ?></h2>
				</header>
				<p>To support the work of mySociety, you can make a donation to UK Citizens Online Democracy, mySociety’s parent charity (registered number 1076346).If you love mySociety and its sites with such unbridled passion that you don’t need any actual persuading to donate, then please just go ahead and let rip (fill in the form below).</p>
				<div class='donation'>
				<h3 >Set up a regular monthly payment via PayPal</h3>
				<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_xclick-subscriptions">
						<input type="hidden" name="business" value="finance@mysociety.org">
						<input type="hidden" name="item_name" value="Monthly Donation to mySociety">
						<input type="hidden" name="no_shipping" value="1">
						<input type="hidden" name="lc" value="GB">
						<input type="hidden" name="bn" value="PP-SubscriptionsBF">
						<input type="hidden" name="p3" value="1">
						<input type="hidden" name="t3" value="M">
						<input type="hidden" name="src" value="1">
						<input type="hidden" name="sra" value="1">
						<input type="hidden" name="rm" value="1">
						<input type="hidden" name="return" value="https://secure.mysociety.org/donate/thanks">
						<input type="hidden" name="cancel_return" value="https://secure.mysociety.org/donate/cancel">
						<input type="hidden" name="cn" value="Please tell us why you're donating">

						<p><label for="amount_regular">I would like to donate </label> 
						<select name="currency_code">
							<option value="GBP">UK &pound;</option>
							<option value="USD">US Dollar $</option>
							<option value="EUR">Euro &euro;</option>
							<option value="AUD">Australian Dollar</option>
							<option value="CAD">Canadian Dollar</option>
							<option value="CZK">Czech Koruna</option>
							<option value="DKK">Danish Krone</option>
							<option value="HKD">Hong Kong Dollar</option>
							<option value="HUF">Hungarian Forint</option>
							<option value="JPY">Japanese Yen &yen;</option>
							<option value="NOK">Norwegian Krone</option>
							<option value="NZD">New Zealand Dollar</option>
							<option value="PLN">Polish Zloty</option>
							<option value="SEK">Swedish Krona</option>
							<option value="SGD">Singapore Dollar</option>
							<option value="CHF">Swiss Franc</option>
							<option value="THB">Thai Baht</option>
						</select>

						<input id="amount_regular" name="a3" size="10" value="5">
						once a month, starting tomorrow, until I cancel the payments.</p>

						<input type="hidden" name="on0" value="Donation with Gift Aid">
						<p>I want all donations I make to UK Citizens Online
						Democracy from this date until further notice to be
						Gift Aid donations:<br>
						<input type="radio" id="giftaid_yes_s" name="os0" value="Yes">
						<label for="giftaid_yes_s">Yes</label>
						<input type="radio" id="giftaid_no_s" name="os0" value="No" checked>
						<label for="giftaid_no_s">No</label>
						(<a href="#giftaid">?</a>)</p>

						<p>
						<input class="btn" type="submit" value="Donate"></p>
					</form>
			</div>
			<div class='donation'>
					<h3 class="d">Make a one off donation via PayPal</h3>
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
						<input type="hidden" name="cmd" value="_xclick">
						<input type="hidden" name="business" value="finance@mysociety.org">
						<input type="hidden" name="item_name" value="Donation to mySociety">
						<input type="hidden" name="no_shipping" value="2">
						<input type="hidden" name="tax" value="0">
						<input type="hidden" name="lc" value="GB">

						<input type="hidden" name="bn" value="PP-DonationsBF">
						<input type="hidden" name="rm" value="1">
						<input type="hidden" name="return" value="https://secure.mysociety.org/donate/thanks">
						<input type="hidden" name="cancel_return" value="https://secure.mysociety.org/donate/cancel">
						<input type="hidden" name="cn" value="Please tell us why you're donating">

						<p><label for="amount_donate">I would like to donate </label> 
						<select id="currency" name="currency_code">
						<option value="GBP">UK &pound;</option>
						<option value="USD">US Dollar $</option>
						<option value="EUR">Euro &euro;</option>
						<option value="AUD">Australian Dollar</option>

						<option value="CAD">Canadian Dollar</option>
						<option value="CZK">Czech Koruna</option>
						<option value="DKK">Danish Krone</option>
						<option value="HKD">Hong Kong Dollar</option>
						<option value="HUF">Hungarian Forint</option>
						<option value="JPY">Japanese Yen &yen;</option>
						<option value="NOK">Norwegian Krone</option>
						<option value="NZD">New Zealand Dollar</option>
						<option value="PLN">Polish Zloty</option>

						<option value="SEK">Swedish Krona</option>
						<option value="CHF">Swiss Franc</option>
						<option value="SGD">Singapore Dollar</option>
						<option value="THB">Thai Baht</option>
						</select>
						<input id="amount_donate" name="amount" size="10" value="30">
						</p>

						<input type="hidden" name="on0" value="Donation with Gift Aid">
						<p>I want all donations I make to UK Citizens Online Democracy from this date until further notice to be Gift Aid donations:<br>
						<input type="radio" id="giftaid_yes" name="os0" value="Yes">
						<label for="giftaid_yes">Yes</label>

						<input type="radio" id="giftaid_no" name="os0" value="No" checked>
						<label for="giftaid_no">No</label>
						(<a href="#giftaid">?</a>)</p>

						<p>
						<input class="btn" type="submit" value="Donate"></p>
					</form>
				</div>
			</article>
			
			<article class='article'>
				<h3 class="d"><a name="giftaid" id="giftaid"></a>Are you from the UK? Gift Aid it!</h3>
				<p>
				To increase the value your donations at no extra cost to yourself,
				if you are a UK tax payer, please select the appropriate option.
				You must pay an amount of Income
				Tax and/or Capital Gains Tax at least equal to the tax that we'll
				reclaim on your donations (currently 25p for each &pound;1 you give).
				</p>
			</article>
			
				
			<article class="article">
				<?php if (have_posts()) : while (have_posts()) : the_post() ?>
						<?php the_content();?>
				<?php endwhile; endif;?>
			</article>
	</div>
	
<?php get_footer(); ?>
	</body>
</html>