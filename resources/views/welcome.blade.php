<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
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
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                {{-- <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <svg viewBox="0 0 651 192" fill="none" xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto text-gray-700 sm:h-20">
                        <g clip-path="url(#clip0)" fill="#EF3B2D">
                            <path d="M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z"/>
                        </g>
                    </svg>
                </div> --}}
                    <div class="my-2 shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                        <h1 class="p-2 text-2xl text-center text-blue3 font-bold border-blue3 my-2">Cafeteria Conecta</h1>

                    </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg text-center">

                    <div class="grid grid-cols-1 md:grid-cols-1">

                        {{-- <div class="p-6">

                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel.com/docs" class="underline text-gray-900 dark:text-white">Documentation</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel has wonderful, thorough documentation covering every aspect of the framework. Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of the documentation from beginning to end.
                                </div>
                            </div>

                        </div> --}}

                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                                width="300.000000pt" height="300.000000pt" viewBox="0 0 1280.000000 1100.000000"
                                preserveAspectRatio="xMidYMid meet">
                                <metadata>
                                Created by potrace 1.15, written by Peter Selinger 2001-2017
                                </metadata>
                                <g transform="translate(0.000000,1100.000000) scale(0.100000,-0.100000)"
                                fill="#000000" stroke="none">
                                <path d="M10690 10994 c0 -3 31 -49 70 -102 38 -53 94 -144 124 -202 132 -255
                                156 -465 80 -697 -76 -233 -303 -551 -529 -741 -348 -292 -787 -466 -1820
                                -722 -377 -93 -421 -103 -1077 -250 -684 -152 -1006 -254 -1359 -430 -249
                                -124 -419 -241 -575 -395 -117 -115 -199 -228 -269 -366 -106 -212 -143 -395
                                -152 -739 -6 -252 0 -299 59 -420 49 -102 176 -222 298 -283 52 -26 98 -47
                                101 -47 3 0 -15 43 -42 95 -110 220 -134 519 -68 846 62 311 142 472 316 640
                                256 247 665 418 1298 543 324 64 635 108 1206 171 123 13 276 34 339 45 644
                                116 1404 449 2128 933 179 119 181 119 116 1 -245 -446 -1200 -1118 -2084
                                -1466 -177 -71 -248 -94 -465 -157 -447 -129 -726 -260 -796 -374 -32 -54 -27
                                -61 38 -53 272 32 1291 306 2003 538 939 306 1551 735 1819 1275 92 185 129
                                335 138 554 9 223 -21 433 -72 511 -22 33 -67 59 -81 46 -2 -3 -11 -44 -20
                                -92 -46 -266 -136 -436 -229 -436 -19 0 -35 1 -35 3 0 2 11 27 25 56 62 127
                                161 418 215 627 67 257 45 455 -71 651 -76 127 -270 289 -440 367 -89 40 -189
                                78 -189 70z"/>
                                <path d="M11640 9959 c607 -730 284 -1500 -935 -2228 -289 -173 -688 -368
                                -1050 -512 -190 -76 -190 -76 50 -54 652 60 1200 183 1705 383 41 16 118 44
                                170 62 399 136 830 492 1038 857 177 311 229 674 136 951 -110 329 -452 541
                                -953 592 -57 5 -128 10 -157 10 l-55 0 51 -61z"/>
                                <path d="M10065 8254 c-99 -60 -403 -209 -587 -288 -433 -185 -1019 -381
                                -1608 -536 -660 -174 -1106 -428 -1383 -787 -148 -192 -254 -454 -260 -640
                                l-2 -73 80 -35 c44 -19 80 -35 80 -35 0 0 0 55 0 123 1 141 16 213 71 327 69
                                142 277 322 558 485 305 175 670 335 1311 575 888 332 1420 586 1697 810 68
                                54 121 110 107 110 -2 0 -31 -16 -64 -36z"/>
                                <path d="M4335 6309 c-1237 -57 -2026 -232 -2194 -485 -37 -56 -38 -82 -9
                                -140 23 -47 75 -103 189 -205 162 -145 370 -497 499 -844 96 -259 286 -721
                                740 -1795 208 -492 280 -673 319 -805 63 -213 91 -334 91 -407 1 -274 102
                                -474 282 -558 135 -62 587 -143 958 -171 174 -13 700 -7 870 10 159 17 457 59
                                598 86 109 20 182 36 448 97 37 8 45 16 87 86 83 138 157 343 157 437 0 34 3
                                38 43 53 148 58 341 168 421 242 39 36 44 38 49 21 11 -44 144 -81 342 -96
                                150 -11 333 -34 480 -61 192 -35 493 -110 482 -120 -2 -2 -87 -9 -188 -15
                                -144 -9 -232 -8 -404 2 -121 8 -290 14 -375 14 -188 -1 -264 -21 -338 -89
                                l-44 -41 33 -6 c19 -4 185 -21 369 -38 184 -18 349 -36 365 -40 29 -8 28 -9
                                -50 -47 l-80 -39 -275 3 c-508 6 -820 -49 -706 -124 63 -40 120 -47 453 -51
                                351 -5 358 -6 269 -57 -50 -29 -104 -45 -216 -61 l-85 -13 105 -1 c315 -3 776
                                51 1151 134 588 131 1175 381 1246 530 l16 34 -56 61 c-64 69 -78 110 -53 158
                                9 17 20 34 26 37 14 9 95 -52 158 -119 65 -69 96 -134 95 -201 0 -69 -29 -121
                                -106 -191 -268 -245 -990 -429 -2342 -598 -473 -59 -908 -103 -1345 -136 -74
                                -6 -166 -12 -205 -15 -480 -38 -1404 -55 -1880 -36 -1314 52 -2661 223 -3405
                                432 -249 70 -438 151 -545 231 -81 62 -177 164 -204 216 -63 123 -18 234 127
                                318 l34 19 20 -25 20 -24 -30 -26 c-16 -14 -46 -38 -66 -53 -64 -49 -41 -99
                                82 -180 312 -207 1077 -431 1813 -533 159 -22 559 -23 694 -1 l90 14 -170 -5
                                c-195 -6 -276 5 -371 48 -35 16 -64 31 -64 33 0 3 109 3 243 0 326 -8 553 17
                                571 62 12 32 -89 68 -239 85 -117 13 -514 30 -725 30 -149 1 -163 2 -140 15
                                79 46 258 86 520 115 198 23 224 27 263 42 34 13 31 26 -13 56 -98 66 -316 73
                                -795 22 -104 -11 -229 -20 -276 -20 -103 0 -236 22 -315 51 l-58 22 35 17 c44
                                22 185 73 274 99 124 35 222 51 472 76 135 14 337 36 449 50 112 14 207 25
                                210 25 14 0 -22 33 -56 50 -65 33 -149 43 -332 37 -185 -5 -324 -25 -533 -77
                                -142 -35 -270 -53 -535 -74 -107 -9 -219 -18 -249 -21 l-55 -6 20 22 c30 35
                                128 95 207 128 284 118 762 187 1372 197 171 3 315 7 321 9 17 5 -2 119 -32
                                186 -29 65 -83 120 -140 144 -63 26 -209 37 -504 37 -602 -1 -1152 -85 -1784
                                -273 -401 -120 -654 -246 -804 -402 -85 -90 -117 -159 -117 -257 0 -66 4 -84
                                34 -144 72 -148 276 -299 543 -405 417 -164 1024 -307 2183 -511 423 -74 502
                                -89 630 -120 318 -76 1271 -149 1940 -150 556 0 1514 30 1760 55 218 23 292
                                37 910 171 657 143 1024 220 1545 324 405 81 580 124 765 187 334 114 568 271
                                644 433 22 46 26 69 26 140 0 73 -4 93 -28 139 -102 199 -390 373 -847 510
                                -416 126 -865 195 -1255 195 -217 0 -236 -2 -329 -27 -115 -31 -180 -66 -202
                                -109 -15 -29 -15 -32 4 -57 45 -61 129 -85 367 -107 341 -31 582 -103 830
                                -249 86 -51 96 -59 79 -68 -28 -17 -214 -12 -339 7 -60 10 -220 44 -355 76
                                -344 82 -427 94 -655 94 -140 0 -210 -5 -265 -17 -41 -9 -78 -17 -82 -17 -5 0
                                7 21 26 48 18 26 47 74 64 107 63 126 169 201 536 380 305 148 399 200 581
                                321 185 122 326 237 460 375 209 216 326 406 386 629 32 118 36 309 10 438
                                -69 331 -231 576 -461 696 -107 56 -164 71 -270 71 -82 0 -103 -4 -151 -26
                                -110 -52 -189 -166 -269 -389 -22 -63 -53 -135 -67 -162 -26 -47 -103 -128
                                -122 -128 -6 0 13 64 40 143 81 227 131 435 133 544 1 111 -2 115 -105 144
                                -99 28 -211 81 -184 86 11 3 67 20 125 40 358 120 502 288 409 474 -77 153
                                -459 307 -940 379 -372 55 -1371 125 -1419 100 -28 -15 -136 -143 -160 -190
                                -51 -101 -19 -116 295 -139 200 -16 660 -38 1015 -51 168 -6 327 -12 353 -14
                                27 -2 45 0 40 4 -25 22 -783 173 -1053 210 l-145 19 210 -5 c725 -17 1192
                                -114 1312 -271 l26 -34 -29 -25 c-16 -13 -60 -39 -99 -58 -415 -202 -1428
                                -300 -2767 -268 -1733 42 -2709 158 -2868 339 -17 19 -30 45 -30 59 0 26 38
                                105 49 103 3 0 20 -19 36 -42 50 -69 89 -89 161 -85 50 3 74 11 121 40 73 45
                                170 73 328 93 237 30 389 36 981 42 l601 5 6 58 c12 113 -20 222 -77 263 -30
                                21 -40 22 -256 23 -124 1 -306 -2 -405 -7z m-1849 -501 c131 -115 457 -236
                                939 -349 132 -31 138 -33 100 -41 -78 -15 -407 -21 -516 -9 -388 42 -597 175
                                -617 393 -4 53 -3 58 15 58 11 0 46 -23 79 -52z m339 -438 c350 -58 874 -133
                                1285 -184 512 -64 957 -96 1335 -96 461 0 1319 41 1995 95 l65 5 -45 -21
                                c-184 -86 -686 -152 -1355 -180 -319 -13 -1369 -6 -1665 11 -840 48 -1350 132
                                -1629 268 -104 51 -197 143 -128 127 12 -2 76 -14 142 -25z m640 -426 c341
                                -36 661 -81 795 -110 123 -27 310 -83 310 -93 0 -15 -586 8 -820 33 -135 14
                                -317 32 -405 41 -88 9 -166 18 -172 20 -9 3 -13 27 -13 74 l0 70 33 -5 c17 -2
                                140 -15 272 -30z m-5 -230 c47 -8 159 -28 250 -44 201 -36 361 -56 500 -65 58
                                -4 121 -11 142 -16 35 -9 98 -67 98 -91 0 -15 -420 -4 -665 17 -99 8 -270 22
                                -380 30 -110 9 -210 18 -222 21 -21 4 -23 10 -23 74 0 44 4 72 13 77 37 23
                                140 22 287 -3z m5996 -145 c115 -43 212 -139 257 -253 33 -82 30 -237 -6 -342
                                -56 -164 -185 -331 -428 -553 -131 -120 -340 -296 -500 -422 -94 -74 -98 -76
                                -166 -82 -138 -13 -297 -81 -457 -195 -146 -104 -378 -342 -521 -532 -70 -94
                                -70 -94 -27 0 33 72 550 1189 786 1699 l71 154 65 26 c89 36 118 60 202 164
                                146 181 350 323 512 357 56 12 148 3 212 -21z m-5799 -174 c486 -56 597 -71
                                664 -91 51 -14 189 -64 189 -67 0 -1 -91 0 -202 1 -112 2 -297 -1 -413 -7
                                -181 -10 -221 -9 -292 4 -76 14 -318 86 -353 105 -20 11 -15 100 5 100 7 0
                                188 -20 402 -45z m-122 -295 c147 -13 429 -27 835 -41 184 -6 337 -13 340 -16
                                8 -7 -16 -38 -41 -50 -18 -10 -173 -13 -650 -13 l-627 0 -26 65 c-14 36 -26
                                68 -26 71 0 4 19 4 43 0 23 -3 92 -10 152 -16z m328 -291 c205 0 406 2 447 3
                                60 2 92 -3 160 -26 97 -32 190 -77 209 -100 12 -15 -41 -16 -592 -16 l-606 0
                                -41 69 c-22 38 -40 72 -40 76 0 3 20 3 45 -1 26 -3 213 -6 418 -5z m287 -299
                                c261 -22 495 -43 519 -46 l43 -6 -27 -29 c-58 -59 -85 -62 -558 -62 l-428 0
                                -52 84 c-29 46 -56 90 -61 97 -6 10 3 12 41 7 26 -3 262 -23 523 -45z m27
                                -306 c347 -44 478 -67 489 -86 4 -5 -1 -17 -10 -26 -14 -15 -49 -17 -249 -20
                                -128 -2 -319 -1 -426 3 l-193 7 -39 83 c-22 46 -39 86 -39 90 0 9 33 6 467
                                -51z m625 -321 c134 -63 108 -98 -82 -114 -81 -6 -218 -6 -408 1 -158 5 -303
                                10 -323 10 -34 0 -40 5 -78 63 -22 35 -41 67 -41 71 0 3 195 5 433 4 l432 -3
                                67 -32z m-77 -274 c280 -11 512 -23 515 -25 2 -3 -1 -13 -6 -22 -17 -26 -132
                                -70 -230 -87 -113 -19 -395 -35 -635 -35 l-187 0 -71 95 c-39 52 -71 97 -71
                                100 0 2 39 2 88 0 48 -3 316 -15 597 -26z m40 -280 c253 -12 462 -23 464 -25
                                7 -7 -30 -32 -91 -64 -122 -64 -302 -93 -578 -93 -239 -1 -310 7 -310 33 0 10
                                -13 50 -30 88 -16 39 -30 73 -30 76 0 10 97 7 575 -15z m-80 -349 c219 -16
                                418 -30 442 -30 24 0 43 -4 43 -9 0 -17 -123 -71 -195 -86 -151 -32 -377 -29
                                -635 8 l-85 12 -3 54 c-4 61 2 81 21 81 7 0 193 -13 412 -30z m199 -290 c236
                                -17 441 -30 455 -30 53 -1 -4 -18 -129 -39 -406 -68 -709 -50 -842 52 -65 50
                                -62 59 18 52 38 -3 262 -19 498 -35z m-424 -210 c386 -74 756 -114 1695 -181
                                88 -6 162 -13 163 -14 9 -8 -142 -48 -248 -66 -346 -59 -904 -42 -1567 47 -67
                                9 -126 20 -132 23 -8 5 -111 215 -111 227 0 3 10 2 23 -1 12 -2 92 -18 177
                                -35z"/>
                                <path d="M9300 4227 c-41 -24 -122 -72 -180 -108 -58 -35 -157 -91 -220 -124
                                -170 -89 -265 -193 -357 -393 -68 -146 -170 -498 -151 -518 4 -3 89 39 190 93
                                101 55 232 126 292 158 128 68 169 107 219 208 26 55 54 93 101 137 110 105
                                233 298 265 415 20 74 10 145 -23 167 -24 17 -65 6 -136 -35z"/>
                                <path d="M2755 394 c157 -59 569 -165 864 -224 685 -136 1438 -194 2071 -161
                                628 33 1577 134 1940 207 84 17 213 55 206 61 -2 2 -44 -3 -92 -11 -500 -83
                                -1538 -101 -2714 -46 -1063 50 -1916 118 -2239 180 -73 14 -84 12 -36 -6z"/>
                                </g>
                                </svg>
                        </div>

                        {{-- <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold"><a href="https://laravel-news.com/" class="underline text-gray-900 dark:text-white">Laravel News</a></div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel News is a community driven portal and newsletter aggregating all of the latest and most important news in the Laravel ecosystem, including new package releases and tutorials.
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-l">
                            <div class="flex items-center">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="w-8 h-8 text-gray-500"><path d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                <div class="ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white">Vibrant Ecosystem</div>
                            </div>

                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    Laravel's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more.
                                </div>
                            </div>
                        </div> --}}
                        
                    </div>
                </div>

                {{-- <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
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
                </div> --}}
            </div>
        </div>
    </body>
</html>
