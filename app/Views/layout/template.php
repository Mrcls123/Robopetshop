<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="<?=base_url() ?>/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php if (!empty($result->js_files)) : ?>
    <?php 
        foreach($result->css_files as $file): ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
    <?php endforeach; ?>
    <?php endif; ?>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body class="sb-nav-fixed">
    <?= $this->include('layout/topbar')?>

    <div class="layoutSidenav">
        <?= $this->include('layout/sidebar')?>
        <div id="layoutSidenav_content">
            <?= $this->renderSection('content') ?>
            <!-- <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer> -->
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="<?=base_url() ?>/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="<?=base_url() ?>/assets/demo/chart-area-demo.js"></script>
    <script src="<?=base_url() ?>/assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="<?=base_url() ?>/js/datatables-simple-demo.js"></script>
    <script>
    function previewImage() {
        const sampul = document.querySelector('#sampul');
        const imgPreview = document.querySelector('.img-preview');
        const fileSampul = new FileReader();
        fileSampul.readAsDataURL(sampul.files[0]);
        fileSampul.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
    </script>
    <?php if (!empty($result->js_files)) : ?>
    <?php foreach($result->js_files as $file): ?>
    <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
    <?php endif; ?>
</body>

</html>