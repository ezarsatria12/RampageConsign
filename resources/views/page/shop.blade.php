@extends('page.index.index')
@section('container')
<div class="container mt-4">
    <div class="col-sm-12 my-4">
        <h2>Lorem ipsum dolor sit amet</h2>
    </div>
    <div class="row">
        <div class="col-sm-2 ">
            <div class="filter p-3">
                <h3>Filter</h3>
                    <li>
                        <a href="">aaa</a>
                    </li>     
            </div>
        </div>
        <div class="col-sm-10 px-5">
            <div class="cardlist">
                <div class="row">
                    <div class="card m-1" style="width: 184px;">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="..." alt="Card image cap">
                                </div>
                                <div class="card-body">
                                <h6 class="card-title">Card title</h6>
                                <p class="card-text">Rp 100000</p>
                                <p class="card-text">Rp 100000</p>
                                </div>
                            </div>
                            <div class="card m-1" style="width: 184px;">
                                <div class="ratio ratio-1x1">
                                    <img class="card-img-top" src="..." alt="Card image cap">
                                </div>
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
@endsection