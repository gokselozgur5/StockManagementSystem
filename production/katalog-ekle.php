<?php include 'header.php'; ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Katalog Ekle 
              
                    
                    <small>İşlem Durumu                    <?php
                    if ($_GET['durum']=="ok") { ?>
                          <b style="color:green;"> İşlem Başarılı...</b>

                          <?php
                    } else if ($_GET['durum']=="failed") 
                    {  ?>
                             <b style="color:red;"> İşlem Başarısız...</b> <?php
                    } ?></small></h2>

                  

                       
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />


                    <form action="../netting/islem.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori Adı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="categoryname" class="form-control col-md-7 col-xs-12">
                        </div>
                        <button name="kategoriekle" type="submit" class="btn btn-success">OLUŞTUR</button>
                      </div>
                      </form>
                     
                      <div class="ln_solid"></div>
                    
                      <div class="form-group">
                        
                         
                        
                      </div>

                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                        <th>Sıra</th>
                          <th>Kategori ID</th>
                          <th>Kategori Adı</th>
                          <th>Düzenle</th>
                          <th>Sil</th>
                         
                        </tr>
                      </thead>
                      <tbody>

                      <?php

                      $order=0;

                        while($kategorishow=$kategorisirala->fetch(PDO::FETCH_ASSOC)){ $order++; ?>

                        <tr>
                          <td><?php echo $order; ?></td>
                          <td><?php echo $kategorishow['cataid']; ?></td>
                          <td><?php echo $kategorishow['cataname']; ?></td>
                          <td><center><button class="btn btn-primary btn-xs">Düzenle</button></center></td>
                          <td><center><button class="btn btn-danger btn-xs">Sil</button></center></td>
                        </tr>

                       <?php } ?>
                       
                        
                      </tbody>
                    </table>
                      

                   
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
        <!-- /page content -->

        <?php include 'footer.php'; ?>