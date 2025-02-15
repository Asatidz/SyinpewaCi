        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
<h2 class="judul">Tambah Jabatan</h2>
<form action="?hal=pelanggaran_insert" method="post" role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama">Nama Pl</label>
                  <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Nama" required>
                </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Jenis Pl</label>
                <select class="form-control select2" style="width: 100%;" name="jenis" id="jenis" required>
                  <option selected="selected">Ringan</option>
                  <option>Sedang</option>
                  <option>Berat</option>
                </select>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="poin">Poin</label>
                  <input type="number" class="form-control" id="poin" name="poin" placeholder="Enter Poin" required>
                </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="kode">Kode</label>
                  <input type="number" class="form-control" id="kode" name="kode" placeholder="Enter Kode" required>
                </div>
                <!-- <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div> -->

              <!-- /.box-body -->

              <div class="box-footer">
                <input type="submit" value="Simpan" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-danger">
              </div>
            </form>
          </div>
        </div>