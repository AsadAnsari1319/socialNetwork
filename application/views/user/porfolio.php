<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pinterest</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/responsive.css') ?>">
</head>

<body>

    <!-- Main Content start -->

    <?php include(APPPATH . 'views/ui/header.php');    ?>

    <section class="e_margin">
        <div class="container-fluid px-3">
            <div class="row w-100 mx-0 px-0">
                <div class="col-md-3">
                    <div class="e_side">
                        <ul>
                            <li data-tab="0"><a href="<?= base_url('porfolio') ?>" class="e_active">Edit profile</a></li>
                            <li data-tab="1"><a href="<?= base_url('change_password') ?>">Change Password</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="e_contant">
                        <div class="e_contant_heading">
                            <h3>Edit profile</h3>
                            <p>Keep your personal details private. Information you add here is visible to anyone who
                                can
                                view your profile.</p>
                        </div>
                        <form action="">
                            <div class="form-group d-flex flex-wrap align-items-center">
                                <label class="form-label w-100 mb-3" for="photo">Photo</label>
                                <div class="w-25">
                                    <img src="<?= base_url('assets/img/user.jpg') ?>" class="rounded-circle" alt="">
                                </div>
                                <input type="file" name="photo" id="photo" class="w-75">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="username">User Name</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Enter your username">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
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