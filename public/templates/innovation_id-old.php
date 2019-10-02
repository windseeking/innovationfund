<section class="py-5 bg-blue mt-4" id="review">
    <div class="container">
        <div class="row justify-content-between align-items-center mb-4">
            <div class="col-12 col-md-7 order-2 order-md-1">
                <h2 class="display-4 text-white font-weight-bold mt-3 mt-md-0 xs-hide sm-hide"><?= $innovation['name']; ?></h2>
                <h2 class="display-6 text-white font-weight-bold mt-3 mt-md-0 md-hide lg-hide xl-hide"><?= $innovation['name']; ?></h2>
                <hr class="yellow long-left">
                <?php if (!empty($innovation['short_description'])): ?><p
                        class="lead text-dark font-weight-bold"><?= $innovation['short_description']; ?></p><?php endif; ?>
                <?php if (!empty($innovation['market_types'])): ?><p class="text-white"><b><?= $market; ?>
                        :</b> <?= $innovation['market_types']; ?>.</p><?php endif; ?>
                <?php if (!empty($innovation['current_stage'])): ?><p class="text-white"><b><?= $stage; ?>
                        :</b> <?= $innovation['current_stage']; ?>.</p><?php endif; ?>
                <?php if (!empty($innovation['money_needed'])): ?><p class="text-white"><b><?= $money; ?>
                        :</b> <?= $innovation['money_needed']; ?>.</p><?php endif; ?>
            </div>

            <?php if (!empty($innovation['main_image_path'])): ?>
                <div class="col-12 col-md-5 order-1 order-md-2">
                    <img src="<?= $innovation['main_image_path']; ?>" class="rounded-circle bd-yellow img-fluid"
                         alt="<?= $innovation['name']; ?>">
                </div>
            <?php endif; ?>
        </div>

        <div class="row justify-content-center">
            <ul class="nav nav-hover-red justify-content-center order-3">
                <?php if (!empty($innovation['description'])): ; ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger"
                                            href="#description"><?= $description; ?></a></li>
                <?php endif; ?>
                <?php if (!empty($innovation['roadmap'])): ; ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#roadmap"><?= $roadmap; ?></a></li>
                <?php endif; ?>
                <?php if (!empty($innovation['competitive_ability'])): ; ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger"
                                            href="#analogues"><?= $competitive_ability; ?></a>
                    </li>
                <?php endif; ?>
                <?php if (!empty($innovation['market_and_appliance'])): ; ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#appliance"><?= $appliance; ?></a>
                    </li>
                <?php endif; ?>
                <?php if (!empty($innovation['poll_link_url'])): ; ?>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#actuality"><?= $poll_title; ?></a>
                    </li>
                <?php endif; ?>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact"><?= $contact_menu; ?></a>
                </li>
            </ul>
        </div>
    </div>
</section>

<?php if (!empty($innovation['description'])): ; ?>
    <section style="min-height: 100vh" class="shadowed bg-white py-5" id="description">
        <div class="container py-3 p-md-5">
            <h2 class="display-5 text-center"><?= $description; ?></h2>
            <hr class="yellow short-center mb-5">
            <div class="row mb-3">
                <div class="col-12 col-md-8 mx-auto">
                    <?= $innovation['description']; ?>
                </div>
            </div>
            <div class="row justify-content-center">
                <?php if (!empty($innovation['tech_offer_link'])): ?>
                    <div class="col-12 col-md-3 mx-auto mb-3 mb-md-0">
                        <a class="btn-custom btn-custom-outline-blue btn-block" href="<?= $innovation['tech_offer_link']; ?>"
                           target="_blank">Technology offer</a>
                    </div>
                <?php endif; ?>
                <?php if (!empty($innovation['presentation_link'])): ?>
                    <div class="col-12 col-md-3 mx-auto mb-3 mb-md-0">
                        <a class="btn-custom btn-custom-outline-blue btn-block"
                           href="<?= $innovation['presentation_link']; ?>"
                           target="_blank">Presentation</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (!empty($innovation['roadmap'])): ; ?>
    <section style="min-height: 100vh" class="shadowed bg-light py-5" id="roadmap">
        <div class="container py-3 p-md-5">
            <h2 class="display-5 text-center"><?= $roadmap; ?></h2>
            <hr class="yellow short-center mb-5">
            <div class="row">
                <div class="col-12 col-md-6 mx-auto">
                    <?= $innovation['roadmap']; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (!empty($innovation['competitive_ability'])): ; ?>
    <section style="min-height: 100vh" class="shadowed bg-light py-5" id="analogues">
        <div class="container py-3 p-md-5">
            <h2 class="display-5 text-center"><?= $competitive_ability; ?></h2>
            <hr class="yellow short-center mb-5">
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
                    <p class="lead"><?= $innovation['competitive_ability']; ?></p>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<?php if (!empty($innovation['market_and_appliance'])): ; ?>
    <section style="min-height: 100vh" class="shadowed bg-light py-5" id="appliance">
        <div class="container py-3 p-md-5">
            <h2 class="display-5 text-center"><?= $appliance; ?></h2>
            <hr class="yellow short-center mb-5">
            <?= $innovation['market_and_appliance']; ?>
        </div>
    </section>
