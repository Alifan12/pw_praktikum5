  <?= $this->extend('layout/template'); ?>

  <?= $this->section('content'); ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <img src="IoT.jpg" alt="">
        <center>
          <h1 style="font-weight: bold; font: size 50px;">IoT Monitoring</h1>
        </center>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>
      </div>
    </div>
  </div>
  <?= $this->endSection(); ?>