<section class="bg-white" id="about" style="min-height: 100vh; position: relative">
  <div class="container-slider">
    <div data-am-fadeshow="next-prev-navigation">

      <!-- Radio -->
      <input type="radio" name="css-fadeshow" id="slide-1">
      <input type="radio" name="css-fadeshow" id="slide-2">
      <input type="radio" name="css-fadeshow" id="slide-3">
      <input type="radio" name="css-fadeshow" id="slide-4">

      <!-- Slides -->
      <div class="fs-slides">
        <div class="fs-slide" id="slider-bg-1">
          <div class="slider-bg">
            <img src="../img/logo.png" width="100" height="100" alt="">
            <h1 class="xs-hide sm-hide display-3 font-weight-bold"><?= $slider_header_1; ?></h1>
            <h2 class="md-hide lg-hide xl-hide font-weight-bold"><?= $slider_header_1; ?></h2>
            <hr class="yellow short-center">
            <p class="lead font-weight-bold"><?= $slider_paragraph_1; ?></p>
          </div>
        </div>

        <div class="fs-slide" id="slider-bg-2">
          <div class="slider-bg">
            <img src="../img/onu.png" width="100" height="100" alt="">
            <h1 class="xs-hide sm-hide font-weight-bold"><?= $slider_header_2; ?></h1>
            <h2 class="md-hide lg-hide xl-hide font-weight-bold"><?= $slider_header_2; ?></h2>
            <hr class="yellow short-center">
            <p class="lead font-weight-bold"><?= $slider_paragraph_2; ?></p>
          </div>
        </div>

        <div class="fs-slide" id="slider-bg-3">
          <div class="slider-bg">
            <h1 class="xs-hide sm-hide font-weight-bold"><?= $slider_header_3; ?></h1>
            <h2 class="md-hide lg-hide xl-hide font-weight-bold"><?= $slider_header_3; ?></h2>
            <hr class="yellow short-center">
            <p class="lead font-weight-bold"><?= $slider_paragraph_3; ?></p>
          </div>
        </div>

        <div class="fs-slide" id="slider-bg-4">
          <div class="slider-bg">
            <h1 class="xs-hide sm-hide font-weight-bold"><?= $slider_header_4; ?></h1>
            <h2 class="md-hide lg-hide xl-hide font-weight-bold"><?= $slider_header_4; ?></h2>
            <hr class="yellow short-center">
            <p class="lead font-weight-bold"><?= $slider_paragraph_4; ?></p>
          </div>
        </div>
      </div>

      <!-- Quick Navigation -->
      <div class="fs-quick-nav">
        <label class="fs-quick-btn" for="slide-1"></label>
        <label class="fs-quick-btn" for="slide-2"></label>
        <label class="fs-quick-btn" for="slide-3"></label>
        <label class="fs-quick-btn" for="slide-4"></label>
      </div>

      <!-- Prev Navigation -->
      <div class="fs-prev-nav">
        <label class="fs-prev-btn" for="slide-1"></label>
        <label class="fs-prev-btn" for="slide-2"></label>
        <label class="fs-prev-btn" for="slide-3"></label>
        <label class="fs-prev-btn" for="slide-4"></label>
      </div>

      <!-- Next Navigation -->
      <div class="fs-next-nav">
        <label class="fs-next-btn" for="slide-1"></label>
        <label class="fs-next-btn" for="slide-2"></label>
        <label class="fs-next-btn" for="slide-3"></label>
        <label class="fs-next-btn" for="slide-4"></label>
      </div>
    </div>
  </div>
</section>

