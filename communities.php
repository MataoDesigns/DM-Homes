<?php
//Page Includes
$thePage = basename($_SERVER['PHP_SELF']);
include "Scripts/PHP/customFunctions.php";
include "Scripts/PHP/theTitle.php";
?>

<!DOCTYPE html>
<html>

<head>
    <!--Meta Tags-->
    <?php
    include "Scripts/PHP/metaTags.php";
    printf(metaDescription($thePage));
    ?>
    <!--Style Sheets-->
    <link href="CSS/bootstrap.css" rel="stylesheet" />
    <link href="CSS/primary.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif:700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome-4.6.3/css/font-awesome.css">
    <link href="CSS/animate.css" rel="stylesheet" />
    <link href="CSS/Custom.css" rel="stylesheet" />
    <title><?php printf(theTitle($thePage)) ?></title>
</head>

<body id="page-top">
    <!--Header-->
    <div class="container-fluid">
        <div class="row" style="background: #333333">
            <?php include "Scripts/PHP/html/header2.php"; ?>
        </div>
    </div>
    <!--Main Content-->
    <div class="container-fluid" id="mainContent">
        <div class="filler"></div>
        <div class="row text-center" style="margin-top: 200px;">
            <h2>Communities</h2>
            <div class="line2"></div>
            <p style="text-align: left; margin-top: 20px" class="col-md-10 col-md-push-1">
                At DM Homes, we pride ourselves in designing and building beautiful homes that will last for years to come. All
                of the products we use are of the highest quality. The vendors and sub-contractors we use have high standing reputations
                within the construction industry, but that's not enough for us. We are on-site daily to ensure the project is on pace
                and on budget.
            </p>

            <p style="text-align: left" class="col-md-10 col-md-push-1">
                All of the communities we choose to build in are good communities that are close to ammenities, shops, schools and more.
                We also offer multiple models that offer a wide range of features and extras.
            </p>

            <p style="text-align: left" class="col-md-10 col-md-push-1">
                If you are looking to build a home on your own land and not within a community, check out the models we offer in our
                <a href="offSite.php">Off-Site Building</a> section.
            </p>
        </div>

        <div class="row text-center" style="margin-top: 100px;">
            <a href="#mapContainer" class="page-scroll btn btn-lg btn-outline-dark">View Map <span class="fa fa-arrow-circle-down"></span> </a>
        </div>


        <!--The map-->
        <section id="jumboMap">
            <div class="container-fluid">
                <div class="row mapRow" style="background-image: url('Media/Images/map-bg.jpg');">
                    <script src="Scripts/jquery/googleMap2.js"></script>
                    <div class="googleMap" id="mapContainer">
                        <div id="map" style="width: 90%; min-height: 450px; margin: auto "></div>
                        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB6v2Wd5y-XvjiIoJbGrMVzGOVOl92tJx8&callback=initialize"></script>
                        <div class="row text-center">
                            <a style="margin: auto; margin-top: 20px" href="#communityListings" class="page-scroll btn btn-lg btn-outline-light">Community Listings <span class="fa fa-arrow-circle-down"></span> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="communityListings">
            <div class="row text-center" style="margin-top: -150px">
                <h2>Community Listings</h2>
                <div class="line2"></div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <!--Community 4-->
                    <div id="nottinghamListing" class="communityListingContainer">
                        <h3>Saddlebrook</h3>
                        <div class="row" style="height: 300px;">
                            <div class="col-xs-12 col-md-5" style="height: 100%;">
                                <img src="Media/Images/largeLogo.png" class="img-responsive" />
                                <a href="saddlebrook.php" class="listingsButton btn btn-outline-light btn-lg">Learn More</a>
                            </div>
                            <div class="hidden-xs col-md-7">
                                <p>
                                    Saddlebrook Orchards is located in Rochester Hills on the North side of Auburn Road
                                    between Crooks and Livernois Road. Only minutes away from Rochester Road and M-59
                                    express way.
                                </p>
                                <p>
                                    Saddlebrook Orchards is a brand new subdivision offering a secluded single entrance main
                                    drive featuring 10 perfectly sized lots offering multiple homestyle options along with beautiful
                                    wooded lot features.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <!--Community 5-->
                    <div id="nottinghamListing" class="communityListingContainer">
                        <h3>Nottingham Woods <span style="color: red; font-weight: 600; font-size: 3rem; margin-left: 1rem; white-space: no-wrap">SOLD OUT</span></h3>

                        <div class="row" style="height: 300px;">
                            <div class="col-xs-12 col-md-5" style="height: 100%;">
                                <img src="Media/Images/largeLogo.png" class="img-responsive" />
                                <a href="nottingham.php" class="listingsButton btn btn-outline-light btn-lg">Learn More</a>
                            </div>
                            <div class="hidden-xs col-md-7">
                                <ul>
                                    <li>Located in one of the most ideal areas of Rochester Hills</li>
                                    <li>17 oversized lots</li>
                                    <li>Lots will consist of a wide variety of size options including wooded, daylight, and walkout lots</li>
                                    <li>Award winning Rochester Hills School District</li>
                                    <li>Rochester Hills voted 9th best place to live in the country</li>
                                    <li>Easy access to Rochester Rd. and M-59</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-6">
                        <!--Community 6-->
                        <div id="valenciaListing" class="communityListingContainer">
                            <h3>Valencia</h3>
                            <div class="row" style="height: 300px;">
                                <div class="col-xs-12 col-md-5" style="height: 100%;">
                                    <img src="Media/Images/largeLogo.png" class="img-responsive" />
                                    <a href="valencia.php" class="listingsButton btn btn-outline-light btn-lg">Learn More</a>
                                </div>
                                <div class="hidden-xs col-md-7">
                                    <ul>
                                        <li>Located in the premier area of Shelby Township</li>
                                        <li>Consists of 69 homes with daylight and wooded lots</li>
                                        <li>Senior Living Center, offering the ability to stay close to your family</li>
                                        <li>Many lots filled with natural park foliage, combined with a winding creek</li>
                                        <li>Award winning Utica School District</li>
                                        <li>Located just north of Hall Rd., providing easy access to M-53 and M-59</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <!--Community 7-->
                        <div id="silverCreekListing" class="communityListingContainer">
                            <h3>Preston Corners <span style="color: silver; font-size: .8em; font-style: italic">Coming in 2024</span></h3>
                            <div class="row" style="height: 300px;">
                                <div class="col-xs-12 col-md-5" style="height: 100%;">
                                    <img src="Media/Images/largeLogo.png" class="img-responsive" />
                                    <a href="prestonCorners.php" class="listingsButton btn btn-outline-light btn-lg">Learn More</a>
                                </div>
                                <div class="hidden-xs col-md-7">
                                    <p>
                                        Located on Schoenherr, between 25 and 26 Mile Roads, Preston Corners is the most
                                        recent community offering from DM Homes. While still in the design phase, it stands
                                        to impress and provide the high quality homes that DM Homes Inc. is known for. We
                                        will update this page as soon as we are able to release more details about the
                                        community.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="callUs" style="padding-top: 0px;">
            <div class="container-fluid">
                <div class="row text-center" style="padding-top: 50px; padding-bottom: 50px;">
                    <h2>Call Us Today <span class="fa fa-phone-square"></span> 586.336.6800</h2>
                </div>
            </div>
        </section>

        <!--End Main Content-->
    </div>

    <!--Modal-->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Modal Body</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!--Footer-->
    <div class="container-fluid" style="padding-left: 0px; padding-right: 0px;">
        <?php include "Scripts/PHP/html/footer.php"; ?>
    </div>

    <!--Javascript-->
    <script src="Scripts/jquery/jquery-1.9.1.js"></script>
    <script src="Scripts/js/bootstrap.js"></script>
    <script src="Scripts/jquery/classie.js"></script>
    <script src="Scripts/jquery/jquery.easing.js"></script>
    <script type="text/javascript" src="Scripts/jquery/retinajs/dist/retina.min.js"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!--Contact Form Scripts-->
    <script src="Scripts/jquery/contact_me.js"></script>
    <script src="Scripts/jquery/jqBootstrapValidation.js"></script>
    <!--Greensock-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/TweenLite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/easing/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.1/plugins/CSSPlugin.min.js"></script>
    <script src="Scripts/jquery/Custom.js"></script>

</body>

</html>