  <div class="container-fluid">
    <?= $this->session->flashdata('pesan'); ?>
    <?= $this->session->flashdata('image'); ?>
  <!-- DataTales Example -->
      <div class="col-md-12">
      <div class="card shadow  mb-5">
      <div class="card-header  py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?= $title ?></h6>
      </div>
      <div class="card-body">
          <?= form_open_multipart('jalan/tambah');?>
              <div class="row">
                <div class="col-md-7">
                  <input type="hidden" class="form-control" id="id_jalan" name="id_jalan" value="<?= $id_jalan ?>">
                  <input type="hidden" class="form-control" id="id_desa" name="id_desa" value="<?= $desa['id_desa'] ?>">
                      <div class="form-group">
                        <input type="text" class="form-control" id="nama_jalan" name="nama_jalan" placeholder="Nama Jalan" required>
                    </div>
                      <div class="form-group">
                        <input type="text" class="form-control" id="pekerasan" name="pekerasan" placeholder="Pekerasan" required>
                      </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control " id="panjang" name="panjang" placeholder="Panjang" required>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="lebar" name="lebar" placeholder="Lebar" required>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude" required >
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <input type="text" class="form-control" id="longitude" name="longitude" placeholder="Longitude" required >
                      </div>
                    </div>
                  </div>
                  <small class="text-danger pl-3">*File jpg/png dan ukuran dibawah 2Mb</small>
                  <div class="form-group row">
                    <div class="col-sm-2">Image 1</div>
                    <div class="col-sm-10">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="image1" name="image1" required >
                          <label class="custom-file-label" for="image1">Choose file</label>
                        </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-2">Image 2</div>
                    <div class="col-sm-10">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" id="image2" name="image2" >
                          <label class="custom-file-label" for="image2">Choose file</label>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit"  class="btn btn-primary">Simpan</button>
            </form>
          </div>
    </div>
</div>

<div class="modal fade bd-example-modal-lg " id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
<div class="modal-dialog modal-lg">
<div class="modal-content">
  <div id="map">

  </div>
</div>
</div>
</div>
