<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freedom Point</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css" integrity="sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.9.1/font/bootstrap-icons.min.css" integrity="sha512-5PV92qsds/16vyYIJo3T/As4m2d8b6oWYfoqV+vtizRB6KhF1F9kYzWzQmsO6T3z3QG2Xdhrx7FQ+5R1LiQdUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
            <button class="btn btn-outline-success shadow-none" data-bs-toggle="modal" data-bs-target="#loginModal" type="button" >Login</button>
        </form>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
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
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-outline-success">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/js/bootstrap.bundle.min.js" integrity="sha512-9GacT4119eY3AcosfWtHMsT5JyZudrexyEVzTBWV3viP/YfB9e2pEy3N7WXL3SV6ASXpTU0vzzSxsbfsuUH4sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>