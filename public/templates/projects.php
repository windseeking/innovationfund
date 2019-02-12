<section class="mb-3">
  <div class="container-fluid p-md-5">
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
    <div class="mb-3">
      <h1>Projects</h1>
    </div>
    <div>
        <?php if ($projects): ?>
          <div class="row">
              <?php foreach ($projects as $project) : ?>
                <div class="col-12 col-sm-6 col-md-4 card-group">
                  <div class="card border-light">
                      <?php (!empty($project['image_path']) ? $project['image_path'] : $project['image_path'] = 'https://www.woodfordoil.com/wp-content/uploads/2018/02/placeholder.jpg'); ?>
                    <img src="<?= $project['image_path']; ?>" class="card-img-top" alt="<?= $project['image_path']; ?>">
                    <div class="card-body">
                      <h5 class="card-title"><?= $project['name']; ?></h5>
                      <p class="card-text text-left"><?= $project['description']; ?></p>
                    </div>
                      <?php if (!empty($project['link_url'])): ?>
                        <ul class="list-group list-group-flush text-center">
                          <li class="list-group-item border-light">
                            <a class="text-danger" href="<?= $project['link_url']; ?>"><?= $project['link_text']; ?></a>
                          </li>
                        </ul>
                      <?php endif; ?>
                      <?php if (!empty($project['website'])): ?>
                        <div class="card-footer bg-white">
                          <a href="<?= $project['website']; ?>" class="btn btn-outline-info btn-block">Learn more »</a>
                        </div>
                      <?php endif; ?>
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
  </div>
</section>

<!--<section>-->
<!--  <div class="container-fluid p-5">-->
<!--    <h2>Join us</h2>-->
<!--  </div>-->
<!--</section>-->