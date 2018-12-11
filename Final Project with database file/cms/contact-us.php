<?php require_once('inc/top.php'); ?>
  </head>
  <body>
    <?php require_once('inc/header.php'); ?>
    
    <div class="jumbotron">
        <div class="container">
            <div id="details" class="animated fadeInLeft">
                <h1>Contact<span>Us</span></h1>
                <p>We are available 24*7. So Feel Free to Contact Us.</p>
            </div>
            
        </div>
        <img src="img/top-image.jpg" alt="Top Image">
    </div>
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                   
               <div class="row">
                   <div class="col-md-12">
                       <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyAh3DYd32rVfqO7g1UrBgudAik0EKHpqiY'></script><div style='overflow:hidden;height:400px;width:100%;'><div id='gmap_canvas' style='height:400px;width:100%px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='http://maps-generator.com/'>Generator GoogleMap</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=880c2ce1dae9f59c4ca0ceffc11409c659b5d95f'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(23.755512,90.37703549999992),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(23.755512,90.37703549999992)});infowindow = new google.maps.InfoWindow({content:'<strong>Sobhanbag Dhaka</strong><br>4/2, Sobhanbag, Mirpur Rd, Dhaka 1207<br>1213 Dhaka<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
                   </div>
                   
                   
                   <div class="col-md-12 contact-form">
                     <h2>Contact Form</h2><hr>
                      <form action="">
                          <div class="form-group">
                              <label for="full-name">Full Name*:</label>
                              <input type="text" id="full-name" class="form-control" placeholder="Full-Name">
                          </div>
                           <div class="form-group">
                              <label for="email">Email*:</label>
                              <input type="text" id="email" class="form-control" placeholder="Email">
                          </div>
                           <div class="form-group">
                              <label for="website">Website:</label>
                              <input type="text" id="website" class="form-control" placeholder="Website">
                          </div>
                           <div class="form-group">
                              <label for="message">Messages:</label>
                              <textarea id="message" cols="30" rows="10" class="form-control" placeholder="Your message Should be Here"></textarea>
                              
                          </div>
                          <input type="submit" name="submit" value="submit" class="btn btn-primary">
                      </form>
                       
                   </div>
                   
                   
               </div>
                
                            
                      
                </div>
                
                <div class="col-md-4">
                                   
             <?php require_once('inc/sidebar.php'); ?>
                                                                   
                </div>
            </div>
        </div>
    </section>
    <?php require_once('inc/footer.php'); ?>