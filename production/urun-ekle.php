<?php include 'header.php'; ?>


        <head>
            <script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
        </head>
        <style>
.ck-editor__editable_inline {
    min-height: 200px;
}
</style>


        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ürün Ekle 
              
                    
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


                    <form action="../netting/islem.php" method="POST" id="demo-form2"  enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kategori <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <select name="kategori">
                   

                                    <?php $say=0;  while($kategoricek = $kategorisor->fetch(PDO::FETCH_ASSOC))   { 

                                      ?>
                                      <option><?php echo $kategoricek['cataname']; ?></option> 
                                      <?php }?>
   
                         </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Adı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="productname" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Açıklaması <span class="required">*</span>
                </label>
               
                <div class="col-md-6 col-sm-6 col-xs-12">

                  <textarea  style="height:200px;" id="editor" name="urun_aciklamasi"></textarea>
                </div>
              </div>

                <script>
                 ClassicEditor
                 .create( document.querySelector( '#editor' ) )
                 .catch( error => {
                  console.error( error );
                                   } );
                </script>

                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Resim Seç<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input type="file" id="first-name"  name="propic"  class="form-control col-md-7 col-xs-12">
                  </div>
                </div>

                    

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Barkodu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="myFile" name="probar">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ürün Fiyatı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="myFile" name="price">
                        </div>
                      </div>


                
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button name="urunekle" type="submit" class="btn btn-success">OLUŞTUR</button>
                        </div>
                      </div>
                      

                    </form>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
        <!-- /page content -->

        <?php include 'footer.php'; ?>