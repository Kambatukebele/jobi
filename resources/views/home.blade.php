<x-website-layout>
    <!-- Header -->
    <nav class="w-full h-24 bg-orange-300 flex justify-center items-center relative">
        <div class="w-[90%] mx-auto h-16 flex justify-between items-center bg-cyan-500">
            <!-- Logo -->
            <div class="w-[103px] block">
                <a href="#" class="block w-[103px]"><img class="w-full h-full object-cover object-center" src="{{ url('/images/logo_04.png') }}" alt="logo-site"></a>
            </div>
            <!-- End Logo -->
            <!-- Navigation & Login and Post btn -->
            <div class="bg-green-800 h-screen w-full absolute top-0 left-0">
                <!-- Navigation -->
                <ul class="">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Job</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <!-- End Navigation -->
                <!-- Login and Post button -->
                <div class="">
                    <a href="#">Login/Sign up</a>
                    <a href="#">Post a job</a>
                </div>
                <!-- End Login and Post button -->
            </div>
            <!-- End Navigation & Login and Post btn -->
            <!-- Hamburger menu and close Menu for small devices -->            
            <i class="fa-solid fa-bars text-3xl block text-white w-[44px] h-[38px] bg-green-600 border text-center rounded cursor-pointer"></i>
            <i class="fa-solid fa-xmark text-3xl hidden text-white w-[44px] h-[38px] bg-green-600 border text-center rounded cursor-pointer"></i>          
            <!-- End Hamburger menu and close Menu for small devices -->
        </div>
    </nav>
    <!-- End Header -->
</x-website-layout>