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
      <ul class="nav nav-hover-red justify-content-center order-3">
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#roadmap">План развития</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#market">Рынок</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#analogues">Аналоги и преимущества</a></li>
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#development">Развитие инновации</a></li>
      </ul>
    </div>
  </div>
</section>

<section style="height: 100vh" class="bg-light py-5" id="roadmap">
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

<section style="height: 100vh" class="bg-blue py-5" id="market">
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

<section style="height: 100vh" class="bg-light py-5" id="analogues">
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

<section style="height: 100vh" class="bg-blue py-5" id="development">
  <div class="container py-3 p-md-5">
    <h2 class="display-5 text-center text-white">Развитие инновации</h2>
    <hr class="yellow short-center mb-5">
    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
        <?= $innovation['development']; ?>
      </div>
    </div>
    <div class="row justify-content-center mt-5">
      <ul class="nav nav-hover-red">
        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#review">В начало</a></li>
      </ul>
    </div>
  </div>
</section>

