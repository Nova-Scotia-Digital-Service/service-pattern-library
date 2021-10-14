<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8"><!--Meta data is page specific and should be assess and adjusted on a per page basis.-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortlink" href="https://beta.novascotia.ca/">
	
	<title>Phone number - Forms & Services Building Blocks - Government of Nova Scotia</title>
	
	<?php include "includes/css-styles.php" ?>
</head>

<body>
<div class="Site js-enabled" id="container">
<!-- -------------------------------------------------- START Skip Link --------------------------------------------------- -->
<?php include "includes/skip-link.php" ?>
<!-- -------------------------------------------------- END Skip Link  --------------------------------------------------- -->

<!-- -------------------------------------------------- START HEADER --------------------------------------------------- -->

<?php include 'includes/header.php' ?>

<!-- -------------------------------------------------- END HEADER --------------------------------------------------- -->
<!-- START Alpha Phase Banner -->
<?php include 'includes/alpha-banner.php' ?>
<!-- END Alpha Phase Banner -->


<!-- START Primary NAV -->
<div id="nav-placeholder4">
</div>
<script>
$(function(){
  $("#nav-placeholder4").load("primary-nav.html");
});
</script>
<!-- End Primary NAV -->

<!--A basic page has a primary content area and an optional column for secondary information like related content.-->
<div class="container Site-content">
	<main id="main"><!-- SEMANTIC MAIN TAG TO INDICATE PAGE CONTENT-->
		<article><!-- SEMANTIC ARTICLE TAG TO GROUP RELATED CONTENT-->
			<form name="parameters" method="GET" target="_parent">
				<div class="row">
					<div class="col-sm-3 col-xs-12 order-last order-sm-first">
						<div id="nav-placeholder1">
						</div>
						<script>
						$(function(){
						  $("#nav-placeholder1").load("nav-patterns.html");
						});
						</script>
					</div>
					<div class="col-sm-9 col-xs-12">
						<h1>Phone number</h1><!-- SEMANTIC H1 TAG TO RELAY PAGE TITLE ONLY 1 PER PAGE-->
						   
						<h2>When to use this pattern</h2>

						<p>Only collect a phone number from a user if you'll need to contact them by phone about the service. Not everyone using an online service may have a phone number, so include another way of contacting them like mail or email. </p>

						<h2>How it works</h2>

						<p>When asking for a phone number:</p>

						<ul>
							<li>
								<strong>Tell them why you are collecting their phone number</strong>
								<p>Example: “You may be contacted by phone if more information about your application is needed.”</p>
							</li>

							<li>
								<strong>If you’re asking for a phone number to send an SMS message, include that in your helper text.</strong>
								<p> Example: Enter a phone number that can receive text messages.</p>
							</li>
							
							<li>
								<strong>Allow people to enter the phone number in any format</strong>
								<p> allow for extra spaces, dashes, periods, and brackets.</p>
							</li>

							<li>
								<strong>Use one field</strong> 
								<p>Don’t split phone numbers into 3 fields</p>
							</li>
							
							<li>
								<strong>If a specific number format is required, include that in the Helper Text of the phone number field.</strong>
								<p>Example, “Enter a 10-digit phone number”</p>
							</li>

							<li>
								<strong>Provide direction for international numbers in the helper text.</strong>
								<p>Example, “For international numbers, include the country code”</p>
							</li>
						</ul>

						<section class="row">
              <div class="col-md-12 col-xs-12">
                  <h2>Phone number example</h2>

                  <?php include "phone/phone-number-tabs.php" ?>

              </div>
          	</section><!--/row-->
						
						
						<h3 id="error-messages">Error messages</h3>
						<p>Error messages should be styled like this:</p>
						
						<section class="row">
							<div class="col-md-12 col-xs-12">
								<div class="exampleDisplay">
									<?php include "phone/phone-number-error-tabs.php" ?> 		
								</div>
							</div>
							
						</section><!--/row-->	
						<p>Make sure errors follow the guidance in <a href="error-message.html">error message</a> and have specific error messages for specific error states.</p>	
		
						
						<h3>Use the autocomplete attribute on a phone number field</h3>

						<p>Use the <code>autocomplete</code> attribute on a phone number field when you’re asking for a user's own phone number. This lets browsers autofill the information on a user’s behalf if they’ve entered it previously.</p>

						<p>To do this, set the <code>autocomplete</code> attribute to <code>phone-number</code> as shown in the HTML tabs in the example above.</p>

						<p>If you are working in production you’ll need to do this to meet <a href="https://www.w3.org/WAI/WCAG21/Understanding/identify-input-purpose.html">WCAG 2.1 Level AA</a>.</p>

						<p>You will not normally need to use the <code>autocomplete</code> attribute in prototypes, as users will not generally be using their own devices.</p>					
						
					</div><!-- /col-xs-8 -->
				</div><!--/row-->
			</form>
		</article>
	</main>
</div><!-- /container -->

<!-- START FOOTER -->
	<footer id="footer" class="footer" role="contentinfo">
		<div class="container">

		</div>
	</footer>
<!-- END FOOTER -->
</div>

</body>
</html>