<?php endif; ?>


<?php if (!empty($innovation['poll_link_url'])): ; ?>
    <section style="min-height: 100vh" class="shadowed bg-light py-5" id="actuality">
        <div class="container py-3 p-md-5">
            <h2 class="display-5 text-center"><?= $poll_title; ?></h2>
            <hr class="yellow short-center mb-5">
            <div class="row">
                <div class="col-12 col-md-8 mx-auto">
                    <p class="lead"><?= $poll_text; ?></p>
                    <div class="text-center">
                        <a class="btn-custom btn-custom-outline-blue"
                           href="<?= $innovation['poll_link_url']; ?>"
                           target="_blank"><?= $btn_poll; ?> »</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<section style="min-height: 100vh" class="shadowed bg-white py-5" id="contact">
    <div class="container py-3 p-md-5">
        <h2 class="display-5"><?= $contact_title; ?></h2>
        <hr class="red long-left mb-5">
        <div class="row">
            <div class="col-12 col-md-8 mx-auto">
                <form class="custom-form" method="post" action="#contact">
                    <div class="form-group">
                        <label for="name"><?= $label_name; ?> <sup>*</sup></label>
                        <?php $class = isset($errors['name']) ? 'is-invalid' : '';
                        $value = isset($contact['name']) ? $contact['name'] : ''; ?>
                        <input name="contact[name]" type="text" class="form-control <?= $class; ?>" id="name"
                               value="<?= $value; ?>">
                        <?php if (isset($errors['name'])): ; ?>
                            <div class="invalid-feedback">
                                <?= $errors['name']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="email"><?= $label_email; ?> <sup>*</sup></label>
                        <?php $class = isset($errors['email']) ? 'is-invalid' : '';
                        $value = isset($contact['email']) ? $contact['email'] : ''; ?>
                        <input name="contact[email]" type="email" class="form-control <?= $class; ?>" id="email"
                               placeholder="name@example.com" value="<?= $value; ?>">
                        <?php if (isset($errors['email'])): ; ?>
                            <div class="invalid-feedback">
                                <?= $errors['email']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="form-group">
                        <label for="message"><?= $label_message; ?> <sup>*</sup></label>
                        <?php $class = isset($errors['message']) ? 'is-invalid' : '';
                        $value = isset($contact['message']) ? $contact['message'] : ''; ?>
                        <textarea name="contact[message]" class="form-control <?= $class; ?>" id="message"
                                  rows="5"><?= $value; ?></textarea>
                        <?php if (isset($errors['message'])): ; ?>
                            <div class="invalid-feedback">
                                <?= $errors['message']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="g-recaptcha" data-sitekey="6LdLFq8UAAAAAODmNIvDXVFf36LwBDqKpKqCeqom"></div>
                    <input type="submit" value="<?= $btn_send; ?>" name="contact[captcha]"
                           class="mt-3 btn-custom btn-custom-outline-blue btn-block">

                    <?php if (isset($errors['captcha'])): ; ?>
                        <div class="invalid-feedback">
                            <?= $errors['captcha']; ?>
                        </div>
                    <?php endif; ?>
                </form>
                <?php if (isset($_SESSION['errors'])): ?>
                    <div class="alert alert-danger mt-3" role="alert">
                        <?= $_SESSION['errors'];
                        unset($_SESSION['errors']); ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($_SESSION['success'])): ?>
                    <div class="alert alert-success mt-3" role="alert">
                        <?= $_SESSION['success'];
                        unset($_SESSION['success']); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <ul class="nav nav-hover-red">
                <li class="nav-item font-weight-bold"><a class="nav-link js-scroll-trigger"
                                                         href="#review"><?= $return_top; ?></a>
                </li>
            </ul>
        </div>
    </div>
</section>
