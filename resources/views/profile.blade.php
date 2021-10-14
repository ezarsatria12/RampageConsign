<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/homecustom.css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <title>RampageConsign</title>
<body>
    @include('partials.nav')
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-1 border border-primary">
            <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="#">Profile</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Produk</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Order</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Chat</a>
                </li>
              </ul>
        </div>
        <div class="col-sm-9">
          @include('partials.produk')
        </div>
        <div class="col-sm-2">

        </div>
      </div>
        
    </div>
</body>
</html>