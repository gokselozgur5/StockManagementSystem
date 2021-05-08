<?php
ob_start();
session_start();

include 'baglan.php';


if (isset($_POST['loginn'])){



  $username=  $_POST['username'];
  $userpass=  md5($_POST['userpass']);

  echo $userpass;




  $usersor = $db->prepare("SELECT * FROM user where username=:name and userpass=:pass");

  $usercek= $usersor->execute(array(
    'name'=> $username,
    'pass'=> $userpass

  ));

  $usercek = $usersor->fetch(PDO::FETCH_ASSOC);






  $say = $usersor->rowCount();
  if($say==1) {
    header("Location:../production/index.php");
    $_SESSION['username']=$username;
    $_SESSION['auth']=$usercek['userauth'];

  }
  else{
    header("Location:../production/login.php?durum=no");
  }



  exit;

}


if (isset($_POST['kategoriekle'])){


  $katalog = $_POST['categoryname'];
  $katalogekle = $db->prepare("INSERT INTO catalogue SET cataname=:caname ");

  $insert = $katalogekle->execute(array(
    caname => $katalog
  ));


  if ($insert)
  {

    header("Location:../production/katalog-ekle.php?durum=ok");

  }
  else{
    header("Location:../production/katalog-ekle.php?durum=failed");
  }

}

