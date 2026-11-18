<!DOCTYPE html>
<html>
<head> 
    <meta charset="utf-8"> 
    <title>{{ $judul }}</title> 
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

    <!-- Membuat container -->
    <div class="container"> 
        
        <!-- Header --> 
        @include('template/header') 

        <!-- Bagian Isi -->
        <div class="isi">    
            
            <!-- Sidebar --> 
            @include('template/sidebar') 
            
            <!-- Content --> 
            <div class="content">
                @yield('content')
            </div>

        </div> <!-- Tutup div.isi -->

    </div> <!-- Tutup div.container -->

</body>
</html> 