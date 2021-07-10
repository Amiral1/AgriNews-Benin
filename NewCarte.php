<!--    /*
      Get positions
    */-->
    <?php 

      $reponse = array();

      try 
      { 
       $bdd = new PDO("mysql:host=localhost;dbname=memoire", "root", ""); 
       $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      } 
      catch(Exception $e) 
      { 
       die("Une érreur a été trouvé : " . $e->getMessage()); 
      }  
      if (isset($_POST["s"]) ) 
      { 
       $result = $_POST['depart'];
     //  var_dump($result);
      /*$req = $bdd->prepare('SELECT localite.nom_Localite AS commune, localite.long_Localite AS lng, localite.lat_Localite AS lat, produit.nom_Produit AS produit, cultiver.quantite AS description FROM cultiver INNER JOIN produit ON cultiver.id_Produit = produit.id_Produit INNER JOIN  localite ON localite.id_Localite = cultiver.id_Localite WHERE produit.nom_Produit = :name');
       $req->bindParam(':name',$result);
       $req->execute();
$GLOBALS['reponse'] = $req->fetchAll();*/
       /*$sql = "SELECT localite.nom_Localite AS commune, localite.long_Localite AS lng, localite.lat_Localite AS lat, produit.nom_Produit AS produit, cultiver.quantite AS description FROM cultiver INNER JOIN produit ON cultiver.id_Produit = produit.id_Produit INNER JOIN  localite ON localite.id_Localite = cultiver.id_Localite WHERE produit.nom_Produit = '".$result."';";*/

       $sql = "SELECT cultiver.quantite,produit.nom_Produit,localite.nom_Localite,localite.long_Localite, localite.lat_Localite FROM cultiver,produit,localite WHERE cultiver.id_Produit = produit.id_Produit AND cultiver.id_Localite = localite.id_Localite AND produit.nom_Produit = '".$result."'";
       
       $req=$bdd->query($sql);
       //var_dump($req);
      $GLOBALS['reponse'] = $req->fetchAll();
      }
   /*   echo "<pre>";
      print_r($reponse);
      echo "</pre>";*/
      //var_dump( implode("<>", $reponse) );
    ?> 


<!DOCTYPE html>
<html>
  <head>
    <title>Simple Map</title>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 2px;
        padding: 2px;
      }
    </style>



  <script type="text/javascript">
    var reponse = new Array();
    var reponse_arr = new Array();
    var count = 0;
    <?php 

      foreach ($reponse as $key => $res) {
        echo " var arr = '".implode("<>", $res)."'; ";
        echo "var reponse_I = arr.split('<>');"; 
        echo "var reponse = Array.from(new Set(reponse_I));";
      
    ?>
     reponse_arr[count] = reponse;
     count++;
    <?php 
      }
    ?>
   // console.log(reponse_arr);
     //var reponse = <?php //echo $reponse; ?>*

    

      let map;
       //Permet l'affichage des points sur la carte
function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 9.25, lng: 2.1644 },
    zoom: 7.5,
  });
  
  /* new google.maps.Marker({
    position: { lat: 6.664, lng: 2.1597 },
    map,
    title: "ALLADA",
  });*/

   var i = 0;

  reponse_arr.forEach(function(item){

    //Affichage sur clique du marqueur
    const contentString =
    '<div id="content">' +
      '<div id="siteNotice">' +
      "</div>" +
      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>' +
      '<div id="bodyContent">' +
      "<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large " +
      "sandstone rock formation in the southern part of the " +
      "Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) " +
      "south west of the nearest large town, Alice Springs; 450&#160;km " +
      "(280&#160;mi) by road. Kata Tjuta and Uluru are the two major " +
      "features of the Uluru - Kata Tjuta National Park. Uluru is " +
      "sacred to the Pitjantjatjara and Yankunytjatjara, the " +
      "Aboriginal people of the area. It has many springs, waterholes, " +
      "rock caves and ancient paintings. Uluru is listed as a World " +
      "Heritage Site.</p>" +
      '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">' +
      "https://en.wikipedia.org/w/index.php?title=Uluru</a> " +
      "(last visited June 22, 2009).</p>" +
      "</div>" +
    "</div>";


    const infowindow = new google.maps.InfoWindow({
      content: "<p> Contenu </p>",
    });

    var marker = new Array();
    //console.log(items[1]);
    marker[i] =  new google.maps.Marker({
      position: { lat: parseInt(item[4]), lng: parseInt(item[3]) },
      map,
      title: 'Localité: '+ item[2] + '\n Produit: '+item[1]+'\n Quantité: '+item[0]+' tonnes',
    });


   // console.log(marker);

    marker[i].addListener("click", () => {
    infowindow.open({
      anchor: marker[i],
      map,
      shouldFocus: true,
    });
  });

    i++;

  });   




  
  

}
</script>
<head>
<body>

  <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdGg8AAVaWfAI4TmBAg-bdo8tHeEjeb6Y&callback=initMap&libraries=&v=weekly"
      async
    ></script>
  </body>
</html>