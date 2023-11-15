<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- End Google Font -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome -->
    <!-- Vite -->
    @vite('resources/css/app.css')
    <!-- End Vite -->
    <title>@yield('title')</title>
</head>
<body class="font-poppins">
     <!-- Header -->
    <nav class="w-full h-24 bg-white flex justify-center items-center relative">
        <div class="w-[90%] mx-auto h-16 flex justify-between items-center lg:w-[953px] xl:w-[1200px] 2xl:w-[1400px]">
            <!-- Logo -->
            <div class="w-[103px] block">
                <a href="#" class="block w-[103px]"><img class="w-full h-full object-cover object-center" src="{{ url('/images/logo_04.png') }}" alt="logo-site"></a>
            </div>
            <!-- End Logo -->
            <!-- Navigation & Login and Post btn -->
            <div class="bg-white shadow-2xl navigation block duration-700 h-screen w-[240px] -ml-[280px]  absolute top-0 left-0 py-5 px-5 z-10 lg:w-[calc(100%-103px)] lg:h-16 lg:flex lg:justify-between lg:items-center lg:ml-0 lg:static lg:z-0 lg:py-0 lg:px-0 lg:shadow-none lg:duration-0 xl:justify-end">
                <!-- Navigation -->
                <ul class="h-[220px] flex justify-center items-star flex-col lg:h-16 lg:flex-row lg:w-[500px] lg:justify-end lg:items-center">
                    <li class="h-[49px] flex items-center font-semibold lg:h-[44px] lg:w-[112px]"><a href="#" class="text-base">Home</a></li>
                    <li class="h-[49px] flex items-center font-semibold lg:h-[44px] lg:w-[112px]"><a href="#" class="text-base">Job</a></li>
                    <li class="h-[49px] flex items-center font-semibold lg:h-[44px] lg:w-[112px]"><a href="#" class="text-base">Blog</a></li>
                    <li class="h-[49px] flex items-center font-semibold lg:h-[44px] lg:w-[112px]"><a href="#" class="text-base">Contact</a></li>
                </ul>
                <!-- End Navigation -->
                <!-- Login and Post button -->
                <div class="h-[150px] flex justify-evenly items-star flex-col w-[135px] lg:flex-row lg:h-16 lg:w-[350px] lg:items-center">
                    <a class="h-[49px] w-full rounded-full border border-green-500 flex justify-center items-center lg:h-[44px] lg:w-[140px] lg:py-6 lg:hover:bg-green-500 lg:delay-100" href="#">Login/Sign up</a>
                    <a class="h-[49px] w-full rounded-full flex justify-center items-center bg-green-500 text-white lg:h-[44px] lg:w-[140px] lg:py-6 lg:hover:bg-black lg:delay-100" href="#">Post a job</a>
                </div>
                <!-- End Login and Post button -->
            </div>
            <!-- End Navigation & Login and Post btn -->
            <!-- Hamburger menu and close Menu for small devices -->            
            <i class="fa-solid fa-bars openNav text-3xl block text-white w-[44px] h-[38px] bg-green-500 border text-center rounded cursor-pointer lg:hidden"></i>
            <i class="fa-solid fa-xmark closeNav text-3xl hidden text-white w-[44px] h-[38px] bg-green-500 border text-center rounded cursor-pointer lg:hidden"></i>          
            <!-- End Hamburger menu and close Menu for small devices -->
        </div>
    </nav>
    <!-- End Header -->
    {{ $slot }}
    <!-- Footer -->
    <footer>
        <div class="w-[90%] mx-auto lg:w-[953px] xl:w-[1200px] 2xl:w-[1400px]">
            <div class="sm:grid sm:gap-4 sm:grid-cols-2 sm:grid-rows-2 md:grid-cols-4 md:grid-rows-1">
                <!--Logo & Image -->
                <div class="h-[143px] mb-[20px] sm:h-[198px]">
                    <!-- Logo -->
                    <div class="w-[103px] block">
                        <a href="#" class="block w-[103px]"><img class="w-full h-full object-cover object-center" src="{{ url('/images/logo_04.png') }}" alt="logo-site"></a>
                    </div>
                    <!-- End Logo -->
                    <!-- Image -->
                    <div class="w-[53px] h-[53px] my-[30px]">
                        <img class="w-full h-full object-cover object-center" src="{{ url('/images/shape_28.svg') }}" alt="square-image">
                    </div>
                    <!-- End Image -->
                </div>
                <!--End Logo -->
                <!-- Services -->
                <div class="h-[198px] mb-[20px]">
                    <h4 class="h-[21px] mb-[15px] text-lg font-semibold">Services</h4>
                    <div>
                        <a href="#" class="block text-base font-light mb-[18px] text-gray-500">Browse Jobs</a>
                        <a href="#" class="block text-base font-light mb-[18px] text-gray-500">Companies</a>
                        <a href="#" class="block text-base font-light mb-[18px] text-gray-500">Candidates</a>
                        <a href="#" class="block text-base font-light mb-[18px] text-gray-500">Pricing</a>
                    </div>
                </div>
                <!-- Services -->
                <!-- Company -->
                <div class="h-[198px] mb-[20px]">
                    <h4 class="h-[21px] mb-[15px] text-lg font-semibold">Company</h4>
                    <div>
                        <a href="#" class="block text-base font-light mb-[18px] text-gray-500">About us</a>
                        <a href="#" class="block text-base font-light mb-[18px] text-gray-500">Blogs</a>
                        <a href="#" class="block text-base font-light mb-[18px] text-gray-500">FAQ's</a>
                        <a href="#" class="block text-base font-light mb-[18px] text-gray-500">Contact</a>
                    </div>
                </div>
                <!-- Company -->
                <!-- Support -->
                <div class="h-[198px] mb-[20px]">
                    <h4 class="h-[21px] mb-[15px] text-lg font-semibold">Support</h4>
                    <div>
                        <a href="#" class="block text-base font-light mb-[18px] text-gray-500">Terms of use</a>
                        <a href="#" class="block text-base font-light mb-[18px] text-gray-500">Terms & conditions</a>
                        <a href="#" class="block text-base font-light mb-[18px] text-gray-500">Privacy</a>
                        <a href="#" class="block text-base font-light mb-[18px] text-gray-500">Cookie policy</a>
                    </div>
                </div>
                <!-- Support -->                    
            </div>
            <!-- Footer bottom -->
            <div class="h-[30px] text-sm text-gray-500 text-center font-light">
                Copyright @2023 Joby.
            </div>
            <!-- End Footer bottom -->
        </div>
    </footer>
    <!-- End Footer -->
    <!--Scripts -->
    <script src="{{ url('js/home.js') }}"></script>
</body>
</html>