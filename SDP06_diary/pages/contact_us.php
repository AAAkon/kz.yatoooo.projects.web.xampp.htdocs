<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>

<div class="container-fluid" style="margin-top: 70px;">
<div class="col-md-4">
  <?php   
      if(isset($_GET['message'])){
          ?>

              <h3 style="color:#99ff99;">Message send successfully</h3>

          <?php
      }
  ?>
  <h1>Send to us message:</h1>
	<div class="row">
		<form role="form" id="contact-form" class="contact-form" method="post" action="?action=contact_us">
      <div class="row">
  		<div class="col-md-6">
    		<div class="form-group">
              <input type="text" class="form-control" name="first_name" autocomplete="off" id="first_name" placeholder="First name" required>
    		</div>
    	</div>
      <div class="col-md-6">
        <div class="form-group">
              <input type="text" class="form-control" name="last_name" autocomplete="off" id="last_name" placeholder="Last name" required>
        </div>
      </div>
    	</div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
                <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail" required>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
                <input type="tel" class="form-control" name="phone" autocomplete="off" id="phone" placeholder="Phone number" required>
          </div>
        </div>
      </div>
    	<div class="row">
    		<div class="col-md-12">
    		<div class="form-group">
              <textarea class="form-control textarea" rows="3" name="message" id="Message" placeholder="Message" required></textarea>
    		</div>
    	</div>
      </div>
      <div class="row">
      <div class="col-md-12">
    <button type="submit" class="btn main-btn pull-right">Send a message</button>
    </div>
    </div>
  </form>
	</div>
</div>
<div class="col-md-6 col-md-offset-2">
  <table>
    
  </table>
  <div id="map"></div>
</div>
</div>


<style>
  #map {
    width: 100%;
    height: 400px;
    background-color: grey;
  }
</style>

<script>
  function initMap() {//43.238949, 76.889709
    var uluru = {lat: 43.238949, lng: 76.889709};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 14,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBlILHm14E1KbZAvzP20wehTGcvG-FM4s0&callback=initMap">
</script>