<?php include('./header.php'); 

$base_url = "http://localhost/Helperland/";
?>


<link rel="stylesheet" href="./assets/css/upcomingservice.css">


<title>Service Provider</title>
</head>

<body>
    <header>
        <?php include('./navbar.php'); ?>
    </header>
    <!--add or edit address-->
    <!-- <div class="modal fade" id="addedit_address_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" id="mod" role="document">
            <div class="modal-content addmodal">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Edit Address</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="text-danger err"></label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="addresslable" for="streetname">Street name</label><br>
                                <input class="input" type="text" name="streetname" placeholder="Street name">
                            </div>
                            <div class="col-md-6">
                                <label class="addresslable" for="housenumber">House number</label><br>
                                <input class="input" type="text" name="housenumber" placeholder="House number">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="addresslable" for="postalcode">Postal code</label><br>
                                <input class="input" type="text" name="postal_code" placeholder="360005">
                            </div>
                            <div class="col-md-6">
                                <label class="addresslable" for="city">City</label><br>
                                <input class="input" type="text" name="city" placeholder="Bonn">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label class="addresslable" for="phonenumber">Phone number</label><br>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon1">+49</span>
                                    <input type="text" id="phonenumber" name="phonenumber" placeholder="9925757799">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button name="submit" class="btn btn-addresssave">save</button>
                </div>
            </div>
        </div>
    </div> -->
    <!--Service detail Modal-->
    <div class="modal fade" id="servicedetailmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" id="mod" role="document">
            <div class="modal-content SD">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Service Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="register-inputs  me-0 ms-0">
                            <div class="row">
                                <div><span class="service-datetime">07/10/2021&nbsp;8:00 - 11:00</span></div>
                            </div>
                            <div class="row">
                                <div><span class="service-detail">Duration: </span></div>
                                <div class="service-detail-text"><span> 3 Hrs</span></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div><span class="service-detail">Service Id: </span></div>
                                <div class="service-detail-text"><span>8488</span></div>
                            </div>
                            <div class="row">
                                <div><span class="service-detail">Extras: </span></div>
                                <div class="service-detail-text"><span> Inside Fridge</span></div>
                            </div>
                            <div class="row">
                                <div><span class="service-detail">Net Amount: </span></div>
                                <div class="service-detail-euro"><span> 112.5 €</span></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div><span class="service-detail">Service Address: </span></div>
                                <div class="service-detail-text"><span>Shantinagar Society, Ahmedabad-380051</span></div>
                            </div>
                            <div class="row">
                                <div><span class="service-detail">Billing Address: </span></div>
                                <div class="service-detail-text"><span>Shantinagar Society, Ahmedabad-380051</span></div>
                            </div>
                            <div class="row">
                                <div><span class="service-detail">Phone: </span></div>
                                <div class="service-detail-text"><span> 9925757799</span></div>
                            </div>
                            <div class="row">
                                <div><span class="service-detail">Email: </span></div>
                                <div class="service-detail-text"><span> aayushpncv@@gmail.com</span></div>
                            </div>
                            <hr>
                            <div class="row">
                                <div><span class="service-detail">Comments: </span></div>
                                <div class="service-detail-text"><span> service is Ok, Still need improvment.</span></div>
                            </div>
                            <div class="row">
                                <div><span><i class="fas fa-times-circle"></i> </span></div>
                                <div class="service-detail-text"><span> I don't have pets at home</span></div>
                            </div>
                            <button name="submit" class="btn btn-accept" data-toggle="modal" data-bs-target="#reschedule_modal"><i class="fas fa-solid fa-check"></i></i>&nbsp; Accept</button>
                        </div>
                        <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2755.546950873161!2d-79.47499194827225!3d46.31883438392698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4d29007493f8a831%3A0x7ec373b946bbf351!2sClark+Marketing+Communications!5e0!3m2!1sen!2sca!4v1549636300345" allowfullscreen="" loading="lazy" class="map"></iframe></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--reschedule modal-->
    <!-- <div class="modal fade" id="reschedule_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">Reschedule Service Request</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="register-inputs me-0 ms-0">
                        <label class="cancel-question "><b>Select New Date and Time</b></label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input class="input-element rescheduledate" type="date" id="formdate" name="formdate" data placeholder="From Date">                   
                            </div>
                            <div class="col-sm-6">
                                <select name="booktime" class="rescheduletime" id="booktime">
                                    <option value=0>00:00</option>
                                    <option value="3:00">3:00 PM</option>
                                    <option value="4:00">4:00 PM</option>
                                    <option value="5:00">5:00 PM</option>
                                    <option value="6:00">6:00 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-update">Update</button>
                </div>
            </div>
        </div>
    </div> -->

    <!--cancel-->
    <!-- <div class="modal fade" id="cancel_bookingrequest_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle"><b>Cancel Service Request</b></h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="register-inputs me-0 ms-0">
                        <label class="cancel-question temp"><b>Why you want to cancel the service request?</b></label>
                        <textarea class="why-cancel" name="whycancel"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button name="submit" class="btn btn-cancelnow">Cancel Now</button>
                </div>
            </div>
        </div>
    </div> -->

    <!--Rate SP-->
    <!-- <div class="modal fade" id="ratesp_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content ratesp">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLongTitle">
                        <div class="d-flex align-items-center justify-content-left">
                            <div>
                                <img class="round-border" src="./assets/Image/forma-1-copy-19.png" alt="cap">
                            </div>
                            <div class="ps-2">
                                <p class="sp-details">Lyum Watson</p>
                                <p class="sp-details">
                                    <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star2.png" alt="star">
                                    <span>3.67</span>
                                </p>
                            </div>
                        </div>
                    </h3>y
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="register-inputs me-0 ms-0">
                        <label class="rate-service-text">Rate your service provider</label>
                        <div class="row">
                            <div class="col-sm-5">
                                <label class="subtext">On time arrival</label>
                            </div>
                            <div class="col-sm-7">
                            <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star2.png" alt="star">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <label class="subtext">Friendly</label>
                            </div>
                            <div class="col-sm-7">
                            <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star2.png" alt="star">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-5">
                                <label class="subtext">Quality of service</label>
                            </div>
                            <div class="col-sm-7">
                            <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star1.png" alt="star">
                                    <img src="./assets/Image/star2.png" alt="star">
                            </div>
                        </div>
                        <div class="row">
                            <label class="subtext">Feedback on service provider</label>
                        </div>
                        <div class="row me-0 ms-0">
                            <textarea class="rate-feedback" name="feedback"></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button name="submit" class="btn btn-ratesp-submit">Submit</button>
                </div>
            </div>
        </div>
    </div> -->

     <!--section-2-1--> 
     <section class="section-2-1">
     <div class="container">
        <h2 class="text-center">
         Welcome, <strong> <?php echo $_SESSION['name']; ?> !</strong>
        </h2> 
     </div>
    </section>
     <!--section-2-2-->
    <section class="section-2-2">
        <div class="row dashboard justify-content-center" id="dashboard">
            <!-- left nav -->
            <div class="col-3">
                <div class="nav flex-column nav-pills leftsidebar" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-Dashboard-tab" data-toggle="pill" href="#v-pills-Dashboard" role="tab" aria-controls="v-pills-Dahboard" aria-selected="true">Dashboard</a>
                    <a class="nav-link active" id="v-pills-newservicerequest-tab" data-toggle="pill" href="#v-pills-newservicerequest" role="tab" aria-controls="v-pills-newservicerequest" aria-selected="true">New Service Requests</a>
                    <a class="nav-link" id="v-pills-upcomingservices-tab" data-toggle="pill" href="#v-pills-upcomingservices" role="tab" aria-controls="v-pills-upcomingservices" aria-selected="false">Upcoming Services</a>
                    <a class="nav-link" id="v-pills-serviceschedule-tab" data-toggle="pill" href="#v-pills-serviceschedule" role="tab" aria-controls="v-pills-serviceschedule" aria-selected="false">Service Schedule</a>
                    <a class="nav-link" id="v-pills-servicehistory-tab" data-toggle="pill" href="#v-pills-servicehistory" role="tab" aria-controls="v-pills-servicehistory" aria-selected="false">Service History</a>
                    <a class="nav-link" id="v-pills-myratings-tab" data-toggle="pill" href="#v-pills-myratings" role="tab" aria-controls="v-pills-myratings" aria-selected="false">My Ratings</a>
                    <a class="nav-link" id="v-pills-bolckcustomer-tab" data-toggle="pill" href="#v-pills-bolckcustomer" role="tab" aria-controls="v-pills-bolckcustomer" aria-selected="false">Block Customer</a>
                    <a class="nav-link" id="v-pills-invoices-tab" data-toggle="pill" href="#v-pills-invoices" role="tab" aria-controls="v-pills-invoices" aria-selected="true">Invoices</a>
                    <a class="nav-link" id="v-pills-notifications-tab" data-toggle="pill" href="#v-pills-notifications" role="tab" aria-controls="v-pills-notifications" aria-selected="false">Notifications</a>
                    
                </div>
            </div>
            <!-- ended nav -->
            <!-- content -->
            <div class="col-9" id="rightside">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-newservicerequest" role="tabpanel" aria-labelledby="v-pills-newservicerequest-tab">
                        <div class="container-fluid row justify-content-right">
                            <div class=" "><span class="serarea">Service Area</span></div>
                            <select name="serareadropdown" class="serareadropdown" id="serareadropdown">
                                    <option value=5 >5 Km</option>
                                    <option value="10">10 Km</option>
                                    <option value="15">15 Km</option>
                                    <option value="20">20 Km</option>
                                    <option value="25" selected>25 Km</option>
                                </select>
                        </div>
                        <div class="container-fluid row db" > 
                            <div class="col">
                                <table  class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Service Id </th>
                                            <th >Service Date </th>
                                            <th >Customer's Details</th>
                                            <th >Payment</th>
                                            <th >Time Conflict</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="dboard">
                                        <!-- 1st row start-->
                                        <tr class="t-row" data-toggle="modal" data-target="#servicedetailmodal">
                                            <td><p>2323</p></td>
                                            <td>
                                                <p class="date"><img src="./assets/Image/calendar2.png"> 07/10/2021</p>
                                                <p><img src="./assets/Image/layer-14.png"> 08:00 - 11:00</p>
                                            </td>
                                            <td> 
                                                <p>Gaurang Patel</p>
                                                <p><img src="./assets/Image/layer-719.png"> Koineegastree112,Delhartz</p>
                                            </td>
                                            <td>
                                                <p class="euro d-flex justify-content-center"> 56.25 €</p>
                                            </td>
                                            <td><p></p></td>
                                            <td ><button  class="btn accept-btn">Accept</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-upcomingservices" role="tabpanel" aria-labelledby="v-pills-upcomingservices-tab">
                        <div class="container-fluid row" id="rightsidebar"> 
                            <div class="col" >
                                <table id="content-table" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>ServiceId</th>
                                            <th>Service Date </th>
                                            <th id="sd">Customer Details</th>
                                            <th id="cd">Payment</th>
                                            <th >Distance</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="history">
                                        <!--1st row start-->
                                        <tr class="t-row" data-toggle="modal" data-target="#servicedetailmodal" >
                                            <td><p>2323</p></td>
                                            <td>
                                                <p class="date"><img src="./assets/Image/calendar2.png"> 09/04/2018</p>
                                                <p><img src="./assets/Image/layer-14.png"> 12:00 - 18:00</p>
                                            </td>
                                            <td> 
                                                <p>David Bough</p>
                                                <p><img src="./assets/Image/layer-719.png"> Musterstrabe 5,12345 Bonn</p>
                                            </td>
                                            <td>
                                                <p class="euro d-flex justify-content-center">&euro; 63</p>
                                            </td>
                                            <td><p>15 Km</p></td>
                                            <td ><button  class="cancel-btn">Cancel</button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-serviceschedule" role="tabpanel" aria-labelledby="v-pills-serviceschedule-tab">
                schedule tab
                    </div>
                    <div class="tab-pane fade" id="v-pills-servicehistory" role="tabpanel" aria-labelledby="v-pills-servicehistory-tab">   <table class="table servicetable table-hover" id="servicehisorytables">
    <div class="table-caption">
        Status
         <select id="pyst"><option value="1">All</option>
     <option value="2">Completed</option>
      <option value="3">Cancelled</option>
      </select>
        </div>
        <thead id="headings">
            <tr>
                <th></th>
                <th scope="col" title="Service ID">Service ID </th>
                <th scope="col" title="Service Date">Service date </th>
                <th scope="col" title="Customer Details">Customer details </th>
                <th scope="col" title="Status">Status</th>
            </tr>
        </thead>
        <tbody>
          
        </tbody>
    </table>

    
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLongTitle">Service Details
                    </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="float-right spdetails1 ">
                    </div>
                    <div class="custalldetails ">
                        <p class="datesandtimes"><span class="bookdate">25/11/2021</span> <span class="bookstarttime">08:00 </span> - <span class="bookendtime">11:00</span></p>
                        <p class="title-text totalrequiredtime"><b>Duration: </b> <span class="totalduration"> 3 </span> Hrs</p>
                        <hr class="reschedulehr">
                        <p class="title-text clientserviceid"><b>Service Id: </b> <span>12312</span></p>
                        <p class="title-text extraservices"><b>Extras: </b> <span>2312</span></p>
                        <div class="title-text paids"><b>Net Amount: </b>
                            <div class="payment bookpayment ml-2"> <span>12312</span> €</div>
                        </div>
                        <hr class="reschedulehr">

                        <p class="title-text customername"><b>Customer Name: </b> <span> Tatvasoft</span></p>
                        <p class="title-text serviceaddress"><b>Service Address: </b> <span>12312</span></p>
                        <p class="title-text phonenumber"><b>Distance: </b> <span>12.0 km</span></p>
                        <hr class="reschedulehr">

                        <p class="title-text commentsall"><b>Comments : </b> <span></span></p>

                        <div class="mt-2 mb-2 petornot">
                            <span><img src="./assets/Image/included.png"></span>I have pets at home
                            <span><img src="./assets/Image/not-included.png"></span> I have pets at home

                        </div>
                        <hr class="reschedulehr">

                        <div class="float-right spdetails2 ">
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>


                    <div class="tab-pane fade" id="v-pills-myratings" role="tabpanel" aria-labelledby="v-pills-myratings-tab">                <div class="toppart">
        <div class="float-left ml-3">Rating <select id="selectbtn">
                <option value="1" selected>All</option>
                <option value="2">Very Good</option>
                <option value="3">Good</option>
                <option value="4">Poor</option>
                <option value="5">Very Poor</option>

            </select></div>
        <div class="float-right mr-3" style="display: inline-flex;">Sorting
            <div class="dropdown">
                <button class="btn dropdown-toggle" style="    border: none;
                 background: none;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="./assets/Image/filter.png" style="margin-top: -12px;"> </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="rs"> <input type="radio" class="mr-2 ml-2" name="sorts" value="1">Customer name: Ascending</div>
                    <div class="rs"><input type="radio" class="mr-2  ml-2" name="sorts" value="2">Customer name: Descending</div>
                    <div class="rs"><input type="radio" class="mr-2  ml-2" name="sorts" value="3" checked>Service date: Latest</div>
                    <div class="rs"> <input type="radio" class="mr-2  ml-2" name="sorts" value="4">Service date: Oldest</div>
                    <div class="rs"><input type="radio" class="mr-2  ml-2" name="sorts" value="5">Rating: High to Low</div>
                    <div class="rs"> <input type="radio" class="mr-2  ml-2" name="sorts" value="6">Rating: Low to High</div>

                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid row" id="rightsidebar"> 
    <div class="col firstcol">
                    <div class="col">8211</div>
                    <div class="col"><b>Gaurang Patel</b></div>

                
                                   
                </div>
                <div class="col secondcol">
                    <div class="col date"><img src="./assets/image/calendar2.png" class="calender">09/04/2018</div>
                    <div class="col time"><img src="./assets/image/layer-712.png" class="clock">12:00 - 18:00</div>

                </div>
                <div class="col thirdcol">
                    <div><b>Ratings</b></div>
                    <div class="col">
                        <div class="row star">


                            <i class="fa fa-star s1"></i>
                            <i class="fa fa-star s2"></i>
                            <i class="fa fa-star s3"></i>
                            <i class="fa fa-star s4"></i>
                            <i class="fa fa-star s5"></i>

                            <span>Good</span>
                        </div>
                    </div>

                </div>
            </div>
            <hr class="ratinghr">
            <div class="cname "><b>Customer Comment:</b></div>
            <div class="cname">your service is very good i like your service.</div>
        </div>
    </div> 


                    <div class="tab-pane fade" id="v-pills-bolckcustomer" role="tabpanel" aria-labelledby="v-pills-bolckcustomer-tab">block tab</div>
                    <div class="tab-pane fade" id="v-pills-invoices" role="tabpanel" aria-labelledby="v-pills-invoices-tab">invoice tab</div>
                    <div class="tab-pane fade" id="v-pills-notifications" role="tabpanel" aria-labelledby="v-pills-notifications-tab">notification tab</div>
                    <div class="tab-pane fade" id="v-pills-notification" role="tabpanel" aria-labelledby="v-pills-notification-tab">
                        <div class="customer-table mysetting">
                            <div class="d-flex align-items-center justify-content-center">
                            <div class="customerdashboard">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link dashboard tabone active" id="nav-details-tab" data-toggle="tab" href="#nav-details" role="tab" aria-controls="nav-home" aria-selected="true" title="My Details">
                <img src="./assets/Image/my-account-details(1).png" class="navimg detailswhite">
                <img src="./assets/Image/my-account-details-green.png" class="navimg navimggreen detailsgreen">
                <span> My Details</span></a>

            <a class="nav-item nav-link tabthree dashboard" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false" title="Change Password">
                <img src="./assets/Image/my-account-password (1).png" class="navimg passwordwhite">
                <img src="./assets/Image/my-account-password-green.png" class="navimg navimggreen passwordgreen">
                <span>Change Password
                </span>
            </a>

        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-details" role="tabpanel" aria-labelledby="nav-details-tab">
            <form class="form-details" id="details">
                <p class="errors bg-danger text-white  px-3 py-3 text-center" style="display:none">
                </p>
                <h3 id="account_status" for="accountstatus">Account Status : <span class="activesp" style="display: none;">Active</span>
                    <span class="inactivesp text-danger" style="display: none;">InActive</span>
                    <img src="./assets/Image/avatar-hat.png" class="changedimg" style="float: right;">
                </h3>
                <h3 class="basictitle">Basic Details</h3>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="firstname">First name</label>
                        <input type="text" class="form-control firstName" id="firstname" value="FirstName">
                        <span class="first-name-msg"></span>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="lastname">Last name</label>
                        <input type="text" class="form-control lastname" id="lastname" value="LastName">
                        <span class="last-name-msg"></span>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="emailaddress">E-mail address</label>
                        <input type="email" class="form-control" id="emailaddress" value="aayushpncv@gmail.com" >
                    </div>
                </div>
                <div class="form-row" style="margin-bottom: 30px;">
                    <div class="col-md-4 col-12 ">
                        <label for="mobilenumber">Mobile number
                        </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+49</div>
                            </div>
                            <input type="tel" class="form-control" id="mobilenumber" value="9925757757" maxlength="10" size="10">
                        </div>
                        <span class="mobile-msg"></span>
                    </div>
                    <div class="form-group col-md-4 birthdates">
                        <label for="dateofbirth">Date of Birth
                        </label>

                        <select class="form-control  " id="dateofbirth">
                            <option value="Day">Day</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                            <option value="21">21</option>
                            <option value="22">22</option>
                            <option value="23">23</option>
                            <option value="24">24</option>
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>


                        </select>
                        <select class="form-control  " id="dateofmonth">
                            <option value="Month">Month</option>
                            <option value="01">January</option>
                            <option value="02">February</option>
                            <option value="03">March</option>
                            <option value="04">April</option>
                            <option value="05">May</option>
                            <option value="06">June</option>
                            <option value="07">July</option>
                            <option value="08">August</option>
                            <option value="09">September</option>
                            <option value="10">October</option>
                            <option value="11">November</option>
                            <option value="12">December</option>
                        </select>
                        <select class="form-control  " id="birthyear">
                            <option value="Year">Year</option>
                            <option value="2000">2000</option>
                            <option value="2001">2001</option>
                            <option value="2002">2002</option>
                            <option value="2003">2003</option>
                            <option value="2004">2004</option>
                            <option value="2005">2005</option>
                            <option value="2006">2006</option>
                            <option value="2007">2007</option>
                            <option value="2008">2008</option>
                            <option value="2009">2009</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>

                        </select>

                        <span class="date-error"></span>
                    </div>
                    <div class="form-group col-md-4 nationallity">
                        <label for="nationallity">Nationality
                        </label>
                        <select class="form-control " id="nationallity">

                            <option value="">Nationality</option>
                            <!---->
                            <option value="176625">German</option>
                            <option value="176685">Indian</option>
                            <option value="176626">Afghan</option>
                            <option value="176627">Egyptian</option>
                            <option value="176628">Albanian</option>
                            <option value="176629">Algerian</option>
                            <option value="176630">American</option>
                            <option value="176631">andorranisch</option>
                            <option value="176632">angolan</option>
                            <option value="176633">Antiguan</option>
                            <option value="176634">äquatorialguineisch</option>
                            <option value="176635">Argentinean</option>
                            <option value="176636">Armenian</option>
                            <option value="176637">Azerbaijani</option>
                            <option value="176638">Ethiopian</option>
                            <option value="176639">Australian</option>
                            <option value="176640">bahamaisch</option>
                            <option value="176641">bahrainisch</option>
                            <option value="176642">bangladesh</option>
                            <option value="176643">Belgian</option>
                            <option value="176644">belizean</option>
                            <option value="176645">Beninese</option>
                            <option value="176646">Dzongkha</option>
                            <option value="176647">Bolivian</option>
                            <option value="176648">Bosnian herzegowinisch</option>
                            <option value="176649">botsuanisch</option>
                            <option value="176650">Brazilian</option>
                            <option value="176651">British</option>
                            <option value="176652">bruneiisch</option>
                            <option value="176653">Bulgarian</option>
                            <option value="176654">burkinisch</option>
                            <option value="176655">burundisch</option>
                            <option value="176656">cabo-verdisch</option>
                            <option value="176657">Chilean</option>
                            <option value="176658">Chinese</option>
                            <option value="176659">Costa Rican</option>
                            <option value="176660">Danish</option>
                            <option value="176661">the north Mariana Islands</option>
                            <option value="176662">the Ver. Arab. Emirates</option>
                            <option value="176664">dominicanisch</option>
                            <option value="176665">Dominican</option>
                            <option value="176666">dschibutisch</option>
                            <option value="176667">Ecuadorian</option>
                            <option value="176668">Eritrean</option>
                            <option value="176669">Estonian</option>
                            <option value="176670">Fijian</option>
                            <option value="176671">Finnish</option>
                            <option value="176672">French</option>
                            <option value="176673">gabonese</option>
                            <option value="176674">gambian</option>
                            <option value="176675">Georgian</option>
                            <option value="176676">Ghanaian</option>
                            <option value="176677">grenadian</option>
                            <option value="176678">Greek</option>
                            <option value="176679">Guatemalan</option>
                            <option value="176680">Guinea-bissauisch</option>
                            <option value="176681">guineisch</option>
                            <option value="176682">guyanese</option>
                            <option value="176683">Haitian</option>
                            <option value="176684">Honduran</option>
                            <option value="176686">Indonesian</option>
                            <option value="176687">Iraqi</option>
                            <option value="176688">Iranian</option>
                            <option value="176689">Irish</option>
                            <option value="176690">Icelandic</option>
                            <option value="176691">Israeli</option>
                            <option value="176692">Italian</option>
                            <option value="176693">Ivorian</option>
                            <option value="176694">Jamaican</option>
                            <option value="176695">Japanese</option>
                            <option value="176696">Yemeni</option>
                            <option value="176697">Jordanian</option>
                            <option value="176698">Cambodian</option>
                            <option value="176699">cameroonian</option>
                            <option value="176700">Canadian</option>
                            <option value="176701">Kazakh</option>
                            <option value="176702">Qatari</option>
                            <option value="176703">Kenyan</option>
                            <option value="176704">Kyrgyz</option>
                            <option value="176705">Kiribati</option>
                            <option value="176706">Colombian</option>
                            <option value="176707">comorian</option>
                            <option value="176708">Congolese</option>
                            <option value="176709">Korean</option>
                            <option value="176710">Croatian</option>
                            <option value="176711">Cuban</option>
                            <option value="176712">kuwaitisch</option>
                            <option value="176713">Laotian</option>
                            <option value="176714">lesothisch</option>
                            <option value="176715">Latvian</option>
                            <option value="176716">Lebanese</option>
                            <option value="176717">Liberian</option>
                            <option value="176718">libyan</option>
                            <option value="176719">liechtensteinisch</option>
                            <option value="176720">Lithuanian</option>
                            <option value="176721">lucianisch</option>
                            <option value="176722">Luxembourgish</option>
                            <option value="176723">Madagascan</option>
                            <option value="176724">Macedonian / Macedonian</option>
                            <option value="176725">malawian</option>
                            <option value="176726">Malaysian</option>
                            <option value="176727">maldivian</option>
                            <option value="176728">malisch</option>
                            <option value="176729">Maltese</option>
                            <option value="176730">Moroccan</option>
                            <option value="176731">Marshallese</option>
                            <option value="176732">mauritanian</option>
                            <option value="176733">Mauritian</option>
                            <option value="176734">Mexican</option>
                            <option value="176735">micronesian</option>
                            <option value="176736">Moldavian</option>
                            <option value="176737">Monegasque</option>
                            <option value="176738">Mongolian</option>
                            <option value="176739">montenegrin</option>
                            <option value="176740">Mozambican</option>
                            <option value="176741">Myanmarian</option>
                            <option value="176742">Namibian</option>
                            <option value="176743">Nauruan</option>
                            <option value="176744">Nepalese</option>
                            <option value="176745">New Zealand</option>
                            <option value="176746">Nicaraguan</option>
                            <option value="176747">Dutch</option>
                            <option value="176748">Nigerian</option>
                            <option value="176749">nigrisch</option>
                            <option value="176750">Norwegian</option>
                            <option value="176751">Omani</option>
                            <option value="176752">Austrian</option>
                            <option value="176754">Pakistani</option>
                            <option value="176755">Palauan</option>
                            <option value="176756">Panamanian</option>
                            <option value="176757">Papua-neuguineisch</option>
                            <option value="176758">Paraguayan</option>
                            <option value="176759">Peruvian</option>
                            <option value="176760">Filipino</option>
                            <option value="176761">Polish</option>
                            <option value="176762">Portuguese</option>
                            <option value="176763">Rwandan</option>
                            <option value="176764">Romanian</option>
                            <option value="176765">Russian</option>
                            <option value="176766">salomonisch</option>
                            <option value="176767">Salvadorian</option>
                            <option value="176768">Zambian</option>
                            <option value="176769">Samoan</option>
                            <option value="176770">sanmarinesisch</option>
                            <option value="176771">santomeisch</option>
                            <option value="176772">Saudi-arabian</option>
                            <option value="176773">Swedish</option>
                            <option value="176774">Swiss</option>
                            <option value="176775">Senegalese</option>
                            <option value="176776">Serbian</option>
                            <option value="176777">seychellisch</option>
                            <option value="176778">sierraleonisch</option>
                            <option value="176779">Zimbabwean</option>
                            <option value="176780">Singaporean</option>
                            <option value="176781">Slovak</option>
                            <option value="176782">Slovenian</option>
                            <option value="176783">somali</option>
                            <option value="176784">Spanish</option>
                            <option value="176785">Sri Lankan</option>
                            <option value="176786">South African</option>
                            <option value="176787">Sudanese</option>
                            <option value="176788">südsudanesisch</option>
                            <option value="176789">surinamese</option>
                            <option value="176790">swasiländisch</option>
                            <option value="176791">Syrian</option>
                            <option value="176792">Tajik</option>
                            <option value="176793">Taiwanese</option>
                            <option value="176794">Tanzanian</option>
                            <option value="176795">Thai</option>
                            <option value="176796">togolese</option>
                            <option value="176797">tongan</option>
                            <option value="176798">Chadian</option>
                            <option value="176799">Czech</option>
                            <option value="176800">Tunisian</option>
                            <option value="176801">Turkish</option>
                            <option value="176802">Turkmen</option>
                            <option value="176803">Tuvaluan</option>
                            <option value="176804">Ugandan</option>
                            <option value="176805">Ukrainian</option>
                            <option value="176806">Hungarian</option>
                            <option value="176807">Uruguayan</option>
                            <option value="176808">Uzbek</option>
                            <option value="176809">vanuatuisch</option>
                            <option value="176810">Venezuelan</option>
                            <option value="176811">Vietnamese</option>
                            <option value="176812">vince table</option>
                            <option value="176813">from Niue</option>
                            <option value="176814">from St. Kitts and Nevis</option>
                            <option value="176815">from Timor-Leste</option>
                            <option value="176816">from Trinidad and Tobago</option>
                            <option value="176817">belarusian</option>
                            <option value="176818">zentralafrikanisch</option>
                            <option value="176819">zyprisch</option>

                        </select>
                        <span class="nation-error"></span>
                    </div>

                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="radiovalues">
                            <label>
                                <input name="Gender" type="radio" value="1">
                                Male
                            </label>
                        </div>

                        <div class="radiovalues">

                            <label>
                                <input name="Gender" type="radio" value="2">
                                Female
                            </label>
                        </div>
                        <div class="radiovalues">

                            <label>
                                <input name="Gender" type="radio" value="0">

                                Rather not to say
                            </label>
                        </div>
                    </div>
                    <span class="gender-error"></span>
                </div>

                <div class="form-row">

                    <div class="form-group">
                        <label>Select Avatar</label>
                        <div class="avtarimg form-group">
                            <div class="avtarimage">
                                <img src="./assets/Image/avatar-car.png" class="avatarimgs avatar-car">
                            </div>
                            <div class="avtarimage">

                                <img src="./assets/Image/avatar-female.png" class="avatarimgs avatar-female">
                            </div>
                            <div class="avtarimage">

                                <img src="./assets/Image/avatar-hat.png" class="avatarimgs active avatar-hat">
                            </div>
                            <div class="avtarimage">

                                <img src="./assets/Image/avatar-iron.png" class="avatarimgs avatar-iron">
                            </div>
                            <div class="avtarimage">

                                <img src="./assets/Image/avatar-male.png" class="avatarimgs avatar-male">
                            </div>
                            <div class="avtarimage">

                                <img src="./assets/Image/avatar-ship.png" class="avatarimgs avatar-ship">
                            </div>
                        </div>
                    </div>
                    <span class="avtar-err"></span>
                </div>
                <div class="myaddress pt-3">
                    <div class="form-group ">
                        <label for="language"><b>My Address</b></label>
                        <hr class="addresshr">

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label class="street">Street name</label>
                                <input type="text" class="form-control" id="street" placeholder="Street">
                                <span class="street-msg"></span>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="houseno">House number</label>
                                <input type="number" class="form-control" id="houseno" placeholder="House number">
                                <span class="house-msg"></span>

                                </div>
                            <div class="form-group pin col-md-4">
                                <label class="pincode">Postal code</label>
                                <input type="number" class="form-control" id="pincode" placeholder="Postal Code">
                                <span class="pincode-msg"></span>
                            </div>

                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label class="location">City</label>
                                <select id="location" class="located form-control">
                                </select>
                            </div>

                        </div>

                    </div>
                </div>
                <hr class="addresshr">
                <button type="submit" class="btn btn-details spdetails">Save</button>
            </form>

        </div>

        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <form id="passwordchange">
                <p class="passworderror text-white text-center bg-danger px-3 py-3" style="display:none;"></p>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="currentpassword">Current Password</label>
                        <input type="password" class="form-control" id="currentpassword" placeholder="Current Password">
                        <span class="current-password-msg"></span>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="newpassword">New Password</label>
                        <input type="password" class="form-control" id="newpassword" placeholder="New Password">
                        <span class="password-msg"></span>
                    </div>

                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="confirmpassword">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmpassword" placeholder="Confirm Password">
                        <span class="cpassword-msg"></span>
                    </div>

                </div>
                <button type="submit" class="btn btn-details changepassword">Save</button>

            </form>

        </div>

    </div>
</div>


      </div>
    </section>
    
    <?php include('./footer.php'); ?>
    <script src="./assets/js/upcomingservice.js"></script>
    
    
</body>
</html>