<?php 
    require_once('php/connect.php');
    $sql = "SELECT * FROM `articles` WHERE `status` = 'true' ORDER BY RAND() LIMIT 6";
    $result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thebiz coffee คัดสรรค์กาแฟดีๆให้คุณทุกเช้า</title>
    
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

<!-- Section Carousel -->
    <section id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80') ;">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">Manual Coffee Brewing.</h1>
                        <p class="lead">Enjoys roasting coffee at home</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1497935586351-b67a49e012bf?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1171&q=80') ;">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">Coffee Beans Delivered</h1>
                        <p class="lead">Expect tips, tricks, and delicious, foolproof recipes.</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-img" style="background-image: url('https://images.unsplash.com/photo-1500989145603-8e7ef71d639e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1176&q=80') ;">
                    <div class="carousel-caption">
                        <h1 class="display-4 font-weight-bold">The Way to Coffee</h1>
                        <p class="lead">Traveling from cafe to cafe, Resi is waiting as that next cup of coffee is being prepared</p>
                    </div>
                    <div class="backscreen"></div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </section>

<!-- Section Hope -->    
    <section class="jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="border-short-bottom">CoffeeVibe and StayRoasted: Why We Merged</h1>
            <p class="lead">There were two websites built in the same niche – one offering the finest brewed coffees, while the other providing a place for coffee lovers to share their experiences and connect with each other.
            </p>
        </div>
    </section>

<!-- Blog -->

    <section class="container">
        <h1 class="border-short-bottom text-center">Blog</h1>
        <div class="row">
            <?php while($row = $result->fetch_assoc()) {  ?>
            <section class="col-12 col-sm-6 col-md-4 p-2">
                <div class="card h-100">
                    <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="warpper-card-img">
                        <img class="card-img-top" src="<?php echo $base_path_blog.$row['image'] ?>" alt="Coding">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['subject'] ?></h5>
                        <p class="card-text"><?php echo $row['sub_title'] ?></p>
                    </div>
                    <div class="p-3">
                        <a href="blog-detail.php?id=<?php echo $row['id'] ?>" class="btn btn-primary btn-block">read more</a>
                    </div>
                </div>
            </section>
            <?php } ?>
        </div>
    </section>

<!-- Section Footer -->
    <?php include_once('includes/footer.php') ?>
    <?php include_once('php/userlogs.php') ?>

<!-- Section On to Top -->
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