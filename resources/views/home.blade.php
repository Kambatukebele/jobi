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
            <div class="bg-green-800 block delay-150 h-screen w-[calc(100%-70px)] -ml-[1000px] absolute top-0 left-0 py-5 px-5">
                <!-- Navigation -->
                <ul class="border h-[220px] flex justify-center items-star flex-col">
                    <li class="h-[49px] flex items-center"><a href="#" class="text-base">Home</a></li>
                    <li class="h-[49px] flex items-center"><a href="#" class="text-base">Job</a></li>
                    <li class="h-[49px] flex items-center"><a href="#" class="text-base">Blog</a></li>
                    <li class="h-[49px] flex items-center"><a href="#" class="text-base">Contact</a></li>
                </ul>
                <!-- End Navigation -->
                <!-- Login and Post button -->
                <div class="h-[150px] border flex justify-evenly items-star flex-col">
                    <a class="h-[49px] " href="#">Login/Sign up</a>
                    <a class="h-[49px] w-full rounded-full border flex justify-center items-center" href="#">Post a job</a>
                </div>
                <!-- End Login and Post button -->
            </div>
            <!-- End Navigation & Login and Post btn -->
            <!-- Hamburger menu and close Menu for small devices -->            
            <i class="fa-solid fa-bars openNav text-3xl block text-white w-[44px] h-[38px] bg-green-600 border text-center rounded cursor-pointer"></i>
            <i class="fa-solid fa-xmark cloneNav text-3xl hidden text-white w-[44px] h-[38px] bg-green-600 border text-center rounded cursor-pointer"></i>          
            <!-- End Hamburger menu and close Menu for small devices -->
        </div>
    </nav>
    <!-- End Header -->
</x-website-layout>