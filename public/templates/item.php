<section class="mb-3" id="review">
  <div class="container-fluid py-3 p-md-5">
    <div class="row justify-content-between mb-3">
      <div class="col-12 col-md-7 order-2 order-md-1">
        <h2 class="display-3 mb-3"><?= $innovation['name']; ?></h2>
        <p><?= $innovation['description']; ?></p>

        <div class="row justify-content-between mb-3">
          <div class="card border-secondary text-center col-12 col-md-3 mb-3 mb-md-0">
            <div class="card-body">
              <p class="card-title">рынки</p>
              <p class="card-text text-blue font-weight-bold"><?= $innovation['market_types']; ?></p>
            </div>
          </div>
          <div class="card border-secondary text-center col-12 col-md-5 mb-3 mb-md-0">
            <div class="card-body">
              <p class="card-title">стадия</p>
              <p class="card-text text-blue font-weight-bold"><?= $innovation['current_stage']; ?></p>
            </div>
          </div>
          <div class="card border-secondary text-center col-12 col-md-3">
            <div class="card-body">
              <p class="card-text">инвестиции</p>
              <p class="card-text text-blue font-weight-bold"><?= $innovation['money_needed']; ?></p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4 order-1 order-md-2">
        <img src="<?= $innovation['image_path']; ?>" class="rounded-circle img-fluid" alt="<?= $innovation['name']; ?>">
      </div>
    </div>

    <div class="row">
      <div class="col">
        <ul class="nav nav-tabs order-3 mb-3" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="roadmap-tab" data-toggle="tab" href="#roadmap" role="tab"
               aria-controls="roadmap" aria-selected="true">План развития</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="market-tab" data-toggle="tab" href="#market" role="tab" aria-controls="market"
               aria-selected="false">Рынок</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="analogues-tab" data-toggle="tab" href="#analogues" role="tab"
               aria-controls="analogues" aria-selected="false">Аналоги и преимущества</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="development-tab" data-toggle="tab" href="#development" role="tab"
               aria-controls="development" aria-selected="false">Развитие инновации</a>
          </li>
        </ul>

        <div class="col-12 col-md-7">
          <div class="tab-content order-4">
            <div class="tab-pane fade show active" id="roadmap" role="tabpanel" aria-labelledby="roadmap-tab">
                <?= $innovation['road_map']; ?>
            </div>

            <div class="tab-pane fade" id="market" role="tabpanel" aria-labelledby="market-tab">
                <?= $innovation['market']; ?>
            </div>

            <div class="tab-pane fade" id="analogues" role="tabpanel" aria-labelledby="analogues-tab">
                <?= $innovation['analogues']; ?>
            </div>

            <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="development-tab">
                <?= $innovation['development']; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!--<section class="mb-3" id="roadmap">-->
<!--  <div class="container py-3 p-md-5">-->
<!--    <h2 class="display-4 text-center">План развития</h2>-->
<!--    <div class="row">-->
<!--      <div class="col-12 col-md-8 mx-auto">-->
<!--          --><? //= $innovation['road_map']; ?>
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<!--<section class="mb-3" id="market">-->
<!--  <div class="container py-3 p-md-5">-->
<!--    <h2 class="display-4 text-center">Рынок</h2>-->
<!--    <div class="row">-->
<!--      <div class="col-12 col-md-8 mx-auto">-->
<!--          --><? //= $innovation['market']; ?>
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
<!--</section>-->

<!--<section class="mb-3" id="analogues">
  <div class="container py-3 p-md-5">
    <h2 class="display-4 text-center">Аналоги и преимущества</h2>
    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
          <? /*= $innovation['analogues']; */ ?>
      </div>
    </div>
  </div>
</section>-->

<!--<section id="development">
  <div class="container py-3 p-md-5">
    <h2 class="display-4 text-center">Развитие инновации</h2>
    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
          <? /*= $innovation['development']; */ ?>
      </div>
    </div>
  </div>
</section>-->

