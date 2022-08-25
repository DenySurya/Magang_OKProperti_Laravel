<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <title>OKProperti</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/js" href="{{ asset('/js/app.js') }}">
    
    
</head>

<body>
    <header class="absolute top-0 left-0 z-10 flex w-full items-center dark:bg-slate-900 bg-primary">
        <div class=" container">
            <div class="relative flex items-center justify-between">
                <div class="px-5">

                    <!-- <a href="#home" class="block py-6 font-bold text-secondary group-hover:text-primary">denysurya</a> -->
                    <img href="#home" class="object-center" src="{{asset('images/logo2.png')}}" alt="poroperti baru" />
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
                        <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                    </button>
                    <nav id="nav-menu"
                        class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg dark:bg-slate-900 bg-white py-5 shadow-lg lg:static lg:block lg:max-w-full lg:rounded-none  lg:bg-transparent lg:shadow-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="/"
                                    class="mx-8 flex py-2 text-sm text-text1 dark:text-white group-hover:text-primary">Home</a>
                            </li>
                            <li class="group">
                                <a href="/product"
                                    class="mx-8 flex py-2 text-sm text-text1 dark:text-white group-hover:text-primary">Product</a>
                            </li>
                            <li class="group">
                                <a href="/portfolio"
                                    class="mx-8 flex py-2 text-sm text-text1 dark:text-white group-hover:text-primary">Portfolio</a>
                            </li>
                            <li class="group">
                                <a href="/contact"
                                    class="mx-8 flex py-2 text-sm text-text1 dark:text-white group-hover:text-primary">Contact</a>
                            </li>
                            <li class="group">
                                <a href="/about"
                                    class="mx-8 flex py-2 text-sm text-text1 dark:text-white group-hover:text-primary">About
                                    Us</a>
                            </li>

                            <li class="flex items-center py-2 pl-8">
                                <div class="flex ">
                                    <span class="text-sm text-text1 dark:text-slate-500 mr-2">Light</span>
                                    <input type="checkbox" id="dark-toggle" class="hidden">
                                    <label for="dark-toggle">
                                        <div
                                            class="w-9 h-5 bg-slate-500 rounded-full flex items-center  p-1 cursor-pointer">
                                            <div
                                                class="w-4 h-4 bg-white rounded-full toggle-circle transition duration-300 ease ini out">
                                            </div>
                                        </div>
                                    </label>
                                    <span class="text-sm dark:text-white text-slate-500 ml-2">Dark</span>
                                </div>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>