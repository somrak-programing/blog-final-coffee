<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=320, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AppzStory Studio สอนเขียนเว็บไซต์</title>
    
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
    <header class="jarallax" data-speed="0.5" style="background-image: url(assets/images/bg.jpg);">
        <div class="page-image">
            <h1 class="display-4 font-weight-bold">ข้อมูลการติดต่อ</h1>
            <p class="lead">AppzStory Studio สอนเขียนเว็บไซต์</p>
        </div>
    </header>

<!-- Section Blog -->
    <section class="container py-5">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="border-short-bottom">รายละเอียด</h2>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-address-card py-2 fa-4x text-info" aria-hidden="true"></i>
                        <h4 class="card-title">ที่อยู่</h4>
                        <p class="card-text">กรุงเทพมหานคร ภาษีเจริญ บางหว้า</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-phone-square py-2 fa-4x text-info" aria-hidden="true"></i>
                        <h4 class="card-title">เบอร์โทรศัพท์</h4>
                        <p  class="card-text">(+66)86-855-1249</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <i class="fa fa-envelope  py-2 fa-4x text-info" aria-hidden="true"></i>
                        <h4 class="card-title">อีเมลล์</h4>
                        <p  class="card-text">example@email.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> แบบฟอร์มติดต่อเรา </h5>
                        <form method="post" action="php/contact.php">
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="name">ชื่อ</label>
                                    <input type="text" id="name" name="name" class="form-control" required placeholder="ชื่อของคุณ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="phone">เบอร์โทรศัพท์</label>
                                    <input type="text" id="phone" name="phone" class="form-control" required placeholder="เบอร์โทรศัพท์ของคุณ">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="email">อีเมลล์</label>
                                    <input type="email" id="email" name="email" class="form-control" required placeholder="example@email.com">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">ข้อความของคุณ</label>
                                <textarea id="message" name="message" rows="5" class="form-control" required placeholder="เขียนข้อความของคุณที่นี้"></textarea>
                            </div>

                            <div id="recaptcha-wrapper" class="text-center my-2">
                                <div class="g-recaptcha d-inline-block" data-callback="recaptchaCallback" data-sitekey="6LeUF1YUAAAAAG1LUEev6XXG_ZlB9dBLdynYLES1"></div>
                            </div>

                            <button type="submit" id="btn-submit" name="btn-submit" class="btn btn-primary d-block mx-auto" disabled>ส่งข้อความ</button>
                        </form>
                    </div>
                </div>
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
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAN7pVYXyLuKkftPkDMFhpTjov4MYVxTnY&callback=initMap"></script>
    <script src="assets/js/main.js"></script>

    <script>
        $(function(){
            // global variables
            captchaResized = false;
            captchaWidth = 304;
            captchaHeight = 78;
            captchaWrapper = $('#recaptcha-wrapper');
            captchaElements = $('#rc-imageselect, .g-recaptcha');

            $(window).on('resize', function() {
                resizeCaptcha();
            });

            resizeCaptcha();
        });

        function resizeCaptcha() {
            if (captchaWrapper.width() >= captchaWidth) {
                if (captchaResized) {
                    captchaElements.css('transform', '').css('-webkit-transform', '').css('-ms-transform', '').css('-o-transform', '').css('transform-origin', '').css('-webkit-transform-origin', '').css('-ms-transform-origin', '').css('-o-transform-origin', '');
                    captchaWrapper.height(captchaHeight);
                    captchaResized = false;
                }
            } else {
                var scale = (1 - (captchaWidth - captchaWrapper.width()) * (0.05/15));
                captchaElements.css('transform', 'scale('+scale+')').css('-webkit-transform', 'scale('+scale+')').css('-ms-transform', 'scale('+scale+')').css('-o-transform', 'scale('+scale+')').css('transform-origin', '0 0').css('-webkit-transform-origin', '0 0').css('-ms-transform-origin', '0 0').css('-o-transform-origin', '0 0');
                captchaWrapper.height(captchaHeight * scale);
                if (captchaResized == false) captchaResized = true;
            }
        }
        // resizeCaptcha();

        function recaptchaCallback () {
            $('#btn-submit').removeAttr('disabled');
        }

    
    </script>

</body>
</html>