<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','TEST')</title>
    
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/kmutnb.css')}}">
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <link rel="stylesheet" href="{{asset('vendor/toastr/toastr.min.css')}}">
    <script src="{{asset('vendor/toastr/toastr.min.js')}}"></script>
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="/" class="navbar-brand">BikeShop</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">หน้าแรก</a></li>
                    <li><a href="product">ข้อมูลสินค้า</a></li>
                    <li><a href="#">รายงาน</a></li>
                </ul>
            </div>
        </div>
    </nav>
    {{-- <div class="header-kmutnb"></div> --}}
   
    @yield('content')
    @if(session('msg'))
        @if(session('ok'))
            <script>toastr.success("{{ session('msg') }}")</script>
        @else
            <script>toastr.error("{{ session('msg') }}")</script>
        @endif
    @endif
        
        

</body>

</html>