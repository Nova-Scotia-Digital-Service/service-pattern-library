<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"><!--Meta data is page specific and should be assess and adjusted on a per page basis.-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortlink" href="https://beta.novascotia.ca/">
        
        <title>Getting started - Service Pattern Library - Government of Nova Scotia</title>
        
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"><!-- Should be included in all head tags -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script><!-- Should be included in all head tags -->    
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script><!-- Should be included in all head tags -->    
            <script src="https://code.jquery.com/jquery-1.10.2.js"></script><!-- Not needed for service design, loads the navigation for this site -->  
            <link rel="stylesheet" media="all" href="https://novascotia.ca/clf/fonts/font-awesome/css/font-awesome.min.css"><!-- Should be included in all head tags -->    
            <link rel="stylesheet" media="all" href="css/saltire.css"> <!-- Should be included in all head tags -->
            <link rel="stylesheet" media="all" href="css/supplimentary-page-styles.css"><!-- Should be included in all head tags -->
            <link rel="stylesheet" media="all" href="css/global-form-styles.css"><!-- Should be included in all head tags -->
            <link rel="stylesheet" media="all" href="css/radio-button.css"><!-- Include this only if needed -->
            <link rel="stylesheet" media="all" href="css/toggle.css"><!-- Include this only if needed -->
            <link rel="stylesheet" media="all" href="css/checkboxes.css"><!-- Include this only if needed -->
            <link rel="stylesheet" media="all" href="css/slider.css"><!-- Include this only if needed -->
            <link rel="stylesheet" media="all" href="css/input-field-group.css"><!-- Include this only if needed -->
            <link rel="stylesheet" media="all" href="css/select.css"><!-- Include this only if needed -->
            <link rel="stylesheet" media="all" href="css/buttons.css"><!-- Include this only if needed -->
            <link rel="stylesheet" media="all" href="css/phase-banner.css"><!-- Include this only if needed -->
        <!--[if lte IE 8]>
        <script src="/core/assets/vendor/html5shiv/html5shiv.min.js?v=3.7.3"></script>
        <![endif]-->
    </head>
    <body>
        <div class="Site" id="container">
            <!-- -------------------------------------------------- START Skip Link --------------------------------------------------- -->
            <nav class="skip-links" aria-label="Skip to main content">
                <a href="#main" class="skip-to-link">Skip to main content</a>
            </nav>
            <!-- -------------------------------------------------- END Skip Link  --------------------------------------------------- -->
            <!-- -------------------------------------------------- START HEADER --------------------------------------------------- -->
            <?php include 'includes/header.php'; ?>

            <!-- START Alpha Phase Banner -->
            <?php include 'includes/alpha-banner.php'; ?>
            <!-- END Alpha Phase Banner -->

            <!-- START Primary NAV -->
            <?php include 'includes/primary-nav.php'; ?>
            <!-- End Primary NAV -->
        
            <!-- -------------------------------------------------- END HEADER --------------------------------------------------- -->

            <!--A basic page has a primary content area and an optional column for secondary information like related content.-->
            <div class="container Site-content">
                <main id="main"><!-- SEMANTIC MAIN TAG TO INDICATE PAGE CONTENT-->
                    <article><!-- SEMANTIC ARTICLE TAG TO GROUP RELATED CONTENT-->
                        <form name="parameters" method="GET" target="_parent">
                            <div class="row mb-4">
                                <div class="col-sm-3 col-xs-12 order-last order-sm-first">
                                    <div id="nav-placeholder1">
                                    </div>
                                    <script>
                                    $(function(){
                                      $("#nav-placeholder1").load("nav-components.html");
                                    });
                                    </script>

                                    <div id="nav-placeholder2">
                                    </div>
                                    <script>
                                    $(function(){
                                      $("#nav-placeholder2").load("nav-patterns.html");
                                    });
                                    </script>
                                    
                                    <div id="nav-placeholder3">
                                    </div>
                                    <script>
                                    $(function(){
                                      $("#nav-placeholder3").load("nav-templates.html");
                                    });
                                    </script>
                                </div>
                                <div class="col-sm-9 col-xs-12">
                                    <h1>Service Pattern Library</h1><!-- SEMANTIC H1 TAG TO RELAY PAGE TITLE ONLY 1 PER PAGE-->
                                    <div id="summary">This is a supplementary library of styles, patterns, components and templates used to create services within the <a href="https://cns.pages.novascotia.ca/patternlab/">Government of Nova Scotia UI Pattern Library</a>.</div>
                                    <h2 id="prototyping">Prototyping</h2>
                                    <P>Creating a human centered service doesn't start with building a prototype. Base your prototype on meeting the needs of the people who will use the service. Ground your understanding of needs in user research with people. Use insights learned from that research to inform decision making and priorities for your service. Continue to test your ideas and prototypes with the users of your service as you work.</p> 
                                    <h3 id="prototype-tool-kit">Prototyping tool kits</h3>
                                    <p>Once your research is complete, download one of the service design prototyping tool kits.</p>
                                    
                                    <div class="row" class="features stories" lang="en">
                                        <div class="feature col-xs-12 col-sm-6" lang="en">
                                            <a class="feature-link" aria-describedby="feature-summary-XD-tool-kit" href="#XD tool kit" title="XD tool kit - Service Pattern Library">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 170" class="feature-photo" role="img" title="XD tool kit - Service Pattern Library" aria-labelledby="title-XD-tool-kit">
                                                    <title id="title-XD tool kit">Adobe XD tool kit - Service Pattern Library</title>
                                                    <image xlink:href="https://via.placeholder.com/300x150.png"  width="100%" height="100%"></image>
                                                </svg>
                                                <strong class="feature-headline">Adobe XD tool kit (not ready yet)</strong>
                                            </a>
                                            <p id="feature-summary-XD-tool-kit" class="feature-summary">The Adobe XD tool kit includes animations, effects, transitions, cloud storage and supports co-worker collaboration. You need the latest version of Adobe XD to use the full-featured prototyping package.</p>
                                        </div>
                                        <div class="feature col-xs-12 col-sm-6" lang="en">
                                            <a class="feature-link" aria-describedby="feature-summary-Basic-tool-kit" href="#Basic-tool-kit" title="Basic tool kit - Service Pattern Library">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 170" class="feature-photo" role="img" title="Basic tool kit - Service Pattern Library" aria-labelledby="title-Basic-tool-kit">
                                                    <title id="title-Basic-tool-kit">Basic tool kit - Service Pattern Library</title>
                                                    <image xlink:href="https://via.placeholder.com/300x150.png" width="100%" height="100%"></image>
                                                </svg>
                                                <strong class="feature-headline">Basic tool kit(not ready yet)</strong>
                                            </a>
                                            <p id="feature-summary-Basic tool kit" class="feature-summary">If you don't have XD, download the basic prototyping package. The basic tool kit contains PDFs and JPGs to use with whichever software you have on hand.</p>
                                        </div>
                                    </div>
                                    <h2 id="building-service-frontend">Building a service frontend</h2>
                                    <p>The Service Design and Delivery team created this site to help build easy-to-use, accessible, privacy-minded services.</p>
                                    <p>The Service Pattern Library contains user-tested styles, components, patterns and templates. Starting your prototypes and front-end designs with these elements will help deliver a consistent experience across government services.</p>
                                    
                                    <div class="row" class="features stories" lang="en">
                                        <div class="feature col-xs-12 col-sm-6" lang="en">
                                            <a class="feature-link" aria-describedby="feature-summary-Styles" href="https://cns.pages.novascotia.ca/patternlab/" title="Government of Nova Scotia UI Pattern Library">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 170" class="feature-photo" role="img" title="Government of Nova Scotia UI Pattern Library" aria-labelledby="title-Styles">
                                                    <title id="title-Styles">Government of Nova Scotia UI Pattern Library</title>
                                                    <image xlink:href="https://via.placeholder.com/300x150.png"  width="100%" height="100%"></image>
                                                </svg>
                                                <strong class="feature-headline">Government of Nova Scotia UI Pattern Library</strong>
                                            </a>
                                            <p id="feature-summary-Styles" class="feature-summary">Make your service look and feel like novascotia.ca. The <a href="https://cns.pages.novascotia.ca/patternlab/">Government of Nova Scotia UI Pattern Library</a> creates consistency between all types of government user interfaces. Use the Service Design Library (on this page) to create provincial services that work with, and build upon, the GNS UI patterns.</p>
                                        </div>
                                        <div class="feature col-xs-12 col-sm-6" lang="en">
                                            <a class="feature-link" aria-describedby="feature-summary-Components" href="component-overview.html" title="Components - Service Pattern Library">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 170" class="feature-photo" role="img" title="Components - Service Pattern Library" aria-labelledby="title-Components">
                                                    <title id="title-Components">Components - Service Pattern Library</title>
                                                    <image xlink:href="https://via.placeholder.com/300x150.png" width="100%" height="100%"></image>
                                                </svg>
                                                <strong class="feature-headline">Components</strong>
                                            </a>
                                            <p id="feature-summary-Components" class="feature-summary">Components are reusable parts of the user interface made to support a variety of applications.</p>
                                        </div>
                                        <div class="feature col-xs-12 col-sm-6" lang="en">
                                            <a class="feature-link" aria-describedby="feature-summary-patterns" href="pattern-overview.html" title="Patterns - Service Pattern Library">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 170" class="feature-photo" role="img" title="patterns - Service Pattern Library" aria-labelledby="title-patterns">
                                                    <title id="title-patterns">Patterns - Service Pattern Library</title>
                                                    <image xlink:href="https://via.placeholder.com/300x150.png"  width="100%" height="100%"></image>
                                                </svg>
                                                <strong class="feature-headline">Patterns</strong>
                                            </a>
                                            <p id="feature-summary-patterns" class="feature-summary">Patterns are best practice design solutions for specific user-focused tasks.</p>
                                        </div>
                                        <div class="feature col-xs-12 col-sm-6" lang="en">
                                            <a class="feature-link" aria-describedby="feature-summary-templates" href="template-overview.html" title="Templates - Service Pattern Library">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 256 170" class="feature-photo" role="img" title="Templates - Service Pattern Library" aria-labelledby="title-templates">
                                                    <title id="title-templates">Templates - Service Pattern Library</title>
                                                    <image xlink:href="https://via.placeholder.com/300x150.png" width="100%" height="100%"></image>
                                                </svg>
                                                <strong class="feature-headline">Templates</strong>
                                            </a>
                                            <p id="feature-summary-templates" class="feature-summary">Create a consistent experience for users across services by starting with common page templates.</p>
                                        </div>
                                    </div>
