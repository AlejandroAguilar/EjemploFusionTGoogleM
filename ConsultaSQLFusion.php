<html>
 <head>
  <title>Request</title>
<style>
    h1,h3,h4,p { 
        text-align: center;
        color: Blue;
        font-family: Verdana; 
    }
    p { 
        color: Black;
    }

    html, body, #map { 
        height: 100%;
        height: 90%; 
        margin: 0px;
        padding: 0px 
    }
</style>
  

 </head>
 <body>

<script>
  // https://developers.google.com/fusiontables/docs/v1/sql-reference

function ConsultaFT(){

  var http_request = new XMLHttpRequest();
	var url = "https://www.googleapis.com/fusiontables/v1/query?sql=SELECT * FROM 1LHa9F9_2GnjZsDSFmTcAwsa5G-hsWqXPP4CByQs &key=AIzaSyDGGE24jTTOE5uaCCTaNmd_X_zr1T_c9X4"; // Esta URL debería devolver datos JSON
	//var url = "https://www.googleapis.com/fusiontables/v1/query?sql=SELECT * FROM 1LHa9F9_2GnjZsDSFmTcAwsa5G-hsWqXPP4CByQs where Municipio='Zacatelco' &key=AIzaSyDGGE24jTTOE5uaCCTaNmd_X_zr1T_c9X4"; // Esta URL debería devolver datos JSON

	// Descarga los datos JSON del servidor.
	http_request.onreadystatechange = handle_json;
	http_request.open("GET", url, true);
	http_request.send(null);

	function handle_json() {
	  	if (http_request.readyState == 4) {
		    if (http_request.status == 200) {
		      alert("Ejecuto la consulta con la URL !");
		      var json_data = http_request.responseText; 
		      var the_object = eval("(" + json_data + ")");
		      alert("Numero de campos:" + the_object.columns.length); 
		      alert("Campos:" +  the_object.columns);
		      alert("Primer campo:" +  the_object.columns[0]);
		      alert("Numero de tuplas:" +  the_object.rows.length);
		      alert("Registro 44:" +  the_object.rows[44-1]);
		      //<?php echo "(\"Hello World\")" ?>
		    } else {
		      alert("Ocurrio un problema con la URL. Algo paso en la consulta !");
		    }
	    	http_request = null;	    	
  		}

  		return the_object;
    }
}
  </script>

<br/>
 <h3>GET request to the Google Fusion Tables</h3>
 <p> <button onclick="ConsultaFT()">Consulta FT</button> 
<br/>
<br/>
  <?php

  echo 'Dentro !';
 // echo '<script> ConsultaFT(); </script>';

  ?>
  </p>
 </body>
</html>