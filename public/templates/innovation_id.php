<section class="py-5 bg-sepia">
    <div class="container">
        <div class="row justify-content-between align-items-top mb-4">
            <div class="col-12 col-lg-4 order-2 order-lg-1">
                <?php if (!empty($innovation['main_image_path'])): ?>
                    <img src="<?= $innovation['main_image_path']; ?>" class="shadowed rounded-10 img-fluid mb-3"
                         alt="<?= $innovation['name']; ?>">
                <?php endif; ?>

                <?php if (!empty($innovation['author'])): ?><p><b><?= $author; ?>
                        :</b> <?= $innovation['author']; ?>.</p><?php endif; ?>
                <?php if (!empty($innovation['market_types'])): ?><p><b><?= $market; ?>
                        :</b> <?= $innovation['market_types']; ?>.</p><?php endif; ?>
                <?php if (!empty($innovation['current_stage'])): ?><p><b><?= $stage; ?>
                        :</b> <?= $innovation['current_stage']; ?>.</p><?php endif; ?>
                <?php if (!empty($innovation['money_needed'])): ?><p><b><?= $money; ?>
                        :</b> <?= $innovation['money_needed']; ?>.</p><?php endif; ?>

            </div>

            <div class="col-12 col-lg-7 order-1 order-lg-2">
                <h2 class="display-4 font-weight-bold mt-3 mt-md-0 xs-hide sm-hide"><?= $innovation['name']; ?></h2>
                <h2 class="display-6 font-weight-bold mt-3 mt-md-0 md-hide lg-hide xl-hide"><?= $innovation['name']; ?></h2>

                <?php if (!empty($innovation['short_description'])): ?>
                    <p><?= $innovation['short_description']; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="bg-white py-5" id="review">
    <div class="container-fluid">

        <div class="row justify-content-around">
            <?php if (!empty($innovation['description'])):; ?>
                <div class="col-12 col-lg-4 mb-5 mb-lg-0">
                    <h3 class="text-center"><?= $description; ?></h3>
                    <hr class="yellow short-center">
                    <?= $innovation['description']; ?>
                </div>
            <?php endif; ?>

                <div class="col-12 col-lg-7">
                    <?php if (!empty($innovation['roadmap']) or !empty($innovation['competitive_ability']) or !empty($innovation['market_and_appliance']) or !empty($innovation['partnership'])):; ?>
                    <ul class="nav nav-pills nav-fill mb-3" role="tablist">

                        <?php if (!empty($innovation['roadmap'])):; ?>
                            <li class="nav-item">
                                <a class="nav-link active" id="roadmap-tab" data-toggle="tab" href="#roadmap" role="tab"
                                   aria-controls="roadmap" aria-selected="true"><?= $roadmap; ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($innovation['competitive_ability'])):; ?>
                            <li class="nav-item">
                                <a class="nav-link" id="competitive-tab" data-toggle="tab" href="#competitive"
                                   role="tab"
                                   aria-controls="competitive" aria-selected="false"><?= $competitive_ability; ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($innovation['market_and_appliance'])):; ?>
                            <li class="nav-item">
                                <a class="nav-link" id="appliance-tab" data-toggle="tab" href="#appliance" role="tab"
                                   aria-controls="appliance" aria-selected="false"><?= $appliance; ?></a>
                            </li>
                        <?php endif; ?>

                        <?php if (!empty($innovation['partnership'])):; ?>
                            <li class="nav-item">
                                <a class="nav-link" id="partnership-tab" data-toggle="tab" href="#partnership"
                                   role="tab"
                                   aria-controls="partnership" aria-selected="false"><?= $partnership; ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>

                    <div class="tab-content shadowed rounded-10 p-5 mb-5">

                        <?php if (!empty($innovation['roadmap'])): ; ?>
                            <div class="tab-pane fade show active" id="roadmap" role="tabpanel"
                                 aria-labelledby="roadmap-tab">
                                <?= $innovation['roadmap']; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($innovation['competitive_ability'])): ; ?>
                            <div class="tab-pane fade" id="competitive" role="tabpanel"
                                 aria-labelledby="competitive-tab">
                                <?= $innovation['competitive_ability']; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($innovation['market_and_appliance'])): ; ?>
                            <div class="tab-pane fade" id="appliance" role="tabpanel" aria-labelledby="appliance-tab">
                                <?= $innovation['market_and_appliance']; ?>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($innovation['partnership'])): ; ?>
                            <div class="tab-pane fade" id="partnership" role="tabpanel"
                                 aria-labelledby="partnership-tab">
                                <?= $innovation['partnership']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <div class="сol-12 col-lg-5">
                        <?php if (!empty($innovation['poll_link_url'])): ?>
                            <a class="btn-custom btn-custom-outline-blue btn-block"
                               href="<?= $innovation['poll_link_url']; ?>"
                               target="_blank"><?= $btn_poll; ?></a>
                        <?php endif; ?>

                        <?php if (!empty($innovation['presentation_link'])): ?>
                            <a class="btn-custom btn-custom-outline-blue btn-block"
                               href="<?= $innovation['presentation_link']; ?>"
                               target="_blank"><?= $btn_presentation; ?></a>

                        <?php endif; ?>
                        <?php if (!empty($innovation['tech_offer_link'])): ?>

                            <a class="btn-custom btn-custom-outline-blue btn-block"
                               href="<?= $innovation['tech_offer_link']; ?>"
                               target="_blank"><?= $btn_tech_offer; ?></a>
                        <?php endif; ?>
                    </div>
                </div>
        </div>
    </div>
</section>

<section style="min-height: 100vh" class="bg-white py-5" id="contact">
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
    </div>
</section>
