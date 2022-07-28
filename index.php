<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freedom Point</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.css" integrity="sha512-ipO1yoQyZS3BeIuv2A8C5AwQChWt2Pi4KU3nUvXxc4TKr8QgG8dPexPAj2JGsJD6yelwKa4c7Y2he9TTkPM4Dg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&family=Uchen&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Libre Bodoni', serif;
        }
        .h-font {
            font-family: 'Uchen', serif;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }
    </style>
</head>

<body>

<!--Nav-->
<nav class="navbar navbar-dark bg-dark justify-content-evenly navbar-expand-lg px-lg-3 py-lg-2 shadow-md sticky-top">
    <a class="navbar-brand me-5 fw-bold fs-3 *" href="index.php">Freedom CheckPoint</a>
    <button class="navbar-toggler shadow-none" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link me-2 active" aria-current="page" href="#">Check Ins</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-2" href="#">Projections</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-2" href="#">728</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-2" href="#">Daily Lodging</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-2" href="#">729</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-2" href="#">Lunch</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-2" href="#">Records</a>
            </li>
        </ul>
        <form class="d-flex">
            <button class="btn btn-outline-success shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal" type="button" >Login</button>
            <button class="btn btn-outline-success shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registerModal" type="button" >Register</button>
        </form>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person fs-3 me-2"></i>User Login
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="form-label">Email Address</label>
                        <input type="email" class="form-control shadow-none" placeholder="Enter email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control shadow-none" placeholder="Password">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="button" class="btn btn-outline-success shadow-none">Login</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person fs-3 me-2"></i>User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="form-label">Email Address</label>
                        <input type="email" class="form-control shadow-none" placeholder="Enter email">

                        <label for="form-label">Confirm Email Address</label>
                        <input type="email" class="form-control shadow-none" placeholder="Re-Enter email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control shadow-none" placeholder="Password">

                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" class="form-control shadow-none" placeholder="Confirm Password">
                    </div>
                    <div class="d-flex align-items-center justify-content-between mb-2">
                        <button type="button" class="btn btn-outline-success shadow-none">Register</button>
                        <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="container-fluid">
    <!-- Swiper -->
    <div class="swiper swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="./images/lounge/IMG_6625.jpeg" alt="" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="./images/lounge/IMG_6626.jpeg" alt="" class="w-100 d-block">
            </div>
            <div class="swiper-slide">
                <img src="./images/lounge/IMG_6627.jpeg" alt="" class="w-100 d-block">
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js" integrity="sha512-9GacT4119eY3AcosfWtHMsT5JyZudrexyEVzTBWV3viP/YfB9e2pEy3N7WXL3SV6ASXpTU0vzzSxsbfsuUH4sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js" integrity="sha512-V1mUBtsuFY9SNr+ptlCQAlPkhsH0RGLcazvOCFt415od2Bf9/YkdjXxZCdhrP/TVYsPeAWuHa+KYLbjNbeEnWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    const swiper = new Swiper('.swiper-container', {
        spaceBetween: 30,
        effect: 'fade',
        loop: true,
        autoPlay: {
            delay: 3500,
            disableOnInteraction: false,
        }
    });
</script>

</body>
</html>