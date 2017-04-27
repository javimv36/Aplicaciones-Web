<div id="main">
<div id="mainContainer">
    <div id="informacionCompra">

        <h2>Confirmación compra.</h2>
        <h4>Detalles de compra</h4>
        <ul>
            <li>Visita al museo de arte contemporáneo - 000€</li>
            <li>Viaje a la cala del Ángel - 000€</li>
            <li>Paseo en barco por la desembocadura del Calenhir - 000€</li>
            <li>Viaje a las ruinas de Erebor - 000€</li>
        </ul>
        <h4>Total: 256.00€</h4>
    </div>
    <div id="visualization"></div>

      <script type="text/javascript">
      var data = new vis.DataSet([
  {
    'start': new Date(2012,7,19),
    'content': 'default'
  },
  {
    'start': new Date(2012,7,23),
    'content': 'green',
    'className': 'green'
  },
  {
    'start': new Date(2012,7,29),
    'content': 'red',
    'className': 'red'
  },
  {
    'start': new Date(2012,7,27),
    'end': new Date(2012,8,1),
    'content': 'orange',
    'className': 'orange'
  },
  {
    'start': new Date(2012,8,2),
    'content': 'magenta',
    'className': 'magenta'
  }
]);

// specify options
var options = {
  editable: true
};

// create the timeline
var container = document.getElementById('visualization');
timeline = new vis.Timeline(container, data, options);
      </script>
    <div id="pagoCompra">
        <h4>Pago compra</h4>
        <form action="index.html" method="post">
            <input name="business" value="agencia@plantotravel.com">
            <input name="item_name" value="Excursiones de la agencia">
            <input name="first_name" value="John">
            <input name="last_name" value="Doe">
            <input name="address1" value="9 Elm Street">
            <input name="address2" value="Apt 5">
            <input name="city" value="Berwyn">
            <input name="state" value="PA">
            <input name="zip" value="19312">
            <input name="night_phone_a" value="610">
            <input name="night_phone_b" value="555">
            <input name="night_phone_c" value="1234">
            <input name="email" value="jdoe@zyzzyu.com">
            <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="imgPago">
        </form>
    </div>
</div>
</div>
