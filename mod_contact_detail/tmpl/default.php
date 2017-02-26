<?php 
// No direct access
defined('_JEXEC') or die; ?>

<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng( <?= $params->get('x_coordinate') ?>, <?= $params->get('y_coordinate') ?>),
    zoom: 10
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB09gsj67J_ikWoT1eIRQ7-Xbkz3El88Hg&callback=myMap"></script>

  <div>
  	<div>
  		<?= $params->get('name_place') ?>
  	</div>
  	<div>
  		<?= $params->get('telegram_channel') ?>
  	</div>
  	<div>
  		<?= $params->get('phone_number') ?>
  	</div>
  	<div>
  		<?= $params->get('address') ?>
  	</div>
  </div>