<div id="visualization"></div>
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
 ?>

<link href="js/vis-timeline-graph2d.min.css" rel="stylesheet" type="text/css" />
<script src="js/vis.js"></script>
<script src="js/handlebars.min.js"></script>
<script id="item-template" type="text/x-handlebars-template">
    <table class="itinerario">
      <tr>
        <td colspan="2" class="description">{{nombre}}</td>
      </tr>
      <tr>
        <td><img src="img/excursiones/{{ID_EX}}.png" alt="{{nombre}}"></td>
        <td>{{precio}} €</td>
        </tr>
        <tr>
            <td colspan="2" > {{ciudad}} - {{pais}}</td>
        </tr>
    </table>
  </script>
 <script type="text/javascript">
    var source   = document.getElementById('item-template').innerHTML;
      var template = Handlebars.compile(document.getElementById('item-template').innerHTML);
      var container = document.getElementById('visualization');
      var items = new vis.DataSet(<?php echo(json_encode($myArray)); ?>);
      var options = {
        template: template
      };
      var timeline = new vis.Timeline(container, items, options);
    </script>