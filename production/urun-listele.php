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
                    <h2>Ürünler 
              
                    
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


                   

                 
                
                     
                      <div class="ln_solid"></div>
                    
                      <div class="form-group">
                        
                         
                        
                      </div>


                      

                      <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                        <th>Sıra</th>
                          <th>Ürün ID</th>
                          <th>Kategorisi</th>
                          <th>Ürün Adı</th>
                          <th>Açıklama</th>
                          <th>Fotoğraf</th>
                          <th>Barkod</th>
                          <th>Fiyat</th>
                          <th>Düzenle</th>
                          <th>Sil</th>
                         
                        </tr>
                      </thead>
                      <tbody>

                      <?php

                      $order=0;

                        while($urunlerisirala=$urunsor->fetch(PDO::FETCH_ASSOC)){ $order++; ?>

                        <tr>
                          <td><?php echo $order; ?></td>
                          <td><?php echo $urunlerisirala['proid']; ?></td>
                          <td><?php echo $urunlerisirala['categoryname']; ?></td>
                          <td><?php echo $urunlerisirala['proname']; ?></td>
                          <td><?php echo $urunlerisirala['prodesc']; ?></td>
                          <td><?php echo $urunlerisirala['propic']; ?></td>
                          <td><?php echo $urunlerisirala['probar']; ?></td>
                          <td><?php echo $urunlerisirala['price']; ?></td>
                          
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