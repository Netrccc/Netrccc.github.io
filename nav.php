<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<header class="header" data-header style="background-color: white;">
    <div class="container">

        <a href="./" class="logo">
            <img src="./favicon.png" width="50px" style="border-radius:1px;" alt="The Mejorexporta Hands - Home">
        </a>

        <nav class="navbar" data-navbar>

            <button class="close-btn" aria-label="close menu" data-nav-toggler>
                <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
            </button>

            <a href="./" class="logo">
                <img src="./favicon.png" width="100px" style="border-radius:1px;" alt="Mejorexporta - Home">
            </a>

            <ul class="navbar-list">

                <li class="navbar-item show-modal">
                    <a href="./how-it-works" class="navbar-link hover-underline ">
                        <div class="separator"></div>

                        <span class="span" style="color: black;">How it works</span>
                    </a>

                </li>
                <!-- <div class="drp-dwn"> -->
                <div class="dd">

                    <li class="navbar-item">
                        <a rel="/option/services" id="services_dropdown" class="navbar-link services_dropdown">
                            <span class="span"
                                style="color: black; cursor:pointer; display: flex; align-items:center;">Services
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </span>
                        </a>
                    </li>

                    <div id="profile_options" class="profile_options">
                        <div class="user_profile_links">
                            <div class="profile_n l1">
                                <a href="./services#virtual-workshop">Virtual Workshop</a>
                            </div>
                            <div class="profile_n l2">
                                <a href="./services#bank-account">Bank Account</a>
                            </div>
                            <div class="profile_n l3">
                                <a href="./services#immigration">Immigration</a>
                            </div>
                            <div class="profile_n l4">
                                <a href="./services#accounting-consulting">Accounting Consulting</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- </div> -->




                <li class="navbar-item">
                    <a href="./resource" class="navbar-link hover-underline">

                        <span class="span" style="color: black;">Resource Center</span>
                    </a>
                </li>
                <div class="dd">
                    <li class="navbar-item">
                        <a href="./about" class="navbar-link hover-underline services_dropdown" id="services_dropdown">


                            <span class="span"
                                style="color: black; cursor:pointer; display: flex; align-items:center;">About Us
                                <ion-icon name="chevron-down-outline"></ion-icon>
                            </span>
                        </a>
                    </li>
                    <div id="profile_options" class="profile_options">
                        <div class="user_profile_links">

                            <div class="profile_n l2">
                                <a href="./services#contact-us">Contact</a>
                            </div>
                            <div class="profile_n l2">
                                <a href="./services#social-media">Social media</a>
                            </div>
                            <div class="profile_n l2">
                                <a href="./services#faq">FAQ</a>
                            </div>
                            <div class="profile_n l2">
                                <a href="./disclaimer">Terms and Conditions</a>
                            </div>
                        </div>
                    </div>

                </div>



                <li class="navbar-item">
                    <a href="tel:+(1) 661 4226105" class="navbar-link hover-underline">

                        <span class="span" style="color: black;">USA +(1) 661 4226105</span>
                    </a>
                </li>
                <li class="navbar-item">
                    <a href="./client-login" class="navbar-link hover-underline">

                        <span class="span" style="color: black;">Login</span>
                    </a>
                </li>


            </ul>

            <div class="text-center-nav">
                <p class="headline-1 navbar-title">Visit Us</p>

                <address class="body-4">
                    ADDRESS: 10361 Sw 147 Court Cir # 18 Miami, 33196
                </address>

                <a href="mailto:info@mejorexporta.com" class="body-4 sidebar-link">info@mejorexporta.com</a>

                <div class="separator"></div>

                <p class="contact-label">Appointment Request</p>


                <a href="tel:+(1) 661 4226105" class="navbar-link hover-underline">
                    <div class="separator"></div>

                    <span class="span" style="color: black;">USA +(1) 661 4226105</span>
                </a>

            </div>

        </nav>

        <a href="./order-now" class="btn btn-secondary">
            <span class="text text-1">Access</span>

            <span class="text text-2" aria-hidden="true">Access</span>
        </a>


        <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
            <span class="line line-1" style="background-color: black;"></span>
            <span class="line line-2" style="background-color: black;"></span>
            <span class="line line-3" style="background-color: black;"></span>
        </button>

        <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>