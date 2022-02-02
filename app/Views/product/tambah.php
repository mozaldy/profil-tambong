<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('product/save'); ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input name="product_name" class="form-control"  placeholder="Product Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Product Description</label>
                    <input  name="product_description" class="form-control" placeholder="Product Description" required>
                  </div>
                </div> 
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
</div>