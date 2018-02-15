<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="sass/style2.css">

    <title>Frequently Asked Questions (FAQs)</title>
</head>
<body>
<div id="faqs" class="genie">
    <?php include 'inc/genieheader.php'; ?>

    <div class="container clearfix">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="page_title">
                    <div class="wrap">
                        <h1>Frequently Asked Questions (FAQs)</h1>
                        <ul id="breadcrumb">
                            <li><a href="/">Rate A Genie</a></li>
                            <li>Frequently Asked Questions (FAQs)</li>
                        </ul>
                        <div class="action-buttons">
                            <a class="light_blue_link" href="faqscustomer.html">I'm a Customer</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
        </div>
        <div class="row fullwidth">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="faq-search-form">
                    <div class="wrap">
                        <div class="form-row" id="form-row-query">
                            <label for="query">What do you need help with?</label>
                            <input type="text" name="query" id="query" value="" maxlength="255" class="fw-input-prompt" type="text" placeholder="Search for what you need help...">
                        </div>
                        <input type="button" onclick="javascript: FindOnPage('query'); return false;" value="Search Help" class="pinkbtn button" id="faqs-search" name="faqs-search"/>

                        <div class="clearfix"></div>
                        <div class="faq-jump">
                            <strong>Jump To:</strong>
                            <a href="#bidding">Bidding</a>
                            |				<a href="#myaccount">My Account</a>
                            |				<a href="#recommendation">Recommendation</a>
                            |				<a href="#searching">Searching</a>
                            |				<a href="#winning">Winning</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div id="quest-answ" class="wrap">
                    <a name="bidding"></a>
                    <h4 class="bidding"><span class="faqs-icon">Bidding</span></h4>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How do I place a bid?</h5>
                        <div class="accordion-content">
                            <p>In order to be able to place a bid or save a search RATE A GENIE requires you to be logged in. This facility is only available to TPs.</p><p></p>
                            <p>    Log into your 'My RATE A GENIE' Page</p><p>    Click ‘Search Deliveries’ in the Nav bar</p><p>    Use one of RATE A GENIE's powered searches; Category, date or
                            location search functionalities</p><p>    Filter through deliveries using the map or list view</p><p>    Click on a listing that interests you</p><p>
                            Carefully read the delivery details to ensure you can fulfil the customer requirements</p><p>    (optional) View full details to gain a clearer description of
                            delivery</p><p>    Use our ‘Bid’ tab to enter bid amount. RATE A GENIE displays the exact amount you'll receive below your bid, if your bid be successful.</p><p>
                            Press 'Bid'</p><p></p><p>Please note that all bids submitted are inclusive of VAT. There are no hidden costs.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Are my bids legally binding?</h5>
                        <div class="accordion-content">
                            <p>IMPORTANT - All active bids on RATE A GENIE are legally binding.</p><p></p><p>Until such a time that bids are withdrawn, have lapsed or are declined, you are legally committed to the active bid. The final figure below the bid amount will be the total amount paid to the TP. If at the point of pick-up the delivery is found to have been inaccurately listed by the customer, then it is up to the customer and TP to renegotiate a cost. Such discourses fall beyond the jurisdiction and responsibility of RATE A GENIE.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Should I communicate with the customer?</h5>
                        <div class="accordion-content">

                            <p>RATE A GENIE actively encourages communication between customers and TPs. It's in everyone's best interests for there to be an open dialogue regarding the logistics of the delivery.</p><p></p><p>    TPs can ask customers questions relating to a listing before choosing to bid on it. Every listing has a 'view full details' section where TPs can ask questions about the listing.</p><p>    Customers can ask TPs questions relating to aspects of the delivery and service offered.</p><p>    TPs can view all previous related questions regarding the delivery of concern.</p><p></p><p>During the bid, TPs and customers may only communicate through RATE A GENIE's messaging centre. No contact information can be exchanged, nor any suggestive messages be sent which do not involve communicating through the RATE A GENIE site.</p><p></p><p>RATE A GENIE will move quickly to permanently exclude any TP or customer caught contravening or abusing the rules of the site.</p>
                        </div>
                    </div>

                    <a name="myaccount"></a>
                    <h4 class="myaccount"><span class="faqs-icon">My Account</span></h4>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How does registration work?</h5>
                        <div class="accordion-content">
                            <p>RATE A GENIE is a non-subscription based website. This means that it is totally free for all Transport Providers (TPs) to use until they have a bid accepted, at which time a minimal success fee is due.</p><p></p><p>Before you're able to bid, RATE A GENIE requires you to register by filling out our simple, step by step form (found at www.RATE A GENIE.com/sign-up). The moment you complete this registration your account will be active, giving you full access to RATE A GENIE's extensive search engine - where you'll be able to find potential jobs and start bidding on them.</p><p></p><p>There is one final step... RATE A GENIE requires all TPs to become verified, something that will give you long-term benefits.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How are transporters verified?</h5>
                        <div class="accordion-content">
                            <p>RATE A GENIE has to verify your authenticity as a legitimate TP and until we can do this your profile will have an 'Unverified' status. Being 'Unverified' means that customers (those who wish to have something shipped) will not be able to tell how reliable you are, which could diminish your chances of having your bid accepted.</p><p></p><p>Once you’ve registered, we’ll send you a unique RATE A GENIE verification passkey to your registered address, which should take no more than 3 working days to arrive. Having received your unique passkey, you’ll need to login to your dashboard click Edit Profile and insert your unique verification passkey in the box provided.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How can I improve my chance of winning work?</h5>
                        <div class="accordion-content">
                            <p>Creating your profile and accurately setting your RATE A GENIE preferences is very important to your RATE A GENIE experience. It will increase your chances of having bids accepted, and will help filter out any unwanted or irrelevant notifications. Please take the time to ensure that your profile is correct and your preferences are set.</p><p></p><p>You'll be prompted to set your preference and profile pages when you first register. Alternatively you can access these pages at any time directly from your dashboard once you are logged in.</p><p></p><p>The more information entered about your company and your service, the more you'll be able to influence the amount of bids which are accepted by the customers. When choosing a suitable Transport Provider, potential customers will look closely at your profile page and many will make a decision from the strength of content displayed therein. To change or edit your profile page go to your Dashboard and click the ‘Edit Profile’ link on the left hand side.</p><p></p><p>Within your Preference and Profile settings you're able to view and edit details relevant to your company and/or your service, as well as manage your notifications.</p><p></p><p>    Preferences</p><p>    Feedback</p><p>    History</p><p>    Profile</p><p></p><p>Please note you won't be able to leave your address and contact details on your profile pages as this would contravene our Terms and Conditions.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">What is the 'dashboard'?</h5>
                        <div class="accordion-content">
                            <p>All TPs have access to your own unique 'Dashboard', which acts as a central command point where you will be able to:</p><p></p><p>    Search for new deliveries</p><p>    View and manage all Alerts and Saved Searches</p><p>    Choose to bid-on, watch or delete delivery alerts as they arrive</p><p>    Manage details on jobs you have won or lost</p><p>    Edit Profile and Preference settings</p><p>    View and respond to Messages</p><p></p><p>Combining the features mentioned above allows your dashboard to become a tool acting as a platform from which you can manage all your RATE A GENIE day to day tasks.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Will I receive lots of emails?</h5>
                        <div class="accordion-content">
                            <p>You will be notified by email whenever there is a delivery that could be of interest to you. We strongly advise you to take full advantage of this service, since it could mean adding deliveries to routes you are already running or finding local jobs in your area.</p><p></p><p>You can manage the frequency and volume of all notifications using the Preferences feature located in the central-left module on your dashboard.</p><p></p><p>Notifications include:</p><p></p><p>    Contact me when a new auction is listed that matches one of my saved searches.</p><p>    Contact me every 24hrs with a summary of all new auctions listed within my saved searches.</p><p>    Contact me when a listing I'm bidding on is about to expire.</p><p>    Contact me when I'm outbid on an auction.</p><p>    Contact me when a new bid is made on an auction that I'm watching.</p><p>    Contact me when a new lowest bid is made on an auction that I'm watching.</p><p></p><p>Or</p><p></p><p>    Contact me when a new lowest bid is made on an auction that I am watching You will always be notified when the following events happen:</p><p>    When you receive a message from another customer.</p><p>    When you win an auction.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">What if I forget my login/password?</h5>
                        <div class="accordion-content">
                            <p>Don't worry - Just click the forgotten your password text link on the LOGIN page at the site entrance. An email will follow shortly with a computer generated password to be used with the registered email address.</p><p></p><p>Having gained access to the site, RATE A GENIE encourages you to change your password to another of your choice using the 'Edit Profile' - Account Details' tab from your Dashboard.</p>
                        </div>
                    </div>
                    <a name="recommendation"></a>
                    <h4 class="recommendation"><span class="faqs-icon">Recommendation</span></h4>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How does the recommendation system work?</h5>
                        <div class="accordion-content">
                            <p>As an introductory offer for a limited time when you introduce RATE A GENIE by recommending us to your friends, family or colleagues - they will receive a £5 starter credit for FREE. If they then successfully use RATE A GENIE by accepting a bid, we will give you £10 credit into your RATE A GENIE account This credit can be used to; upgrade your existing deliveries, to pay the deposit amount when accepting a quote or it can be cashed out at a 50% value through Paypal. It’s very simple, the more people you recommend the more you can earn!</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Who can recommend RATE A GENIE?</h5>
                        <div class="accordion-content">
                            <p>Both registered customers and transport providers can recommend RATE A GENIE. Please note; you have to be registered on RATE A GENIE in to order recommend our service and for you to receive credit.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How do I recommend RATE A GENIE to others?</h5>
                        <div class="accordion-content">
                            <p>There are many ways in which our users can recommend RATE A GENIE to receive credit/cash. To learn more, log in and click on the 'Recommend Now' button on your dashboard.</p><p></p><p>    Users can enter email addresses manually into the space available on the recommendation page. Please note to leave commas between each email address. There is no limit to the number you can recommend.</p><p>    Through your email provider or Social Media Stream; These include AOL, Yahoo, Gmail, Live/Hotmail, LinkedIn, YouTube plus Twitter and Facebook. We will ask for your email provider password but rest assured, we will never store any passwords.</p><p>    Downloading our banners - We have a number of different formats of banners to use which can be placed on your websites or eBay listings for example. You will need to copy and paste the unique html code and place it where necessary. Every customer or user of yours who clicks a banner will receive £5 credit into their account and when they are successful with the transaction, you will receive £10 credit which can be cashed out at a rate of 50%.</p><p>    Every user has a unique promo code which is embedded within personal reference link on your dashboard known as a URL. This link/URL can be posted anywhere on the internet to get people to join up for you to start earning.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">What's the fine print?</h5>
                        <div class="accordion-content">
                            <p>After one of your "recommendees" accepts a bid, payments take 7 days or after positive feedback is left in order to clear in your RATE A GENIE balance. This is to avoid users accepting bids and for the delivery not to take place. If the delivery is not successful, no funds will be passed to the recommender. We reserve the right to refuse or withdraw credit if we suspect any abuse / misuse of the recommendation facility.</p>
                        </div>
                    </div>
                    <a name="searching"></a>
                    <h4 class="searching"><span class="faqs-icon">Searching</span></h4>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How do I search for work?</h5>
                        <div class="accordion-content">
                            <p>RATE A GENIE has three different search functionalities; Category, Date, Location - all of which can be found at www.RATE A GENIE.com/search. The default mode for searching deliveries is a blanket search including all categories, with no date restrictions and stretching across the UK and Europe.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">What are the 'category' and 'date' search functions?</h5>
                        <div class="accordion-content">
                            <p>Category search is useful for those who only transport a certain type of goods; be it machinery, cars, livestock or boats for example. To help improve your search results, please be aware that from time to time customers may list items in the wrong categories so be sure to explore new categories if your search results are low.</p><p></p><p>Listings stay live for 30 days but typically the customer will accept a bid in days one to four. Very few customers will wait until their listing is about to expire before accepting a bid.</p><p></p><p>In order to be able to place a bid or save a search RATE A GENIE requires you to be logged in. This facility is only available to TPs.</p><p></p><p>To tailor your search requirements further, try searching by location.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">What is the 'location' search function?</h5>
                        <div class="accordion-content">
                            <p>RATE A GENIE's search functionality enables TPs to search for deliveries 'along a route' when both origin and destination town or postcodes have been entered or by 'localised area' finding jobs within a certain distance from any destination. Simply 'Search Deliveries' in the Nav bar or at Search Deliveries.</p><p></p><p>Along a Route search is ideal for TPs making journeys with part-full or empty loads, which are keen to fill their loads and therefore generate more business along routes they're already travelling. For extra functionally, RATE A GENIE allows you to enter a specified distance you're prepared to travel off your chosen route to search for jobs.</p><p></p><p>Along a route search are performed by entering both your start address and end address but be sure to tick the along a route box.</p><p></p><p>Localised search is if you're dropping off at certain locations unknown to you, outside your area or you just want to search for jobs around your local town, this search is perfect for you. How many miles you are willing to travel will directly influence how many deliveries are available to you.</p><p></p><p>Localised searches are performed by going to ‘Search Deliveries’ in the Nav bar or at Search Deliveries and entering the distance you want to find deliveries within and location. Leave the other fields empty and once complete, click 'Search'.</p><p></p><p>In order to be able to place a bid or save a search RATE A GENIE requires that you are logged in. This facility is only available to TPs.</p><p></p><p>To tailor your search requirements further, try searching by category or date</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">What is the 'save' search function?</h5>
                        <div class="accordion-content">
                            <p>Saving Searches is a very useful feature for all Transport Providers designed to help you find job types that are suitable for you.</p><p></p><p>Saving searches very easy - after using our search features to find jobs you are interested in you have the ability to save that specific search by entering a name for the search in the 'Save this Search' module. Once a search is saved you will start receiving alerts whenever a new delivery matches your search.</p><p></p><p>It gives you the ability to save frequently made journeys, so that you can receive instant notifications of deliveries relevant to your most common routes the moment customers register them with RATE A GENIE -allowing you to get ahead of the competition.</p><p></p><p>Saved Searches can be deleted at any time.</p>
                        </div>
                    </div>
                    <a name="winning"></a>
                    <h4 class="winning"><span class="faqs-icon">Winning</span></h4>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">'The Winning Bid' - what happens next?</h5>
                        <div class="accordion-content">
                            <p>Once your bid has been accepted, you'll receive an email confirming your win and also listing your customer's full contact detail. It is up to the TP to ensure the customer is contacted and the delivery pick up is arranged.</p><p></p><p>At the end of every transaction you'll be encouraged to leave feedback on the other party - similarly they'll be asked for feedback on you and your service. Feedback is an integral element of RATE A GENIE's community, so please follow up any parties who fail to leave it.</p><p></p><p>It is in your interest to build a reputable feedback score, as this in turn will increase your chances of winning future jobs.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How does payment work?</h5>
                        <div class="accordion-content">
                            <p>In order to secure the delivery, the customer must pay a deposit to RATE A GENIE which acts as a success fee from the TP's bid amount. The payment structure can be seen at www.RATE A GENIE.com/terms-and-conditions. You'll be paid the remaining balance, which is collected directly from the customer listing the item, at a time agreed between both customer and TPs. This transaction must be made according to the payment methods and terms you have specified on your profile page.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How do I leave the customer feedback?</h5>
                        <div class="accordion-content">
                            <p>The success of RATE A GENIE and its members is down to the integrity of our feedback rating system. We aim to create an honest and safe community by means of feedback ratings, so we ask all members to leave honest and reliable feedback after every transaction.</p><p></p><p>If you have any outstanding feedback RATE A GENIE will prompt you twice through our messaging service and an alert will show on your dashboard page. For a direct link to your feedback page go to your 'Dashboard'</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div class="wrap">
                    <div id="faqs_contact">
                        <h3>Still need help? Contact the support team</h3>
                        <div class="contact_support_team col-xs-12 col-sm-6 col-lg-6">
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="img/faqs/team-member1.png">
                                </div>
                                <div class="member-name">
                                    Layla
                                </div>
                            </div>
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="img/faqs/team-member2.png">
                                </div>
                                <div class="member-name">
                                    Kat
                                </div>
                            </div>
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="img/faqs/team-member3.png">
                                </div>
                                <div class="member-name">
                                    Natasha
                                </div>
                            </div>
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="img/faqs/team-member4.png">
                                </div>
                                <div class="member-name">
                                    Sandra
                                </div>
                            </div>
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="img/faqs/team-member5.png">
                                </div>
                                <div class="member-name">
                                    Sabrina
                                </div>
                            </div>
                            <div class="team-member">
                                <div class="member-img">
                                    <img src="img/faqs/team-member6.png">
                                </div>
                                <div class="member-name">
                                    Kareen
                                </div>
                            </div>

                        </div>
                        <div class="contact_support  col-xs-12 col-sm-6 col-lg-6">
                            <p>Use the contact form to get in touch with us, one of our support team will reply to you regarding your enquiry as soon as
                                possible but this can take up to 24 hours</p>
                            <p>For a faster response you can give us a phone call.<br>We look forward to hearing from you.</p>
                            <h5>Call us on <strong>020 3872 3050</strong></h5>
                            <p style="margin-top: 0px;"><a style="color: #404040;" href="contact.html">Take me to contact page</a></p>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'inc/geniefooter.php'; ?>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
<script src="js/popper.min.js" crossorigin="anonymous"></script>
<script src="bootstrap/bootstrap.min.js" crossorigin="anonymous"></script>
<script src="js/jquery-3.1.0.js" crossorigin="anonymous"></script>
<script src="js/faqsearch.js"></script>

</body>
</html>