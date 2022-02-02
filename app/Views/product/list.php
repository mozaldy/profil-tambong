<div class="col-sm-12">
<a href="<?= base_url('product/tambah')?>" class="btn btn-primary">Tambah Data</a>
<br>
<br>
<?php 
    if(!empty(session()->getFlashdata('success'))){ ?>
        <div class="alert alert-success">
    <?= session()->getFlashdata('success');?>
    </div>
    <?php } ?> 


<br>

<table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Produk</th>
                <th>Deskripsi Produk</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach ($product as $key => $value ){ ?>

            <tr>
                <td> <?= $no++; ?></td>
                <td> <?= $value['product_name']; ?></td>
                <td> <?= $value['product_description']; ?></td>
                <td>
                    <a href="<?= base_url('product/edit/'.$value['product_id']); ?>" class="btn btn-warning">Edit</a>
                    <a href="<?= base_url('product/delete/'.$value['product_id']); ?>" onClick="return confirm('Yakin ingin hapus data? :/')" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
    </table>
</div>