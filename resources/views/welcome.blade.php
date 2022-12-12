{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laracasts.com" class="underline text-gray-900 dark:text-white">Laracasts</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development. Check them out, see for yourself, and massively level up your development skills in the process.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div>

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                    <div class="text-center text-sm text-gray-500 sm:text-left">
                        <div class="flex items-center">
                            <svg fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" class="-mt-px w-5 h-5 text-gray-400">
                                <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>

                            <a href="https://laravel.bigcartel.com" class="ml-1 underline">
                                Shop
                            </a>

                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="ml-4 -mt-px w-5 h-5 text-gray-400">
                                <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                            </svg>

                            <a href="https://github.com/sponsors/taylorotwell" class="ml-1 underline">
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </body>
</html> --}}

<x-guest-layout>


    <section class="hero-wrap style1">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="hero-content" data-speed="0.10" data-revert="true">
                        <img src="assets/img/hero/shape-1.png" alt="Image" class="hero-shape-one bounce">
                        <img src="assets/img/hero/house.png" alt="Image">
                        <h1>Find Your Freedom, Without Leaving Home.</h1>
                        <p>Proin gravida nibh vel velit auctor aliquet aenean sollicitudin lorem quis bibendum auctor
                            nisi elit consequat ipsum nec sagittis sem nibh id elit.</p>
                        <form action="#" class="search-form">
                            <input type="text" placeholder="Find Your Location">
                            <i class="flaticon-search"></i>
                            <button type="submit">Search</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img-wrap">
                        <div class="hero-bg-one bg-f"></div>
                        <div class="client-feedback">
                            <ul class="list-style">
                                <li><a href="{{ route('testimonial') }}"><img src="assets/img/clients/client-1.jpg"
                                            alt="Image"></a></li>
                                <li><a href="{{ route('testimonial') }}"><img src="assets/img/clients/client-2.jpg"
                                            alt="Image"></a></li>
                                <li><a href="{{ route('testimonial') }}"><img src="assets/img/clients/client-3.jpg"
                                            alt="Image"></a></li>
                                <li><a href="{{ route('testimonial') }}"><img src="assets/img/clients/client-4.jpg"
                                            alt="Image"></a></li>
                            </ul>
                            <span>29k Positive Review</span>
                        </div>
                        <div class="hero-property-slider owl-carousel">
                            @foreach ($listings as $listing)
                            <div class="property-card style1">
                                <div class="property-img">
                                    <img src="/storage/images/{{$listing->image}}" alt="Image">
                                </div>
                                <div class="property-info">
                                    <h3><a href="{{route('listing-details', $listing->id)}}">{{$listing->name}}</a></h3>
                                    <p>Lorem ipsum dolor sit ame con adipi scing elit osmo</p>
                                    <div class="ratings">
                                        <i class="flaticon-star"></i>
                                        4.8(400+ Review)
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="counter-area  bg-seashell pt-100 pb-75">
        <div class="container">
            <div class="counter-card-wrap style1">
                <div class="counter-card">
                    <span class="counter-icon">
                        <i class="flaticon-quality-control"></i>
                    </span>
                    <div class="counter-text">
                        <h2 class="counter-num">
                            <span class="odometer" data-count="12"></span>
                            <span class="target">+</span>
                        </h2>
                        <p>Years Of Experience</p>
                    </div>
                </div>
                <div class="counter-card">
                    <span class="counter-icon">
                        <i class="flaticon-apartment"></i>
                    </span>
                    <div class="counter-text">
                        <h2 class="counter-num">
                            <span class="odometer" data-count="167"></span>
                            <span class="target">K+</span>
                        </h2>
                        <p>Apartments Rent</p>
                    </div>
                </div>
                <div class="counter-card">
                    <span class="counter-icon">
                        <i class="flaticon-office-building"></i>
                    </span>
                    <div class="counter-text">
                        <h2 class="counter-num">
                            <span class="odometer" data-count="239"></span>
                            <span class="target">+</span>
                        </h2>
                        <p>Total Constructions</p>
                    </div>
                </div>
                <div class="counter-card">
                    <span class="counter-icon">
                        <i class="flaticon-hand-gesture"></i>
                    </span>
                    <div class="counter-text">
                        <h2 class="counter-num">
                            <span class="odometer" data-count="449"></span>
                            <span class="target">+</span>
                        </h2>
                        <p>Apartio Rooms</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="property-wrap pt-100 pb-75">
        <div class="container">
            <div class="row section-title style1 mb-40  align-items-end">
                <div class="col-md-8">
                    <span>Our Properties</span>
                    <h2>Latest House Listings</h2>
                </div>
                <div class="col-md-4 text-md-end sm-none">
                    <a href="{{ route('listings') }}" class="btn style1">View All Listings</a>
                </div>
            </div>
            <ul class="nav nav-tabs property-tablist" role="tablist">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab_1" type="button"
                        role="tab">Residential</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_2" type="button"
                        role="tab">Commercial</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab_3" type="button"
                        role="tab">Apartments</button>
                </li>
            </ul>
            <div class="tab-content hw-tab-content">

                <div class="tab-pane fade show active" id="tab_1" role="tabpanel">
                    <div class="row">
                        @foreach ($residentials as $residential)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="property-card style2">
                                <div class="property-img-slider owl-carousel">
                                    <img src="/storage/images/{{ $residential->image }}" alt="Image">
                                    <img src="/storage/images/{{ $residential->image }}" alt="Image">
                                    <img src="/storage/images/{{ $residential->image }}" alt="Image">
                                </div>
                                <div class="property-info">
                                    <div class="property-status-wrap">
                                        <span class="property-status">For {{ $residential->status }}</span>
                                        <p class="property-price">${{$residential->price}}</p>
                                    </div>
                                    <h3><a href="{{ route('listing-details', $residential->id) }}">{{ $residential->name }} </a></h3>
                                    <p><i class="flaticon-location"></i>{{ $residential->location }}</p>
                                    <ul class="property-metainfo list-style">
                                        <li><i class="flaticon-double-bed"></i>{{ $residential->rooms }}</li>
                                        <li><i class="flaticon-bath-tub"></i>{{ $residential->rooms }}</li>
                                        <li><i class="flaticon-square"></i>3100 sqft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="tab-pane fade" id="tab_2" role="tabpanel">
                    <div class="row">
                        @foreach ($commercials as $commercial)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="property-card style2">
                                <div class="property-img-slider owl-carousel">
                                    <img src="/storage/images/{{ $commercial->image }}" alt="Image">
                                    <img src="/storage/images/{{ $commercial->image }}" alt="Image">
                                    <img src="/storage/images/{{ $commercial->image }}" alt="Image">
                                </div>
                                <div class="property-info">
                                    <div class="property-status-wrap">
                                        <span class="property-status">For {{ $commercial->status }}</span>
                                        <p class="property-price">${{ $commercial->price }}/<span>year</span></p>
                                    </div>
                                    <h3><a href="{{ route('listing-details', $commercial->id) }}">{{ $commercial->name }}</a></h3>
                                    <p><i class="flaticon-location"></i>{{ $commercial->location }}</p>
                                    <ul class="property-metainfo list-style">
                                        <li><i class="flaticon-double-bed"></i>{{ $commercial->rooms }}</li>
                                        <li><i class="flaticon-bath-tub"></i>{{ $commercial->rooms }}</li>
                                        <li><i class="flaticon-square"></i>3100 sqft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="tab_3" role="tabpanel">
                    <div class="row">
                        @foreach ($listings as $listing)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="property-card style2">
                                <div class="property-img-slider owl-carousel">
                                    <img src="/storage/images/{{ $listing->image }}" alt="Image">
                                    <img src="/storage/images/{{ $listing->image }}" alt="Image">
                                    <img src="/storage/images/{{ $listing->image }}" alt="Image">
                                </div>
                                <div class="property-info">
                                    <div class="property-status-wrap">
                                        <span class="property-status">For {{ $listing->status }}</span>
                                        <p class="property-price">${{ $listing->price }}/<span>yesr</span></p>
                                    </div>
                                    <h3><a href="{{ route('listing-details', $listing->id) }}">{{ $listing->name }}</a></h3>
                                    <p><i class="flaticon-location"></i>{{ $listing->location }}</p>
                                    <ul class="property-metainfo list-style">
                                        <li><i class="flaticon-double-bed"></i>{{ $listing->rooms }}</li>
                                        <li><i class="flaticon-bath-tub"></i>{{ $listing->rooms }}</li>
                                        <li><i class="flaticon-square"></i>3100 sqft</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="about-wrap style1 ptb-100 bg-seashell">
        <img src="assets/img/about/shape-3.png" alt="Image" class="about-shape-three">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    <div class="about-img-wrap">
                        <img src="assets/img/about/shape-1.png" alt="Image" class="about-shape-one rotate">
                        <img src="assets/img/about/shape-2.png" alt="Image" class="about-shape-two bounce">
                        <img src="assets/img/about/about-img-1.jpg" alt="Iamge" class="about-img-one">
                        <img src="assets/img/about/about-img-2.jpg" alt="Iamge" class="about-img-two">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    <div class="about-content">
                        <div class="content-title style1">
                            <span>About Us</span>
                            <h2>Enjoy Our Property For A Weekend Longer Stay</h2>
                            <p>Best Strategic planning dolor sit amet consectetur adipiscing elit. Scel erus isque
                                ametus odio velit auctor nam elit nulla eget sodales dui pulvinar. Best strategic
                                planning dolor sit sectetur morethe.</p>
                        </div>
                        <ul class="content-feature-list list-style">
                            <li><i class="flaticon-checked"></i> We have a strong customer support in 24/7 days</li>
                            <li><i class="flaticon-checked"></i>We offer wonderful homes with furnitures.</li>
                            <li><i class="flaticon-checked"></i>Private balconies with stunning views</li>
                            <li><i class="flaticon-checked"></i>Smart Home Design & Beautiful Scene Around</li>
                        </ul>
                        <a href="{{route('about-us')}}" class="btn style2">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="advantage-wrap ptb-100">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <span>Advantages</span>
                <h2>Our Best Advantages</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="200">
                    <div class="adv-card">
                        <div class="adv-img">
                            <img src="assets/img/adv-1.png" alt="Image">
                        </div>
                        <div class="adv-info">
                            <h3>Smart Home Design</h3>
                            <p>Lorem ipsum dolor sit amet, cons ectetur adip isci ngelit, sed do eiusmod tem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="200">
                    <div class="adv-card">
                        <div class="adv-img">
                            <img src="assets/img/adv-2.png" alt="Image">
                        </div>
                        <div class="adv-info">
                            <h3>Beautiful Scene Around</h3>
                            <p>Lorem ipsum dolor sit amet, cons ectetur adip isci ngelit, sed do eiusmod tem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="200">
                    <div class="adv-card">
                        <div class="adv-img">
                            <img src="assets/img/adv-3.png" alt="Image">
                        </div>
                        <div class="adv-info">
                            <h3>Complete 24/7 Support</h3>
                            <p>Lorem ipsum dolor sit amet, cons ectetur adip isci ngelit, sed do eiusmod tem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center mt-10">
                    <a href="{{ route('listings') }}" class="btn style1">Explore Properties</a>
                </div>
            </div>
        </div>
    </section>


    <div class="bg-seashell ptb-100">
        <div class="container">
            <div class="video-wrap style1 video-bg-1 bg-f ptb-100">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-8 order-lg-1 order-md-1 order-2" data-aos="fade-right"
                        data-aos-duration="1200" data-aos-delay="200">
                        <div class="video-content">
                            <div class="content-title style1">
                                <span>Open Video</span>
                                <h2>Attend A Virtual Open Apartments</h2>
                                <p>Best Strategic planning dolor sit amet consectetur adipiscing elit. Scel erus isque
                                    ametus odio velit auctor nam elit nulla eget sodales dui pulvinar. Best strategic
                                    planning dolor sit amet.</p>
                            </div>
                            <a href="{{ route('listings') }}" class="btn style2">Explore Property</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 order-lg-2 order-md-2 order-1">
                        <a class="play-video" data-fancybox=""
                            href="https://www.youtube.com/watch?v=Qj59_LGUBvE&amp;t=1s">
                            <span class="play-now icon"><i class="flaticon-play-1"></i>
                                <span class="ripple"></span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="simple-wrap pt-100 pb-75">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title style1 text-center mb-40">
                        <span>Your Journey With Us</span>
                        <h2>What Kind Of Place You Are Looking For?</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="200">
                    <div class="simple-card">
                        <img src="assets/img/about/simple-1.jpg" alt="Image">
                        <div class="simple-card-info">
                            <h3>Apartment Life</h3>
                            <p>Lorem ipsum dolor sit amet consec tet adipisicing elit. Reprehe nderit volupta labore
                                error amet.</p>
                            <a href="{{ route('listings') }}" class="link style1">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="300">
                    <div class="simple-card">
                        <img src="assets/img/about/simple-2.jpg" alt="Image">
                        <div class="simple-card-info">
                            <h3>Pet Fiendly</h3>
                            <p>Lorem ipsum dolor sit amet consec tet adipisicing elit. Reprehe nderit volupta labore
                                error amet.</p>
                            <a href="{{ route('listings') }}" class="link style1">View More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="400">
                    <div class="simple-card">
                        <img src="assets/img/about/simple-3.jpg" alt="Image">
                        <div class="simple-card-info">
                            <h3>Parking Included</h3>
                            <p>Lorem ipsum dolor sit amet consec tet adipisicing elit. Reprehe nderit volupta labore
                                error amet.</p>
                            <a href="{{ route('listings') }}" class="link style1">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="city-wrap pt-100 pb-75 bg-seashell">
        <img src="assets/img/shape-2.png" alt="Image" class="city-shape-one">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <span>Choose A Popular City</span>
                <h2>Our Hottest Nearby Cities</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="200">
                    <div class="city-card style1">
                        <img src="assets/img/city/city-1.jpg" alt="Image">
                        <div class="city-info">
                            <h3><a href="{{ route('listings') }}">New York City</a></h3>
                            <p>+5231 properties</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="300">
                    <div class="city-card style1">
                        <img src="assets/img/city/city-2.jpg" alt="Image">
                        <div class="city-info">
                            <h3><a href="{{ route('listings') }}">Los Angeles</a></h3>
                            <p>+1211 properties</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="400">
                    <div class="city-card style1">
                        <img src="assets/img/city/city-3.jpg" alt="Image">
                        <div class="city-info">
                            <h3><a href="{{ route('listings') }}">Prauge</a></h3>
                            <p>+121 properties</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="500">
                    <div class="city-card style1">
                        <img src="assets/img/city/city-4.jpg" alt="Image">
                        <div class="city-info">
                            <h3><a href="{{ route('listings') }}">Florida</a></h3>
                            <p>+432 properties</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="200">
                    <div class="city-card style1">
                        <img src="assets/img/city/city-5.jpg" alt="Image">
                        <div class="city-info">
                            <h3><a href="{{ route('listings') }}">San Fransisco</a></h3>
                            <p>+231 properties</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="300">
                    <div class="city-card style1">
                        <img src="assets/img/city/city-6.jpg" alt="Image">
                        <div class="city-info">
                            <h3><a href="{{ route('listings') }}">Torento City</a></h3>
                            <p>+1222 properties</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="400">
                    <div class="city-card style1">
                        <img src="assets/img/city/city-7.jpg" alt="Image">
                        <div class="city-info">
                            <h3><a href="{{ route('listings') }}">Vancuver City</a></h3>
                            <p>+151 properties</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="500">
                    <div class="city-card style1">
                        <img src="assets/img/city/city-8.jpg" alt="Image">
                        <div class="city-info">
                            <h3><a href="{{ route('listings') }}">Montreal City</a></h3>
                            <p>+232 properties</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonial-wrap ptb-100">
        <img src="assets/img/shape-1.png" alt="Image" class="testimonial-shape-one">
        <div class="container">
            <div class="section-title style1 text-center mb-40">
                <span>See Our Reviews</span>
                <h2>What Our Users Say About Us</h2>
            </div>
            <div class="testimonial-slider-one owl-carousel">
                <div class="testimonial-card style1">
                    <div class="client-img">
                        <img src="assets/img/clients/client-1.jpg" alt="Image">
                    </div>
                    <div class="quote-wrap">
                        <p class="client-quote">
                            Lorem ipsum dolor sit amet adip elitions repellat tetur delni vel quam aliq earum explibo
                            dolor eme fugiat enim illumon.
                        </p>
                        <div class="client-info-wrap">
                            <div class="client-info">
                                <h5>Alexandar Mason</h5>
                                <span>Managing Director, IBAC</span>
                            </div>
                            <div class="ratings">
                                <i class="flaticon-star"></i>
                                4.8
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card style1">
                    <div class="client-img">
                        <img src="assets/img/clients/client-2.jpg" alt="Image">
                    </div>
                    <div class="quote-wrap">
                        <p class="client-quote">
                            Lorem ipsum dolor sit amet adip elitions repellat tetur delni vel quam aliq earum explibo
                            dolor eme fugiat enim illumon.
                        </p>
                        <div class="client-info-wrap">
                            <div class="client-info">
                                <h5>David Watson</h5>
                                <span>Director, BAT</span>
                            </div>
                            <div class="ratings">
                                <i class="flaticon-star"></i>
                                4.7
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card style1">
                    <div class="client-img">
                        <img src="assets/img/clients/client-3.jpg" alt="Image">
                    </div>
                    <div class="quote-wrap">
                        <p class="client-quote">
                            Lorem ipsum dolor sit amet adip elitions repellat tetur delni vel quam aliq earum explibo
                            dolor eme fugiat enim illumon.
                        </p>
                        <div class="client-info-wrap">
                            <div class="client-info">
                                <h5>Tom Haris</h5>
                                <span>Civil Engineer, Olleo</span>
                            </div>
                            <div class="ratings">
                                <i class="flaticon-star"></i>
                                4.7
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card style1">
                    <div class="client-img">
                        <img src="assets/img/clients/client-4.jpg" alt="Image">
                    </div>
                    <div class="quote-wrap">
                        <p class="client-quote">
                            Lorem ipsum dolor sit amet adip elitions repellat tetur delni vel quam aliq earum explibo
                            dolor eme fugiat enim illumon.
                        </p>
                        <div class="client-info-wrap">
                            <div class="client-info">
                                <h5>Chris Jackson</h5>
                                <span>Enterpreneur</span>
                            </div>
                            <div class="ratings">
                                <i class="flaticon-star"></i>
                                4.9
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card style1">
                    <div class="client-img">
                        <img src="assets/img/clients/client-5.jpg" alt="Image">
                    </div>
                    <div class="quote-wrap">
                        <p class="client-quote">
                            Lorem ipsum dolor sit amet adip elitions repellat tetur delni vel quam aliq earum explibo
                            dolor eme fugiat enim illumon.
                        </p>
                        <div class="client-info-wrap">
                            <div class="client-info">
                                <h5>Robert Muller</h5>
                                <span>MD, ITec</span>
                            </div>
                            <div class="ratings">
                                <i class="flaticon-star"></i>
                                4.9
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card style1">
                    <div class="client-img">
                        <img src="assets/img/clients/client-6.jpg" alt="Image">
                    </div>
                    <div class="quote-wrap">
                        <p class="client-quote">
                            Lorem ipsum dolor sit amet adip elitions repellat tetur delni vel quam aliq earum explibo
                            dolor eme fugiat enim illumon.
                        </p>
                        <div class="client-info-wrap">
                            <div class="client-info">
                                <h5>Mark Owen</h5>
                                <span>Enterpreneur</span>
                            </div>
                            <div class="ratings">
                                <i class="flaticon-star"></i>
                                4.9
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="faq-wrap style1 ptb-100 bg-seashell">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="400">
                    <div class="faq-img-wrap">
                        <img src="assets/img/faq-img-1.png" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="400">
                    <div class="faq-content">
                        <div class="content-title style1">
                            <span>Have Questions?</span>
                            <h2>Frequently Asked Questions</h2>
                        </div>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        <span>
                                            <i class="flaticon-plus plus"></i>
                                            <i class="flaticon-minus-sign minus"></i>
                                        </span>
                                        What Is The Price range Of Your Properties?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="single-product-text">
                                            <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit
                                                laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi.
                                                Exercitationem eveniet aliquam repudiandae non, sequi mollitia at iusto
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        <span>
                                            <i class="flaticon-plus plus"></i>
                                            <i class="flaticon-minus-sign minus"></i>
                                        </span>
                                        How Long Will It take To Process My Application?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse "
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit
                                            laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi.
                                            Exercitationem eveniet aliquam repudiandae non, sequi mollitia at iusto</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        <span>
                                            <i class="flaticon-plus plus"></i>
                                            <i class="flaticon-minus-sign minus"></i>
                                        </span>
                                        What If I Need To Move Out Before My Lease Exercise?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit
                                            laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi.
                                            Exercitationem eveniet aliquam repudiandae non, sequi mollitia at iusto</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfour">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="true"
                                        aria-controls="collapsefour">
                                        <span>
                                            <i class="flaticon-plus plus"></i>
                                            <i class="flaticon-minus-sign minus"></i>
                                        </span>
                                        What Our IT Consultants Suggest On New Topics?
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse "
                                    aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="single-product-text">
                                            <p>Lorem ipsum dolor sit amet consec tetur adipisicing elit. Quisquam sit
                                                laborum est aliquam. Dicta fuga soluta eius exercitationem porro modi.
                                                Exercitationem eveniet aliquam repudiandae non, sequi mollitia at iusto
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="property-slider-wrap ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                    <div class="section-title style1 text-center mb-40">
                        <span>Recently Available</span>
                        <h2>Easy Price For Home Owners</h2>
                    </div>
                </div>
            </div>
            <div class="property-slider-one style1 owl-carousel">
                <div class="property-card style3">
                    <div class="property-img">
                        <img src="assets/img/property/property-26.jpg" alt="Image">
                        <span class="property-status">For Rent</span>
                        <span class="property-condo">New</span>
                    </div>
                    <div class="property-info">
                        <div class="property-status-wrap">
                            <span class="property-state"><i class="flaticon-home"></i>House</span>
                            <p class="property-price">$24,900/<span>month</span></p>
                        </div>
                        <h3><a href="">Morningside Apartment</a></h3>
                        <p><i class="flaticon-location"></i>2983 Edwards Street, North Carolina</p>
                        <ul class="property-metainfo list-style">
                            <li><i class="flaticon-double-bed"></i>04</li>
                            <li><i class="flaticon-bath-tub"></i>04</li>
                            <li><i class="flaticon-square"></i>1400 sqft</li>
                        </ul>
                    </div>
                </div>
                <div class="property-card style3">
                    <div class="property-img">
                        <img src="assets/img/property/property-27.jpg" alt="Image">
                        <span class="property-status">For Rent</span>
                        <span class="property-condo">New</span>
                    </div>
                    <div class="property-info">
                        <div class="property-status-wrap">
                            <span class="property-state"><i class="flaticon-home"></i>Unit</span>
                            <p class="property-price">$29,000/<span>month</span></p>
                        </div>
                        <h3><a href="">Duplex Villa</a></h3>
                        <p><i class="flaticon-location"></i>824 Gateway Avenue, California</p>
                        <ul class="property-metainfo list-style">
                            <li><i class="flaticon-double-bed"></i>05</li>
                            <li><i class="flaticon-bath-tub"></i>04</li>
                            <li><i class="flaticon-square"></i>1200 sqft</li>
                        </ul>
                    </div>
                </div>
                <div class="property-card style3">
                    <div class="property-img">
                        <img src="assets/img/property/property-28.jpg" alt="Image">
                        <span class="property-status">For Rent</span>
                        <span class="property-condo">New</span>
                    </div>
                    <div class="property-info">
                        <div class="property-status-wrap">
                            <span class="property-state"><i class="flaticon-home"></i>Apartment</span>
                            <p class="property-price">$34,900/<span>month</span></p>
                        </div>
                        <h3><a href="">Sky villa Apartment</a></h3>
                        <p><i class="flaticon-location"></i>64, 1st Aveneu, High Steet, USA</p>
                        <ul class="property-metainfo list-style">
                            <li><i class="flaticon-double-bed"></i>06</li>
                            <li><i class="flaticon-bath-tub"></i>04</li>
                            <li><i class="flaticon-square"></i>310 sqft</li>
                        </ul>
                    </div>
                </div>
                <div class="property-card style3">
                    <div class="property-img">
                        <img src="assets/img/property/property-25.jpg" alt="Image">
                        <span class="property-status">For Rent</span>
                        <span class="property-condo">New</span>
                    </div>
                    <div class="property-info">
                        <div class="property-status-wrap">
                            <span class="property-state"><i class="flaticon-home"></i>House</span>
                            <p class="property-price">$14,900/<span>month</span></p>
                        </div>
                        <h3><a href="">Apartment For Rent</a></h3>
                        <p><i class="flaticon-location"></i>989 Upton Avenue, Mailne</p>
                        <ul class="property-metainfo list-style">
                            <li><i class="flaticon-double-bed"></i>06</li>
                            <li><i class="flaticon-bath-tub"></i>04</li>
                            <li><i class="flaticon-square"></i>310 sqft</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>

