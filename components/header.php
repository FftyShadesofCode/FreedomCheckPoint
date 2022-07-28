

<!--Nav-->
<nav class="navbar navbar-dark bg-dark justify-content-evenly navbar-expand-lg px-lg-3 py-lg-2 shadow-md sticky-top">
    <a class="navbar-brand me-5 fw-bold fs-3 *" href="../index.php">Freedom CheckPoint</a>
    <button class="navbar-toggler shadow-none" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link me-2 active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-2" href="../pages/CheckIns.php">Check In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-2" href="#">Projections</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-2" href="#">728</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-2" href="#">729</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-2" href="#">Lunch</a>
            </li>
            <li class="nav-item">
                <a class="nav-link me-2" href="#">Daily Lodging</a>
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