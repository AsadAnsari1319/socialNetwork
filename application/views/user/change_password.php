<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest - Profile</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
</head>

<body>

    <!-- Main Content start -->

    <header>
        <div class="container-fluid align-self-center">
            <div class="row">
                <div class="col-md-2 px-0 align-self-center">
                    <ul class="logo_list">
                        <li><a href="<?= base_url('home') ?>" class="logo"><img src="<?= base_url('assets/img/logo.svg') ?>" alt=""></a></li>
                        <li><a href="<?= base_url('home') ?>">Home</a></li>
                        <li><a href="./create.html">Create</a></li>
                    </ul>
                </div>
                <div class="col-md-8 px-3 align-self-center">
                    <div class="searchBar">
                        <input type="search" name="search" class="search" id="search" placeholder="Search">
                    </div>
                </div>
                <div class="col-md-2 px-0 align-self-center position-relative">
                    <ul class="right_list">
                        <li><a class="notification"><img src="<? base_url('assets/img/bell.svg') ?>" alt=""></a></li>
                        <li><a href="<?= base_url('profile') ?>"><span class="user"><img src="<? base_url('assets/img/user.jpg') ?>" alt=""></a></span></li>
                    </ul>
                    <div class="down">
                        <div class="downHeading">
                            <h5>Updates</h5>
                        </div>
                        <div class="downBody">
                            <ul>
                                <li><a href="#">Hello</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="e_margin">
        <div class="container-fluid px-3">
            <div class="row w-100 mx-0 px-0">
                <div class="col-md-3">
                    <div class="e_side">
                        <ul>
                            <li data-tab="0"><a href="./edit_profile.html">Edit profile</a></li>
                            <li data-tab="1"><a href="./change_password.html" class="e_active">Change Password</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="e_contant">
                        <div class="e_contant_heading mb-5">
                            <h3>Change Password</h3>
                        </div>
                        <form action="">
                            <div class="form-group">
                                <label class="form-label" for="password">Change your password</label>
                                <input type="text" class="form-control" name="password" id="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="c_password">Confirm Password</label>
                                <input type="text" class="form-control" name="c_password" id="c_password" placeholder="Confirm password">
                            </div>
                            <div class="form-group">
                                <button class="button">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content end -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/index.js') ?>"></script>
</body>

</html>