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
    <div class="col-10 mx-auto">
      <div class="row justify-content-center">
        <div class="col-12 col-md-3 text-center ml-auto mb-3 mb-md-0">
          <img src="../img/lightbulb.svg" height="100" alt="" class="mb-3">
          <p class="text-center">Creation and development of innovations and technologies</p>
        </div>
        <div class="col-12 col-md-3 text-center mx-md-3 mb-3 mb-md-0">
          <img src="../img/networking.svg" height="100" alt="" class="mb-3">
          <p class="text-center">Building cooperations</p>
        </div>
        <div class="col-12 col-md-3 text-center mr-auto">
          <img src="../img/benefits.svg" height="100" alt="" class="mb-3">
          <p class="text-center">Attraction of investments</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md-6 mx-auto">
          <div class="row justify-content-across">
            <div class="col-12 col-md-5 ml-auto">
              <a href="https://forms.gle/UeUnYyPGwuLT6Dxr9" target="_blank"
                 class="btn-custom btn-custom-outline-blue btn-block mb-3 mb-mb-0">suggest an innovation</a>
            </div>
            <div class="col-12 col-md-5 mr-auto">
              <a href="https://forms.gle/UeUnYyPGwuLT6Dxr9" target="_blank"
                 class="btn-custom btn-custom-outline-blue btn-block">apply for cooperation</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php if ($innovations): ?>
      <div class="row">
          <?php foreach ($innovations as $innovation): ?>
            <div class="col-12 col-sm-6 col-md-4 mb-4 card-group">
              <div class="card shadowed border-light">
                <a href="?item=<?= $innovation['id']; ?>">
                  <img src="<?= $innovation['image_path']; ?>" class="card-img-top" alt="...">
                </a>
                <div class="card-body">
                  <h5 class="card-title"><?= $innovation['name']; ?></h5>
                  <p class="card-text"><?= $innovation['short_description']; ?></p>
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
                  <a href="?item=<?= $innovation['id']; ?>" class="btn-custom btn-custom-outline-blue btn-block">подробнее
                    »</a>
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
