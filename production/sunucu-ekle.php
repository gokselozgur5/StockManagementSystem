<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<?php include 'header.php'; ?>

     
<?php
        $cputype[] = $var;
        array_push($cputype, "AMD", "INTEL");
        $intelcpus[] = $var;
        $amdcpus[] = $var;
        array_push($intelcpus, "AMD", "INTEL");
        $servernames[] = $var;
        array_push($servernames, "muz", "portakal");
        
        $ramhz[] = $var;
        $currency[] = $var;
        
        array_push($currency,  "$", "€", "£","₺");
        $casetype;
        array_push($casetype, "Blade", "Rack", "Tower");
        $hddtype;
        array_push($hddtype, "SASS","SSD","SASS SSD", "SATA", "FC", "IDE", "SCSI 50 Pin", "SCSI 68 Pin", "SCSI 80 Pin");
        $hddsize;
        array_push($hddsize, "2.5"&quot, "3.5"&quot);

      


?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sunucu Ekle 
              
                    
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


                    <form action="../netting/islem.php" method="POST" id="demo-form2"  data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                       
                        <div class="col-md-6 col-sm-6 col-xs-12">
                     
                        </div>
                      </div>

                      <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sunucu Kasa Tipi <span class="required">*</span>
                </label>
               
                <div class="col-md-6 col-sm-6 col-xs-12">

                <select style="margin-top:2%;" name="prosertowtype"> 
                  
                <option> Blade </option>
                <option> Rock </option>
                <option> Tower </option>
                 </select>
                </div>
              </div>

              <hr>

                      <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sunucu Markası <span class="required">*</span>
                </label>
               
                <div class="col-md-6 col-sm-6 col-xs-12">

                <input type="text" id="first-name" required="required" name="proserbrand" class="form-control col-md-7 col-xs-12">
                </div>
              </div>

        

              <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sunucu Modeli <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" name="prosername" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <hr>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sunucu Fotoğrafı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="myFile" name="proserpic">
                        </div>
                      </div>
                      <hr>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sunucu PSU Adeti <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                       <select> <option>1 </option><option>2 </option></select>
                        </div>
                      </div>




                      <hr>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sunucu İşlemcisi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <label >İşlemci Adeti <span class="required">*</span>
                        </label>

                        <select name="prosercpupt"> <option>1 </option><option>2 </option> </select>

                        <label style="margin-left:10px;">İşlemci PIN <span class="required">*</span>
                        </label>

                        <select name="prosercpupin" >
                   
                               <option>775</option> 
                               <option>1150</option> 
                               <option>1151</option> 
                               <option>1366</option> 
                               <option>2011v1</option> 
                               <option>2011v3</option> 
                    

                           </select>

                           <label style="margin-left:15px; margin-top:5px;" >İşlemci Serisi <span class="required">*</span>
                        </label>

                        <select  >
                   

                
                                     <option value=""> Tip Seçiniz</option> 
                     

                           </select>
                          
                           <label style="margin-top:2%;" >İşlemci Modeli <span class="required">*</span>     <select >
                   

                   <?php for($i=1;$i<128;$i*=2) { ?>
                        <option value=""> <?php echo $i . ' GB'?> </option> 
                   <?php } ?>

              </select>
                        </label>

                   

                          
                        </div>
                      </div>


                      <hr>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sunucu Rami <span class="required">*</span>
                        </label>
                        
                        <div class="col-md-6 col-sm-6 col-xs-12">
                       
                        <label >Ram Tipi <span class="required">*</span>
                        </label>

                        <select name="proserram" id="proserram">
                   
                               <option value="">Ram Tipi</option> 
                    

                           </select>

                           <label style="margin-left:15px; margin-top:5px;" >Ram MHZ <span class="required">*</span>
                        </label>

                        <select  name="proserrammhz" id="proserrammhz">
                   

                
                                     <option value=""> Tip Seçiniz</option> 
                     

                           </select>

                           <label style="margin-left:15px;" >Ram Boyutu <span class="required">*</span>
                        </label>

                        <select name="ramsize">
                   

                                <?php for($i=1;$i<128;$i*=2) { ?>
                                     <option value=""> <?php echo $i . ' GB'?> </option> 
                                <?php } ?>

                           </select>

                           <label >Ram Adeti <span class="required">*</span>
                        </label>

                        <select style="margin-top:10px; margin-left:15px;" name="ramsize">
                   

                                <?php for($i=1;$i<=4;$i++) { ?>
                                     <option value=""> <?php echo $i ?> </option> 
                                <?php } ?>

                           </select>

        
        
       
                        </div>


                  
                        
                      </div>

                      <hr>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sunucu Diski <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <label >Disk Boyutu <span class="required">*</span>
                        </label>

                        <select name="proserdiskheight">
                   
                               <option>2.5"</option> 
                               <option>3.5"</option> 
                    

                           </select>

                           <label style="margin-left:15px; margin-top:5px;" >RPM <span class="required">*</span>
                        </label>

                        <select  name="proserdiskrpm" >
               
                              <option>7200</option> <option>10000</option> <option>15000</option> 
                     

                           </select>

                           <label style="margin-left:15px;" >Disk Kapasitesi <span class="required">*</span>
                        </label>

                        <select name="ramsize">
                   

                                <?php for($i=1;$i<128;$i*=2) { ?>
                                     <option value=""> <?php echo $i . ' GB'?> </option> 
                                <?php } ?>

                           </select>

                           <label >Disk Arabirimi <span class="required">*</span>
                        </label>

                        <select style="margin-top:10px; " name="hddinterface">
                   

                               
                                     <option> SCSI </option> 
                                

                           </select>

                        </div>
                      </div>

                      <hr>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sunucu PCI-E Kartı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="proserpcie" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sunucu Barkodu <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="proserbarcode" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Sunucu Fiyatı <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="first-name" required="required" name="proserprice"  >
                        <select style="height:25px; width:35px;" name="currency">
                   

                          <?php  foreach($currency as $key )   { 

                           ?>
                           <option selected><?php echo $key; ?></option> 
                          <?php }?>

                         </select>
                        
                        </div>
                      </div>


                
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button name="sunucuekle" type="submit" class="btn btn-success">OLUŞTUR</button>
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

        <script>
$(document).ready(function(){

  

 load_json_data('proserram');



 function load_json_data(id, parent_id)
 {
  var html_code = '';
  $.getJSON('ram.json', function(data){

   html_code += '<option value=""> '+'</option>';
   $.each(data, function(key, value){
     
    if(id == 'proserram')
    {
     if(value.parent_id == '0')
     {

       
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
    
     }
    }
    else
    {
     if(value.parent_id == parent_id)
     {
      html_code += '<option value="'+value.id+'">'+value.name+'</option>';
     }
    }
   });
   $('#'+id).html(html_code);
  });

 }

 $(document).on('change', '#proserram', function(){
  var ram_id = $(this).val();
  if(ram_id != '')
  {
   load_json_data('proserrammhz', ram_id);
  }

 });



});
</script>