<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="#" method="post" enctype="multipart/form-data">
      <input type="file" name="ufile" accept=".pdf" value="">
      <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>

<?PHP
  if(isset($_POST['submit']))
  {
    error_reporting(0);
    $filename = $_FILES['ufile'][name];
    $tempname = $_FILES['ufile'][tmp_name];
    $target_dir = "Reports/".$filename;
    if(move_uploaded_file($tempname,$target_dir))
    {
      echo "Doone";
    }
    else {
      echo "Not Done";
    }


  }
?>
