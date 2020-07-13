<div class="container-fluid">
    <a href="<?= base_url('jalan/tambah') ?>" class="btn btn-primary mb-2 ">Tambah Data</a>
    <?= $this->session->flashdata('image'); ?>
    <?= form_error('nama_kontruksi', '<div class="alert alert-danger" role="alert">','</div>'); ?>
    <?= $this->session->flashdata('pesan'); ?>
  <!-- DataTales Example -->
  <div class="card shadow  mb-4">
    <div class="card-header  py-3">
      <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr class="text-center">
              <th>#No</th>
              <th>Kd Jalan</th>
              <th>Nama Jalan</th>
              <th>Panjang</th>
              <th>Lebar</th>
              <th>Pekerasan</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php $no=1; foreach ($jalan as $jalan): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $jalan['id_jalan'] ?></td>
                <td><?= $jalan['nama_jalan'] ?></td>
                <td><?= $jalan['panjang'] ?><sup>m</sup></td>
                <td><?= $jalan['lebar'] ?><sup>m</sup></td>
                <td><?= $jalan['pekerasan'] ?></td>
                <td><a href="<?= base_url("jalan/edit/".$jalan['id_jalan']) ?>"   class="badge badge-primary " ><i class="fas fa-edit"></i></a>
                  <a href="<?= base_url("jalan/hapusjalan/".$jalan['id_jalan']) ?>" class="badge badge-danger" onclick="return confirm('Yakin?');"><i class="fas fa-trash-alt"></i></a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
