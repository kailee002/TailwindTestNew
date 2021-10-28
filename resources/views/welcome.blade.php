<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/design.css') }}" rel="stylesheet">
        <title>Reefic</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- icons -->
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <!-- captcha -->
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>
    <body class="bodyDesign ">
        <section class="bg-gray-900">
            <div>
                <!-- NAVIGATION BAR -->
                <header class="flex item-center justify-between pt-8 mb-14">
                    <div class="text-white mx-auto px-4 space-x-8">
                        <img class="h-10 img" src="{{ asset('asset/logo.png')}}" alt="Logo">
                        <a href="#">PRODUCT</a>
                        <a href="#">TOKEN SALE</a>
                        <a href="#">TEAM</a>
                        <a href="#">FAQ</a>
                        <a href="#">CONTACT</a>
                        <a href="#">WHITEPAPER</a>
                        <a href="#">SIGN IN</a>
                        <select name="language" id="language">
                            <option value="En">En</option>
                            <option value="En">Br</option>
                            <option value="En">Cn</option>
                        </select>
                    </div>
                </header>
                <!-- END NAVIGATION BAR -->
            </div>
            <div class="text-white">
                <p class="text-2xl md:text-4xl font-semibold mt-10">HAVE A REEFIC DAY!</p>

                <p class="text-xs md:text-xl mt-7">Reefic Protocol is a decentralised platform where customers can exchange reward<br> 
                    points across multiple loyalty programs and selected cryptocurrencies</p>

                <p class="text-2xl md:text-5xl font-semibold mt-10">OPEN FOR TOKEN SALE IN</p>
                <!-- countdown timer -->
                <p class="text-xl md:text-4xl mt-7 mb-10"id="countdown"></p>
                <script>
                    // Set the date we're counting down to
                    var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

                    // Update the count down every 1 second
                    var x = setInterval(function() {

                        // Get today's date and time
                        var now = new Date().getTime();
                                    
                        // Find the distance between now and the count down date
                        var distance = countDownDate - now;
                                    
                        // Time calculations for days, hours, minutes and seconds
                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                    
                        // Output the result in an element with id="countdown"
                        document.getElementById("countdown").innerHTML = days + "D " + hours + "H "
                        + minutes + "M " + seconds + "D ";
                                    
                        // If the count down is over, write some text 
                        if (distance < 0) {
                            clearInterval(x);
                            document.getElementById("countdown").innerHTML = "EXPIRED";
                            }
                    }, 1000);
                </script>
            </div>
            <div class="space-x-5 px-5">
                <button class="btn-bg hover:bg-green-400 text-purple-700 font-semibold py-2 px-4 ">WHITEPAPER</button>
                <button class="btn-bg hover:bg-green-400 text-purple-700 font-semibold py-2 px-4 ">ONE PAGER</button>
            </div>
            
            <div class="social bg-opacity-35">
                <ul>
                    <a href=""><li><i class="fab fa-twitter"></i></li></a>
                    <a href=""><li><i class="fab fa-telegram-plane"></i></li></a>
                    <a href=""><li><i class="fab fa-google"></i></li></a>
                    <a href=""><li><i class="fab fa-github"></i></li></a>
                </ul>
            </div>
            <!-- Reefic protocol -->
            <section class="blue">
                <div class="waves">
                    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                        <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                    </svg>
                </div>
                    <div>
                        <p class="text-xl md:text-3xl font-bold text-purple-900">REEFIC PROTOCOL EXPLAINED</p>
                        <iframe class="youtube mt-8" width="550" height="315"
                            src="https://www.youtube.com/embed/Uo3NsJXsKWw">
                        </iframe>
                    </div>
                    <div class="socialMedia justify-between mt-5 mr-3">
                        <nav>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-telegram-plane"></i></a>
                            <a href=""><i class="fab fa-google"></i></a>
                            <a href=""><i class="fab fa-github"></i></a>
                        </nav>
                    </div>
                    <div class="space-x-5 px-5">
                        <button class="protocol-btn-bg hover:bg-purple-700 text-white  py-2 px-4 mt-5">WHITELIST</button>
                        <button class="protocol-btn-bg hover:bg-purple-700 text-white  py-2 px-4 mt-5">BOUNTY</button>
                    </div>
                
            </section>
        </section>    
        <!-- PRESS RELEASES -->
        <section class="white">
            <!-- WAVES -->
            <div class="wavesPress">
                 <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                 </svg>
            </div>
            <div>
                <p class="text-xl md:text-3xl font-bold text-purple-900">REEFIC PRESS RELEASES</p>
            </div>
            
            
            <!-- CAROUSEL -->
            <div class="carousel">
                <div class="carousel-inner">
                    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5 carousel-items cardDisplay">
                        <!--Card 1-->
                        <div class="rounded overflow-hidden shadow-lg">
                            <img class="max-w-md" src="{{ asset('asset/blockchain-logo.png')}}" alt="Mountain">
                            <div class="px-6 py-4">
                                <p class="text-gray-700 text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero doloribus cupiditate esse minus et repellat, excepturi repellendus quo quae molestias hic voluptates earum eligendi a labore beatae asperiores laboriosam, minima cum eum quisquam nemo! Qui inventore, optio, impedit voluptatibus voluptates veritatis blanditiis quae porro placeat voluptas vero aliquid minima, numquam doloremque temporibus nemo illo ea earum repellat sunt reprehenderit eum quas nostrum.
                                </p>
                                <br>
                                <p class="text-gray-700 text-sm">17 July 2018</p>
                            </div>
                        </div>
                        <!--Card 1.2-->
                        <div class="rounded overflow-hidden shadow-lg">
                            <img class="max-w-md" src="{{ asset('asset/blockchain-logo.png')}}" alt="Mountain">
                            <div class="px-6 py-4">
                                <p class="text-gray-700 text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero doloribus cupiditate esse minus et repellat, excepturi repellendus quo quae molestias hic voluptates earum eligendi a labore beatae asperiores laboriosam, minima cum eum quisquam nemo! Qui inventore, optio, impedit voluptatibus voluptates veritatis blanditiis quae porro placeat voluptas vero aliquid minima, numquam doloremque temporibus nemo illo ea earum repellat sunt reprehenderit eum quas nostrum.
                                </p>
                                <br>
                                <p class="text-gray-700 text-sm">17 July 2018</p>
                            </div>
                        </div>
                        <!-- Card 1.3 -->
                        <div class="rounded overflow-hidden shadow-lg">
                            <img class="max-w-md" src="{{ asset('asset/blockchain-logo.png')}}" alt="Mountain">
                            <div class="px-6 py-4">
                                <p class="text-gray-700 text-sm">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero doloribus cupiditate esse minus et repellat, excepturi repellendus quo quae molestias hic voluptates earum eligendi a labore beatae asperiores laboriosam, minima cum eum quisquam nemo! Qui inventore, optio, impedit voluptatibus voluptates veritatis blanditiis quae porro placeat voluptas vero aliquid minima, numquam doloremque temporibus nemo illo ea earum repellat sunt reprehenderit eum quas nostrum.
                                </p>
                                <br>
                                <p class="text-gray-700 text-sm">17 July 2018</p>
                            </div>
                        </div>      
                    </div>
                    <!-- Carousel 2 -->
                        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
                        <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5 carousel-item cardDisplay">
                            <!--Card 2.1-->
                            <div class="rounded overflow-hidden shadow-lg ">
                                <img class="max-w-md" src="{{ asset('asset/blockchain-logo.png')}}" alt="Mountain">
                                <div class="px-6 py-4">
                                    <p class="text-gray-700 text-sm">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero doloribus cupiditate esse minus et repellat, excepturi repellendus quo quae molestias hic voluptates earum eligendi a labore beatae asperiores laboriosam, minima cum eum quisquam nemo! Qui inventore, optio, impedit voluptatibus voluptates veritatis blanditiis quae porro placeat voluptas vero aliquid minima, numquam doloremque temporibus nemo illo ea earum repellat sunt reprehenderit eum quas nostrum.
                                    </p>
                                    <br>
                                    <p class="text-gray-700 text-sm">16 March 2018</p>
                                </div>
                            </div>
                            <!--Card 2.2-->
                            <div class="rounded overflow-hidden shadow-lg">
                                <img class="max-w-md" src="{{ asset('asset/blockchain-logo.png')}}" alt="Mountain">
                                <div class="px-6 py-4">
                                    <p class="text-gray-700 text-sm">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero doloribus cupiditate esse minus et repellat, excepturi repellendus quo quae molestias hic voluptates earum eligendi a labore beatae asperiores laboriosam, minima cum eum quisquam nemo! Qui inventore, optio, impedit voluptatibus voluptates veritatis blanditiis quae porro placeat voluptas vero aliquid minima, numquam doloremque temporibus nemo illo ea earum repellat sunt reprehenderit eum quas nostrum.
                                    </p>
                                    <br>
                                    <p class="text-gray-700 text-sm">7 September 2018</p>
                                </div>
                            </div>
                            <!-- Card 2.3 -->
                            <div class="rounded overflow-hidden shadow-lg">
                                <img class="max-w-md" src="{{ asset('asset/blockchain-logo.png')}}" alt="Mountain">
                                <div class="px-6 py-4">
                                    <p class="text-gray-700 text-sm">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero doloribus cupiditate esse minus et repellat, excepturi repellendus quo quae molestias hic voluptates earum eligendi a labore beatae asperiores laboriosam, minima cum eum quisquam nemo! Qui inventore, optio, impedit voluptatibus voluptates veritatis blanditiis quae porro placeat voluptas vero aliquid minima, numquam doloremque temporibus nemo illo ea earum repellat sunt reprehenderit eum quas nostrum.
                                    </p>
                                    <br>
                                    <p class="text-gray-700 text-sm">12 Aug 2018</p>
                                </div>
                            </div>      
                        </div>
                        <label for="carousel-2" class="carousel-control prev control-1">‹</label>
                        <label for="carousel-2" class="carousel-control next control-1">›</label>
                        <label for="carousel-1" class="carousel-control prev control-2">‹</label>
                        <label for="carousel-1" class="carousel-control next control-2">›</label>
                        <ol class="carousel-indicators">
                            <li>
                                <label for="carousel-1" class="carousel-bullet">•</label>
                            </li>
                            <li>
                                <label for="carousel-2" class="carousel-bullet">•</label>
                            </li>
                        </ol>
                </div>
            </div>
            <!-- END CAROUSEL -->
            <div class="px-5">
                <button class="protocol-btn-bg hover:bg-purple-700 text-white  py-2 px-4 mt-5">MORE RELEASES</button>
            </div>
        </section>
        <!-- PROTOCOL UPDATE -->
        <section class="gray">
            <!-- WAVES -->
            <div class="wavesUpdates">
                 <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
                 </svg>
            </div>
            <div>
                <p class="text-xl md:text-3xl font-bold text-purple-900">REEFIC PROTOCOL EXPLAINED</p>
                <p class="text-sm md:text-xl font-bold text-purple-900">Stay up-to-date with the current news</p>
            </div>
            <!-- protocol Cards -->
            <div class="p-20 grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5 protocolCards flex">
                <!-- Card1 -->
                <div class="bg-transparent">
                    <img src="{{ asset('asset/hand.jpg') }}" alt="Protocol" class="">
                    <div class="p-2 text-left">
                        <p class="font-bold mb-2 text-sm text-gray-800">GILLGOLD REEFIC TO DO A SOFT LAUNCH IN TOKYO.
                            <br> JAPAN
                        </p>
                    <a href="#" class="text-gray-600 hover:text-gray-500 underline text-sm">Read More  [ + ]</a>
                    </div>
                </div>
                <!-- Card2 -->
                <div class="bg-transparent">
                    <img src="{{ asset('asset/hand.jpg') }}" alt="Protocol" class="">
                    <div class="p-2 text-left">
                        <p class="font-bold mb-2 text-sm text-gray-800">GILLGOLD REEFIC TO DO A SOFT LAUNCH IN TOKYO.
                            <br> JAPAN
                        </p>
                    <a href="#" class="text-gray-600 hover:text-gray-500 underline text-sm">Read More  [ + ]</a>
                    </div>
                </div>
                <!-- Card3 -->
                <div class="bg-transparent">
                    <img src="{{ asset('asset/hand.jpg') }}" alt="Protocol" class="">
                    <div class="p-2 text-left">
                        <p class="font-bold mb-2 text-sm text-gray-800">GILLGOLD REEFIC TO DO A SOFT LAUNCH IN TOKYO.
                            <br> JAPAN
                        </p>
                    <a href="#" class="text-gray-600 hover:text-gray-500 underline text-sm">Read More  [ + ]</a>
                    </div>
                </div>
                <!-- Card4 -->
                <div class="bg-transparent">
                    <img src="{{ asset('asset/hand.jpg') }}" alt="Protocol" class="">
                    <div class="p-2 text-left">
                        <p class="font-bold mb-2 text-sm text-gray-800">GILLGOLD REEFIC TO DO A SOFT LAUNCH IN TOKYO.
                            <br> JAPAN
                        </p>
                    <a href="#" class="text-gray-600 hover:text-gray-500 underline text-sm">Read More  [ + ]</a>
                    </div>
                </div>
            </div>
            <!-- END CARD -->
            <div class="px-2">
                <button class="protocol-btn-bg hover:bg-purple-700 text-white  py-2 px-4 mt-2">MORE RELEASES</button>
            </div>
            </div>
        </div>
    </section>        

    <!-- ECOSYSTEM -->
    <section class="white">
        <!-- WAVES -->
        <div class="wavesEco">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="benefitContainer grid grid-cols-3">
            <div class="col-span-1">
                <p class="font-bold mb-2 text-6xl sm:text-sm md:text-4xl text-purple-900 text-left">
                    CREATING A SECURE AND INTERLINKED ECO-SYSTEM FOR CUSTOMER LOYALTY AND ENGAGEMENT
                </p>
                <p class="text-left text-gray-300 text-xl pt-5 pb-5">
                    Reefic Protocol is an integrated exchange habitat that links customers, merchants and solution providers together.
                </p>
                <button class="protocol-btn-bg hover:bg-purple-700 text-white  py-2 px-4 mt-2 registerBtn">REGISTER NOW</button>
            </div>
            <div class="col-span-2 pl-10">
                <img src="{{ asset('asset/benefits1.png') }}" alt="">
            </div>
        </div>
    </section>  
    <!-- TOKEN GENERATION EVENT -->
    <section class="tokenDesign">
          <!-- WAVES -->
        <div class="wavesToken">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>       
        <div class=" text-white">
            <p class="font-bold mb-2 text-8xl sm:text-xs md:text-6xl text-purple-900">
                TOKEN GENERATION EVENT
            </p>
        </div>
        <!-- timer-to be edited -->
        <div>
        <p class="text-xl md:text-4xl mt-7 mb-10 text-purple-800"id="countdown2"></p>
            <script>
                // Set the date we're counting down to
                var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                    // Get today's date and time
                    var now = new Date().getTime();
                                
                    // Find the distance between now and the count down date
                    var distance = countDownDate - now;
                                
                    // Time calculations for days, hours, minutes and seconds
                    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                
                    // Output the result in an element with id="countdown"
                    document.getElementById("countdown2").innerHTML = days + "D " + hours + "H "
                    + minutes + "M " + seconds + "D ";
                                
                    // If the count down is over, write some text 
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("countdown2").innerHTML = "EXPIRED";
                        }
                 }, 1000);
            </script>
        </div>
        <div>
            <p class="mb-2 text-lg sm:text-sm md:text-lg text-grey-500 text-center tokenText">
                To achieve its platform vision, Reefic Protocol is looking to the cryptocurrency communmity to support this movement
            </p>
        </div>
        <div>
            <table class="table-auto tableDesign py-9 ">
                <tbody class="token">
                    <tr>
                        <td class="text-semibold text-gray-800 bg-gray-300 text-left pl-7">Total Token Supply</td>
                        <td class="text-right text-gray-800 bg-gray-300 pr-7">300,000,000 RFT</td>
                    </tr>
                    <tr>
                        <td class="text-semibold text-gray-800 bg-white text-left pl-7">RFT Token Sale Supply</td>
                        <td class="text-right text-gray-800 bg-white pr-7">150,000,000 RFT</td>
                    </tr>
                    <tr>
                        <td class="text-semibold text-gray-800 bg-gray-300 text-left pl-7">Token Sale Price</td>
                        <td class="text-right text-gray-800 bg-gray-300 pr-7">1 ETH = 6,000 RFT</td>
                    </tr>
                    <tr>
                        <td class="text-semibold text-gray-800 bg-white text-left pl-7">Soft Cap</td>
                        <td class="text-right text-gray-800 bg-white pr-7">USD 2,000,000</td>
                    </tr>
                    <tr>
                        <td class="text-semibold text-gray-800 bg-gray-300 text-left pl-7">Hard Cap</td>
                        <td class="text-right text-gray-800 bg-gray-300 pr-7">25,000 ETH</td>
                    </tr>
                    <tr>
                        <td class="text-semibold text-gray-800 bg-white text-left pl-7">Token Format</td>
                        <td class="text-right text-gray-800 bg-white pr-7">ERC-20 Standard</td>
                    </tr>
                    <tr>
                        <td class="text-semibold text-gray-800 bg-gray-300 text-left pl-7">Currency Accepted</td>
                        <td class="text-right text-gray-800 bg-gray-300 pr-7">ETH</td>
                    </tr>
                    <tr>
                        <td class="text-semibold text-gray-800 bg-white text-left pl-7">Minimum Contribution</td>
                        <td class="text-right text-gray-800 bg-white pr-7">0.16 ETH or 1,000 RFT</td>
                    </tr>
                    <tr>
                        <td class="text-semibold text-gray-800 bg-gray-300 text-left pl-7">Individual Cap Enhanced KYC</td>
                        <td class="text-right text-gray-800 bg-gray-300 pr-7">16 ETH or 100,000  RFT</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!-- purple cards -->
        <div class="p-20 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-2 purpleCards ">
                <!-- Card1 -->
                    <div class="text-center font-semibold text-sm text-white bg-purple-900 rounded-md pt-2">
                        PRE SALE
                        <p class="font-bold text-sm text-white bg-purple-700 mt-2">
                            3 July 2018
                        </p>
                        <p class="text-white bg-purple-700 mb-03">
                            10 Days
                        </p>
                        <p class="font-bold text-white bg-purple-700">
                            30% Bonus
                        </p>
                        <p class="text-white bg-purple-700 mb-2">
                            Soft Cap <br>
                            $2M
                        </p>
                    </div>
                <!-- Card2 -->
                    <div class="text-center font-semibold text-sm text-white bg-purple-900 rounded-md pt-2">
                        SALE STAGE 1
                        <p class="font-bold text-sm text-white bg-purple-700 mt-2">
                            15 August 2018
                        </p>
                        <p class="text-white bg-purple-700 mb-0.3">
                            15 Days
                        </p>
                        <p class="font-bold text-white bg-purple-700">
                            20% Bonus
                        </p>
                        <p class="text-white bg-purple-700 mb-2">
                            Hard Cap <br>
                            25K ETH
                        </p>
                    </div>
                    <!-- Card3 -->
                    <div class="text-center font-semibold text-sm text-white bg-purple-900 rounded-md pt-2">
                    SALE STAGE 2
                        <p class="font-bold text-sm text-white bg-purple-700 mt-2">
                            28 October 2018
                        </p>
                        <p class="text-white bg-purple-700 mb-0.3">
                            10 Days
                        </p>
                        <p class="font-bold text-white bg-purple-700">
                            20% Bonus
                        </p>
                        <p class="text-white bg-purple-700 mb-2">
                            Hard Cap <br>
                            $5M
                        </p>
                    </div>                
        </div>
        <!-- end purple cards -->
        <div>
            <p class="font-bold mb-2 text-base sm:text-xs md:text-base text-purple-700 text-center tokenText">
                Don't miss your change to get more Reefic tokens!
            </p>
            <button class="protocol-btn-bg hover:bg-purple-700 text-white  py-2 px-4 mt-3 mb-5">REGISTER NOW</button>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 my-5 protocolCards">
            <p class="font-bold mb-2 text-3xl sm:text-xl md:text-3xl text-purple-900">
               TOKEN ALLOCATION
            </p>
            <p class="font-bold mb-2 text-3xl sm:text-xl md:text-3xl text-purple-900">
               USE OF PROCEEDS
            </p>
        </div>                 
        <!-- charts -->
        <div class="  grid grid-cols-2 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-5 protocolCards ">
            <img src="{{ asset('asset/token-allocation-chart.png')}}" alt="">
            <ul class="text-gray-600 text-xs tokenAllocationList text-left space-y-4 pl-2">
                <li>Pre-TGE sale</li>
                <li>Token Sale</li>
                <li>Founders</li>
                <li>Key partners</li>
                <li>Liquidity Pool</li>
                <li>Key Employees</li>
                <li>Advisors, Influcencers and Bounty</li>
                <li>Merchant and solution Provider Acquisition</li>
            </ul>
            <img src="{{ asset('asset/use-of proceeds-chart.png')}}" alt="">
            <ul class="text-gray-600 text-xs tokenAllocationList text-left space-y-4 pl-2 mt-12">
                <li>Pre-TGE sale</li>
                <li>Token Sale</li>
                <li>Founders</li>
                <li>Key partners</li>
            </ul>
        </div>
        <p class="font-bold mb-2 text-4xl sm:text-2xl md:text-4xl text-purple-900 pt-10 pb-4">
               DON'T MISS THE OPPORTUNITY
        </p>
        <button class="protocol-btn-bg hover:bg-purple-700 text-white  py-2 px-4  mb-5">REGISTER NOW</button>
    <div class="wavesRoadFlip">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div> 
    </section>
    <!-- implementation roadmap -->
    <section class="roadmap">
        <!-- WAVES -->
    <div class="wavesRoad">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div> 
        <div class="p-4 mt-4">
            <p class="font-bold mb-2 text-2xl sm:text-xl md:text-2xl text-purple-900 pt-10 pb-4">
               IMPLEMENTATION ROADMAP
            </p>
            <!-- roadmap -->
            <div class="container">
                <div class="flex flex-col md:grid grid-cols-8 text-gray-50">
                    <div class="flex md:contents">
                        <div class="col-start-2 col-end-4 mr-5 md:mx-auto relative">
                            <div class="h-full w-6 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-green-500 shadow text-center">
                            </div>
                        </div>
                        <div class="grid bg-green-500 col-start-4 col-end-12 p-4 my-4 mr-auto shadow-md w-full text-gray-900 hover:bg-green-700">
                            <div class="font-bold text-2xl mb-1 col-start-1 col-end-1 text-left pr-4">
                                <p class="text-5xl">Q4</p>
                                <p>2018</p>
                            </div>
                            <div class="font-bold text-base mb-1 col-start-2 col-end-4 text-left">
                                <p>Assemble the business team for Reefic Protocol. Basic Reefic Protocol API for merchants and solution providers to integrate.</p>
                            </div>   
                        </div>
                        <div class="col-start-2 col-end-4 mr-5 md:mx-auto relative">
                            <div class="h-full w-6 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-gray-200 shadow text-center">
                            </div>
                        </div>
                        <div class="grid bg-gray-200 col-start-4 col-end-12 p-4 my-4 mr-auto shadow-md w-full text-gray-900 hover:bg-gray-400">
                            <div class="font-bold text-2xl mb-1 col-start-1 col-end-1 text-left pr-4">
                                <p class="text-5xl">Q1</p>
                                <p>2019</p>
                            </div>
                            <div class="font-bold text-base mb-1 col-start-2 col-end-4 text-left">
                                <p>
                                    Pilot of exchange platform in collaboration with certified customer apps with selected partners in Singapore, Malaysia, Philippines, Australia. <br>
                                    Attains 300 strong merchant sign up through solution providers and other partnerships. X
                                </p>
                            </div>   
                        </div>
                        <div class="col-start-2 col-end-4 mr-5 md:mx-auto relative">
                            <div class="h-full w-6 flex items-center justify-center">
                            <div class="h-full w-1 bg-gray-200 pointer-events-none"></div>
                            </div>
                            <div class="w-6 h-6 absolute top-1/2 -mt-3 rounded-full bg-gray-200 shadow text-center">
                            </div>
                        </div>
                        <div class="grid bg-gray-200 col-start-4 col-end-12 p-4 my-4 mr-auto shadow-md w-full text-gray-900 hover:bg-gray-400">
                            <div class="font-bold text-2xl mb-1 col-start-1 col-end-1 text-left pr-4">
                                <p class="text-5xl">Q2</p>
                                <p>2019</p>
                            </div>
                            <div class="font-bold text-base mb-1 col-start-2 col-end-4 text-left">
                                <p>
                                    Launch of Reefic App for IOS and Android for customers to download and exchange their reward points.
                                    <br>
                                    Launch of Reefic Bicameral Governing Body to validate newly created blocks based on Bicameral Governing Strategy, and to audit already validated blocks. Expansion into Taiwan and Hong Kong through strategic partnerships. Launch of Reefic Bicameral Governing Body to validate newly created blocks based on Bicameral Governing Strategy, and to audit already validated blocks.
                                    <br>
                                    Expansion into taiwan and Hong Kong through strategic partnerships.
                                </p>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid grid-col-2 grid-flow-col gap-6 flex justify-center text-white">
                <button class="bg-purple-700 hover:bg-purple-500 font-semibold py-2 px-4 ">WHITEPAPER</button>
                <button class="bg-purple-700 hover:bg-purple-500 font-semibold py-2 px-4 ">ONE PAGER</button>
            </div>
        </div>
    </section>
    <section class="cast ">
        <!-- WAVES -->
        <div class="wavesCast">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
        <div class="leading-none">
            <p class="font-bold mb-2 text-2xl sm:text-xl md:text-2xl text-purple-900 pt-10">MEET THE CAST</p>
            <p class="font-bold mb-2 text-base sm:text-xs md:text-base text-purple-900 ">DEVELOPMENT TEAM</p>
        </div>
        <div class="grid grid-col-4 grid-flow-col gap-4 devTeam py-5">
           <!-- member1 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/adriel.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">ADRIEL HENG</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
            <!-- member2 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/anne.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">ANNE CHEAH</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
            <!-- member3 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/chris.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">CHRIS NG</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
            <!-- member4 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/qing.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">QINGXIANG</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-col-4 grid-flow-col gap-4 devTeam py-5">
           <!-- member1 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/adriel.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">ADRIEL HENG</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
            <!-- member2 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/anne.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">ANNE CHEAH</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
            <!-- member3 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/chris.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">CHRIS NG</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
            <!-- member4 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/qing.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">QINGXIANG</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
        </div>
        <!-- END OF DEV TEAM -->
        <!-- ADVISORS PART -->
        <div class="leading-none">
            <p class="font-bold mb-2 text-2xl sm:text-xl md:text-2xl text-purple-900 pt-10">ADVISORS</p>
        </div>
        <div class="grid grid-col-4 grid-flow-col gap-4 devTeam py-5">
           <!-- member1 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/adriel.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">ADRIEL HENG</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
            <!-- member2 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/anne.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">ANNE CHEAH</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
            <!-- member3 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/chris.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">CHRIS NG</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
            <!-- member4 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/qing.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">QINGXIANG</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-col-4 grid-flow-col gap-4 devTeam py-5">
           <!-- member1 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/adriel.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">ADRIEL HENG</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
            <!-- member2 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/anne.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">ANNE CHEAH</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
            <!-- member3 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/chris.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">CHRIS NG</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
            <!-- member4 -->
            <div class="flipCard">
                <div class="flipCardInner">
                    <div class="flipCardFront">
                        <img class="memberCards" src="{{ asset('asset/qing.jpg')}}" alt="">
                        <p class="font-bold text-base pt-3">QINGXIANG</p>
                        <p class="text-sm">LEAD</p>
                    </div>
                    <div class="flipCardBack text-white text-left px-4 py-4">
                        <p class="text-semibold leading-none">
                            ADRIEL HENG
                            <br>LEAD
                        </p>
                        <p class="text-xs pt-3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large.</p> 
                        <i class="fab fa-linkedin mt-10 left-0"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>             
    <!-- PARTNERSHIPS -->
    <section>  
        <div class="leading-none">
                <p class="font-bold mb-2 text-2xl sm:text-xl md:text-2xl text-purple-900 pt-10">PARTNERSHIPS</p>
        </div>
        <div class="">
            <!-- CAROUSEL -->
            <div class="carousel">
                <div class="carousel-inner">
                    <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
                    <div class="p-10 grid grid-cols-3 sm:grid-cols-3 md:grid-cols-6 lg:grid-cols-6 xl:grid-cols-6 carousel-items">
                        <!--Card 1-->
                        <div class="rounded overflow-hidden">
                            <img src="{{ asset('asset/amarillo-logo.png')}}" alt="">
                        </div> 
                        <!-- card 2 -->
                        <div class="rounded overflow-hidden">
                            <img src="{{ asset('asset/beratex.png')}}" alt="">
                        </div>  
                        <!-- card 3 -->
                        <div class="rounded overflow-hidden">
                            <img src="{{ asset('asset/brown-bear.png')}}" alt="">
                        </div>  
                        <!-- card 4 -->
                        <div class="rounded overflow-hidden">
                            <img src="{{ asset('asset/cow.png')}}" alt="">
                        </div>  
                        <!-- card 5 -->
                        <div class="rounded overflow-hidden">
                            <img src="{{ asset('asset/flaser.png')}}" alt="">
                        </div>  
                        <!-- card 6 -->
                        <div class="rounded overflow-hidden">
                            <img src="{{ asset('asset/turtle.png')}}" alt="">
                        </div>  
                    </div>
                    
                        <label for="carousel-1" class="carousel-control prev control-1">‹</label>
                        <label for="carousel-1" class="carousel-control next control-1">›</label>
                        <label for="carousel-1" class="carousel-control prev control-1">‹</label>
                        <label for="carousel-1" class="carousel-control next control-1">›</label>
                        <ol class="carousel-indicators">
                            <li>
                                <label for="carousel-1" class="carousel-bullet">•</label>
                            </li>
                            <li>
                                <label for="carousel-2" class="carousel-bullet">•</label>
                            </li>
                        </ol>
                    </div>
                </div>
            <!-- END CAROUSEL -->
        </div>
    </section>
    <section class="purpleBg">
        <div class="leading-none">
            <p class="font-bold mb-2 text-4xl sm:text-2xl md:text-4xl text-white pt-10 ">DON'T MISS THE OPPORTUNITY</p>
            <button class="bg-green-800 hover:bg-green-700 text-purple-500  py-2 px-4 mt-2">REGISTER NOW</button>
        </div>
        
        <div class="socialMedia justify-between mt-5 pb-10">
            <nav>
                <a href=""><i class="fab fa-twitter"></i></a>
                <a href=""><i class="fab fa-telegram-plane"></i></a>
                <a href=""><i class="fab fa-google"></i></a>
                <a href=""><i class="fab fa-github"></i></a>
            </nav>
        </div>
    </section>
    <section class="touchBg">
        <div class="leading-none">
            <p class="font-bold mb-2 text-2xl sm:text-base md:text-2xl text-white pt-10 ">GET IN TOUCH</p>
            <p class="text-white text-base sm:text-xs md:text-base">Any questions? Reach out to us and we'll get back to you shortly.</p>
        </div>         
        <div class="grid grid-col-3 grid-flow-col gap-4 text-white text-base contactDesign my-5 sm:text-sm xs:text-sm">
            <div><i class="fas fa-phone-volume mx-7"></i> +65 -XXXX-XXXX</div>
            <div><i class="fas fa-phone-envelope mx-7"></i> enquiry@reefic.sg</div>
            <div><i class="fab fa-telegram-plane mx-7"></i> join out telegram</div>
        </div>
        <div class="form">
            <form action="#">
                <div class="grid grid-col-2 grid-flow-col gap-1 mt-5 mb-2 contactDesign">
                    <input class="rounded mx-2 my-1" type="text" id="name" name="name" placeholder="Name" size="35">
                    <input class="rounded mx-2 my-1" type="text" id="email" name="email" placeholder="Email" size="35">
                </div>
                <textarea class="rounded" id="message" name="message" rows="4" cols="80" value="Write your message"">
                </textarea>
            </form> 
            <div class="flex justify-around">
                <form action="?" method="POST" class="grid grid-col-2 grid-flow-col gap-12 py-5">
                    <div class="g-recaptcha" data-sitekey="your_site_key flex-initial"></div>
                    <button class="btn-bg hover:bg-green-400 text-purple-700 font-semibold px-6 flex-initial ">Submit now</button>
                </form>
            </div>
        </div>
    </section>
    </body>
    <footer class="flex justify-around">
    <img class="h-10 left-0" src="{{ asset('asset/logo-color.jpg')}}" alt="Logo">
        <div class="px-4 space-x-8">
            <a href="#">PRIVACY POLICY</a>
            <a href="#">FAQ</a>
            <a href="#">CONTACT</a>  
        </div>
        
    </footer>
    <hr>
        <p class="text-gray-200 text-sm">2018 REEFIC PTE LTD. ALL RIGHTS RESERVED</p>
</html>
