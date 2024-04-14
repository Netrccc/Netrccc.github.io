<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="./src/style2.css">
    <link rel="stylesheet" href="./src/style.css">
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include 'nav.php'; ?>
    <center>
        <div class="services_page_section">
            <h1>Services Center</h1>
            <div class="services1 AllServices" id="virtual-workshop">
                <div class="servicesHeading" style="display: flex; align-items:center; justify-content:space-between">
                    <a href="./about" class="back-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 20 21" fill="none">
                            <path d="M8.33333 4.66666L2.5 10.4999M2.5 10.4999L8.33333 16.3333M2.5 10.4999H17.5"
                                stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </a>
                    <h1>Virtual Workshop</h1>
                </div>
                <div class="data">
                    <span><b>Virtual office</b> is a virtual space offered by <a href="#">www.mejorexporta.com</a>
                        <b>where
                            the
                            activities of a
                            traditional office are carried out,</b>

                        but without physical space or facilities. It is used to register
                        your
                        company,
                    </span>
                    <span
                        style="background-color: #d9ecff; color:#091e3e; font-weight:bold; padding:5px;display:inline-flex; background-size:contain">open
                        a bank
                        account, and
                        receive correspondence, among others. </span>
                    You have a unique postal address. We
                    also offer, at an additional cost, to digitize the correspondence to <b>send it to you by email</b>,
                    or forward
                    it
                    to where you are by certified mail.
                </div>
                <div class="virtual_workspace_payment">
                    <div class="virtual_office_plan plan_month">
                        <h2>PLAN MENSUAL</h2>
                        <h1>$ 48 USD</h1>
                        <br>
                        <form action="order-check" method="POST">
                            <input type="text" value="48" name="amount">
                            <input type="hidden" value="https://buy.stripe.com/fZe6q5cjP5u04Kc004" name="link">
                            <button class="plan_payment">Access</button>
                        </form>
                    </div>
                    <div class="virtual_office_plan plan_annual">
                        <h2>PLAN ANUAL</h2>
                        <h1>$ 432 USD AHORRO 20%</h1>
                        <form action="order-check" method="POST">
                            <input type="text" value="432" name="amount">
                            <input type="hidden" value="https://buy.stripe.com/aEU6q5dnT3ISfoQ149" name="link">
                            <button class="plan_payment">Access</button>
                        </form>
                    </div>
                </div>
                <br>
                <h2>Charges for Virtual Office Functionalities According to Use</h2>
                <div class="data">

                    <b>Shipping items by mail :</b>
                    <ul>
                        <p>Subject to quote for logistics service</p>
                        <li>Pick up mail at address location $2</li>
                    </ul>

                    <ul>
                        <span style="color:gray">Forward mail and packages. Subject to quote for logistics
                            service</span>
                        <li>Scanning mail content or shredding mail</li>
                        <li>Content scans are received as searchable PDFs.</li>
                        <li>Order size = 1 envelope.</li>
                        <li>Single order: $4.50 for up to 10 pages, then $0.50 per page</li>
                    </ul>


                    <br>

                    <ul>
                        <span style="color:gray">
                            Consolidate the contents of multiple shipping packages into one box to save on shipping
                        </span>
                        <li>$2.95 per package plus packaging materials</li>
                        <li>Discount Packages: Any combination of content scanning</li>
                        <li>destruction orders or locations; Without time limit; advance purchase, non-refundable</li>
                        <li>$20.00 for 5 scan or shred orders, save 10%*</li>
                        <li>$36.00 for 10 scan or shred orders, save 20%*</li>
                        <li>$60.00 for 20 scan or shred orders, save 33%*</li>
                        <li>* up to 10 pages per order, then one additional order</li>
                    </ul>
                    <br>
                    <b>Check deposit by mail</b>
                    <ul>
                        <li>$8.95 to deposit up to 5 checks (scanning of each check required), plus trackable shipping
                        </li>
                    </ul>
                    <ul>
                        <span style="color:gray">Additional insurance $3.5 for every $100 of insurance requested</span>
                        <li>Extended storage (after free storage expires)</li>
                        <li>Letters, large envelopes, magazines, postcards: $2.20/item per month</li>
                        <li>All soft packs/card packs: $2.20/pound per month</li>
                        <li>Boxes less than 12” x 12” x12” or equivalent: $2.20/pound* per month</li>
                        <li>12” x 12” x 12” to 24” x 17” x12” boxes or equivalent: $2.20/pound* for 10 days</li>
                        <li>Boxes 24” x 17” x 12” or larger or equivalent: $2.20/pound* for 5 days</li>
                        <li>Greater than actual weight or dimensional weight</li>
                    </ul>
                    <ul>
                        <span style="color:gray">
                            Box contents images: Includes up to 6 box contents images
                        </span>
                        <li>Invoice cost: $5.95</li>
                        <li>Images Cost: $6.95</li>
                        <li>Invoice and images cost: $10.95</li>
                    </ul>






                </div>
            </div>
            <div class="services2 AllServices" id="bank-account">
                <div class="servicesHeading" style="display: flex; align-items:center; justify-content:space-between">
                    <a href="./about" class="back-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 20 21" fill="none">
                            <path d="M8.33333 4.66666L2.5 10.4999M2.5 10.4999L8.33333 16.3333M2.5 10.4999H17.5"
                                stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </a>
                    <h1>Bank Account</h1>
                </div>
                <div class="data">
                    <span>At Mejorexporta.com we can help you open a corporate account in dollars in the United
                        States without being present (after studying our allied banks). Access from anywhere in
                        Latin America from your cell phone or laptop. Our service is ideal for ECommerce businesses and
                        startups.
                        You must have a website showing your economic activity.</span>
                    <br>
                    <span>This type of bank account can be connected to any payment platform such as Stripe , PayPal,
                        among
                        others, as it comes with its own number and route. There are no maintenance costs and no minimum
                        deposits. After your account is approved, you will obtain a physical and a virtual debit card,
                        which
                        will be sent to your country of residence. With these cards you can make purchases on the
                        Internet
                        and withdraw from ATMs.
                    </span>
                    <br>
                    <span>
                        For clients with an American visa, we have alliances with physical banks that will
                        carry out, by appointment, the study of basic documents to open your business account. For this
                        procedure you must
                        have the company completely created in the United States.
                    </span>
                    <br>
                    <span style="color:#091e3e">CREATION OF A BANK ACCOUNT FOR A COMPANY IN THE USA</span>
                    <ul>
                        <span>
                            Account opening is only carried out for United States companies
                            incorporated in Florida or Delaware.
                        </span>
                        <b>The necessary documents are the following:</b>
                        <li>Articles of Organization/Incorporation</li>

                        <li>EIN (Letter CP 575 or Letter 147c)</li>

                        <li>Operating Agreement (signed)</li>

                        <li>Good Standing Certificate (Delaware companies only)</li>

                        <ul>
                            NOTE: If you do not yet have a company in the USA, you can open an LLC or C Corporation with
                            www.mejorexporta.com.
                        </ul>
                    </ul>




                    <ul>
                        <span style="color:#091e3e;">
                            BANK ACCOUNT CREATION BUSINESS OWNER(S)
                        </span>
                        <br>
                        <span>For each business owner in the United States the following will be necessary:</span>
                        <li>ID</li>
                        <li>Passport</li>
                        <li>Visa (optional)</li>
                        <li>SSN, ITIN (optional)</li>
                        <li>Proof of address (from the country of residence, not the United States, unless it is the
                            country
                            in which you live)
                        </li>
                        <li>Bank letter proving age or Bank Statements from the last three months (from any bank,
                            whether in
                            the country of residence or the US)
                        </li>
                        <li>Curriculum vitae</li>

                        <br>
                        <ul>
                            <b>NOTE:</b> You must provide a photograph or scan of the documents, which must be current
                            and not expire
                            within the next 6 months.

                        </ul>
                    </ul>







                </div>
            </div>
            <div class="services3 AllServices" id="immigration">
                <div class="servicesHeading" style="display: flex; align-items:center; justify-content:space-between">
                    <a href="./about" class="back-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 20 21" fill="none">
                            <path d="M8.33333 4.66666L2.5 10.4999M2.5 10.4999L8.33333 16.3333M2.5 10.4999H17.5"
                                stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </a>
                    <h1>Immigration</h1>
                </div>
                <div class="data">
                    <ul>
                        The United States represents an excellent opportunity for many immigrants. However, the
                        immigration
                        process is complicated. At www.mejorexporta.com we have strategic allies suitable to guide
                        entrepreneurs who want to look for a life option in the USA. These specialists provide their
                        services to advise immigrants. The purpose is to opt for legal status in that country and for
                        all
                        the benefits that this implies. Since there are many ways to remain as an immigrant in the
                        United
                        States under certain requirements. Generally, to qualify for these requirements you must apply
                        for
                        visas, Green Cards. For his part, the immigration lawyer will evaluate the immigrant's situation
                        and
                        determine the application for which he or she qualifies. Well, each request involves a totally
                        different procedure. So, the immigration lawyer's task is to guide the immigrant to ensure the
                        successful approval of their application.
                    </ul>


                </div>
            </div>
            <div class="services4 AllServices" id="accounting-consulting">

                <div class="servicesHeading" style="display: flex; align-items:center; justify-content:space-between">
                    <a href="./about" class="back-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 20 21" fill="none">
                            <path d="M8.33333 4.66666L2.5 10.4999M2.5 10.4999L8.33333 16.3333M2.5 10.4999H17.5"
                                stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </a>
                    <h1>Accounting Consulting</h1>
                </div>
                <div class="data">
                    <ul>
                        At <a href="www.mejorexporta.com">www.mejorexporta.com</a> we are sure that advice from an
                        expert
                        will give you the security you need to undertake your project with an American company, knowing
                        your
                        obligations to avoid problems. Remember that before starting any type of business you must know
                        what
                        obligations you must comply with in the country when having a company in the USA, so you can
                        safely
                        advance your projects. Resolving any type of doubt will avoid having tax problems in the future.

                        Having the tax and accounting advice of a USA accountant will save you a lot of problems.

                        We have accounting allies who will help clarify any type of doubt.
                    </ul>
                </div>
            </div>
            <div class="services4 AllServices" id="contact-us">

                <div class="servicesHeading" style="display: flex; align-items:center; justify-content:space-between">
                    <a href="./about" class="back-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 20 21" fill="none">
                            <path d="M8.33333 4.66666L2.5 10.4999M2.5 10.4999L8.33333 16.3333M2.5 10.4999H17.5"
                                stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </a>
                    <h1>Contact Us</h1>
                </div>
                <div class="data">
                    <ul>
                        <b>USES:</b>
                        <ul>
                            <li>PHONE: +(1) 661 4226105</li>
                            <li>ADDRESS: 10361 Sw 147 Court Cir # 18 Miami, FL 33196</li>
                            <li>Mail:<a href="mailto:INFO@MEJOREXPORTA.COM">DIRECTORCOMERCIAL@MEJOREXPORTA.COM |
                                    INFO@MEJOREXPORTA.COM</a> </li>
                        </ul>

                        <ul>
                            <li>COLOMBIA: +(57) 3182854232</li>
                            <li>USA: + ( 1 ) 661 4226105 </li>
                            <li>PANAMA: + ( 507 )</li>
                            <li>ECUADOR: + ( 593 ) 99063 4547</li>
                            <li>HONDURAS: + ( 504 )</li>
                            <li>BOLIVIA: + ( 591 )</li>
                            <li>PERU: + ( 51 )</li>
                            <li>CANADA: + ( 1 )</li>
                            <li>PARAGUAY: + ( 595 )</li>
                            <li>SALVADOR: + ( 503 )</li>
                            <li>SPAIN: + ( 34 )</li>
                            <li>GUATEMALA: + ( 502 ) 54120383</li>
                            <li>ARGENTINA: + ( 54922 ) 67432697</li>
                            <li>MEXICO: + ( 52 ) 5641625247</li>
                        </ul>



                    </ul>
                </div>
            </div>
            <div class="services4 AllServices" id="faq">

                <div class="servicesHeading" style="display: flex; align-items:center; justify-content:space-between">
                    <a href="./about" class="back-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 20 21" fill="white">
                            <path d="M8.33333 4.66666L2.5 10.4999M2.5 10.4999L8.33333 16.3333M2.5 10.4999H17.5"
                                stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </a>
                    <h1>Frequently Asked Questions</h1>
                </div>
                <div class="data">

                    <div class="q1">
                        <b>
                            <h2>What is an LLC? <ion-icon name="chevron-down"></ion-icon>
                            </h2>
                        </b>
                        <span>
                            LLC ( Limited Liability Company) means Limited Liability Company.
                            This business model combines some advantages of a corporate structure with
                            tax association elements.
                            By creating an LLC company in the United States you can partially protect your
                            natural person from potential financial problems or lawsuits against you
                            legal.
                        </span>
                    </div>




                    <div class="q1">
                        <b>
                            <h2>What are the main benefits of the LLC? <ion-icon name="chevron-down"></ion-icon>
                            </h2>
                        </b>
                        <span>
                            <li>Has limited financial liability. ...</li>
                            <li>They are very simple companies to establish. ...</li>
                            <li>Favorable taxation. ...</li>
                            <li>Low maintenance costs. ...</li>
                            <li>Greater flexibility. ...</li>
                            <li>They are regulated by the states. ...</li>
                            <li>Rigidity in the event of the departure of one or more partners. ...</li>
                            <li>It is not possible to incorporate new members.</li>
                        </span>
                    </div>


                    <div class="q1">
                        <b>
                            <h2>What is a C-Corp.?<ion-icon name="chevron-down"></ion-icon>
                            </h2>
                        </b>
                        <span>
                            It is a type of company under which you can register your company in the United States. They
                            can be
                            created by US citizens or foreigners. They are ideal for receiving external capital

                            <ul>
                                They have more hierarchical structures which include:
                                <li>Shareholders</li>
                                <li>Directors</li>
                                <li>Advisors</li>
                            </ul>



                            <span>
                                Bylaws must be created to stipulate the obligations and rights of shareholders and even
                                stipulate
                                the entry into force of the Articles of Incorporation , a document that serves as a
                                certificate of
                                existence of the company before the state, before being able to legally operate.
                                Likewise, C Corps also adopt the presentation of annual reports to the board, the
                                issuance
                                of shares
                                and even frequent meetings between the board of directors and shareholders.
                            </span>
                        </span>
                    </div>




                    <div class="q1">
                        <b>
                            <h2>What are the main benefits of the C-Corp.? </h2>
                        </b>

                        <ul>
                            Greater ease in raising funds.
                            <li>Less legal uncertainty.</li>
                            <li>Limited tax liability.</li>
                            <li>Intellectual property belongs to the company.</li>
                            <li>Access to suppliers and clients.</li>
                        </ul>
                    </div>


                    <div class="q1">
                        <b>
                            <h2>What is the difference between an LLC and a CORP? </h2>
                        </b>
                        <ul>
                            LLC and C- Corp Companies Their main objective is to separate the natural person from the
                            legal
                            person to partially protect individuals from certain personal responsibilities.
                            Each type of company has different forms of administration and compliance with tax
                            obligations.
                        </ul>
                    </div>

                    <div class="q1">
                        <b>
                            <h2>What is an-EIN? <ion-icon name="chevron-down"></ion-icon>
                            </h2>
                        </b>
                        <ul>
                            The EIN or employer identification number ( Employer's Identification Number ) is the
                            federal tax
                            identification number and is used to identify a business entity.
                        </ul>
                    </div>


                    <div class="q1">
                        <b>
                            <h2>What is an ITIN? <ion-icon name="chevron-down"></ion-icon>
                            </h2>
                        </b>
                        <ul>
                            ITIN is an Individual Taxpayer Identification Number (ITIN). A tax processing number issued
                            by the
                            Internal Revenue Service to individuals.
                        </ul>
                    </div>

                    <div class="q1">
                        <b>
                            <h2>What is an ITIN? <ion-icon name="chevron-down"></ion-icon>
                            </h2>
                        </b>
                        <ul>
                            ITIN is an Individual Taxpayer Identification Number (ITIN). A tax processing number issued
                            by the
                            Internal Revenue Service to individuals.
                        </ul>
                    </div>


                    <div class="q1">
                        <b>
                            <h2>What is a Registered Agent ? <ion-icon name="chevron-down"></ion-icon>
                            </h2>
                        </b>
                        <ul>
                            A registered agent is a person or entity, designated in the articles of
                            incorporation/organization,
                            that can accept legal documents and notices from a state office on behalf of the corporate
                            entity
                        </ul>
                    </div>

                    <div class="q1">
                        <b>
                            <h2>What is a Virtual Office? <ion-icon name="chevron-down"></ion-icon>
                            </h2>
                        </b>
                        <ul>
                            A virtual office is a virtual space where the activities of a traditional office are carried
                            out,
                            but without physical space or facilities.
                            <li>
                                You have a unique postal address
                                You can use this address to register your company or open a business bank account
                                Receive all correspondence from your company
                                Mejor Exporta will be able to receive and digitize the correspondence, or forward it
                                wherever you are.
                            </li>
                        </ul>
                    </div>


                    <div class="q1">
                        <b>
                            <h2>Do I have to travel to the United States to register my company? <ion-icon
                                    name="chevron-down"></ion-icon>
                            </h2>
                        </b>
                        <ul>
                            <b>No</b>. Our entire process can be done 100% online. We carry out all the processes
                            required by US
                            Government Agencies.
                        </ul>
                    </div>

                </div>
            </div>

            <div class="services4 AllServices" id="social-media">

                <div class="servicesHeading" style="display: flex; align-items:center; justify-content:space-between">
                    <a href="./about" class="back-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="31" viewBox="0 0 20 21" fill="white">
                            <path d="M8.33333 4.66666L2.5 10.4999M2.5 10.4999L8.33333 16.3333M2.5 10.4999H17.5"
                                stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </svg>
                    </a>
                    <h1>Social Media</h1>
                </div>
                <div class="data">
                    <div class="social_media_icon">
                        <a href="https://m.facebook.com/profile.php?id=100064502642272&name=xhp_nt_fb_action_open_user">
                            Facebook &nbsp;
                            <img src="./icon/facebook.png" alt="icon" width="10%">
                        </a>
                        <a href="https://www.instagram.com/mejorexporta/">
                            Istagram &nbsp;
                            <img src="./icon/instagram.png" alt="icon" width="10%">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </center>



    <style>
    body {
        overflow: auto;
    }

    .header {
        display: block;
        position: absolute;
        position: static;
        top: 0 !important;
        box-shadow: none;
    }



    .servicesHeading a svg {
        stroke: 2px white !important;
        color: white;
        width: 20px;
        margin-left: 0;
        stroke-width: 20px;
    }

    @media (max-width:500px) {


        .servicesHeading h1 {
            font-size: 10px;
            display: inline-block;
        }

        .servicesHeading a {
            background: none;
            display: flex;
            align-items: flex-start;
            justify-content: flex-start;
        }
    }

    @media (max-width:500px) {
        .virtual_workspace_payment .virtual_office_plan {
            width: 280px !important;
            max-height: 400px;

        }
    }

    @media (max-width:750px) {
        .virtual_workspace_payment {
            flex-direction: column;
        }
    }
    </style>




    <script src="./src/script.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>