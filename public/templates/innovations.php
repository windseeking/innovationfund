<section class="mb-3">
    <div class="container-fluid py-3 p-md-5">
        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success" role="alert">
                <?= $_SESSION['success'];
                unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['errors'])): ?>
            <div class="alert alert-danger" role="alert">
                <?= $_SESSION['errors'];
                unset($_SESSION['errors']); ?>
            </div>
        <?php endif; ?>

        <div class="mb-3">
            <h1>Innovations</h1>
        </div>
        <div>
            <?php if ($innovations): ?>
                <div class="row">
                    <?php foreach ($innovations as $innovation): ?>
                        <div class="col-12 col-sm-6 col-md-4 mb-4 card-group">
                            <div class="card border-light">
                                <img src="<?= $innovation['image_path']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $innovation['name']; ?></h5>
                                    <p class="card-text"><?= $innovation['description']; ?></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                  <li class="list-group-item border-light">
                                    <b>Автор:</b> <?= $innovation['author']; ?>
                                  </li>
                                  <li class="list-group-item border-light">
                                    <b>Рынок:</b> <?= $innovation['market_types']; ?>
                                  </li>
                                  <li class="list-group-item border-light">
                                    <b>Стадия:</b> <?= $innovation['current_stage']; ?>
                                  </li>
                                  <li class="list-group-item border-light">
                                    <b>Инвестиции:</b> <?= $innovation['money_needed']; ?>
                                  </li>
                                </ul>
                                <div class="card-footer bg-white border-light">
                                    <a href="?item=<?= $innovation['id']; ?>" class="btn-custom btn-custom-outline-blue btn-block">подробнее »</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <div class="col-12 col-md-6 mx-auto p-5">
                    <h2 class="display-4 text-center">Nothing found according to you request</h2>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>