if(isset($_POST['sunucuekle'])) {


  $servername = $_POST['prosername'];
  $serverbrand = $_POST['proserbrand'];
  $serverpic = $_POST['proserpic'];
  $servercpu = $_POST['prosercpu'];
  $serverram = $_POST['proserram'];
  $serverdisk = $_POST['proserdisk'];
  $servertowertype = $_POST['prosertowtype'];
  $serverbarcode = $_POST['proserbarcode'];
  $serverprice = $_POST['proserprice'];
  $currency = $_POST['currency'];


  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["proserpic"]["name"]);
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  move_uploaded_file($_FILES["proserpic"]["name"], $target_file);

  $filepic = $_FILES['proserpic'];
  $filename = $_FILES['proserpic']['name'];
  $fileTmpName = $_FILES['proserpic']['tmp_name'];
  $fileSize = $_FILES['proserpic']['size'];
  $fileType = $_FILES['proserpic']['type'];

  $fileExt = explode('.', $fileName);
  $fileActualExt =  strtolower(end($fileExt));

  $allowed = array('jpg', 'jpeg', 'png', 'pdf');

  $sunucuekle = $db->prepare("INSERT INTO proser SET proserbrand=:sbrand, prosername=:sname, proserpic=:spic, prosercpu=:scpu, proserram=:sram, proserdisk=:sdisk,
    prosertowtype=:stowtype, proserbarcode=:sbar,  proserprice=:sprice, currency=:currency ");

    $insert = $sunucuekle->execute(array(
      sbrand => $serverbrand,
      sname => $servername,
      spic => $serverpic,
      scpu => $servercpu,
      sram => $serverram,
      sdisk => $serverdisk,
      stowtype => $servertowertype,
      sbar => $serverbarcode,
      sprice => $serverprice,
      currency => $currency
    ));

    if ($insert)
    {

      header("Location:../production/sunucu-ekle.php?durum=ok");

    }
    else{
      header("Location:../production/sunucu-ekle.php?durum=failed");
    }

  }


  if(isset($_POST['urunekle'])) {

    $file= $_FILES['propic'];
    $productcategory = $_POST['kategori'];
    $productname = $_POST['productname'];
    $productdesc = $_POST['urun_aciklamasi'];
    $productpics = $_POST['propic'];
    $productbarcode = $_POST['probar'];
    $productprice = $_POST['price'];



    $target_dir = "uploads/" ;
    $target_file = $target_dir . basename($_FILES["propic"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    @move_uploaded_file($_FILES["propic"]["tmp_name"], $target_file);



    $filepic = $_FILES['propic'];
    $filename = $_FILES['propic']['name'];
    $fileTmpName = $_FILES['propic']['tmp_name'];
    $fileSize = $_FILES['propic']['size'];
    $fileType = $_FILES['propic']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt =  strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'png', 'pdf');

    $urunekle = $db->prepare("INSERT INTO product SET categoryname=:cname, proname=:pname, prodesc=:pdesc, propic=:ppic, price=:pprice, probar=:pbar");

    $insert = $urunekle->execute(array(
      cname => $productcategory,
      pname => $productname,
      pdesc => $productdesc,
      ppic => $productpics,
      pprice => $productprice,
      pbar => $productbarcode
    ));

    if ($insert)
    {

      header("Location:../production/urun-ekle.php?durum=ok");

    }
    else{
      header("Location:../production/urun-ekle.php?durum=failed");
    }

  }

  /* if (isset($_POST['genelayarkaydet'])){

  $ayarkaydet = $db->prepare("UPDATE ayar SET

  ayar_title=:ayar_title,
  ayar_description=:ayar_description,
  ayar_keywords=:ayar_keywords,
  ayar_author=:ayar_author
  WHERE ayar_id=0");

  $update = $ayarkaydet -> execute(array(

  'ayar_title' => $_POST['ayar_title'],
  'ayar_description' => $_POST['ayar_description'],
  'ayar_keywords' => $_POST['ayar_keywords'],
  'ayar_author' => $_POST['ayar_author']

));

if ($update)
{

header("Location:../production/genel-ayar.php?durum=ok");

}
else{
header("Location:../production/genel-ayar.php?durum=failed");
}

}


if (isset($_POST['iletisimayarkaydet'])){

$ayarkaydet = $db->prepare("UPDATE ayar SET

ayar_tel=:ayar_tel,
ayar_gsm=:ayar_gsm,
ayar_faks=:ayar_faks,
ayar_mail=:ayar_mail,
ayar_ilce=:ayar_ilce,
ayar_il=:ayar_il,
ayar_adres=:ayar_adres,
ayar_mesai=:ayar_mesai

WHERE ayar_id=0");

$update = $ayarkaydet -> execute(array(

'ayar_tel' => $_POST['ayar_tel'],
'ayar_gsm' => $_POST['ayar_gsm'],
'ayar_faks' => $_POST['ayar_faks'],
'ayar_mail' => $_POST['ayar_mail'],
'ayar_ilce' => $_POST['ayar_ilce'],
'ayar_il' => $_POST['ayar_il'],
'ayar_adres' => $_POST['ayar_adres'],
'ayar_mesai' => $_POST['ayar_mesai']

));

if ($update)
{

header("Location:../production/iletisim-ayarlar.php?durum=ok");

}
else{
header("Location:../production/iletisim-ayarlar.php?durum=failed");
}

}


if (isset($_POST['apiayarkaydet'])){

$ayarkaydet = $db->prepare("UPDATE ayar SET

ayar_analystic=:ayar_analystic,
ayar_maps=:ayar_maps,
ayar_zopim=:ayar_zopim


WHERE ayar_id=0");

$update = $ayarkaydet -> execute(array(

'ayar_analystic' => $_POST['ayar_analystic'],
'ayar_maps' => $_POST['ayar_maps'],
'ayar_zopim' => $_POST['ayar_zopim']

));

if ($update)
{

header("Location:../production/api-ayarlar.php?durum=ok");

}
else{
header("Location:../production/api-ayarlar.php?durum=failed");
}

}

if(isset($_POST['mailayarkaydet'])){

$ayarkaydet = $db->prepare("UPDATE ayar SET

ayar_mail=:ayar_mail,
ayar_smtphost=:ayar_smtphost,
ayar_smtpuser=:ayar_smtpuser,
ayar_smtppassword=:ayar_smtppassword,
ayar_smtpport=:ayar_smtpport




WHERE ayar_id=0");

$update = $ayarkaydet -> execute(array(

'ayar_mail' => $_POST['ayar_mail'],
'ayar_smtphost' => $_POST['ayar_smtphost'],
'ayar_smtpuser' => $_POST['ayar_smtpuser'],
'ayar_smtppassword' => $_POST['ayar_smtppassword'],
'ayar_smtpport' => $_POST['ayar_smtpport']

));

if ($update)
{

header("Location:../production/mail-ayarlar.php?durum=ok");

}
else{
header("Location:../production/mail-ayarlar.php?durum=failed");
}

}


if(isset($_POST['sosyalayarkaydet'])){

$ayarkaydet = $db->prepare("UPDATE ayar SET

ayar_facebook=:ayar_facebook,
ayar_google=:ayar_google,
ayar_youtube=:ayar_youtube,
ayar_twitter=:ayar_twitter




WHERE ayar_id=0");

$update = $ayarkaydet -> execute(array(

'ayar_facebook' => $_POST['ayar_facebook'],
'ayar_google' => $_POST['ayar_google'],
'ayar_youtube' => $_POST['ayar_youtube'],
'ayar_twitter' => $_POST['ayar_twitter']

));

if ($update)
{

header("Location:../production/sosyal-ayarlar.php?durum=ok");

}
else{
header("Location:../production/sosyal-ayarlar.php?durum=failed");
}

} */

?>
