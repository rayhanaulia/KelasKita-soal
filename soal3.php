<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/style.css">
    <title>Kelas Kita soal</title>
  </head>
  <body>
   
 <div class="container-fluid shadow-sm menu">
    <div class="row p-4">
      <div class="col-md-12">
          <div class="title-index-1">Fibonacci</div>   
        <div class="row">
        <div class="col-md-12 body-soal pt-4">
   
         <?php
       function fibonacci ($n) {
  if ($n <= 1) {
    return $n;
  }
  return fibonacci($n - 1) + fibonacci($n - 2);
}

for ($i = 0; $i < 9; $i++) {
  echo fibonacci($i) . ' ';
}
?>

      </div>
       <div class="col-md-6 col-6 pt-5 pb-3 body-soal">
         <a href="index.php" class="btn btn-primary">Kembali</a>
        </div>
    </div>  
    </div>
</div>
</div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>