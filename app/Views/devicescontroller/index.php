<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col">
      <h1 class="mt-2">Daftar Device</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">DeviceName</th>
            <th scope="col">DeviceBrand</th>
            <th scope="col">DeviceQuantity</th>
            <th scope="col">DeviceStatus</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1; ?>
          <?php foreach ($device as $d) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $d['device_name']; ?></td>
            <td><?= $d['device_brand']; ?></td>
            <td><?= $d['device_quantity']; ?></td>
            <td><?= $d['device_status']; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>