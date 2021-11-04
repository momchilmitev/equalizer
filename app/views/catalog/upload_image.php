<?php $this->view('catalog/partials/header', $data); ?>

<div style="margin: auto;max-width: 600px;width: 100%;padding: 2em">
  <form method="post" enctype="multipart/form-data">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Image Title</label>
      <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
        required>
      <div id="emailHelp" class="form-text">Add a title to your image.</div>
    </div>
    <div class="mb-3">
      <input type="file" name="file" class="btn" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Upload</button>
  </form>
</div>

<?php $this->view('catalog/partials/footer');
