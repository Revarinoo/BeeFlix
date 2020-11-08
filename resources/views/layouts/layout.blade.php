<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeeFlix</title>
    <link rel="icon" href="/images/star.svg" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="{{asset('js/app.js')}}"></script>
</head>
<body>

<nav class="navbar navbar-light bg-light navbarCustom">

        <a class="navbar-brand logo" href="{{route('movies.index')}}">BeeFlix</a>
        <div class="mr-auto navbar-button">
            <a href="{{ url()->previous() }}" class="btn btn-sm btn-dark"><img src="/images/back.svg" class="mb-1 imgBtnBack" alt=""> KEMBALI</a>
            <a href="{{ route('movies.index') }}" class="btn btn-sm btn-outline-dark btnViewAll">LIHAT SEMUA FILM</a>
        </div>

    <form action="{{route('movies.create')}}" method="GET">
        <div class="form-inline my-2 my-lg-0 search">
            <input type="text" class="form-control mr-sm-2" name="q" id="" placeholder="Search Here">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </div>
    </form>

</nav>

<div class="container-fluid">
    @yield('content')
</div>

<div class="footer">
    <p id="content-footer">Copyright &copy; 2020 &nbsp; made with <img src="/images/love.svg" alt="" id="icon-footer"> by Revarino Putra</p>
</div>
</body>


</html>
