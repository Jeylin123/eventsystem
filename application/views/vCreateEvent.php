<?php if ($this->session->userdata('userSession')) { ?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Daily Events Create </title>
        <link rel="stylesheet" href="<?php echo base_url('assets/josephAssets/css/styleCreateEvent.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/josephAssets/css/font-awesome.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/josephAssets/css/font-awesome.min.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/josephAssets/css/bootstrap.css')?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/josephAssets/css/bootstrap.min.css')?>">
        
        <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css"')?>"">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url('assets/josephAssets/js/jquery-3.2.1.js')?>"></script>
        <script src="<?php echo base_url('assets/josephAssets/js/bootstrap-datepicker.js')?>"></script>
        <script src="<?php echo base_url('assets/josephAssets/js/bootstrap-timepicker.js')?>"></script>
    </head>

    <body>
        <nav class="navbar navbar-inverse">
            <div class="container container-fluid">
                <div class="navbar-header">
                    <a href="#" class="navbar-brand"><img src="<?php echo base_url('assets/josephAssets/img/DailyEvents.png" class="eventLogo')?>"></a>
                </div>
                
                <div class="container">
                    <ul class="nav navbar-navx navbar-right inline-navbar">
                        <li><a href="<?php echo site_url();?>/cLogin/viewDashboard">Home</a></li>
                        <li class="Active"><a href="<?php echo site_url();?>/cLogin/viewEvents">Events</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    <form method="post" action="<?php echo site_url();?>/event/cEvent/createEvent ">
        <div class ="createYourEvent">
            <h1> CREATE YOUR EVENT! </h1> <br>
            <h2> Share it. Make it live. </h2>
        </div>
        
        <div class="eventHeader">
            <span> EVENT DETAILS </span>
        </div>
        
        <div class="form-container">
            <span>EVENT TITLE</span> <br>
            <input type="text" name="event_name" placeholder="Give a short distinct name."> <br><br>
            <span>LOCATION</span> <br>
            <input type="text" name="event_venue" placeholder="State where it is held."> <br><br>
            
            <span>STARTS</span> <br>
            <div class="row container">
                <div class="timeContainer">
                    <input type="text" id="date1" name="event_date_start" placeholder="Date Start">
                </div>
                <div class="timeContainer">
                    <input type="text" id="time1" name="event_time_start" placeholder="Event starts">
                </div>
            </div>
            
            <span>ENDS</span> <br>
            <div class="row container">
                <div class="timeContainer">
                    <input type="text" id="date2" name="event_date_end" placeholder="Date End">
                </div>
                <div class="timeContainer">
                    <input type="text" id="time2" name="event_time_end" placeholder="Time Ends">
                </div>
            </div>
            <span>CATEGORY </span> <br>
                    <div class="select-field">
                        <select name="event_category" required>
                            <option>Attraction</option>
                            <option>Appearance</option>
                            <option>Competition</option>
                            <option>Concert</option>
                            <option>Conference</option>
                            <option>Convention</option>
                            <option>Festival</option>
                            <option>Gala</option>
                            <option>Meeting</option>
                            <option>Party</option>
                            <option>Rally</option>
                            <option>Retreat</option>
                            <option>Screening</option>
                            <option>Seminar</option>
                            <option>Tour</option>
                            <option>Others</option>
                        </select>
                    </div>
             <br><br>
           <span>EVENT DESCRIPTION</span> <br>
            <input type="text" name="event_details" placeholder="Tell what your event is all about."> <br><br>
            

        </div>
        
        <br><br>
        <div class="eventHeader">
            <span> EVENT TICKETS </span>
        </div>
        <div class="form-container">
            <div class="row container">
                <div class="ticketContainer">
                    <span>TICKET TYPE </span> <br>
                    <div class="select-field">
                         <input type="text" required="" name="ticketType1" placeholder="Ticket type"> 
                       <!--  <select name="ticketType">
                            <option value="">Free</option>
                            <option value="">VIP</option>
                        </select> -->
                    </div>
                </div>
                <div class="ticketContainer">
                    <span>NUMBER OF TICKETS</span>
                    <div class="select-field">  
                        <input type="text" required="" name="no_tickets_total1" placeholder="Ticket count"> 
                    </div>
                </div>
                <div class="ticketContainer">
                    <span>PRICE OF TICKET</span>
                    <div class="select-field">  
                        <input type="text" required="" name="price_tickets_total1" placeholder="Ticket price"> 
                    </div>
                </div>
            </div>
        </div><br>
        <div class="form-container">
            <div class="row container">
                <div class="ticketContainer">
                    <span>TICKET TYPE </span> <br>
                    <div class="select-field">
                         <input type="text" name="ticketType2" placeholder="Ticket type"> 
                       <!--  <select name="ticketType">
                            <option value="">Free</option>
                            <option value="">VIP</option>
                        </select> -->
                    </div>
                </div>
                <div class="ticketContainer">
                    <span>NUMBER OF TICKETS</span>
                    <div class="select-field">  
                        <input type="text" name="no_tickets_total2" placeholder="Ticket count"> 
                    </div>
                </div>
                <div class="ticketContainer">
                    <span>PRICE OF TICKET</span>
                    <div class="select-field">  
                        <input type="text" name="price_tickets_total2" placeholder="Ticket price"> 
                    </div>
                </div>
            </div>
        </div><br>
        <div class="form-container">
            <div class="row container">
                <div class="ticketContainer">
                    <span>TICKET TYPE </span> <br>
                    <div class="select-field">
                         <input type="text" name="ticketType3" placeholder="Ticket type"> 
                       <!--  <select name="ticketType">
                            <option value="">Free</option>
                            <option value="">VIP</option>
                        </select> -->
                    </div>
                </div>
                <div class="ticketContainer">
                    <span>NUMBER OF TICKETS</span>
                    <div class="select-field">  
                        <input type="text" name="no_tickets_total3" placeholder="Ticket count"> 
                    </div>
                </div>
                <div class="ticketContainer">
                    <span>PRICE OF TICKET</span>
                    <div class="select-field">  
                        <input type="text" name="price_tickets_total3" placeholder="Ticket price"> 
                    </div>
                </div>
            </div>
        </div>

        </div>
        <br><br><br>
        
        <div class="horizontalLine"></div>
    
        <div class="submitContainer">
            <center><span> Your event is ready! Make it live now. </span></center>
            <center>
                <button class="btn btn-lg btn-warning" type="submit" value="Create Event">
                    Create Event
                </button>
            </center>
        </div>
    </form>    


        <div class="footer">
            <span> © 2017 Daily Events </span>
        </div>
    </body>
    
    
    
    <script type="text/javascript">
                $("#datetime").datepicker();
            </script>
            
            <script type="text/javascript">
                $("#date1").datepicker();
            </script>
            <script type="text/javascript">
                $("#date2").datepicker();
            </script>
            <script type="text/javascript">
                $('#time1').timepicker();
            </script>
            <script type="text/javascript">
                $('#time2').timepicker();
            </script>
    
</html>

<?php } else {
        redirect('cLogin/userLogin');
    }
?>
