 <?php
  // See: http://blog.ircmaxell.com/2013/02/preventing-csrf-attacks.html
  // Start a session (which should use cookies over HTTP only).
  session_start();
  // Create a new CSRF token.
  if (! isset($_SESSION['csrf_token'])) {
      $_SESSION['csrf_token'] = base64_encode(openssl_random_pseudo_bytes(32));
  }
  // Check a POST is valid.
  if (isset($_POST['csrf_token']) && $_POST['csrf_token'] === $_SESSION['csrf_token']) {
      // POST data is valid.
  }
?> 

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="css/style.css"  media="screen,projection"/>


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <!-- Navbar -->
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="#!">Disposables</a></li>
        <li class="divider"></li>
        <li><a href="#!">Pest Control</a></li>
        <li><a href="#!">Social WIFI</a></li>
      </ul>

      <ul id="account-dropdown" class="dropdown-content">
        <li><a href="#!">Settings</a></li>
        <li><a href="#!">Logout</a></li>
      </ul>

      <ul id="dropdown1-mobile" class="dropdown-content">
        <li><a href="#!">Disposables</a></li>
        <li class="divider"></li>
        <li><a href="#!">Pest Control</a></li>
        <li><a href="#!">Social WIFI</a></li>
      </ul>

      <ul id="account-dropdown-mobile" class="dropdown-content">
        <li><a href="#!">Settings</a></li>
        <li><a href="#!">Logout</a></li>
      </ul>


      <nav class="blue">
        <div class="nav-wrapper">
          <a href="#!" class="brand-logo"><img src="img/logo-white.png" width="75" style="z-index: 10;"></a>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul class="hide-on-med-and-down" style="margin-left: 5em;">
            <li><a href="#!">Home</a></li>
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Services<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="#!">Contact</a></li>
          </ul>
          <ul class="right hide-on-med-and-down" style="margin-left: 5em;">
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="#!" data-activates="account-dropdown"><i class="material-icons left">store</i>Adurcup Account<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>

          <ul class="side-nav" id="mobile-demo">
            <li><a href="#!">Home</a></li>
            <li><a class="dropdown-button" href="#!" data-activates="dropdown1-mobile">Services<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="#!">Contact</a></li>
            <li class="divider"></li>
            <li><a class="dropdown-button" href="#!" data-activates="account-dropdown-mobile"><i class="material-icons left">store</i>Adurcup Account<!-- <i class="material-icons right">arrow_drop_down</i> --></a></li>
          </ul>
        </div>
      </nav>
    <!-- End of Navbar -->

    <div class="row"  style="height:15em;">
      <img id="main_img" class="responsive-img z-depth-1" src="img/Laundry.jpg" style="z-index: -1; position: absolute;">
  
      <img id="main_grad" class="responsive-img" src="img/Gradient.png" style="z-index: 3; position: absolute;">


    </div>
    <h4 class="" id="rname" align="center">Adurcup Restaurants</h4>
    <p class="" id="raddr" align="center" >2nd Floor, A-1, Sector 10, Noida, U.P.</p>

    <div align="center" style="height: 0;"><a class="waves-effect waves-light orange darken-1 btn-large modal-trigger" href="#modal1" id="pick-btn" style=""><i class="material-icons left">shopping_basket</i><strong>Schedule Pickup</strong></a>
    <h5 id="pick-btn-text"><a href="http://www.pickmylaundry.in"><img src="img/logo_pml.png" height="40" width="250"></a></h5>
    </div>
