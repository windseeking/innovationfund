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

    <?php if ($partners): ?>
      <div class="row">
          <?php foreach ($partners as $partner): ?>
            <div class="col-12 col-sm-6 col-md-4 mb-4 card-group">
              <div class="card shadowed border-light">
                <img src="<?= $partner['image_path']; ?>" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title"><?= $partner['name']; ?></h5>
                  <p class="card-text"><?= $partner['description']; ?></p>
                </div>
                <div class="card-footer bg-white border-light">
                  <a href="<?= $partner['link']; ?>" class="btn-custom btn-custom-outline-blue btn-block">Learn more
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
