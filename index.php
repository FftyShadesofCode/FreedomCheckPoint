<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freedom CheckPoint</title>

    <?php require('inc/links.php') ?>

    <link rel="stylesheet" href="styles.css">
</head>

<body>

<?php require('components/header.php') ?>

<div class="container-fluid m-0 p-0">
    <!-- Swiper -->
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./images/lounge/IMG_6625.jpeg" alt="" class="w-100 d-block" style="width: 100vw; height: 100vh">
            </div>
            <div class="swiper-slide">
                <img src="./images/lounge/IMG_6626.jpeg" alt="" class="w-100 d-block" style="width: 100vw; height: 100vh">
            </div>
            <div class="swiper-slide">
                <img src="./images/lounge/IMG_6627.jpeg" alt="" class="w-100 d-block" style="width: 100vw; height: 100vh">
            </div>
        </div>
    </div>
</div>

<!-- ROOMS -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR SPACE</h2>

<div class="container">
    <div class="row">
        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
                <img src="./images/lounge/IMG_6625.jpeg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center">Office</h5>
                    <p class="card-text">Top of the line check in service complete with a full gaming lounge and an idiot at the helm!</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                <img src="./images/lounge/IMG_6626.jpeg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center">PlayStation Area</h5>
                    <p class="card-text">Game room lounge is set up with two PS4s, with big screen tvs, and fish tanks!</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 my-3">
            <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                <img src="./images/lounge/IMG_6627.jpeg" class="card-img-top" alt="">
                <div class="card-body">
                    <h5 class="card-title text-center">XBox Area</h5>
                    <p class="card-text">Game room lounge is furnished with an XBox, a foosball table, and a computer!</p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require('components/footer.php') ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js" integrity="sha512-9GacT4119eY3AcosfWtHMsT5JyZudrexyEVzTBWV3viP/YfB9e2pEy3N7WXL3SV6ASXpTU0vzzSxsbfsuUH4sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js" integrity="sha512-V1mUBtsuFY9SNr+ptlCQAlPkhsH0RGLcazvOCFt415od2Bf9/YkdjXxZCdhrP/TVYsPeAWuHa+KYLbjNbeEnWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    const swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        autoPlay: {
            delay: 2000,
            disableOnInteraction: false,
        }
    });
</script>

</body>
</html>