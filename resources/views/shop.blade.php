<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/homecustom.css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    @include('partials.nav');
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-2">
                                <div class="filter">
                                    <h3>Filter</h3>
                                        <li>
                                            <a href="">aaa</a>
                                        </li>
                                    
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="row">
                                    <div class="card" style="width: 184px;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                        <h6 class="card-title">Card title</h6>
                                        <p class="card-text">Rp 100000</p>
                                        <p class="card-text">Rp 100000</p>
                                        
                                        </div>
                                    </div>
                                    <div class="card" style="width: 184px;">
                                        <img class="card-img-top" src="..." alt="Card image cap">
                                        <div class="card-body">
                                        <h6 class="card-title">Card title</h6>
                                        <p class="card-text">Rp 100000</p>
                                        <div class="row">
                                            <p class="card-text">Rp</p>
                                            <p class="card-text">Rp</p>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
            </div>
            
        </div>
    </div>
    @include('partials.bottom');
</body>
</html>