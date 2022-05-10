<?php include('cabecera.inc.html') ?>
<title>Hostal Casa La Picota - Como llegar</title>
</head>
<body>
<?php include('navegacion.inc.html') ?>
<main>

<h1>Cómo llegar</h1>
<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>	  
<div id="map" class="map map-home" style="margin:12px 0 12px 0;height:400px;"></div>
<script>
	var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
		osmAttrib = '&copy; <a href="http://openstreetmap.org/copyright">OpenStreetMap</a> contributors',
		osm = L.tileLayer(osmUrl, {maxZoom: 18, attribution: osmAttrib});
	var map = L.map('map').setView([43.0320548, -5.2692152], 17).addLayer(osm);
	L.marker([43.0320548, -5.2692152])
		.addTo(map)
		.bindPopup('Hostal Casa La Picota')
		.openPopup();
</script>
<p><em>Este mapa ha sido obtenido de OpenStreetMap con Leaflet</em></p>
</main>
    <?php include('pie.inc.html') ?>