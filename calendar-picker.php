<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"><!--Meta data is page specific and should be assess and adjusted on a per page basis.-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortlink" href="https://beta.novascotia.ca/">

	<title>Calendar picker - Forms & Services Building Blocks - Government of Nova Scotia</title>

	<?php include "includes/css-styles.php" ?>

</head>

<body>
	<div class="Site js-enabled" id="container">
		<!--  START Skip Link  -->
		<?php include "includes/skip-link.php" ?>
		<!-- END Skip Link   -->

		<!-- START HEADER -->
		<?php include 'includes/header.php' ?>
		<!-- END HEADER  -->

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
								<h1>Calendar picker</h1><!-- SEMANTIC H1 TAG TO RELAY PAGE TITLE ONLY 1 PER PAGE-->
								<h2>When to use this component</h2>
								<p>Use a calendar picker when the user needs to know a date’s relation to other days such as the day of the week it falls on or its proximity to today. They are optimal for scheduling tasks.</p>
								<h2>When not to use this component</h2>
								<p>Do not use the calendar picker component when you’re asking users for a date they’ll already know, or can look up without using a calendar. Such as a birthday or a licence expiry. <a href="date-fields.html">Use the date fields pattern instead</a>.</p>
								<h2>How it works</h2>
								<p>Calendar pickers default to showing today’s date and only one month is shown at a time. Calendar pickers allow users to navigate through months and years, however they work best when used for recent or near future dates. If a user needs to input a far distant or future date consider having the calendar default open to a more convenient day.</p>

								<section class="row">
									<div class="col-md-12 col-xs-12">
										<h2>Calendar picker example</h2>
										<?php include "calendar-picker\calendar-picker-tabs.php" ?>
									</div><!-- / example col -->
								</section><!--/row -->

								<section class="row">
									<div class="col-md-12 col-xs-12">
										<h2>Calendar picker with date fields example</h2>
										<?php include "calendar-picker/calendar-picker-date-fields-tabs.php" ?>
									</div>
								</section>

								<section class="row">
									<div class="col-md-12 col-xs-12">
										<h2>Calendar picker with date fields example</h2>
										<?php include "calendar-picker/calendar-picker-date-range-tabs.php" ?>
									</div>
								</section>


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
