        <!-- page content -->
        <div class="right_col" role="main">

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Seat Kendaraan</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">
                    Tambah Seat</button>

                    <div class="clearfix" style="margin-bottom:20px;"></div>

                    <button type="button" class="btn btn-info btn-lg" disabled>Seat X</button>
					<div class="clearfix"></div>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">
                    <i class="fa fa-edit"></i></button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-lg">
                    <i class="fa fa-trash"></i></button>
                    
					
					
                  </div>
                </div>
              </div>
            </div>
         
        </div>
        <!-- /page content -->
        <!-- Large modal -->
                  
                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Tambah Seat</h4>
                        </div>
                        <div class="modal-body">
                          <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Input Seat Kendaraan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" class="form-control has-feedback-left col-md-7 col-xs-12" id="inputSuccess4" placeholder="Jumlah seat">
                          <span class="fa fa-tag form-control-feedback left" aria-hidden="true"></span>
                        </div>
                        
                      </div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-danger" type="button" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>

                    </form>
                        </div>

                      </div>
                    </div>
                  </div>

