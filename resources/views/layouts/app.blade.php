<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? config('app.name', 'Company Profile') }}</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://via.placeholder.com/1920x1080');
            background-size: cover;
            background-position: center;
            min-height: 80vh;
        }
        
        .section-title {
            position: relative;
            padding-bottom: 15px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: #0d6efd;
        }

            .navbar-nav .nav-link {
        position: relative;
        margin: 0 10px;
        padding: 10px 0;
        color: rgba(255, 255, 255, 0.7);
        transition: all 0.3s ease;
        }

        .navbar-nav .nav-link:hover {
            color: #ffffff;
        }

        /* Style untuk link yang aktif */
        .navbar-nav .nav-link.active {
            color: #ffffff;
            font-weight: bold;
        }

        .navbar-nav .nav-link.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ffffff;
            transform: scaleX(1);
        }

        /* Efek hover untuk garis bawah */
        .navbar-nav .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ffffff;
            transform: scaleX(0);
            transition: transform 0.3s ease;
        }

        .navbar-nav .nav-link:hover::after {
            transform: scaleX(1);
        }

        /* Custom CSS untuk halaman */
        .hero-section {
            background: linear-gradient(to right, #2c3e50, #4ca1af);
            padding: 120px 0;
            min-height: 100vh;
            position: relative;
        }

        .section-title {
            position: relative;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 70px;
            height: 3px;
            background-color: #007bff;
        }

        .text-center .section-title::after {
            left: 50%;
            transform: translateX(-50%);
        }

        .text-lg-start .section-title::after {
            left: 0;
            transform: none;
        }

        .service-card {
            transition: all 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            border-radius: 50%;
            background-color: rgba(0, 123, 255, 0.1);
            color: #007bff;
            font-size: 32px;
            transition: all 0.3s ease;
        }

        .service-card:hover .service-icon {
            background-color: #007bff;
            color: #fff;
        }

        .portfolio-item {
            position: relative;
            overflow: hidden;
            border-radius: 4px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 30px;
        }

        .portfolio-item:hover {
            transform: translateY(-10px);
        }

        .portfolio-item img {
            transition: all 0.3s ease;
        }

        .portfolio-item:hover img {
            transform: scale(1.05);
        }

        .team-member-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            border: 5px solid #fff;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
    </style>
    
    @stack('styles')
</head>
<body>
    @include('templates.navbar')
    
    <main>
        @yield('content')
    </main>
    
    @include('templates.footer')
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/navbar-active.js"></script>
    
    @stack('scripts')
</body>
</html>