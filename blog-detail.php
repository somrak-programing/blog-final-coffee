<?php 
    require_once('php/connect.php');
    $sql = "SELECT * FROM articles WHERE id = '".$_GET['id']."' AND `status` = 'true'";
    $result = $conn->query($sql) or die($conn->error);

    if ($result->num_rows > 0){
        $row = $result->fetch_assoc();
    } else {
        header('Location: blog.php');
    }

    $sql_RAND = "SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
    $result_RAND = $conn->query($sql_RAND) or die($conn->error);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $row['subject'];  ?></title>
    
<!-- COMMON TAGS -->
    <!-- Search Engine -->
    <meta name="description" content="<?php echo $row['sub_title']; ?>">
    <meta name="image" content="https://s-courses.com/sclass1/<?php echo $base_path_blog.$row['image']; ?>">
    <meta name="keywords" content="สอนเขียนเว็บไซต์, html, css, javascript, php, mysql">
    <meta name="robots" content="index, nofollow">
    <meta name="web_author" content="AppzStory">

    <!-- Open Graph general (Facebook, Pinterest & Google+) -->
    <meta property="fb:app_id" content="284509522166716" /> 
    <meta property="og:title"  content="<?php echo $row['subject']; ?>" /> 
    <meta property="og:description" content="<?php echo $row['sub_title']; ?>">
    <meta property="og:image" content="https://s-courses.com/sclass1/<?php echo $base_path_blog.$row['image']; ?>">
    <meta property="og:site_name" content="https://s-courses.com/">
    <meta property="og:type" content="website">

<!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="assets/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="assets/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="assets/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="assets/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

<!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">

    
</head>
<body>
    
<!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>

<!-- Section Page-title -->
    <header class="jarallax" data-speed="0.5" style="background-image: url(<?php echo $base_path_blog.$row['image'];  ?>);">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold"><?php echo $row['subject'];  ?> </h1>
            <p class="lead"><?php echo $row['sub_title'];  ?> </p>
        </div>
    </header>

<!-- Section Blog -->
    <section class="container blog-content">
        <div class="row">
            <div class="col-12">
                <?php echo $row['detail'];  ?>   
            </div>
            <div class="col-12 text-right">
                <hr>
                <div class="pw-server-widget" data-id="wid-deh6i0jj"></div>
                <p class="text-muted"><?php echo date_format(new DateTime($row['updated_at']),"j F Y");  ?></p>
            </div>
            <div class="col-12">
                <div class="owl-carousel owl-theme">
                    <?php while($row_RAND = $result_RAND->fetch_assoc()){  ?>
                    <section class="col-12 p-2">
                        <div class="card h-100">
                            <a href="blog-detail.php?id=<?php echo $row_RAND['id'] ?>" class="warpper-card-img">
                                <img class="card-img-top" src="<?php echo $base_path_blog.$row_RAND['image'] ?>" alt="Coding">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row_RAND['subject']; ?></h5>
                                <p class="card-text"><?php echo $row_RAND['sub_title']; ?></p>
                            </div>
                            <div class="p-3">
                                <a href="blog-detail.php?id=<?php echo $row_RAND['id'] ?>" class="btn btn-primary btn-block">อ่านเพิ่มเติม</a>
                            </div>
                        </div>
                    </section>
                    <?php } ?>
                </div>
            </div>
            <div class="col-12">
                <div class="fb-comments" 
                data-width="100%"
                data-href="http://localhost/blog/blog-detail.php?id_appzstory=<?php echo $row['id']; ?>" 
                data-numposts="5"></div>
                <div id="fb-root"></div>
            </div>
        </div>
    </section>

<!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>
    <?php include_once('php/userlogs.php') ?>

    <div class="to-top">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>
        

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
    <script src="node_modules/jarallax/dist/jarallax.min.js"></script>
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7pVYXyLuKkftPkDMFhpTjov4MYVxTnY&callback=initMap"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true,
                nav: false,
                dots: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:3
                    }
                }
            });
        });

        //              DO NOT IMPLEMENT                //
        //       this code through the following        //
        //                                              //
        //   Floodlight Pixel Manager                   //
        //   DCM Pixel Manager                          //
        //   Any system that places code in an iframe   //
        (function () {
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = ('https:' == document.location.protocol ? 'https://s' : 'http://i')
            + '.po.st/static/v4/post-widget.js#publisherKey=556iuqt4139l475oo1e8';
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();

    </script>

</body>
</html>