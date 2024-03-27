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

    <section class="create-section">
        <div class="container-fluid align-self-center px-0 h-100">
            <div class="row dashboard-style h-100">
                <div class="px-0 small-side h-100 side" data-side="0">
                    <ul>
                        <li>
                            <button class="small-side-icon small-side-icon-arrow">
                                <span>Pin drafts</span>
                                <img src="<?= base_url('assets/img/dbl-arrow.svg') ?>" alt="">
                            </button>
                        </li>
                        <li class="add-create">
                            <button class="small-side-icon">
                                <span>Create new</span>
                                <img src="<?= base_url('assets/img/plus.svg') ?>" alt="">
                            </button>
                        </li>
                        <li class="p-0">
                            <hr class="side-line">
                        </li>
                    </ul>
                </div>
                <div class="px-0 form-data h-100">
                    <div class="head">
                        <h5>Create Pin</h5>
                    </div>
                    <div class="form-data-body">
                        <div class="container">
                            <div class="row w-100 px-0 mx-0">
                                <form action="" class="col-md-12 form-body">
                                    <div class="row w-100 mx-0">
                                        <div class="col-md-5 px-3 small-file">
                                            <div class="img-select-input">
                                                <div class="file-input">
                                                    <input type="file" accept="image/bmp,image/jpeg,image/png,image/tiff,image/webp,video/mp4,video/x-m4v,video/quicktime" name="photo" id="photo">
                                                    <label for="photo">Choose a file or drag and drop it here</label>
                                                    <span>We recommend using high quality .jpg files less than 20MB or
                                                        .mp4 files less than 200MB.</span>
                                                </div>
                                                <div class="save-file">
                                                    <hr>
                                                    <button>Save from URL</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 px-3 mx-auto small-form">
                                            <div class="width-set">
                                                <div class="form-group">
                                                    <label class="form-label" for="title">Title</label>
                                                    <input type="text" class="form-control" name="title" id="title" placeholder="Add a title">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="description">Description</label>
                                                    <textarea cols="30" rows="4" class="form-control" name="description" id="description" placeholder="Add a detailed description"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="link">Link</label>
                                                    <input type="url" class="form-control" name="link" id="link" placeholder="Add a link">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="board">Board</label>
                                                    <select name="board" class="form-select" id="board">
                                                        <option selected disabled>-- Add a Board --</option>
                                                        <option value="Link 1">Link 1</option>
                                                        <option value="Link 2">Link 2</option>
                                                        <option value="Link 3">Link 3</option>
                                                        <option value="Link 4">Link 4</option>
                                                        <option value="Link 5">Link 5</option>
                                                        <option value="Link 6">Link 6</option>
                                                        <option value="Link 7">Link 7</option>
                                                        <option value="Link 8">Link 8</option>
                                                        <option value="Link 9">Link 9</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label" for="topics">Tagged topics (0)</label>
                                                    <input type="text" class="form-control" name="topics" id="topics" placeholder="Search for a tag">
                                                    <small>Don't worry, people won't see your tags</small>
                                                </div>
                                                <div class="form-group more-options">
                                                    <div class="more">
                                                        <span>More options</span>
                                                        <img src="<?= base_url('assets/img/down-arrow.svg') ?>" alt="">
                                                    </div>
                                                    <div class="options">
                                                        <div class="form-check form-switch">
                                                            <input class="form-check-input" type="checkbox" role="switch" id="comment" name="comment" checked>
                                                            <label for="comment" class="mb-0">Allow people to
                                                                comment</label>
                                                        </div>
                                                        <div class="form-check form-switch">
                                                            <input type="checkbox" class="form-check-input" role="switch" name="product" id="product" checked>
                                                            <label for="product">Show similar products</label>
                                                            <p>People can shop products similar to what's shown in this
                                                                Pin
                                                                using visual search
                                                                Shopping recommendations aren't available for Idea ads
                                                                and
                                                                Pins
                                                                with tagged products or paid partnership label</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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