<section class="bg-white shadowed py-5 px-3" id="mission" style="min-height: 100vh">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-6 mx-auto mb-5">
        <h1 class="text-center text-dark"><?= $mission_header; ?></h1>
        <hr class="yellow short-center">
        <p class="lead font-weight-bold"><?= $mission_paragraph; ?></p>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
        <h1 class="text-center text-dark"><?= $principles_header; ?></h1>
        <hr class="red short-center">
        <div class="row justify-content-center">
          <div class="col-6 col-md-3 text-center mb-3 mb-md-0">
            <img src="../img/report.svg" height="100" alt="" class="mb-3">
            <p class="lead font-weight-bold text-center"><?= $transparency; ?></p>
          </div>
          <div class="col-6 col-md-3 text-center mb-3 mb-md-0">
            <img src="../img/open.svg" height="100" alt="" class="mb-3">
            <p class="lead font-weight-bold text-center"><?= $openness; ?></p>
          </div>
          <div class="col-6 col-md-3 text-center mb-3 mb-md-0">
            <img src="../img/authorize.svg" height="100" alt="" class="mb-3">
            <p class="lead font-weight-bold text-center"><?= $officiality; ?></p>
          </div>
          <div class="col-6 col-md-3 text-center">
            <img src="../img/goal.svg" height="100" alt="" class="mb-3">
            <p class="lead font-weight-bold text-center"><?= $goals; ?></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!--<section class="bg-light shadowed py-5 px-3" id="roadmap" style="min-height: 100vh">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-11 mx-auto">
        <div class="row justify-content-around">
          <div class="col-12 mb-3">
            <h1 class="text-dark">How we work</h1>
            <hr class="red long-left">
          </div>
          <div class="col-12 col-md-8 mb-3 mb-md-0">
            <ol>
              <li>
                <b>КОМПАНИЯ + НАШИ ПРЕДЛОЖЕНИЯ</b><br>
                Вас заинтересовала та или иная отрасль в университете
              </li>
              <li>
                <b>ЗАПРОС ОТ КОМПАНИИ</b><br>
                Вы рассказываете подробнее, как видите сотрудничество, или же мы предлагаем
                варианты
              </li>
              <li>
                <b>ОДОБРЕНИЕ УНИВЕРСИТЕТА</b><br>
                Мы проверяем техническую возможность университета выполнить задачу
              </li>
              <li>
                <b>ДОРОЖНАЯ КАРТА</b><br>
                Вместе с Вами (а в некоторых случаях и с университетом) мы прописываем дорожную
                карту
              </li>
              <li>
                <b>ПОДПИСАНИЕ СОГЛАШЕНИЙ</b><br>
                Мы подписываем договор с Вами и университетом, к которому прикрепляются ТЗ и
                дополнительные документы, если таковые имеются
              </li>
              <li>
                <b>РЕАЛИЗАЦИЯ ПРОЕКТА</b><br>
                Мы начинаем сотрудничество
              </li>
              <li>
                <b>РЕЗУЛЬТАТ</b><br>
                Вы получаете результат, а университет применяет и развивает инновации, делает
                образование и науку практичнее, чтобы в следующий раз предоставить Вам еще более
                качественный продукт
              </li>
            </ol>
          </div>
          <div class="col-12 col-md-2">
            <a class="btn-custom btn-custom-outline-blue btn-block" href="/activities">Продукты</a>
            <a class="btn-custom btn-custom-outline-blue btn-block" href="/partners">Партнеры</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->

