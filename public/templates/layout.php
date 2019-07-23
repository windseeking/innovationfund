<!DOCTYPE html>
<html>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-142992307-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-142992307-2', { 'optimize_id': 'GTM-T3PMB68'});
    </script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php $description; ?>">
    <meta name="keywords"
          content="инновации, фонд, студенты, практика, стажтровка, бизнес, инвестиции, образование, университет, кооперация, партнерство">

    <title><?= $title; ?> <?= !empty($subtitle) ? '» ' . $subtitle : ''; ?> | FIS</title>

    <!-- ===== Объявление общих настроек для иконок ===== -->
    <link rel="icon" href="img/logo.png" sizes="32x32">
    <link rel="icon" href="img/logo.png" sizes="192x192">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">

    <!-- ===== Объявление внешнего вида иконок для iOS ===== -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">

    <!-- ===== Объявление внешенего вида плитки для Windows 8.0 ===== -->
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">

    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/product.css">
    <link rel="stylesheet" type="text/css" href="../css/slider.css">

    <!--  Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <!--Font Awesome icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
          integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
<header>

    <!--Показывается на экранах 1200px и больше-->
    <div class="xs-hide sm-hide md-hide lg-hide main-menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container col-2 p-0 m-0">
                <a class="navbar-brand" href="//innovationfund.in">
                    <img src="../img/logo.png" width="50" height="50" class="d-inline-block align-top" alt=""
                         title="Main page">
                </a>
            </div>
            <div class="container col-8">
                <?php if (!empty($menu)): ?>
                    <?php foreach ($menu as $value): ?>
                        <a class="nav-item nav-link text-nowrap <?php echo ($title == $value['title']) ? 'active' : ''; ?>"
                           href="<?= $value['link']; ?>"><?= $value['title']; ?></a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="container col-2 justify-content-end p-0">
                <a class="icon icon-en <?php echo ($_COOKIE['language'] == 'en') ? 'icon-en-active' : ''; ?>"
                   href="?lang=en" title="English"></a>
                <a class="icon icon-uk <?php echo ($_COOKIE['language'] == 'uk') ? 'icon-uk-active' : ''; ?>"
                   href="?lang=uk" title="Ukrainian"></a>
                <a class="icon icon-ru <?php echo ($_COOKIE['language'] == 'ru') ? 'icon-ru-active' : ''; ?>"
                   href="?lang=ru" title="Russian"></a>

                <?php if (isset($_SESSION['user'])): ?>
                    <a class="nav-item nav-link p-0" href="/admin/news">
                        <span style="font-size: 1em; color: #222224;"><i class="far fa-user-circle"></i></span>
                    </a>
                <?php endif; ?>
            </div>
        </nav>
    </div>

    <!--Показывается на экранах от 0 до 1200px-->
    <div class="pos-f-t xl-hide">
        <div class="collapse" id="navbarToggleExternalContent">
            <div class="bg-white text-right p-4">
                <?php foreach ($menu as $value): ?>
                    <a class="nav-item nav-link <?php echo ($title == $value['title']) ? 'active' : ''; ?>"
                       href="<?= $value['link']; ?>"><?= $value['title']; ?></a>
                <?php endforeach; ?>
                <a class="icon icon-en <?php echo ($_COOKIE['language'] == 'en') ? 'icon-en-active' : ''; ?>"
                   href="?lang=en"></a>
                <a class="icon icon-uk <?php echo ($_COOKIE['language'] == 'uk') ? 'icon-uk-active' : ''; ?>"
                   href="?lang=uk"></a>
                <a class="icon icon-ru <?php echo ($_COOKIE['language'] == 'ru') ? 'icon-ru-active' : ''; ?>"
                   href="?lang=ru"></a>
                <?php if (isset($_SESSION['user'])): ?>
                    <a class="nav-item nav-link" href="/admin/news">
                        <span style="font-size: 1em; color: #222224;"><i class="far fa-user-circle"></i></span>
                    </a>
                <?php endif; ?>
            </div>
        </div>
        <nav class="navbar navbar-light bg-white">
            <a class="navbar-brand" href="//innovationfund.in">
                <img src="../img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            </a><span class="font-size-s"><?= $fund_name; ?></span>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarToggleExternalContent"
                    aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
