<link id="estiloExcursiones" rel="stylesheet" type="text/css" href="lista-excursiones.css" />
<?php 
    $db = @mysqli_connect ('localhost','root','','traveltoplan');
    $sql ='SELECT * FROM excursiones LIMIT 10';
    $consulta = mysqli_query($db, $sql);
    $myArray = array();
    while($fila = $consulta->fetch_array(MYSQL_ASSOC)){
        $date = $fila['start'];
        $date = strtotime($date);
    if(date('H', $date)<12){
        $fila['className'] = 'morning';
    }
    else{
        $fila['className'] = 'evening';
    }
    $myArray[] = $fila;
    }
    @mysqli_close($db);
     echo '<div id="excursiones">';
    for ($i = 0; $i < sizeof($myArray) ; $i++){ 
                 echo   '<div class="excursion">';
                 echo       '<img src="img/excursiones/' . $myArray[$i]['ID_EX'] .'.png" alt="'.$myArray[$i]['nombre'].'">';
                 echo       '<div class="datosExcursion">';
                 echo           '<h3>' . $myArray[$i]['nombre'] . '</h3>';
                 echo           '<p>' . $myArray[$i]['descripcion'] . '</p>';
                 echo           '<h3>' . $myArray[$i]['duracion'] . '</h3>';
                 echo       '</div>';
                 echo       '<h2>' . $myArray[$i]['precio'] . '€</h2>';
                 echo     ' <h4>' . $myArray[$i]['plazas'] . ' plazas</h4>';
                 echo       '<div class="btn elegir">';
                 echo           '<p> Elegir </p>';
                 echo       '</div>';
                 echo  ' </div>';
    }
     echo '</div>';
 ?>

