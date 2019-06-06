<div class="row">
  <div class="col-12 col-md-11 mx-auto">
    <div class="row">
      <div class="col-12 col-md-8 mb-3 mb-md-0">
        <h2><?= $activities ;?></h2>
        <div class="accordion" id="accordion">
          <div class="card">
            <div class="card-header bg-white" id="headingOne">
              <p class="mb-0 ml-3"><?= $item_1 ;?></p>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white" id="headingTwo">
              <p class="mb-0">
                <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                        data-target="#collapse-two"
                        aria-expanded="false" aria-controls="collapse-two"><?= $item_2 ;?></button>
              </p>
            </div>
            <div id="collapse-two" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body"><?= $item_2_sub ;?></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white" id="headingThree">
              <p class="mb-0">
                <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                        data-target="#collapse-three"
                        aria-expanded="false" aria-controls="collapse-three">
                    <?= $item_3 ;?>
                </button>
              </p>
            </div>
            <div id="collapse-three" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body"><?= $item_3_sub ;?></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white" id="headingFour">
              <p class="mb-0">
                <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                        data-target="#collapse-four"
                        aria-expanded="false" aria-controls="collapse-four">
                    <?= $item_4 ;?>
                </button>
              </p>
            </div>
            <div id="collapse-four" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
              <div class="card-body"><?= $item_4_sub ;?></div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white" id="headingFive">
              <p class="mb-0 ml-3"><?= $item_5 ;?></p>
            </div>
            <div id="collapse-five" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
              <div class="card-body">

              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white" id="headingSix">
              <p class="mb-0">
                <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                        data-target="#collapse-six"
                        aria-expanded="false" aria-controls="collapse-six">
                    <?= $item_6 ;?>
                </button>
              </p>
            </div>
            <div id="collapse-six" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
              <div class="card-body">
                  <?= $item_5_sub ;?>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header bg-white" id="headingSeven">
              <p class="mb-0">
                <button class="btn btn-link collapsed text-left" type="button" data-toggle="collapse"
                        data-target="#collapse-seven"
                        aria-expanded="false" aria-controls="collapse-seven">
                    <?= $item_7 ;?>
                </button>
              </p>
            </div>
            <div id="collapse-seven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
              <div class="card-body"><?= $item_7_sub ;?></div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <h2><?= $also ;?></h2>
        <ul class="bullet-list">
          <li><?= $item_also_1 ;?></li>
          <li><?= $item_also_2 ;?></li>
          <li><?= $item_also_3 ;?></li>
        </ul>
      </div>
    </div>
  </div>
</div>