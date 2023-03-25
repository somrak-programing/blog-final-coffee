<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thebiz Coffee</title>
    
<!-- Section Meta tag -->
    <?php include_once('includes/meta.php') ?>

<!-- CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>
    
<!-- Section Navbar -->
    <?php include_once('includes/navbar.php') ?>

<!-- Section Page-title -->
    <header class="jarallax" data-speed="0.5"  style="background-image: url(assets/images/bg.jpg);">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold">About us</h1>
            <p class="lead">Barista Institute</p>
        </div>
    </header>

<!-- Section TODO -->
    <section class="container py-5">
        <div class="row">
            <div class="col-lg-6 py-3 p-lg-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/cK4LemjoFd0" frameborder="0" allowfullscreen></iframe>
                </div>
            </div> 
            <div class="col-lg-6">
                <h2>Barista Institute...</h2>
                <p>Interested in joining a community that’s avid about the coffee world? Barista Institute is a community of Nordics and Baltics who have flourished in the coffee industry with the knowledge, skills, and passion they have shared. Stay knowledgeable with industry news and interviews with your coffee idols. An event calendar is available with barista training courses. Give the recipes a whirl, and don’t forget the how-to guides on equipment use and many more topics.</p>
                
            </div>  
        </div>
    </section>

<!-- Section Timeline -->
    <section class="position-relative py-5 jarallax" data-speed="0.5" style="background-image: url(https://images.unsplash.com/photo-1536227661368-deef57acf708?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80);">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center ">
                    <img src="assets/images/logo.png" class="img-fluid" width="150" alt="">
                    <h1 class="text-white display-4 font-weight-bold">Timeline About Us</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="row">
            <div class="col-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-badge">
                            <p class="text-info">23 July 1997</p>
                        </div>
                        <div class="timeline-card">
                            <h5>My birth day</h5>
                            <p class="text-muted">เกิดวันที่ 23 กรกฏาคม 1997 </p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p class="text-info">9 August 2020</p>
                        </div>
                        <div class="timeline-card">
                            <h5>Rambhai Barni Rajabhat University</h5>
                            <p class="text-muted">Business Computer</p>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-badge">
                            <p class="text-info">10 October 2020</p>
                        </div>
                        <div class="timeline-card">
                            <h5>Grohe Siam Limited</h5>
                            <p class="text-muted">IT Support</p>
                        </div>
                    </li>
                    <li class="inverted">
                        <div class="timeline-badge">
                            <p class="text-info">3 December 2022</p>
                        </div>
                        <div class="timeline-card">
                            <h5 >Wattananukit city store</h5>
                            <p class="text-muted">Purchase</p>
                        </div>
                    </li>
                    
                </ul>
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
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7pVYXyLuKkftPkDMFhpTjov4MYVxTnY&callback=initMap"></script>    
    <script src="assets/js/main.js"></script>

</body>
</html>