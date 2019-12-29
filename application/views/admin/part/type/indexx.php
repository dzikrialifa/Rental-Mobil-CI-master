        <!-- page content -->
        <div class="right_col" role="main">

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Nama Tipe Kendaraan</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-md">Tambah Kendaraan</button>

                        <tr>
                          <th>Tipe Kendaraan</th>
                          <th>Tanggal</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Fortuner</td>
                          <td>2019-05-21</td>
                          <td>
                          <button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i></button>
                          <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button></td>
                        </tr>
                      </tbody>
                    </table>
					
					
                  </div>
                </div>
              </div>
            </div>
         
        </div>
        <!-- /page content -->
        <!-- Large modal -->
                  
                  <div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Tambah Nama Tipe Kendaraan</h4>
                        </div>
                        <div class="modal-body">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label for="first-name">Nama Tipe Kendaraan 
                        </label>
                        
                          <input type="text" id="first-name" class="form-control" required="required" placeholder="nama tipe kendaraan">
                        
                      </div>
                      
                      <div class="form-group">
                        <label for="middle-name">Deskripsi</label>
                        
                          <input id="middle-name" class="form-control" type="text" name="middle-name" placeholder="deskripsi tipe kendaraan">
                        
                      </div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-danger" data-dismiss="modal"  type="button">Cancel</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>

                    </form>
                        </div>

                      </div>
                    </div>
                  </div>

