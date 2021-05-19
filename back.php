<!DOCTYPE html>
<html lang="en"><!--language declaration should change depending on the language of the page.-->
<head>
    <meta charset="utf-8"><!--Meta data is page specific and should be assess and adjusted on a per page basis.-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortlink" href="https://beta.novascotia.ca/">
    
    <title>Compnent Overview - Service Pattern Library - Government of Nova Scotia</title>
        
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><!-- Should be included in all head tags -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script><!-- Should be included in all head tags -->    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script><!-- Should be included in all head tags -->    
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script><!-- Not needed for service design, loads the navigation for this site -->  
    <link rel="stylesheet" media="all" href="https://novascotia.ca/clf/fonts/font-awesome/css/font-awesome.min.css">        
    <link rel="stylesheet" media="all" href="css/saltire.css">
    <link rel="stylesheet" media="all" href="css/supplimentary-page-styles.css">
    <link rel="stylesheet" media="all" href="css/global-form-styles.css">
    <link rel="stylesheet" media="all" href="css/phase-banner.css"><!-- Include this only if needed -->
    <!--[if lte IE 8]>
    <script src="/core/assets/vendor/html5shiv/html5shiv.min.js?v=3.7.3"></script>
    <![endif]-->

</head>

<body>
<div class="Site js-enabled" id="container">
<!-- -------------------------------------------------- START Skip Link --------------------------------------------------- -->
<nav class="skip-links" aria-label="Skip to main content">
    <a href="#main" class="skip-to-link">Skip to main content</a>
</nav>
<!-- -------------------------------------------------- END Skip Link  --------------------------------------------------- -->

<!-- -------------------------------------------------- START HEADER --------------------------------------------------- -->

<?php include 'includes/header.php' ?>

<!-- -------------------------------------------------- END HEADER --------------------------------------------------- -->
<!-- START Alpha Phase Banner -->
<div class="ns-phase-banner">
    <div class="container">
        <div class="row">
            <div class="col">
              <p class="ns-phase-banner__content">
                <strong class="ns-tag ns-phase-banner__content__tag">
                  Alpha
                </strong>
                <span class="ns-phase-banner__text">
                    This is a new service that we're still developing. Try the service and <a href="https://github.com/connorscarolyns/service-pattern-library/issues">send us your comments and suggestions</a>. Your feedback will help make the service easier to use for everyone.
                </span>
              </p>
            </div>
        </div>
    </div>
</div>
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
                <div class="row">
                    <div class="col-sm-3 col-xs-12 order-last order-sm-first">
                        <div id="nav-placeholder1">
                        </div>
                        <script>
                        $(function(){
                          $("#nav-placeholder1").load("nav-components.html");
                        });
                        </script>
                    </div>
                    <div class="col-sm-9 col-xs-12"><!-- Bootstrap column grid should not be set to more than 8-col for main content column -->
                        <h1>Back link</h1><!-- SEMANTIC H1 TAG TO RELAY PAGE TITLE ONLY 1 PER PAGE-->
                        <p>Use the back link component to help users go back to the previous page in a multi-page transaction.</p>
                        <h2 id="when-to-use-this-component">When to use this component</h2>
                        <p>Always include the back link component on <a href="basic-page.html">question pages</a>.</p>
                        <p>You can include a back link on other pages within a multi-page transaction, if it makes sense to do so.</p>
                        <h2 id="when-not-to-use-this-component">When not to use this component</h2>
                        <p>Never use the back link component together with breadcrumbs. The back link is enough in most cases. If research shows breadcrumbs are more helpful in your service then use breadcrumbs without the back link.</p>
                        <h2 id="how-it-works">How it works</h2>
                        <p>Always place back links at the top left of a page, before the <code>&lt;main&gt;</code> element.</p>
                        <p>Make sure the link takes users to the previous page they were on, in the state they last saw it. Where possible, ensure it works even when JavaScript is not available.</p>
                        <p>If this is not possible, you should hide the back link when JavaScript is not available. </p>
                        <section class="row">
                            <div class="col-md-12 col-xs-12">
                                <h2>Back link example</h2>
                                <div class="exampleDisplay">
                                    <?php
                                        $files = array();
                                        $handle=opendir('back');
                                            while (false !== ($file = readdir($handle))):
                            if(substr($file, -5) == '.html'):
                                $files[] = $file;
                            endif;
                        endwhile;
                        sort($files);
                            echo '<div class="pattern">';
                            echo '<div class="display">';
                            include('back/back.html');
                            echo '</div>';
                            echo '<div class="source">';
                            echo '<textarea rows="6" cols="15">';
                            echo htmlspecialchars(file_get_contents('back/back.html'));
                            echo '</textarea>';
                            echo '<p><a href="back/back.html"></a></p>';
                            echo '</div>';
                            echo '</div>';
                        ?>
                                 </div>
                            </div><!-- / example col -->
                        </section><!--/row-->
                        
                        <h2 id="how-it-works">Back to start</h2>
                            <p>Include a back to start button on the confirmation page. Research has shown that some users like to have a closing action after they have completed thier transaction. It signals to them there that there is nothing left for them to do and it's safe for them to close the page. It should be placed at the bottom of the <a href="panel.html"> confirmation panel</a>.</p>
                            
                            <section class="row">
                                <div class="col-md-12 col-xs-12">
                                    <h2>Back to start example</h2>
                                    <div class="exampleDisplay">
                                     <?php
                                        $files = array();
                                        $handle=opendir('back');
                                            while (false !== ($file = readdir($handle))):
                            if(substr($file, -5) == '.html'):
                                $files[] = $file;
                            endif;
                        endwhile;
                        sort($files);
                            echo '<div class="pattern">';
                            echo '<div class="display">';
                            include('back/back-to-start.html');
                            echo '</div>';
                            echo '<div class="source">';
                            echo '<textarea rows="6" cols="15">';
                            echo htmlspecialchars(file_get_contents('back/back-to-start.html'));
                            echo '</textarea>';
                            echo '<p><a href="back/back-to-start.html"></a></p>';
                            echo '</div>';
                            echo '</div>';
                        ?>   
                                    </div>
                                </div><!-- / example col -->
                            </section><!--/row-->
                        </div>
                    </div>
                </article>
            </main>
        </div> <!-- / container -->
<!-- START FOOTER -->
    <?php include 'includes/footer.php'; ?>
<!-- END FOOTER -->
</div>

</body>
</html>        
             
                