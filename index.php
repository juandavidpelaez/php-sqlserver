
<!DOCTYPE html>
<?php
  include("conexion.php");
?>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>ANALÍTICA</title>
    <!-- Bootstrap, Jquery, multiselect plugin -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.css"/>
  </head>

  <body>
    <br /><br />
    <div class="container">
      <h2 align="center">CONSULTA DELITOS</h2>
      <br /><br />

      <form method="post" id="multiselect_form">
        <div class="form-group">
          <label>Tipo de delito</label><br />
          <select id="delito" name="delito[]" multiple class="form-control" >
          <option value="Abigeato">Abigeato</option>
    				<option value="Amenaza">Amenaza</option>
    				<option value="Delito sexual">Delito Sexual</option>
    				<option value="Homicidio">Homicidio</option>
    				<option value="Hurto automotor">Hurto automotor</option>
    				<option value="Hurto comercio">Hurto Comercio</option>
    				<option value="Hurto entidad financiera">Hurto entidad financiera</option>
    				<option value="Hurto motocicleta">Hurto motocicleta</option>
    				<option value="Hurto persona">Hurto persona</option>
    				<option value="Hurto residencia">Hurto residencia</option>
    				<option value="Lesiones personales">Lesiones personales</option>
    				<option value="Pirateria terrestre">Piratería terrestre</option>
    				<option value="Terrorismo">Terrorismo</option>
          </select>
        </div>


        <div class="form-group">
          <label>Departamento</label><br />
          <select id="departamento" name="departamento[]" multiple class="form-control" >
            <option value="91">Amazonas</option>
            <option value="05">Antioquia</option>
            <option value="81">Arauca</option>
            <option value="08">Atlántico</option>
            <option value="13">Bolívar</option>
            <option value="15">Boyacá</option>
            <option value="17">Caldas</option>
            <option value="18">Caquetá</option>
            <option value="85">Casanare</option>
            <option value="19">Cauca</option>
            <option value="20">Cesar</option>
            <option value="27">Chocó</option>
            <option value="23">Córdoba</option>
            <option value="25">Cundinamarca</option>
            <option value="94">Guainía</option>
            <option value="95">Guaviare</option>
            <option value="41">Huila</option>
            <option value="44">La Guajira</option>
            <option value="47">Magdalena</option>
            <option value="50">Meta</option>
            <option value="52">Nariño</option>
            <option value="54">Norte de Santander</option>
            <option value="86">Putumayo</option>
            <option value="63">Quindío</option>
            <option value="66">Risaralda</option>
            <option value="88">San Andrés y Providencia</option>
            <option value="68">Santander</option>
            <option value="70">Sucre</option>
            <option value="73">Tolima</option>
            <option value="76">Valle del Cauca</option>
            <option value="97">Vaupés</option>
            <option value="99">Vichada</option>
          </select>
        </div>

        <div class="form-group">
          <label>Año</label><br />
          <select id="año" name="año[]" multiple class="form-control" >
            <option value=2010>2010</option>
    				<option value=2011>2011</option>
    				<option value=2012>2012</option>
    				<option value=2013>2013</option>
    				<option value=2014>2014</option>
    				<option value=2015>2015</option>
    				<option value=2016>2016</option>
    				<option value=2017>2017</option>
    				<option value=2018>2018</option>
    				<option value=2019>2019</option>
          </select>
        </div>

        <div class="form-group">
          <label>Filas</label><br />
          <select id="año1" name="añoselect" placeholder="Selecciona Columnas" multiple></select>
        </div>

        <div class="form-group">
          <label>Valores</label><br />
          <select id="año2" name="añoselect" placeholder="Selecciona Columnas" multiple></select>
        </div>

        <div class="form-group">
          <label>Operación</label><br />
          <select id="año2" name="añoselect" placeholder="Selecciona Columnas">
            <option value=COUNT>Contar</option>
    				<option value=2011>2011</option>          
          </select>
        </div>
        
        <div class="form-group">
          <input type="submit" class="btn btn-info" name="buscar" value="Buscar" />
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-info" name="dinamica" value="Dinamica" />
        </div>
      </form>

      <br />
      </div class="container">
        <table class="table table-bordered table-responsive">
          <tr class="header">
            <td><center><b>Id</b></center></td>
            <td><center><b>Delito</b></center></td>
            <td><center><b>Año</b></center></td>
            <td><center><b>Mes</b></center></td>
            <td><center><b>Departamento</b></center></td>
            <td><center><b>Municipio</b></center></td>
            <td><center><b>Barrio</b></center></td>
            <td><center><b>Zona</b></center></td>
            <td><center><b>Código DANE</b></center></td>
          </tr>

          <?php
            if($conn_sis){
              //echo 'hay conexion';
              if(isset($_POST['delito'])){
                foreach($_POST['delito'] as $key=>$value){$delitos .= "'".$value."',";}
                $delitos = " delito in (".substr($delitos,0,-1).") ";
                //echo str_replace('"',"'",json_encode($_POST['delito']));
                
              }
              if(isset($_POST['departamento'])){
                foreach($_POST['departamento'] as $value){$departamentos .= "CodigoDANE like '".$value."%' or ";}
                $departamentos = substr($departamentos,0,-4);
              }
              if(isset($_POST['año'])){
                foreach($_POST['año'] as $value){$años .= "'".$value."',";}
                $años = " año in (".substr($años,0,-1).") ";
              }
              //$d='submit';
              if(isset($_POST['buscar'])){
                if(isset($_POST['año']) || isset($_POST['delito']) || isset($_POST['departamento'])){
                  array_push($arregloFiltro,$delitos,$años,$departamentos);
                  foreach($arregloFiltro as $key=>$value){
                    if($value !== ''){$filtro .=$value." and ";}
                  }
                  $filtro = " where ".substr($filtro,0,-5);
                }
                $query = "SELECT * from Delitos $filtro";
                //echo $query;
              }
            }//else{echo 'nada niño';}
            $exec = sqlsrv_query($conn_sis, $query);
            while($fila = sqlsrv_fetch_array($exec)){
              $id = $fila['cc'];
              $delito = $fila['Delito'];
              $año = $fila['Año'];
              $mes = $fila['Mes'];
              $departamento = $fila['Departamento'];
              $municipio = $fila['Municipio'];
              $barrio = $fila['Barrio'];
              $zona = $fila['Zona'];
              $codigo_dane = $fila['CodigoDANE'];
          ?>

          <tr align="center">
            <td><?php echo $id; ?></td>
            <td><?php echo $delito; ?></td>
            <td><?php echo $año; ?></td>
            <td><?php echo $mes; ?></td>
            <td><?php echo $departamento; ?></td>
            <td><?php echo $municipio; ?></td>
            <td><?php echo $barrio; ?></td>
            <td><?php echo $zona; ?></td>
            <td><?php echo $codigo_dane; ?></td>
          </tr>
          <?php } ?>
        </table>
      </div>


  </body>
