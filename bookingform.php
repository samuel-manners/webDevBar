<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Bordon WMC</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="CSS/normaize.css" rel="stylesheet">

<!-- This stylesheet is for the formatting standard followed by all devices -->
<link href="CSS/stylesheet.css" rel="stylesheet">

<!-- This stylesheet imports the from google fonts "Strait" -->
<link href="http://fonts.googleapis.com/css?family=Strait" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- This connects the javascript made to this page -->
<script src="javascript/topnav.js"></script> 


</head>
<body>
        <div class = "wrapper">
            <header class = "page-header">
                <h1>Bordon Working Mens Club</h1>
                <h2>Members Bar</h2>

            </header>
            
            <div class="topnav" id="myTopnav">
                <a href="home.html" class="active">Home</a>
                <a href="about.html">About</a>
                <a href="events.html">Events</a>
                <a href="membership.html">Membership</a>
                <a href="hall.html">Hall Booking</a>
                <a href="contact.html">Contact us</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
            </div>
            
            <!-- Form for Hall Booking -->
            
            <div id="form">
                <form id = "contactForm">
                <!--Allocated area for contact details -->
                    <fieldset>
                        <legend>Your contact details</legend>
                        <label for="name">Name <em>(required)</em></label>
                            <!--Sets input for name -->
                            <input type="text" required placeholder="Forename+Surname" id="name" />
                            
                            <!--Input for E-Mail -->
                            <label for = "email">Email address <em>(required)</em></label>
                            <input type="email" id="email" required />
                            
                            <!--Input for contact number -->
                            <label for = "tel">Contact Number</label>
                            <input type="tel" id="tel"/>
                    </fieldset>
                    
                    <!-- Booking Information -->
                    
                    <fieldset>
                        <!--Booking Date-->
                        <label for="bookingdate">What date would you like to book for?:</label>
                        <input type="date" id="bookingdate" name="bookingdate">
                        
                        <!--Booking Start Time -->
                        <label for="appt">What time will your booking start?:</label>
                        <input type="time" id="appt" name="appt">
                        
                        <!--Booking End Time -->
                        <label for="appt">What time will your booking end?:</label>
                        <input type="time" id="appt" name="appt">
                        
                        <!-- Booking Type -->
                        <label for="bookingtype">What sort of event are you hosting:</label>

                        <select name="bookingtype" id="bookingtype">
                            <option value="Birthday">Birthday Party</option>
                            <option value="Christening">Christening</option>
                            <option value="Funeral">Funeral</option>
                            <option value="Other">Other</option>
                        </select>
                    </fieldset>
                        
                    <!--Allocated area for the message to be sent -->
                    <fieldset>
                            <legend>Any Special Requirements?</legend>
                            <label for="message">Message: </label>
                            <textarea id="message" required></textarea>
                        </fieldset>
                        
                        <input type="submit" value="Click to send" />
                    </form>
            
        </div>        
</body>
</html>