<section class="bg-light shadowed py-5 px-3" id="team" style="min-height: 100vh">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-11 mx-auto">
        <div class="col-12 mb-3 text-center">
          <h1 class="text-dark"><?= $team_header; ?></h1>
          <hr class="yellow short-center">
        </div>
        <div class="col-12 mx-auto">
          <div class="row">
            <div class="col-12 col-md-4 mb-3 mb-md-0 text-center">
              <img class="rounded-circle img-fluid d-block mx-auto mb-2" src="../img/chernetsky.jpg"
                   alt="" width="250px">
              <h3 class="text-dark"><?= $alex; ?><br>
                <small><?= $lawyer; ?></small>
              </h3>
              <a
                href="https://www.linkedin.com/in/%D0%B0%D0%BB%D0%B5%D0%BA%D1%81%D0%B5%D0%B9-%D1%87%D0%B5%D1%80%D0%BD%D0%B5%D1%86%D0%BA%D0%B8%D0%B9-81b140149/"
                target="_blank">
                  <span style="font-size: 2em; color: #457677;">
                      <i class="fab fa-linkedin"></i>
                  </span>
              </a>
            </div>

            <div class="col-12 col-md-4 mb-3 mb-md-0 text-center">
              <img class="rounded-circle img-fluid d-block mx-auto mb-2" src="../img/koyen.jpg"
                   alt="" width="250px">
              <h3 class="text-dark"><?= $pavel; ?><br>
                <small><?= $founder; ?></small>
              </h3>
              <a href="https://www.linkedin.com/in/pavelkoyen/" target="_blank">
                                <span style="font-size: 2em; color: #457677;">
                                    <i class="fab fa-linkedin"></i>
                                </span>
              </a>
            </div>

            <div class="col-12 col-md-4 mb-3 mb-md-0 text-center">
              <img class="rounded-circle img-fluid d-block mx-auto mb-2" src="../img/dolzhenko.jpg"
                   alt="" width="250px">
              <h3 class="text-dark"><?= $maksym; ?><br>
                <small><?= $advisor; ?></small>
              </h3>
              <a href="https://www.linkedin.com/in/maksymdolzhenko/" target="_blank">
                                <span style="font-size: 2em; color: #457677;">
                                    <i class="fab fa-linkedin"></i>
                                </span>
              </a>
            </div>
          </div>
          <div class="row mt-3">
            <div class="col-12">
              <h3 class="text-center font-weight-bold">+<br>
                  <?= $students_staff; ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-light shadowed py-5 px-3" id="documents" style="min-height: 100vh">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 mb-3 text-center">
        <h1><?= $docs_header; ?></h1>
        <hr class="yellow short-center">
      </div>
      <div class="col-12 mx-auto mt-5">
        <div class="row mb-md-5 justify-content-center">
          <div class="card shadowed text-center col-12 col-md-3 mr-md-3 mb-3 mb-md-0">
            <div class="card-body px-0">
              <img src="../img/pdf.svg" height="30" alt="">
              <p class="card-text">
                <a class="nav-link" href="/docs/ONU_profile.pdf"><?= $university_profile; ?></a>
              </p>
            </div>
          </div>

          <div class="card shadowed text-center col-12 col-md-3 ml-md-3 mb-3 mb-md-0">
            <div class="card-body px-0">
              <img src="../img/pdf.svg" height="30" alt="">
              <p class="card-text">
                <a class="nav-link" href="/docs/Partnership_presentation.pdf"><?= $our_presentation; ?></a>
              </p>
            </div>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="card shadowed text-center col-12 col-md-3 mr-md-3 mb-3 mb-md-0">
            <div class="card-body px-0">
              <img src="../img/pdf.svg" height="30" alt="">
              <p class="card-text">
                <a class="nav-link" href="/docs/Statut_ONU.pdf"><?= $onu_statute; ?></a>
              </p>
            </div>
          </div>

          <div class="card shadowed text-center col-12 col-md-3 ml-md-3">
            <div class="card-body">
              <img src="../img/doc.svg" height="30" alt="">
              <p class="card-text">
                <a class="nav-link" href="/docs/Statut_FIS.docx"><?= $fis_statute; ?></a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="bg-white shadowed py-5 px-3" id="contact" style="min-height: 100vh">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-11 mx-auto">
        <div class="row">
          <div class="col-12 mb-3">
            <h1><?= $contact_us; ?></h1>
            <hr class="red long-left">
          </div>
          <div class="col-12 col-md-8 mb-5 mb-md-0 justify-content-between">
            <form class="custom-form" method="post" action="index.php#contact">
                <input type="hidden" name="token" id="token">
                <input type="hidden" name="action" id="action">
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
              <button type="submit" class="disabled btn-custom btn-custom-outline-blue btn-block"><?= $btn_send; ?>
              </button>
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

          <div class="col-12 col-md-3 text-center text-md-left ml-auto">
            <address>
              <strong><?= $fund_name; ?></strong>
              <br><?= $address; ?>
            </address>
            <address>
              <p><?= $label_phone; ?>:
                <br><a href="tel:+380995250511">+380 99 525 05 11</a>
              </p>
              <p>E-mail:
                <br><a href="mailto:innovationfund@onu.edu.ua">innovationfund@onu.edu.ua</a>
              </p>
            </address>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>