</html>

<script>
  $(document).ready(function(){

    function arrayDiff(array1,array2) {
      var newItems = [];
      jQuery.grep(array2, function(i) {
        if (jQuery.inArray(i, array1) == -1){newItems.push(i);}
      });
      return newItems;
    }

    //$('#multiselect_form div select').multiselect({
    $('#año,#departamento,#delito').multiselect({
      nonSelectedText: 'Select value',
      enableFiltering: true,
      enableCaseInsensitiveFiltering: true,
      includeSelectAllOption: true,
      selectAllText: 'Seleccionar Todos',
      allSelectedText: 'Todos',
      buttonWidth:'400px'
    });
    var campos = [  
      {name: 'Delito', disable: false},
      {name: 'Departamento', disable: false},
      {name: 'Municipio', disable: false},
      {name: 'Barrio', disable: false},
      {name: 'Zona', disable: false},
      {name: 'CodigoDane', disable: false}
    ];
    var nCampos =['Delito','Departamento','Municipio','Barrio','Zona','CodigoDane'];

    //selectize
    var $sel=$('#año1, #año2').selectize({
      options:campos,
      valueField: 'name',
      labelField: 'name',
      searchField: ['name'],
      disabledField: 'disable',
      //plugins: ['drag_drop'],
      //persist: false
      
      });
      $("#año1 option").on("remove", function(){
        var val = $sel[0].selectize.getValue();
        $sel[1].selectize.updateOption(val,{name:val,disable:false});
        console.log(v);
      })
      // onChange: function() {
      //   var val = $sel[0].selectize.getValue();
      //   //$sel[1].selectize.updateOption(val[0],{name:val[0],disable:false})
      //   $sel[1].selectize.updateOption(val[0],{name:val[0],disable:true})
      //   $sel[1].selectize.clear();
      //   $sel[1].selectize.renderCache = {};
      //   $sel[1].selectize.refreshOptions();
      //   console.log(val)
      // }
 

    $("#año1").change(function() {
      var val = $sel[0].selectize.getValue();
      //$sel[1].selectize.clear();
      var diff = arrayDiff(val,nameOptions);

      $.each(diff,function(i,v){
        $sel[1].selectize.updateOption(v,{name:v,disable:false})
      });
      $.each(val,function(i,v){
        $sel[1].selectize.updateOption(v,{name:v,disable:true})
        
      });
      $sel[1].selectize.updateOption(val[0],{name:val[0],disable:true})
      //   $sel[1].selectize.updateOption(val[0],{name:val[0],disable:true})
      //   $sel[1].selectize.renderCache = {};
      //   $sel[1].selectize.refreshOptions();
      console.log(val)
      console.log(diff)
    })
    $("#año2").change(function() {
      var val = $sel[1].selectize.getValue();
      //$sel[0].selectize.clear();
      var diff = arrayDiff(val,nameOptions);

      $.each(diff,function(i,v){
        $sel[0].selectize.updateOption(v,{name:v,disable:false})
      });
      $.each(val,function(i,v){
        $sel[0].selectize.updateOption(v,{name:v,disable:true})
        
      });
      $sel[0].selectize.updateOption(val[1],{name:val[1],disable:true})
    })





    //$('#multiselect_form div select').multiselect('selectAll', false);

    // $('#multiselect_form').submit(function(event){
    //   event.preventDefault();
    // })

    /////////////// HIDE SELECT ELEMENTS ////////////////
    //$("#año2").children('option:gt(0)').show();
    // $('#año2').children('option:gt(0)').prop("disabled", false);
    // $("#año1").change(function() {
    //     $("#año2").children('option:selected').prop("disabled", false);
    //     $("#año2").children('option').show();
      
    //     //var hid = $(this).val();
    //     var hid = $sel[0].selectize.getValue();
    //     var h ="";
        
    //     $.each(hid,function(index,value){
    //     	h=h.concat("option[data-value=" + value + "],");
    //     })
    //     h = h.slice(0,-1);
    //     console.log(h);
    //     $("#layout_select").children(h).hide()
    //     $("#año2").children(h).prop('selected',false);
    //     $("#año2").children(h).prop('disabled',true);
    //     $("#año2").children(h).hide();
    //     $("#año2").children(h).prop("selectable",false);

        // $sel[1].selectize.clear();
        // $sel[1].selectize.renderCache = {};
        // $sel[1].selectize.refreshItems();
        

       // alert("w");
    //})



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