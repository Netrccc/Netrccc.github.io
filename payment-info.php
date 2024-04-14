<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Information</title>
    <link rel="stylesheet" href="./src/style2.css">
    <link rel="stylesheet" href="./src/style.css">
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Buyer's Information</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">

    </head>

    <body>

        <?php
        session_start();

        if (!isset($_SESSION)) {
            header("location: index");
        }
        $amt = $_POST["price"];
        ?>
        <!-- partial:index.partial.html -->
        <center>
            <div class="wrapper">
                <div class="previous">
                    <a href="./index"><button><span>⬅</span>Back</button></a>
                </div>
                <div class="container">
                    <form action="./payment/invoice" method="post">
                        <h1>
                            <i class="fas fa-shipping-fast"></i>
                            Enter Your Details
                        </h1>
                        <div class="name">
                            <div>
                                <label for="f-name">First name</label>
                                <input type="text" required name="f-name">
                            </div>
                            <div>
                                <input type="hidden" name="total" value="<?php echo $amt; ?>">
                            </div>
                            <div>
                                <label for="l-name">Last name</label>
                                <input type="text" required name="l-name">
                            </div>
                        </div>
                        <div class="street">
                            <label for="name">Email address</label>
                            <input type="text" required name="email">
                        </div>
                        <div class="street">
                            <label for="name">Phone</label>
                            <input type="text" required name="phone">
                        </div>
                        <div class="street">
                            <label for="name">Street</label>
                            <input type="text" required name="address">
                        </div>
                        <div class="address-info">
                            <div>
                                <label for="city">City</label>
                                <input type="text" required name="city">
                            </div>
                            <div>
                                <label for="state">State</label>
                                <input type="text" required name="state">
                            </div>
                            <div>
                                <label for="zip">Zip</label>
                                <input type="text" required name="zip">
                            </div>
                        </div>

                        <div class="btns">
                            <button>Pay $<?php echo $amt; ?></button>


                        </div>
                    </form>
                </div>
            </div>

        </center>
        <!-- partial -->

    </body>

    </html>

    <script src="./src/script.js"></script>



    <style>
        .previous a button {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .previous a button span {
            padding: 6px 8px;
            background-color: #493b76;
            color: white;
            border-radius: 50%;
        }

        .wrapper .previous {
            padding: 20px;
        }

        body {
            overflow: auto;
        }

        .wrapper {
            margin-top: 5%;
            width: 60%;
            display: flex;
            justify-content: center;
            font-family: "Arimo";
            justify-content: center;
            background-color: white;
            border: 1px solid lightgray;
            overflow: auto;

        }

        .container {
            width: 65%;
            padding: 5% 10%;
        }

        h1 {
            align-self: center;
        }

        form {
            width: 100%;
        }

        form>* {
            margin-top: 20px;
        }

        form input {
            width: 100%;
            min-height: 25px;
            border: 0;
            font-size: 1rem;
            letter-spacing: 0.15rem;
            font-family: "Arimo";
            margin-top: 5px;
            color: #8e2807;
            border-radius: 4px;
            padding: 10px;
            background-color: #e4e4e4;
            border: 1px solid lightgray;
        }

        form input:hover {
            border: 1px solid #493b76;
        }

        form label {
            text-transform: capitalize;
            font-size: 12px;
            color: #493b76;
            text-align: justify;
            font-weight: bold;
        }

        form h1 {
            font-size: 24px;
            line-height: 10px;
            color: #493b76;
            letter-spacing: 1px;
        }

        form h1:nth-of-type(2) {
            margin-top: 10%;
        }

        .name {
            justify-content: space-between;
            display: flex;
            width: 100%;
        }

        .name div {
            width: 45%;
        }

        .address-info {
            display: flex;
            justify-content: space-between;
        }

        .address-info div {
            width: 30%;
        }

        .cc-info {
            display: flex;
            justify-content: space-between;
        }

        .cc-info div {
            width: 45%;
        }

        .btns {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-direction: row-reverse;
        }

        .btns button {
            margin: 3px 0;
            height: 30px;
            color: white;
            display: inline-block;
            word-wrap: normal;
            background-color: #493b76;
            text-transform: capitalize;
            border: 0;
            border-radius: 0.3rem;
            padding: 4px 8px;

        }

        .btns button:hover {
            animation-name: btn-hov;
            animation-duration: 550ms;
            animation-fill-mode: forwards;
        }


        input:focus,
        button:focus {
            outline: none;
        }

        @media (max-width: 736px) {
            .btns button {
                margin: 3px 0;
                height: 30px;
                width: 60px !important;
            }

            .street {
                width: 100%;
            }

            .street input {
                width: 100%;
            }

            .container form {
                width: 100%;
                flex-direction: column;
                display: flex;
                align-items: center;
                align-items: center;
                gap: 10px;
            }

            .container form input {
                width: 100% !important;
            }

            input {
                width: 100% !important;
            }

            form h1 {
                font-size: 20px;
            }

        }


        @media (max-width: 736px) {
            .wrapper {
                width: 100%;
            }

            .container {
                width: 100%;

            }

            .container form {
                width: 100%;
                flex-direction: column;
                display: flex;
                align-items: center;
                align-items: center;
                gap: 10px;
            }

            .btns {
                align-items: center;
            }

            .btns button {
                width: 50%;
            }

            form h1 {
                text-align: center;
            }

            .name,
            .address-info,
            .cc-info {
                flex-direction: column;
                width: 100%;
                justify-content: space-between;
            }

            .name div,
            .address-info div,
            .cc-info div {
                align-items: center;
                flex-direction: column;
                width: 100%;
                display: flex;
            }

            .street,
            .cc-num {
                text-align: center;
            }

            input {
                margin: 5px 0;
                min-height: 30px;
            }
        }
    </style>


</body>

</html>