
<!DOCTYPE html>
<?php
  include("conexion.php");
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>test Select Dropdown with Checkboxes using Jquery in PHP</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
  </head>
  <body>
    <br /><br />
    <div class="container">
      <h2 align="center">Bootstrap Multi Select Dropdown with Checkboxes using Jquery in PHP</a></h2>
      <br /><br />

      <form method="post" id="multiselect_form">
        <div class="form-group">
          <label>Select year</label><br />
          <select id="año" name="año[]" multiple class="form-control" >
            <option value="2011">2011</option>
            <option value="2012">2012</option>
            <option value="2013">2013</option>
            <option value="2014">2014</option>
            <option value="2015">2015</option>
            <option value="2016">2016</option>
            <option value="2017">2017</option>
            <option value="2018">2018</option>
          </select>
        </div>

        <div class="form-group">
          <label>Select country</label><br />
          <select id="pais" name="pais[]" multiple class="form-control" >
            <option value="Germany">Germany</option>
            <option value="Nepal">Nepal</option>
            <option value="Greece">Greece</option>
            <option value="Taiwan">Taiwan</option>
            <option value="Togo">Togo</option>
            <option value="Turkey">Turkey</option>
            <option value="Belarus">Belarus</option>
          </select>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-info" name="submit" value="Submit" />
        </div>
      </form>

      <br />
      </div class="container">
        <table class="table table-bordered table-responsive">
          <tr class="header">
            <td><center><b>Año</b></center></td>
            <td><center><b>Pais</b></center></td>
            <td><center><b>Nombre</b></center></td>
          </tr>

          <?php
            if($conn_sis){
              if(isset($_POST['pais']) && isset($_POST['año'])){
                foreach($_POST['pais'] as $value){
                  $paises .= "'".$value."'" . ', ';
                }
                foreach($_POST['año'] as $value){
                  $años .= $value . ', ';
                }
                $años = substr($años,0,-2);
                $paises = substr($paises,0,-2);
                $query = "SELECT * from sample1 where pais in ($paises) and año in ($años)";
              }else {
                $query = "SELECT * from sample1";
              }   
            }
            $d=isset($_POST['pais']);
            echo $d;
            //echo $consulta;
            $exec = sqlsrv_query($conn_sis, $query);
            while($fila = sqlsrv_fetch_array($exec)){
              $año = $fila['Año'];
              $pais = $fila['Pais'];
              $nombre = $fila['Nombre'];
          ?>

          <tr align="center">
            <td><?php echo $año; ?></td>
            <td><?php echo $pais; ?></td>
            <td><?php echo $nombre; ?></td>
          </tr>
          <?php } ?>
        </table>
      </div>


  </body>
</html>

<script>
  $(document).ready(function(){
    $('#multiselect_form div select').multiselect({
      nonSelectedText: 'Select value',
      enableFiltering: true,
      enableCaseInsensitiveFiltering: true,
      includeSelectAllOption: true,
      buttonWidth:'400px'
    });

    // $('#multiselect_form div select').on('submit', function(event){
    //   event.preventDefault();

    //   var form_data1= $('#año').val();
    //   var año_form_data = $('#año').serialize();
    //   var pais_form_data = $('#pais').serialize();

      //alert(form_data2);
      //console.log(form_data1);

        // $.ajax({
        //   url:"conexion.php",
        //   method:"POST",
        //   año:año_form_data,
        //   pais:pais_form_data,
        //   success:function(pais)
        //   {
        //     $('option:selected').each(function(){
        //       $(this).prop('selected', true);
        //     });
        //     $('#multiselect_form div select').multiselect('refresh');
        //     alert(pais);
        //   }
        // });
    // });


});
</script>