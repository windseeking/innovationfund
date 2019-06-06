<div class="row">
    <div class="col-12 col-md-11 mx-auto">
        <div class="accordion science-field" id="accordion">
            <div class="card natural-sci">
                <div class="card-header bg-white" id="headingOne">
                    <h3 class="mb-0">
                        <button class="btn btn-link text-left" type="button" data-toggle="collapse"
                                data-target="#collapse-one"
                                aria-expanded="false" aria-controls="collapse-one">
                            <?= $natural; ?>
                        </button>
                    </h3>
                </div>
                <div id="collapse-one" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h4><?= $products; ?></h4>
                                <ul class="bullet-list">
                                    <?= $common_prod_list; ?>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6">
                                <h4><?= $faculties; ?></h4>
                                <ul class="bullet-list natural-sci">
                                    <li><?= $n_f_item_1; ?></li>
                                    <li><?= $n_f_item_2; ?></li>
                                    <li><?= $n_f_item_3; ?></li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6">
                                <h4><?= $research; ?></h4>
                                <ul class="bullet-list natural-sci">
                                    <li><?= $n_r_item_1; ?></li>
                                    <li><?= $n_r_item_2; ?></li>
                                    <li><?= $n_r_item_3; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card social-sci">
                <div class="card-header bg-white" id="headingTwo">
                    <h3 class="mb-0">
                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                data-target="#collapse-two"
                                aria-expanded="false" aria-controls="collapse-two">
                            <?= $social; ?>
                        </button>
                    </h3>
                </div>
                <div id="collapse-two" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-12 col-md-6">
                                <h4><?= $products; ?></h4>
                                <ul class="bullet-list">
                                    <?= $common_prod_list; ?>
                                    <?= $s_prod_list; ?>
                                </ul>
                            </div>

                            <div class="col-12 col-md-6">
                                <h4><?= $faculties; ?></h4>
                                <ul class="bullet-list">
                                    <li><?= $s_f_item_1; ?></li>
                                    <li><?= $s_f_item_2; ?></li>
                                    <li><?= $s_f_item_3; ?></li>
                                    <li><?= $s_f_item_4; ?></li>
                                </ul>
                                <h4><?= $research; ?></h4>
                                <ul class="bullet-list">
                                    <li><?= $s_r_item_1; ?></li>
                                    <li><?= $s_r_item_2; ?></li>
                                    <li><?= $s_r_item_3; ?></li>
                                    <li><?= $s_r_item_4; ?></li>
                                    <li><?= $s_r_item_5; ?></li>
                                </ul>
                            </div>
                        </div>

                        <div class="row justify-content-center">
                            <div class="col-12 col-md-3 mx-auto mb-3 mb-md-0">
                                <a class="btn-custom btn-custom-outline-blue btn-block" href="../../index.php#contact"
                                   target="_blank"><?= $btn_consult; ?></a>
                            </div>
                            <div class="col-12 col-md-3 mx-auto mb-3 mb-md-0">
                                <a class="btn-custom btn-custom-outline-blue btn-block"
                                   href="https://drive.google.com/file/d/1n0RU7gIBPl3-4nluZ_5QDz6roWkf95Dw/view"
                                   target="_blank"><?= $brn_cv; ?></a>
                            </div>
                            <div class="col-12 col-md-3 mx-auto mb-3 mb-md-0">
                                <a class="btn-custom btn-custom-outline-blue btn-block" href="#"
                                   target="_blank"><?= $btn_contract; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card humanitarian-sci">
                <div class="card-header bg-white" id="headingThree">
                    <h3 class="mb-0">
                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                data-target="#collapse-three"
                                aria-expanded="false" aria-controls="collapse-three">
                            <?= $humanitarian; ?>
                        </button>
                    </h3>
                </div>
                <div id="collapse-three" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h4><?= $products; ?></h4>
                                <ul class="bullet-list">
                                    <?= $common_prod_list; ?>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6">
                                <h4><?= $faculties; ?></h4>
                                <ul class="bullet-list">
                                    <li><?= $h_f_item_1; ?></li>
                                    <li><?= $h_f_item_2; ?></li>
                                    <li><?= $h_f_item_3; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mathematical-sci">
                <div class="card-header bg-white" id="headingFour">
                    <h3 class="mb-0">
                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                data-target="#collapse-four"
                                aria-expanded="false" aria-controls="collapse-four">
                            <?= $math; ?>
                        </button>
                    </h3>
                </div>
                <div id="collapse-four" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <h4><?= $products; ?></h4>
                                <ul class="bullet-list">
                                    <?= $common_prod_list; ?>
                                </ul>
                            </div>
                            <div class="col-12 col-md-6">
                                <h4><?= $specs; ?></h4>
                                <ul class="bullet-list">
                                    <li><?= $f_s_item_1; ?></li>
                                    <li><?= $f_s_item_2; ?></li>
                                    <li><?= $f_s_item_3; ?></li>
                                    <li><?= $f_s_item_4; ?></li>
                                    <li><?= $f_s_item_5; ?></li>
                                    <li><?= $f_s_item_6; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card other-sci">
                <div class="card-header bg-white" id="headingFive">
                    <h3 class="mb-0">
                        <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                                data-target="#collapse-five"
                                aria-expanded="false" aria-controls="collapse-five">
                            <?= $other; ?>
                        </button>
                    </h3>
                </div>
                <div id="collapse-five" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <ul class="bullet-list">
                                    <li><?= $other_item_1; ?></li>
                                    <li><?= $other_item_2; ?></li>
                                    <li><?= $other_item_3; ?></li>
                                    <li><?= $other_item_4; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>