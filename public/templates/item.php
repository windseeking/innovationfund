<section class="py-5 bg-blue" id="review">
  <div class="container">
    <div class="row justify-content-between align-items-center mb-4">
      <div class="col-12 col-md-7 order-2 order-md-1">
        <h2 class="display-4 text-white font-weight-bold mt-3 mt-md-0"><?= $innovation['name']; ?></h2>
        <hr class="yellow long-left">
        <p class="lead text-dark font-weight-bold"><?= $innovation['description']; ?></p>
        <p class="text-white"><b>Рынки:</b> <?= $innovation['market_types']; ?>.</p>
        <p class="text-white"><b>Стадия:</b> <?= $innovation['current_stage']; ?>.</p>
        <p class="text-white"><b>Инвестиции:</b> <?= $innovation['money_needed']; ?>.</p>
      </div>

      <div class="col-12 col-md-5 order-1 order-md-2">
        <img src="<?= $innovation['image_path']; ?>" class="rounded-circle bd-yellow img-fluid"
             alt="<?= $innovation['name']; ?>">
      </div>
    </div>

    <div class="row justify-content-center">
      <ul class="nav nav-hover-yellow justify-content-center order-3">
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#roadmap">План развития</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#market">Рынок</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#analogues">Аналоги и преимущества</a>
        </li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#appliance">Применение</a>
        </li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#actuality">Актуальность</a>
        </li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Связаться</a></li>
      </ul>
    </div>
  </div>
</section>

<section style="min-height: 100vh" class="shadowed bg-light py-5" id="roadmap">
  <div class="container py-3 p-md-5">
    <h2 class="display-5 text-center">План развития</h2>
    <hr class="yellow short-center mb-5">
    <div class="row">
      <div class="col-12 col-md-6 mx-auto">
          <?= $innovation['road_map']; ?>
      </div>
    </div>
  </div>
</section>

<section style="min-height: 100vh" class="shadowed bg-blue py-5" id="market">
  <div class="container py-3 p-md-5">
    <h2 class="display-5 text-center text-white">Рынок</h2>
    <hr class="yellow short-center mb-5">
    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
        <p class="lead text-white"><?= $innovation['market']; ?></p>
      </div>
    </div>
  </div>
</section>

<section style="min-height: 100vh" class="shadowed bg-light py-5" id="analogues">
  <div class="container py-3 p-md-5">
    <h2 class="display-5 text-center">Аналоги и преимущества</h2>
    <hr class="yellow short-center mb-5">
    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
        <p class="lead"><?= $innovation['analogues']; ?></p>
      </div>
    </div>
  </div>
</section>

<section style="min-height: 100vh" class="shadowed bg-blue py-5" id="appliance">
  <div class="container py-3 p-md-5">
    <h2 class="display-5 text-center text-white">Применение</h2>
    <hr class="yellow short-center mb-5">
    <?= $innovation['appliance'] ;?>
  </div>
</section>

<section style="min-height: 100vh" class="shadowed bg-light py-5" id="actuality">
  <div class="container py-3 p-md-5">
    <h2 class="display-5 text-center">Актуальность</h2>
    <hr class="yellow short-center mb-5">
    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
        <p class="lead">Нам важна обратная связь от потенциальных пользователей. Просим уделить несколько минут
          Вашего времени,
          ответив на несколько вопросов.</p>
        <div class="text-center">
          <a class="btn-custom btn-custom-outline-blue"
             href="https://docs.google.com/forms/d/e/1FAIpQLSeaqPXAgZPbQQYxKGJiAUzRRwhXyN4FVoR6Os_4Z4zxibgY9w/viewform"
             target="_blank">перейти к опросу</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section style="min-height: 100vh" class="shadowed bg-white py-5" id="contact">
  <div class="container py-3 p-md-5">
    <h2 class="display-5">Для получения дополнительной
      информации обратитесь
      к нам</h2>
    <hr class="red long-left mb-5">
    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
        <form class="custom-form" method="post" action="#contact">
          <div class="form-group">
            <label for="name">Имя <sup>*</sup></label>
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
            <label for="email">Email <sup>*</sup></label>
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
            <label for="message">Сообщение <sup>*</sup></label>
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
          <button type="submit" class="disabled btn-custom btn-custom-outline-blue btn-block">Связаться
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
    </div>
    <div class="row justify-content-center mt-5">
      <ul class="nav nav-hover-red">
        <li class="nav-item font-weight-bold"><a class="nav-link js-scroll-trigger" href="#review">В начало</a>
        </li>
      </ul>
    </div>
  </div>
</section>
