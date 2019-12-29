        <!-- page content -->
        <div class="right_col" role="main">

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Kendaraan</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                      <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-md">Tambah Kendaraan</button>

                        <tr>
                          <th>Nama Kendaraan</th>
                          <th>Harga (Hari)</th>
                          <th>Tanggal</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Bus Sumber</td>
                          <td>2000</td>
                          <td>2018-06-21</td>
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
                        <h4 class="modal-title" id="myModalLabel">Input Kendaraan</h4>
                    </div>
                    <div class="modal-body">
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <!-- NAMA -->
                            <div class="form-group">
                                <label for="">Nama Kendaraan</label>
                                <input type="email" id="email" class="form-control" name="email" data-parsley-trigger="change" required="" placeholder="nama kendaraan">
                            </div>
                            <!-- TEXTFIELD -->
                            <div class="form-group">
                                <div class="x_content">
                                <div id="alerts"></div>
                                <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                    <div class="btn-group">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                    </ul>
                                    </div>

                                    <div class="btn-group">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                        <a data-edit="fontSize 5">
                                            <p style="font-size:17px">Huge</p>
                                        </a>
                                        </li>
                                        <li>
                                        <a data-edit="fontSize 3">
                                            <p style="font-size:14px">Normal</p>
                                        </a>
                                        </li>
                                        <li>
                                        <a data-edit="fontSize 1">
                                            <p style="font-size:11px">Small</p>
                                        </a>
                                        </li>
                                    </ul>
                                    </div>

                                    <div class="btn-group">
                                    <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                    <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                    <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                    <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                    </div>

                                    <div class="btn-group">
                                    <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                    <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                    <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                    <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                    </div>

                                    <div class="btn-group">
                                    <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                    <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                    <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                    <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                    </div>

                                    <div class="btn-group">
                                    <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                    <div class="dropdown-menu input-append">
                                        <input class="span2" placeholder="URL" type="text" data-edit="createLink">
                                        <button class="btn" type="button">Add</button>
                                    </div>
                                    <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                    </div>

                                    <div class="btn-group">
                                    <a class="btn" title="Insert picture (or just drag &amp; drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                    <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage">
                                    </div>

                                    <div class="btn-group">
                                    <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                    <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                    </div>
                                </div>

                                <div id="editor-one" class="editor-wrapper placeholderText" contenteditable="true"><div style="text-align: left;"><br></div></div>

                                <textarea name="descr" id="descr" style="display:none;"></textarea>
                                
                                <br>


                                </div>
                            </div>
                            <!-- HARGA -->
                            <div class="form-group">
                                <label for="">Harga</label>
                                <input type="number" id="email" class="form-control" name="email" data-parsley-trigger="change" required="">
                            </div>
                            <!-- TIPE KENDARAAN -->
                            <div class="form-group">
                                <label for="">Tipe Kendaraan</label>
                                <div class="checkbox">
                                <label>
                                    <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="suv" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> SUV
                                </label>
                                <label>
                                    
                                    <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" id="mpv" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> MPV
                                </label>
                                </div>
                            </div>
                            <!-- SEAT  -->
                            <div class="form-group">
                                <label for="">Seat Kendaraan</label>
                                <div class="checkbox">
                                <label>
                                    <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" id="suv" class="flat" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> 2
                                </label>
                                <label>
                                    
                                    <div class="icheckbox_flat-green" style="position: relative;"><input type="checkbox" class="flat" id="mpv" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div> 4
                                </label>
                                </div>
                            </div>
                            <!-- GAMBAR -->
                            <div class="form-group">
                                <label for="">Input Gambar</label>
                                <input type="file" name="" id="">
                            </div>
                            <!-- BUTTON -->
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button class="btn btn-danger" data-dismiss="modal" type="button">Cancel</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

