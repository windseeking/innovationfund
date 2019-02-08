<form method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="col-12 col-md-5">
      <div class="form-group">
        <label for="title">News title<sup> *</sup></label>
          <?php $class = isset($errors['title']) ? 'is-invalid' : '';
          $value = isset($news['title']) ? $news['title'] : ''; ?>
        <input type="text" class="form-control <?= $class; ?>" id="title" name="news[title]"
               placeholder="Short & informative" value="<?= filter_tags($value); ?>">
          <?php if (isset($errors['title'])): ?>
            <div class="invalid-feedback">
                <?= $errors['title']; ?>
            </div>
          <?php endif; ?>
      </div>

      <div class="form-group">
        <label for="cat">Category<sup> *</sup></label>
        <select class="form-control" id="cat" name="cat">
          <option value="fis">News of Fund</option>
          <option value="partners">Partners' news</option>
        </select>
      </div>

      <p class="mb-2">Image</p>
      <div class="custom-file mb-2 mb-md-0">
          <?php $class = isset($errors['image_path']) ? 'is-invalid' : ''; ?>
        <input type="file" class="custom-file-input <?= $class; ?>" id="image_path" name="image_path">
          <?php if (isset($errors['image_path'])): ?>
            <div class="invalid-feedback">
                <?= $errors['image_path']; ?>
            </div>
          <?php endif; ?>
        <label class="custom-file-label" for="image_path">News image</label>
      </div>
    </div>

    <div class="col-12 col-md-7">
      <div class="form-group">
        <label for="text">News text<sup> *</sup></label>
          <?php $class = isset($errors['text']) ? 'is-invalid' : '';
          $value = isset($news['text']) ? $news['text'] : ''; ?>
        <textarea class="form-control <?= $class; ?>" name="news[text]" id="text"
                  rows="8"><?= $value; ?></textarea>
          <?php if (isset($errors['text'])): ?>
            <div class="invalid-feedback">
                <?= $errors['text']; ?>
            </div>
          <?php endif; ?>
      </div>
    </div>
    <div class="col-12">
      <button class="btn btn-outline-primary btn-block" type="submit" name="submit">Add news</button>
    </div>
  </div>
</form>
