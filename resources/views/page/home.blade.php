@extends('page.index.index')

@section('container')
        <div class=" container">
            <div class="row mt-4">
                <div class="col-sm-6 my-5">
                    <div class="align-middle">
                        <h1>Lorem ipsum dolor sit amet</h1>
                        <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat bibendum dignissim mi. Quis convallis aliquet faucibus ornare euismod purus, consectetur amet elementum.</p>
                    </div>
                </div>
                <div class="col-sm-6 d-flex justify-content-end">
                    <img src="img/intro.png" alt="">
                </div>
            </div>
        </div>
        <div class="box">
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="" alt="">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="col-sm-12 my-4">
                <div class="text d-flex justify-content-xl-between">
                    <h3>Baru ditambahkan</h3>
                    <a href="/shop">Lihat Lengkapnya</a>
                </div>
                <div class="col-sm-12 my-4">
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
        <div class="container">
            <div class="col-sm-12">
                <h1>Lorem ipsum dolor sit amet</h1>
                <div class="d-flex justify-content-center">
                    <div class="cardtxt d-flex  justify-content-center">
                        <div class="cardicon">
                            <box-icon name="user"></box-icon>
                        </div>
                        <div class="txt">
                            <h6>orang ke orang</h6>
                            <p>aaa aaaaa  aaaaaa aaa aaa aaaa</p>
                        </div>
                    </div>
                    <div class="cardtxt">
                        <div class="cardicon">
                            <box-icon name="user"></box-icon>
                        </div>
                        <div class="txt">

                        </div>
                    </div>
                    <div class="cardtxt">
                        <div class="cardicon">
                            <box-icon name="user" size="50px"></box-icon>
                        </div>
                        <div class="txt">

                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
