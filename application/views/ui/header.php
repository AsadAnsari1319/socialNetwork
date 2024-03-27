<header class="d-none d-lg-block">
    <div class="container-fluid align-self-center">
        <div class="row w-100 mx-0">
            <div class="col-sm-4 col-md-4 col-lg-2 px-0 align-self-center">
                <ul class="logo_list">
                    <li><a href="<?= base_url('home') ?>" class="logo"><img src="assets/img/logo.svg" alt=""></a></li>
                    <li><a href="<?= base_url('home') ?>" class="active">Home</a></li>
                    <li><a href="<?= base_url('create') ?>">Create</a></li>
                </ul>
            </div>
            <div class="col-sm-5 col-md-4 col-lg-8 px-3 align-self-center">
                <div class="searchBar">
                    <input type="search" name="search" class="search" id="search" placeholder="Search">
                </div>
            </div>
            <div class="col-sm-3 col-md-4 col-lg-2 px-0 align-self-center position-relative">
                <ul class="right_list">
                    <li><a class="notification"><img src="<?= base_url('assets/img/bell.svg') ?>" alt=""></a></li>
                    <li><a href="<?= base_url('profile') ?>"><span class="user"><img src="<?= base_url('assets/img/user.jpg') ?>" alt=""></a></span></li>
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


<!-- mobile_view -->

<header class="d-block d-lg-none">
    <div class="container-fluid align-self-center">
        <div class="row w-100 mx-0">
            <div class="col-6 align-self-center">
                <ul class="logo_list justify-content-start">
                    <li><a href="<?= base_url('home') ?>" class="logo"><img src="assets/img/logo.svg" alt=""></a></li>
                </ul>
            </div>
            <div class="col-6 align-self-center text-end">
                <div class="menu text-end d-inline">
                    <img src="<?= base_url('assets/img/menu.svg') ?>" alt="" width="24px" height="24px">
                </div>
            </div>
        </div>
    </div>
</header>