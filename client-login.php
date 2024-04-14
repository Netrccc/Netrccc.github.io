<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Client</title>
    <link rel="stylesheet" href="./src/style.css">
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
</head>

<body>

    <section class="client-login-page">
        <div class="client-login-section">
            <div class="login-nav">
                <a href="./" class="back-link">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                        <path d="M8.33333 4.66666L2.5 10.4999M2.5 10.4999L8.33333 16.3333M2.5 10.4999H17.5"
                            stroke="#1C1B18" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </a>

                <a href="./" class="inline-block">
                    <img style="max-width: 100px" src="./favicon.png" alt="mejorexporta">
                </a>
            </div>

            <div class="form-section">
                <h1 class="text-black font-semibold text-3xl m-0">Sign in to majorexportal</h1>
                <form class="form" action="./client-login" onsubmit="return startPage.checkValidForm();" method="POST">
                    <input type="hidden" name="_token" value="ilo0JcmEf6No9wNepQHEnF1po0K0liUc7sG5oUe2">
                    <div class="form-group">
                        <label for="userEmail">Email *</label>
                        <input type="email" name="userEmail" id="userEmail" value="" class="form-control required"
                            placeholder="johnsmith@gmail.com" onblur="startPage.checkValidForm()">
                        <span class="help-block-error hide">Please enter a valid email address</span>
                    </div>


                    <button type="submit" class="client-login-btn">
                        <span>Next</span>

                        <span class="w-6 h-6">
                            <svg class="stroke-current" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path d="M3 11.9999H21M21 11.9999L14 5M21 11.9999L14 18.9999" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </button>

                </form>
            </div>

            <div class="client-login-copy">© 2024 majorexportal. All rights reserved.</div>
        </div>
    </section>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="./function.js"></script>


    <style>

    </style>
</body>

</html>