</header>

<main>
    <?php if (isset($header)): ?>
        <hr class="yellow short-center">
        <h1 class="text-center mb-3"><?= $header; ?></h1>
    <?php endif; ?>

    <?php if (isset($tabs)): ?>
    <div class="xs-hide sm-hide">
        <ul class="nav nav-tabs justify-content-center mt-3 mb-3">
            <?php if (!empty($tabs)): ?>
                <?php foreach ($tabs as $tab): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($subtitle == $tab['title']) ? 'active' : ''; ?>"
                           href="<?= $tab['link']; ?>"><?= $tab['title']; ?></a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>

    <div class="col-11 mx-auto md-hide lg-hide xl-hide">
        <ul class="nav nav-pills nav-fill md-hide">
            <?php if (!empty($tabs)): ?>
                <?php foreach ($tabs as $tab): ?>
                    <li class="nav-item">
                        <a class="nav-link <?php echo ($subtitle == $tab['title']) ? 'active' : ''; ?>"
                           href="<?= $tab['link']; ?>"><?= $tab['title']; ?></a>
                    </li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>


    <div class="tab-content py-3 px-0 col-12" id="myTabContent">
        <div class="tab-pane fade show active" id="news" role="tabpanel"
             aria-labelledby="news-tab">
            <div class="container-fluid px-3 px-md-5 mb-3">
                <?php endif; ?>

                <?= $content; ?>

                <?php if (isset($tabs)): ?>
            </div>
        </div>
    </div>
<?php endif; ?>

</main>

<footer class="bg-dark" style="position: relative">
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3 text-right text-md-left">
                    <a class="btn-custom btn-custom-outline-blue" href="#support" data-toggle="modal"
                       data-target="#support"><?= $btn_support; ?></a>
                    <a class="btn-custom btn-custom-outline-blue" href="/index.php#contact"><?= $btn_contact; ?></a>
                </div>

                <div class="modal fade" id="support" tabindex="-1" role="dialog"
                     aria-labelledby="ModalLabelSupport" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3><?= $btn_support; ?></h3>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <p class="card-text">
                                        You can support our Fund <a href="https://send.monobank.com.ua/39XXQvurt"
                                                                    target="_blank">here</a>.
                                        These finances will be invested in social projects and operating expenses.</p>
                                    <p>All information of our spending will be presented according to our principle of
                                        transparency.</p>
                                    <a href="https://send.monobank.com.ua/39XXQvurt" target="_blank"
                                       class="btn-custom btn-custom-outline-yellow btn-block"><?= $btn_support; ?></a>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-muted">
                    <p><?= $copyright; ?></p>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <ul class="nav footer-menu justify-content-center justify-content-md-end mb-3">
                    <?php if (!empty($menu)): ?>
                        <?php foreach ($menu as $value): ?>
                            <li class="nav-item">
                                <a class="nav-link text-nowrap <?php echo ($title == $value['title']) ? 'active' : ''; ?>"
                                   href="<?= $value['link']; ?>"><?= $value['title']; ?></a>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>

                <ul class="nav justify-content-around justify-content-md-end mb-5 mb-md-0">
                    <li class="nav-item">
                        <a class="icon icon-linkedin" href="https://www.linkedin.com/company/fund-of-innovation"
                           target="_blank" title="LinkedIn"></a>
                    </li>
                    <li class="nav-item">
                        <a class="icon icon-facebook" href="https://www.facebook.com/company/fund-of-innovation"
                           target="_blank" title="Facebook"></a>
                    </li>
                    <li class="nav-item">
                        <a class="icon icon-twitter" href="https://www.twitter.com/company/fund-of-innovation"
                           target="_blank" title="Twitter"></a>
                    </li>
                    <li class="nav-item">
                        <a class="icon icon-instagram mr-3" href="https://www.instagram.com/innovationfund.in/"
                           target="_blank" title="Instagram"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <p id="windseeking">made with ♥ by <a href="https:/instagram.com/windseeking" target="_blank">windseeking</a></p>
</footer>

<!--Bootstrap-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>
</html>