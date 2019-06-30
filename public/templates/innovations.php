<div class="container-fluid px-3 px-md-5 mb-3">
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

    <div class="row my-5">
        <div class="col-12 mx-auto">
            <div class="row justify-content-center">
                <div class="col-12 col-md-3 text-center ml-auto mb-3 mb-md-0">
                    <img src="../img/lightbulb.svg" height="100" alt="" class="mb-3">
                    <p class="text-center"><?= $creation_development; ?></p>
                </div>
                <div class="col-12 col-md-3 text-center mx-md-3 mb-3 mb-md-0">
                    <img src="../img/networking.svg" height="100" alt="" class="mb-3">
                    <p class="text-center"><?= $building_cooperation; ?></p>
                </div>
                <div class="col-12 col-md-3 text-center mr-auto">
                    <img src="../img/benefits.svg" height="100" alt="" class="mb-3">
                    <p class="text-center"><?= $attraction_investments; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col-10 col-md-6 mx-auto">
                    <div class="row justify-content-across">
                        <div class="col-12 col-md-5 ml-auto">
                            <a href="https://forms.gle/UeUnYyPGwuLT6Dxr9" target="_blank"
                               class="btn-custom btn-custom-outline-blue btn-block mb-3 mb-mb-0"><?= $btn_suggest; ?></a>
                        </div>
                        <div class="col-12 col-md-5 mr-auto">
                            <a href="https://forms.gle/UeUnYyPGwuLT6Dxr9" target="_blank"
                               class="btn-custom btn-custom-outline-blue btn-block"><?= $btn_apply; ?></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-3 mt-md-0">
                <div class="col-12 col-md-10 mx-auto">
                    <form method="get" action="innovations.php" class="form-inline md-form form-sm active-yellow mt-2 justify-content-center">
                        <span style="color: #5a6268"><i class="fas fa-search mr-3" aria-hidden="true"></i></span>
                        <input class="form-control form-control-sm mr-3 w-75" name="search" type="search" placeholder="<?= $search_placeholder ;?>"
                               aria-label="Search">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php if (!empty($innovations)): ?>
        <div class="row">
            <?php foreach ($innovations as $innovation): ?>
                <div class="col-12 col-sm-6 col-md-4 mb-4 card-group">
                    <div class="card shadowed border-light">
                        <?php if (!empty($innovation['main_image_path'])): ?>
                            <a href="?innovation_id=<?= $innovation['id']; ?>">
                                <img src="<?= $innovation['main_image_path']; ?>" class="card-img-top" alt="...">
                            </a>
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?= $innovation['name']; ?></h5>
                            <p class="card-text"><?= $innovation['short_description']; ?></p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <?php if (!empty($innovation['author'])): ?>
                                <li class="list-group-item border-light">
                                    <b><?= $author; ?>:</b> <?= $innovation['author']; ?>
                                </li>
                            <?php endif; ?>
                            <?php if (!empty($innovation['market_types'])): ?>
                                <li class="list-group-item border-light">
                                    <b><?= $market; ?>:</b> <?= $innovation['market_types']; ?>
                                </li>
                            <?php endif; ?>
                            <?php if (!empty($innovation['current_stage'])): ?>
                                <li class="list-group-item border-light">
                                    <b><?= $stage; ?>:</b> <?= $innovation['current_stage']; ?>
                                </li>
                            <?php endif; ?>
                            <?php if (!empty($innovation['money_needed'])): ?>
                                <li class="list-group-item border-light">
                                    <b><?= $money; ?>:</b> <?= $innovation['money_needed']; ?>
                                </li>
                            <?php endif; ?>
                        </ul>
                        <div class="card-footer bg-white border-light">
                            <a href="?innovation_id=<?= $innovation['id']; ?>"
                               class="btn-custom btn-custom-outline-blue btn-block"><?= $btn_more; ?>
                                »</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="col-12 col-md-6 mx-auto p-5">
            <h2 class="display-4 text-center"><?= $nothing_found; ?></h2>
        </div>
    <?php endif; ?>
</div>
