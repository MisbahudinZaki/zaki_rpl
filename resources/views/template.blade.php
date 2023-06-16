<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Blogs - Code:Zaki.com</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-secondary mb-3">
 
 <button class="navbar-toggler" type="button" data- toggle="collapse" data-target="#navbarTogglerDemo03" aria- controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <a class="navbar-brand" href="#"><font color="white">RPL</font></a>
 <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
 <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
 <li class="nav-item active">
 <a class="nav-link" href="{{url('/home')}}"><font color="white">Home</font> <span class="sr-only">(current)</span></a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="{{url('/siswa')}}"><font color="white">Data Siswa</font></a>
 </li>
 <li class="nav-item">
 <a class="nav-link" href="{{url('/mapel')}}"><font color="white">Data Mata Pelajaran</font></a>
 </li>
 <li class="nav-item">
    <a class="nav-link" href="{{url('/jurusan')}}"><font color="white">Data Jurusan</font></a>
 </li>
 <li class="nav-item">
    <a class="nav-link" href="{{url('/buku')}}"><font color="white">Data Buku</font></a>
 </li>
 <li class="nav-item">
 <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><font color="white">Disabled</font></a>
 </li>
 <li class="nav-item dropdown">
 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
 <font color="white"> Dropdown link</font>
 </a>
 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
 <a class="dropdown-item" href="#">Action</a>
 <a class="dropdown-item" href="#">Another action</a>
 <a class="dropdown-item" href="#">Something else here</a>
 </div>
 </li>
 </ul>
 <form class="form-inline my-2 my-lg-0">
 <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
 <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
 </form>
 </div>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 </nav>
</header>



    <div class="container">
        <header>
            <h3>@yield('title')</h3>
            @yield('conten')
        </header>
        <footer>
            <p>COPYRIGHT PPLG 2023</p>
        </footer>
    </div>
</body>
</html>