<!--                                    <h3 id="styles">Styles</h3>
                                    <p>Make your service look and feel like novascotia.ca</p>
                                    <p>If you are using the <a href="https://cns.pages.novascotia.ca/patternlab/">Saltire frameswork</a> and have included the <a href="#">Service Design components (not ready yet)</a> in your build, the coded examples provided will render as they appear inside the Service Pattern Library.</p>
                                    <p>If you need to apply styles manually, you should still follow existing novascotia.ca conventions. Don't, for example, assign new meanings to colours, change the style of buttons or adjust the thickness of borders on form fields.</p>
                                    <h3 id="components">Components</h3>
                                    <p>Components are reusable parts of the user interface made to support a variety of applications.</p>
                                    <p>Individual components appear in multiple different patterns and contexts. Use the text field component, for example, to ask for an email address, a file number, or someone’s name.</p>
                                    <h3 id="patterns">Patterns</h3>
                                    <p>Patterns are best practice design solutions for specific user-focused tasks.</p>
                                    <p>Written guidance supports all the patterns in this section and contains coded examples where possible. Patterns use one or more components and written guidance explains how to adapt the components to the context.</p>
                                    <h3 id="templates">Templates</h3>
                                    <p>Create a consistent experience for users across services by starting with common page templates.</p>
                                    <p>Page templates contain examples of components and patterns adapted for specific uses. The team continues to observe people using these templates on multiple services and make adjustments based on user feedback.</p> -->
                                    
                                </div><!-- /col-xs-8 -->
                            </div><!-- /row -->
                            
                            <div class="row">
                                

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