<!--     <div  style="color: #fff; text-align: left; height: 5em; background: -webkit-linear-gradient(#D8D6D6,#151414);">
    <div class="container-fluid" style="max-width: 1000px;" >
      <div class="col-md-5">
        <h4>Adurcup</h4>
        <p>A-1, Sector 10, Noida</p>
      </div>
    </div>
    </div>
 -->
   
   <div style="top: 2em; position: relative;">
    <div class="row center myorders">
      <div class="left col m4">
        <h4 align="left">My Orders</h4>
      </div>
      </div>
      <!-- <div class="col m6 center">
        <div class="input-field col m5 s5">
          <label for="startdate" class="">Select Start Date</label>
          <input id="startdate" type="date" class="datepicker">
        </div>
        <div class="input-field col m2 s2 center">to</div>
        <div class="input-field col m5 s5">
          <label for="enddate" class="">Select End Date</label>
          <input id="enddate" type="date" class="datepicker">
        </div></h5></div>
        <br>
        <div class="input-field col m2 offset-s3"  style="margin-top: 0; ">
          <a class="waves-effect waves-light btn" id="apply" style="float: right;"><i class="material-icons left">today</i>Apply</a>
        </div> -->

        <div id="loader" style="text-align: center; display: none;">
          <div class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only">
              <div class="circle-clipper left">
                <div class="circle"></div>
              </div>
              <div class="gap-patch">
                <div class="circle"></div>
              </div>
              <div class="circle-clipper right">
                <div class="circle"></div>
              </div>
            </div>
          </div>
        </div>

    <div class="" style="margin-top: 6em;">
      <table id="orderst" class="highlight centered " style="display: none;">
        <thead>
          <tr>
              <th data-field="sno">Order ID</th>
              <th data-field="date">Sales Order No</th>
              <th data-field="price">Order Date</th>
              <th data-field="priced">View Order Status</th>
              <th data-field="status">Total Bill</th>
          </tr>
        </thead>

        <tbody >
          <!-- <tr>
            <td>1</td>
            <td>02-02-16</td>
            <td>020216</td>
            <td>Rs.87</td>
            <td class="waves-effect status waves-teal green btn-flat"> Washing </td>
          </tr>  -->
        </tbody>
      </table>
    </div>
      </div>
    </div>

    </div>

    <!-- Modal Structure -->



    <!-- Modal Structure -->

    <div id="modal1" class="modal bottom-sheet">
      <div class="modal-content">
        <h4>Select a Service Type</h4>
        <p>
          <form action="#" id="order">
            <div class="row">
              <div class="col m4">
                <input type="hidden" name="csrf_token" value="" />
                <p>
                  <input type="radio" name="service" id="test5" value="Wash Fold" />
                  <label for="test5">Wash &amp; Fold</label>
                </p>
                <p>
                  <input type="radio" name="service" id="test6" value="Wash Iron" />
                  <label for="test6">Wash &amp; Iron</label>
                </p>
                <p>
                  <input type="radio" name="service" id="test7" value="Premium Laundry" />
                  <label for="test7">Premium Laundry</label>
                </p>
                <p>
                  <input type="radio" name="service" id="test8" value="Dry Cleaning" />
                  <label for="test8">Dry Cleaning</label>
                </p>
              </div>
              <div class="col m4">
                <h5>Select Time</h5>
                <div class="input-field col m5 s5">
                  <label for="pickupdate" class="">Select Pickup Date</label>
                  <input id="pickupdate" type="date" class="datepicker">
                </div>
                <div class="col m2 offset-m1 offset-s5">
                  <a class="btn-floating btn-large waves-effect waves-light " id="pick"><i class="material-icons">done</i></a>
                </div>
              </div>
              </div>
            </form>

        </p>
      </div>
      <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green disabled btn-flat">Close</a>
      </div>
    </div>


<!-- Modal Structure -->
    <div id="modal-complete" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4>Order Summary</h4>
        <p>
          <h5>Sales Order No: <span id="so-no"></span></h5>
          Pickup Date : <strong id="pdate"></strong> <span style="float: right;">Delivery Date: <strong id="ddate"></strong></span> <br><br>

          <div id="load-order" style="text-align: center; display: none;">
            <div class="preloader-wrapper big active">
              <div class="spinner-layer spinner-blue-only">
                <div class="circle-clipper left">
                  <div class="circle"></div>
                </div>
                <div class="gap-patch">
                  <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                  <div class="circle"></div>
                </div>
              </div>
            </div>
          </div>

          <table class="details-table highlight centered " style="display: none;">
            <thead>
              <tr>
                <th data-field="sno"></th>
                <th data-field="date">Description</th>
                <th data-field="price">Quantity</th>
                <th data-field="price">Rate</th>
                <th data-field="status">Amount</th>
              </tr>
            </thead>

            <tbody>
              <!-- <tr>
                <td>1</td>
                <td>Table Cloth Small</td>
                <td>5</td>
                <td>10</td>
                <td>50</td>
              </tr> -->
              <!-- <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><hr><strong></strong><hr></td>
              </tr> -->
            </tbody>
          </table> 
        </p>
      </div>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Done</a>
      </div>
    </div>

    


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

  <script>
    
   $(document).ready(function(){
     // Activate the side menu 
     $(".button-collapse").sideNav();

     $('.carousel').carousel();

     $('.carousel').carousel({full_width: true});

     $('.slider').slider({full_width: true});

     $('.modal-trigger').leanModal();     

     $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 1 // Creates a dropdown of 15 years to control year
      });

     // $( ".datepicker" ).datepicker();

     

    });
  </script>

    </body>
  </html>