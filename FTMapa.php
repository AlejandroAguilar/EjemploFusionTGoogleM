<?php
session_start();
?>
<html>
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Fusion Tables Consulta + Google Maps</title>
    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var map;

function initialize() {
  var Tlaxcala = new google.maps.LatLng(19.3181, -98.2375);

  map = new google.maps.Map(document.getElementById('map-canvas'), {
    center: Tlaxcala,
    zoom: 14
  });

/*
  var capa = new google.maps.FusionTablesLayer({
    query: {
      select: 'Municipio',
      from: '1g8OxWNVxNo2B6fqNjjuWUoNVVS8ljTJ32qkf9oE',	  
	  //ID de mi Tabla
      where: 'Poblacion>25000'
    }
  });
  capa.setMap(map);
  */
  
  //var a = <%=Session("name")%>;
  //var estado = <?php echo $_SESSION['estado']; ?>;
  //alert('Estado : '+estado);
 // var municipio = <?php echo $_SESSION['municipio']; ?>;
 // var localidad = <?php echo $_SESSION['localidad']; ?>;
  var latitudA = <?php echo $_SESSION['latitudA']; ?>;
  var longitudA = <?php echo $_SESSION['longitudA']; ?>;
 // alert(' Mapa FT !  Latitud A:  '+latitudA+' Longitud A: '+longitudA);  
  
  var latitudB = <?php echo $_SESSION['latitudB']; ?>;
  var longitudB = <?php echo $_SESSION['longitudB']; ?>;
//  alert(' Mapa FT !  Latitud B:  '+latitudB+' Longitud B: '+longitudB); 
  
  var latitudC = <?php echo $_SESSION['latitudC']; ?>;
  var longitudC = <?php echo $_SESSION['longitudC']; ?>;
//  alert(' Mapa FT !  Latitud C:  '+latitudC+' Longitud C: '+longitudC); 
  
  var Coordenadas = [
    //new google.maps.LatLng(19.321633,-98.246963),
	//new google.maps.LatLng(19.312115,-98.246963),
    //new google.maps.LatLng(19.320944,-98.227908),
    //new google.maps.LatLng(19.326573,-98.239238),
	new google.maps.LatLng(latitudA,longitudA),
	new google.maps.LatLng(latitudB,longitudB),
	new google.maps.LatLng(latitudC,longitudC),
    new google.maps.LatLng(latitudA,longitudA)
  ];

  // Capas 
  //https://developers.google.com/maps/documentation/javascript/layers#FusionTablesSetup
   var poligono;
  poligono = new google.maps.Polygon({
    paths: Coordenadas,
    strokeColor: '#FF0000',
    strokeOpacity: 0.8,
    strokeWeight: 2,
  //  editable: true,
    fillColor: '#FF0000',
    fillOpacity: 0.35	
  });
	poligono.setMap(map);  
   
  var cuadrado = [
	new google.maps.LatLng(19.319324,-98.241341),
	new google.maps.LatLng(19.316408,-98.243186),
	new google.maps.LatLng(19.314262,-98.239195),
	new google.maps.LatLng(19.317542,-98.237178)
  ];
   ponCuadrado = new google.maps.Polygon({
    paths: cuadrado,
    strokeColor: '#FF0000',
    strokeOpacity: 0.8,
    strokeWeight: 2,
  //  editable: true,
    fillColor: '#FF0000',
    fillOpacity: 0.35	
  });
  //ponCuadrado.setMap(map);
  
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>
  
	<?php
		echo "<br>";
		echo "Estado :".$_SESSION['estado'];
		echo "<br>";
		echo "Municipio:".$_SESSION['municipio'];
		echo "<br>";
		echo "Localidad:".$_SESSION['localidad'];
		echo "<br><br>";
		echo "Latitud A:".$_SESSION['latitudA'];
		echo "<br>";
		echo "Longitud A:".$_SESSION['longitudA'];
	?>
  
    <div id="map-canvas"></div>
  </body>
</html>





















