<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/homecustom.css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>RampageConsign</title>
</head>
<body>
    <div class="container-fluid">
        <div class="col-sm-12">
            <button type="button" class="btn-close btn-close-white" aria-label="Close"></button>
        </div>
    </div>
    <div class="container">
        <div class="col-sm-12">
            <h1>Daftar Dulu Yuk.</h1>
        </div>
    </div>
    <div class="container">
        <form method="post" action="{{ route('signup') }}">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nama</label>
                        <input type="name" class="form-control @error('nama')
                            is-invalid
                        @enderror" id="nama" placeholder="Nama" required value="{{ old('nama') }}">
                        @error('nama')
                            <div class="valid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    
                    <div class="row row justify-content-between">
                        <div class="col-sm-6">
                        <div class="form-group my-2">
                            <label for="exampleInputPassword1">Email</label>
                            <input type="email" class="form-control @error('email')
                                is-invalid
                            @enderror" id="email" placeholder="@gmail.com" required value="{{ old('email')}}">
                            @error('email')
                                <div class="valid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                        <div class="col-sm-6">
                            <div class="form-group my-2">
                                <label for="exampleInputPassword1">No telp</label>
                                <input type="number" class="form-control @error('notlp')
                                is-invalid
                                @enderror" id="notlp" placeholder="08xxxxxxx" required value="{{ old('notlp')}}">
                            </div>
                            @error('notlp')
                                <div class="valid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="password @error('password')
                        is-invalid
                        @enderror" placeholder="Password">
                        @error('password')
                                <div class="valid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                    </div>
                    <div class="d-grid gap-2 align-items-center my-3">
                        <button class="btn btn-primary" type="submit">Lanjut</button>
                    </div>
                    
                </div>
                <div class="col-sm-4">

                </div>
            </div>
        </form>
    </div>
</body>
</html>