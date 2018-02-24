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
<div id="faqs" class="customer">
    <?php include 'inc/customerheader.php'; ?>

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
                            <a class="light_blue_link" href="faqsgenie.html">I'm a Genie</a>
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
                            <input type="text" name="query" id="query" value="" maxlength="255" class="fw-input-prompt" placeholder="Search for what you need help...">
                        </div>
                        <input type="button" onclick="javascript: FindOnPage('query'); return false;" value="Search Help" class="pinkbtn button" id="faqs-search" name="faqs-search"/>

                        <div class="clearfix"></div>
                        <div class="faq-jump">
                            <strong>Jump To:</strong>
                            <a href="#commonquestions">Common Questions</a>
                            |				<a href="#myaccount">My Account</a>
                            |				<a href="#listingitems">Listing Items</a>
                            |				<a href="#managelistings">Manage Listings</a>
                            |				<a href="#bidacceptance">Bid Acceptance</a>
                            |				<a href="#recommendations">Recommendations</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-lg-12">
                <div id="quest-answ" class="wrap">
                    <a id="commonquestions"></a>
                    <h4 class="commonquestions"><span class="faqs-icon">Common Questions</span></h4>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How do I get a delivery/removal quote?</h5>
                        <div class="accordion-content">
                            <p>Requesting quotes on RATE A GENIE is easy. Simply post what you need to move, where it needs to go and when you need it done. This will then create
                                a listing on our site.</p><p></p><p>Listing items is completely free, and can be done in a matter of seconds. Feel free to list as many items
                            as you wish and rest assured that you are under NO obligation to accept any of the quotes you receive from transport providers.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How can I receive more quotes?</h5>
                        <div class="accordion-content">
                            <p>There are few ways in which you can increase the number of quotes you receive. Firstly, giving as much detail as possible about the item/s you are moving
                                will provide transport providers with a clearer idea of whether they have the correct vehicle to complete the job. Entering details such as weight and
                                dimensions, and an inventory for house moves, will all help you to receive more quotes.</p><p></p><p>Secondly, flexibility with dates will help increase
                            the number of quotes you receive and potentially encourage cheaper prices, as transport providers may be able to pick up your item as part of a route they are
                            already taking.</p><p></p><p>Inviting companies to quote will also help increase the number of quotes you receive as you may make your listing more visible to
                            appropriately matched transporters who hadn’t previously seen it.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">When and who do I need to pay?</h5>
                        <div class="accordion-content">
                            <p>To secure your chosen transport provider, you are required to pay a deposit to RATE A GENIE. This payment is only taken after you’ve accepted a quote from a transport provider. The deposit can be paid through our Secure Payment Gateway (which accepts all major credit and debit cards) or via PayPal.</p><p></p><p>We also accept card payments over the phone.</p><p></p><p>After paying the initial deposit to RATE A GENIE, you then pay the remaining balance directly to your chosen transport provider. Transport providers generally specify their accepted payment methods on their profiles; alternatively you can discuss this with them directly.</p><p></p><p>The amount you are quoted on RATE A GENIE, is the total amount you pay for the job. There are no hidden extras. Transport providers’ quotes are also all inclusive of all the services they offer.</p>
                        </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How do I receive quotes for the delivery of an eBay auction item?</h5>
                        <div class="accordion-content">
                            <p>RATE A GENIE is fully compatible with eBay and is also a member of the eBay developer’s programme. </p><p></p><p>To import an eBay auction item, simply enter the item number in the ‘Enter What Needs Moving’ field. We will then auto populate the related fields in the listing process (i.e. what the item is, its dimensions etc.)</p><p></p><p>You can request quotes for eBay items you are bidding on, interested in or have already won. If you don’t win the auction or no longer need the item transported, please be sure to remove the listing from the site to save transport providers’ time, quoting on items which no longer need moving.</p>
                        </div>
                    </div>

                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How do I change my email notifications?</h5>
                        <div class="accordion-content">
                            <p>To manage the frequency of the notifications you receive, click on ‘Edit My Profile’ (located in the drop down which appears when you hover over your username on the top right of the page)</p><p></p><p>You will then be taken to the ’Profile &amp; Preferences’ page where you can change the frequency of emails on the left hand side.</p><p></p><p>You will always receive email notifications by default when:</p><p>•	You receive a message from a Transport Provider</p><p>•	You accept a bid</p><p></p><p>You also have the option of being sent an email notification:</p><p>•	When a new bid is received on one of your deliveries</p><p>•	When a bid is withdrawn on one of your deliveries</p><p>•	When your delivery listing is about to expire</p><p></p><p>The notifications are in place for your convenience so the more notifications you receive, the better understanding you’ll have of all activity.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How can I be sure my items arrive in the same condition?</h5>
                        <div class="accordion-content">
                            <p>If you are packing your own items be sure that you wrap them well in order to prevent any chance of them getting damaged.</p><p></p><p>We provide both check-in and checkout documents to be used by both customers and transport providers. This is a document that both parties sign on collection of the items and again on delivery. It is not compulsory that you use this document, however, it is recommended to help protect all parties in the unlikely event of any dispute relating to the condition of items.</p><p></p><p>These documents can be found attached to your job-sheet or Driver Details document. This also contains all the details you need to communicate with the transport company in question.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How do I accept a quote?</h5>
                        <div class="accordion-content">
                            <p>To accept a quote, click on the ‘View Quotes’ button on your My RATE A GENIE page.</p><p> </p><p>If you wish to accept a quote - click the pink 'Accept Quote' button and follow the simple deposit payment procedure to secure the job. Deposits can be made using either a Credit/Debit Card or PayPal.</p><p></p><p>Upon acceptance, you will receive your chosen Transport Provider’s contact details for all further correspondence and arrangements.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How do I ensure a transport provider is trustworthy?</h5>
                        <div class="accordion-content">
                            <p>To ensure both customers and transport providers have a safe, mutually beneficial community we have created a feedback recommendation rating system. </p><p></p><p>Based on factors such as completed jobs and previous customer feedback, TPs receive a positive rating percentage, which can be used to gauge their reliability and performance.</p><p></p><p>All feedback scores and previous comments can be freely seen on the TPs profile page. </p><p></p><p>Transport providers also state their level of insurance cover on their profiles.</p><p></p><p>All transport providers on RATE A GENIE are required to pass our secure verification process before being allowed to obtain jobs via our site.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Can RATE A GENIE help with storage of my items?</h5>
                        <div class="accordion-content">
                            <p>If required, you can state in your listing that you require items to be taken to storage. Transport providers on RATE A GENIE can then facilitate this as part of your transportation request. </p><p></p><p>It’s important that you inform them of this as part of the initial listing, so that they can factor this into their quotes.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How do I remove my listing from the website?</h5>
                        <div class="accordion-content">
                            <p>If you no longer require your item to be transported, you can remove your listing from the site at any time.</p><p></p><p>To remove a listing, go to your ’My RATE A GENIE’ page and click “Cancel Job” on the listing you wish to remove. You will then be asked to confirm the removal of the item.</p><p></p><p>If you do not accept a quote within 30 days, your listing automatically expires, however if you need the item transported after the expiration date it can be relisted.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How big are our boxes?</h5>
                        <div class="accordion-content">
                            <p>Below is an approximation of the standard measurements used by our Transport Providers;</p><p></p><p>Small box:  </p><p>   Length:16" x Width:12.5" x Height:12.5"  approx. 40.64cm x 31.75cm x 31.75cm.</p><p>   Small boxes are great for books,fragile items and kitchen items.</p><p></p><p>Medium box: </p><p>   Length:18" x Width:18" x Height:16"  approx. 45.72cm x 45.72cm x 31.75cm.</p><p>   Medium boxes can carry about 20-25kg, great for carrying pots,pans and electronic appliances.</p><p></p><p>Large box:</p><p>   Length:18" x Width:18" x Height:24"  approx. 45.72cm x 45.72cm x 60.96cm.</p><p>   Large boxes can also carry about 20-25kg, great for carrying larger kitchen items, cushions and large lamps.</p>            </div>
                    </div>
                    <a id="myaccount"></a>
                    <h4 class="myaccount"><span class="faqs-icon">My Account</span></h4>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">I've lost/forgotten my password</h5>
                        <div class="accordion-content">
                            <p>If you can’t access your account, click the “Forgot Password?” link, located on the left hand side of the log in bar.</p><p></p><p>You'll then be sent an email with a new computer generated password. Once you have regained access to your account, you can change your password again by going to “Edit my profile” from your My RATE A GENIE page.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How do I change my email address?</h5>
                        <div class="accordion-content">
                            <p>This can be done easily from your My RATE A GENIE page.</p><p></p><p>Once on your My RATE A GENIE page, go to 'Edit My Profile'. You will then be taken to the profile and preferences page, where you can change your email address. Remember to save changes before leaving the page.</p>            </div>
                    </div>
                    <a id="listingitems"></a>
                    <h4 class="listingitems"><span class="faqs-icon">Listing Items</span></h4>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How to list an Item</h5>
                        <div class="accordion-content">
                            <p>Listing an item on RATE A GENIE is straight forward, fast and FREE.</p><p>Customers can list as many items as they wish and are under no obligation to accept any bids from any Transport Provider (TP).</p><p>To list an item, go to www.RATE A GENIE.com/send-goods or click the ‘Post A Job’ link on the homepage header bar.</p><p>The 4 step, 1 page listing process consists of:</p><p>•	Step 1: Select a category and sub-category of the item you wish to transport (e.g. General - Household Furniture). If listing an eBay item, simply tick the box ‘this is an eBay item’ and enter the eBay auction number below the sub-category and RATE A GENIE will do the rest.</p><p>•	Step 2: Enter item details and upload up to 10 images.</p><p>•	Step 3: Enter both the pickup and drop off details including dates you have in mind.</p><p>•	Step 4: If you would like to Upgrade your listing, enter a maximum price, enter a promo code or to receive SMS messages, please do so in Step 4</p><p>After the item is listed, all relevant Transport Providers who are interested in your listing will be alerted.</p><p>They are alerted because their preferences match your listing in one of the following ways:</p><p>1.	The nature your item being shipped (eg. a Yacht)</p><p>2.	Your location (e.g. Yarmouth)</p><p>3.	The destination of your item (e.g. Oban)</p><p>If you change your mind and decide not to have the listing shipped, please remove the listing as soon as possible, this then saves the TPs from making unnecessary bids. The remove link sits on your 'Dashboard' to the right of the ‘View Bids’ button.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Listing eBay Items</h5>
                        <div class="accordion-content">
                            <p>RATE A GENIE is fully compatible with the online retail company eBay and is a member of the eBay developer's programme.</p><p></p><p>A significant factor influencing people's decision to bid on eBay items can be the high delivery costs and long distances involved to relocate the item that they want. Simply enter the eBay Item Number in the field provided and RATE A GENIE will automatically populate the related fields in the list a delivery process.</p><p></p><p>Just follow these simple steps</p><p></p><p>After selecting a category and sub-category on Step 1, you will be asked if your item is an eBay item.</p><p>If yes, tick the box and an open field will appear asking for the eBay item number.</p><p>Enter the eBay number and your eBay ID in the fields and press IMPORT.</p><p>Due to the site being compatible with eBay, all fields on Step 2 and 3 are auto populated with the details from the delivery listed on eBay.</p><p></p><p>Customers can list either eBay items they're bidding on, interested in or items they've already won.</p><p></p><p>RATE A GENIE has created eBay specific icons to allow TPs to distinguish the status of imported eBay listings from regular RATE A GENIE listings. As with before, please be sure to remove your RATE A GENIE listing as soon as you drop out of the eBay bidding process.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Uploading pictures</h5>
                        <div class="accordion-content">
                            <p>RATE A GENIE advise customers to list deliveries with images. This will increase the amount of bids you'll receive and it also gives the TP a clearer idea of the delivery item.</p><p></p><p>Adding images is Step2 in the listing a delivery process. Images compatible with RATE A GENIE include JPEGs, GIFs and PNGs.</p><p></p><p>If you have any problems uploading an image please contact RATE A GENIE.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Shipment Details</h5>
                        <div class="accordion-content">
                            <p>RATE A GENIE customers are encouraged to enter as much detail as possible when posting a job in order to avoid any confusion over the listing and to ensure the cheapest possible quote.</p><p></p><p>We recommend customers to enter the dimensions and weight of the item being shipped. If these aren't available, please leave the fields blank. However, there is a chance of TPs overlooking your listing if you do not provide enough detail.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Using RATE A GENIE Book Now</h5>
                        <div class="accordion-content">
                            <p>RATE A GENIE now offers a ‘Book Now’ option, which is an alternative to the traditional reverse auction. This is a quick, hassle-free alternative to waiting for quotes and liaising back and forth with transporters about your delivery.</p><p></p><p>To obtain a ‘Book Now’ price, simply list an item the same way you normally would. Once your listing is posted, if it’s eligible for ‘Book Now’, within seconds your Book Now price will be emailed to you directly, and also appear on your ‘My RATE A GENIE’ page under the “View Quotes” area.</p><p></p><p>If you are happy with your price, simply click “Proceed &amp; Book”. You will be prompted to make a small deposit payment and we will then allocate a transport provider to complete your job. You will be emailed a job sheet with the driver’s contact details so you are able to communicate with them directly.</p><p></p><p>Please Note: Book Now is only available for the following 5 categories:</p><p>•	House Removals </p><p>•	Furniture Delivery</p><p>•	Pianos</p><p>•	Car Transportation</p><p>•	Motorbikes</p>            </div>
                    </div>
                    <a id="managelistings"></a>
                    <h4 class="managelistings"><span class="faqs-icon">Manage Listings</span></h4>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Editing Listings</h5>
                        <div class="accordion-content">
                            <p>You can edit a listing at any time during the live auction. If you edit a listing before any quotes have been made then the auction will remain exactly the same.</p><p></p><p>If you edit a listing after quotes have already been placed then all of the bidding TPs will be sent an email notifying them that the listing has been amended. All quotes prior to the amendments are no longer legally binding. However, all TPs will have the opportunity to resubmit their quotes if need be.</p><p></p><p>Although transport providers are notified about the edits you have made to your listing, we still recommend messaging them directly and informing them about what you have changed.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Remove / Withdraw a Listing</h5>
                        <div class="accordion-content">
                            <p>If you no longer require transportation for your listing, you can remove it at any time during the live auction. To remove a listing, go to your My RATE A GENIE page and locate your listing in question and click ‘Cancel Job’. You will then be asked to confirm its removal.</p><p></p><p>If you find that you no longer require transportation for your listing please be sure to remove it. This will ensure transport providers save time, as they won’t be bidding on listings that aren’t needed.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">What to look for in a Transport Provider</h5>
                        <div class="accordion-content">
                            <p>To help you choose a transport provider to complete your job, there are a number of things to look out for on their profiles. </p><p></p><p>Besides price, these include:</p><p> - Their feedback score – Based on the positive, negative and neutral feedback comments they’re received</p><p> - Number of recommendations – The number of customers who would recommend using this provider</p><p> - Insurance cover – All providers are now required to have insurance and state their level of cover on their profile</p><p> - Previous customer feedback – You can read detailed written feedback from previous customers</p><p> - Payment options – The methods of payment providers accept</p><p></p><p>These will all give you a clear indication of how reputable and reliable a provider is, ultimately helping you make your choice.</p>            </div>
                    </div>
                    <a id="bidacceptance"></a>
                    <h4 class="bidacceptance"><span class="faqs-icon">Bid Acceptance</span></h4>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Paying a deposit</h5>
                        <div class="accordion-content">
                            <p>To secure your chosen Transport Provider, you are required to pay a deposit to RATE A GENIE. This payment is taken after you have accepted a quote and can be paid either through our Secure Payment Gateway (which accept all major credit and debit cards) or through PayPal.</p><p></p><p>Having paid your initial deposit to RATE A GENIE, the remaining balance is then paid directly to your chosen transport provider.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Paying the remaining balance to the transport provider</h5>
                        <div class="accordion-content">
                            <p>Having paid the initial RATE A GENIE deposit, your remaining balance is then paid directly to the Transport Provider, generally upon completion of the job. This must be paid through the payment methods and terms the provider specifies on their profile, or the method you have agreed with the Transport Provider directly. </p><p></p><p>Please note: You do not pay the provider more than the amount of the quote you accept.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Contact transport providers</h5>
                        <div class="accordion-content">
                            <p>After paying your RATE A GENIE deposit and securing your chosen transport provider, we will then email you the contact details of your selected provider. You can also access these contact details via your My RATE A GENIE page, by clicking the pink 'Accepted/Feedback' tab. It is at this point that you should contact the provider to arrange pick-up and delivery times.</p><p></p><p>It's up to the TP to get in contact with you, however we advise that you contact the TP directly to ensure contact.</p><p></p><p>Having received confirmation and details of your preferred TP from RATE A GENIE, all further communication is between you and the TP alone.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Communication</h5>
                        <div class="accordion-content">
                            <p>To help your delivery request run smoothly we advise you to keep in constant communication with your chosen TP until your job is completed. All contact information for the TP you have chosen will be displayed on your My RATE A GENIE page and will also be sent to you via email.</p><p></p><p>Should you encounter any problems contacting your provider, contact our customer service department and we will contact the transport provider for you.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Leaving feedback</h5>
                        <div class="accordion-content">
                            <p>To create an honest and safe community, we ask all members to leave honest and reliable feedback after every transaction.</p><p></p><p>To leave feedback, please log onto your 'My RATE A GENIE' page. When on this page press the pink 'Accepted/Feedback' tab in order to view your completed deliveries. You will then see a pink button called 'Feedback'. Pressing this button you can leave Positive, Neutral or Negative feedback along with a comments.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Insurance</h5>
                        <div class="accordion-content">
                            <p>It is now a mandatory requirement for transport providers registered on RATE A GENIE to hold Goods in transit insurance. Some transporters may also have additional levels of insurance cover.</p><p></p><p>Transport providers are required to state their level of insurance cover on their profiles and this can be seen on the right hand side of the profile.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Use RATE A GENIE check in and checkout</h5>
                        <div class="accordion-content">
                            <p>To help both parties, RATE A GENIE provides pre-populated check-in and checkout documents to accompany all confirmation emails following an accepted job.</p><p></p><p>We encourage you to print out the check-in and checkout documents (found on your My RATE A GENIE page and within your confirmation email). These signed documents confirm the item(s) was picked up and the time the listing was delivered, as well as the condition of the item upon collection and delivery.</p><p></p><p>These documents aim to remove any potential discord between the customer and the TP. Signatures and diagrams are required if applicable.</p>            </div>
                    </div>
                    <a id="recommendations"></a>
                    <h4 class="recommendations"><span class="faqs-icon">Recommendations</span></h4>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">How does the recommendation system work?</h5>
                        <div class="accordion-content">
                            <p>As an introductory offer, when you introduce RATE A GENIE by recommending us to your friends, family or colleagues - they will receive a £5 starter credit for FREE.</p><p></p><p>If they then successfully use RATE A GENIE, by accepting a bid, we'll put £10 credit into your RATE A GENIE account. This credit can be used to; upgrade your existing listings, pay your RATE A GENIE deposit or can be cashed out at a 50% value through Paypal.</p><p></p><p>It’s very simple - the more people you recommend the more you can earn!</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Who can recommend RATE A GENIE?</h5>
                        <div class="accordion-content">
                            <p>Both registered customers and transport providers can recommend RATE A GENIE.</p><p></p><p>Please note; you have to be registered on RATE A GENIE in to order recommend our service and for you to receive credit.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">Different ways to recommend us</h5>
                        <div class="accordion-content">
                            <p>There are many ways in which our users can recommend RATE A GENIE to receive credit/cash. To learn more go to your dashboard and press the 'Recommend Now' button</p><p>1.	Users can enter email addresses manually into the space available on the recommendation page. Please note to leave commas between each email address. There is no limit to the number you can recommend.</p><p>2.	Through your email provider or Social Media Stream; These include AOL, Yahoo, Gmail, Live/Hotmail, LinkedIn, YouTube plus Twitter and Facebook. We will ask for your email provider password but rest assured, we will never store any passwords.</p><p>3.	Downloading our banners - We have a number of different formats of banners to use which can be placed on your websites or eBay listings for example. You will need to copy and paste the unique html code and place it where necessary. Every customer or user of yours who clicks a banner will receive £5 credit into their account and when they are successful with the transaction, you will receive £10 credit which can be cashed out at a rate of 50%.</p><p>4.	Every user has a unique promo code which is embedded within personal reference link on your dashboard known as a URL. This link/URL can be posted anywhere on the internet to get people to join up for you to start earning.</p>            </div>
                    </div>
                    <div class="accordionwrap">
                        <h5 class="accordion accordion-header">The finer details</h5>
                        <div class="accordion-content">
                            <p>After one of your "recommendees" accepts a bid, payments take 7 days or after positive feedback is left in order to clear in your RATE A GENIE balance. This is to avoid users accepting bids and for the delivery not to take place. If the delivery is not successful, no funds will be passed to the recommender. </p><p></p><p>We reserve the right to refuse or withdraw credit if we suspect any abuse / misuse of the recommendation facility.</p>            </div>
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
                                    <img alt="photo" src="img/faqs/team-member1.png">
                                </div>
                                <div class="member-name">
                                    Layla
                                </div>
                            </div>
                            <div class="team-member">
                                <div class="member-img">
                                    <img alt="photo" src="img/faqs/team-member2.png">
                                </div>
                                <div class="member-name">
                                    Kat
                                </div>
                            </div>
                            <div class="team-member">
                                <div class="member-img">
                                    <img alt="photo" src="img/faqs/team-member3.png">
                                </div>
                                <div class="member-name">
                                    Natasha
                                </div>
                            </div>
                            <div class="team-member">
                                <div class="member-img">
                                    <img alt="photo" src="img/faqs/team-member4.png">
                                </div>
                                <div class="member-name">
                                    Sandra
                                </div>
                            </div>
                            <div class="team-member">
                                <div class="member-img">
                                    <img alt="photo" src="img/faqs/team-member5.png">
                                </div>
                                <div class="member-name">
                                    Sabrina
                                </div>
                            </div>
                            <div class="team-member">
                                <div class="member-img">
                                    <img alt="photo" src="img/faqs/team-member6.png">
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

    <?php include 'inc/customerfooter.php'; ?>
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