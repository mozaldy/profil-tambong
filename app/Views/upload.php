
<div class="col-md-12">

<?php if (!empty(session()->getFlashdata('success'))) { ?>
    <div class="alert alert-success">
        <?php 
            echo session()->getFlashdata('success');
        ?>
    </div>
<?php } ?>



<div class="card card-primary" style="width: 100%;">
              <div class="card-header">
                <h3 class="card-title">Upload gambar</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <?= form_open_multipart(base_url('upload/save')); ?>
                <div class="card-body"> 
                  <div class="form-group">
                    <label>Keterangan</label>
                    <input name="keterangan" class="form-control"  placeholder="Keterangan" required>
                  </div>
                  <div class="form-group">
                    <label>Gambar/foto</label>
                    <input  type="file" name="gambar" class="form-control" placeholder="Gambar/Foto" required>
                  </div>
                </div> 
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              <?= form_close() ?>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Keterangan</th>
                <th>Gambar</th>
            </tr>
        </thead>
        <tbody>
        <?php $no=1; foreach ($data as $key => $value) { ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $value['keterangan']; ?></td>
                <td><img src="<?= base_url('uploads/'.$value['gambar']); ?>" alt="" width="200px"></td> 
            </tr>
       <?php } ?>
        </tbody>
    </table>
</div>
</div>