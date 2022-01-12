@extends('profile.index.index')

@section('container')
<div class="d-flex justify-content-center flex-warp flex-md-nowarp align-item-center pt-3 pb-2 md-3 border-bottom">
    <h1>produk</h1>
</div>
<div class="isi">
    <div class="col-sm-12 m-2 d-flex justify-content-end">
        <button class="btn btn-warning"><box-icon name="plus"></box-icon></button>
    </div>
    <div class="">
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
    </div>
</div>
    
@endsection
