<div class="container-fluid">
    <a href="<?= base_url('proyek/input') ?>"  class="btn btn-primary mb-2 ">Input Baru</a>
    <a href="#"  data-toggle="modal" data-target="#exampleModal" class="btn btn-warning mb-2 "><i class="fas fa-print"></i></a>
    <?= $this->session->flashdata('pesan'); ?>
    <?= $this->session->flashdata('image'); ?>
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
              <th>No</th>
              <th>Nama Jalan</th>
              <th>Kategori</th>
              <th>Nama Jasa</th>
              <th>Tanggal Kontrak</th>
              <th>Akhir Kontrak</th>
              <th>Pelaksanaan</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <?php $no = 1;  foreach ($proyek_jalan as $proyek_jalan): ?>
              <tr>
                <td><?= $no++ ?></td>
                <td><?= $proyek_jalan['nama_jalan'] ?></td>
                <td><?= $proyek_jalan['kategori'] ?></td>
                <td><?= $proyek_jalan['nama_jasa'] ?></td>
                <td><?= $proyek_jalan['tanggal_kontrak'] ?></td>
                <td><?= $proyek_jalan['akhir_kontrak'] ?></td>
                <td><?= $proyek_jalan['pelaksanaan'] ?></td>
                <td><a href="<?= base_url("proyek/edit/".$proyek_jalan['id_proyek']) ?>"class="badge badge-primary " ><i class="fas fa-edit"></i></a>
                <a href="<?= base_url("proyek/delete/".$proyek_jalan['id_proyek']) ?>" class="badge badge-danger" onclick="return confirm('Yakin?');"><i class="fas fa-trash-alt"></i></a>
                <a href="<?= base_url("proyek/print/".$proyek_jalan['id_proyek']) ?>" target="_blank" class="badge badge-warning"><i class="fas fa-print"></i></a></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pilih bulan dan tahun</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
  <?= form_open_multipart('proyek/printAll');?>
    <div class="form-group">
      <select class="form-control" name="bulan"  required >
          <option value="01">Januari</option>
          <option value="02">Februari</option>
          <option value="03">Maret</option>
          <option value="04">April</option>
          <option value="05">Mei</option>
          <option value="06">Juni</option>
          <option value="07">Juli</option>
          <option value="08">Agustus</option>
          <option value="09">September</option>
          <option value="10">Oktober</option>
          <option value="11">November</option>
          <option value="12">Desember</option>
      </select>
    </div>
    <div class="form-group">
      <select class="form-control" name="tahun"  required >
          <option value="2017">2017</option>
          <option value="2018">2018</option>
          <option value="2019">2019</option>
          <option value="2020">2020</option>
          <option value="2021">2021</option>
          <option value="2022">2022</option>
          <option value="2023">2023</option>
          <option value="2024">2024</option>
          <option value="2025">2025</option>
          <option value="2026">2026</option>
          <option value="2027">2027</option>
          <option value="2028">2028</option>
      </select>
    </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit"  class="btn btn-primary">Print</button>
    </div>
  </form>
    </div>
  </div>
</div>
