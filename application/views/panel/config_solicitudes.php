
<?php 
$this->load->view("panel/inc/cabecera.php");
?>
<script type="text/javascript"
	src="<?php echo base_url(); ?>application/views/panel/js/solicitud.js"></script>



<div class="container">
<br>
<ul class="collection  with-header" style="">

	
		<?php 
			echo '<li class="collection-header"><h5>Listado de Documentos ( ' . $codigo . ' )</h5></li>';
			foreach ($detalles as $k => $v) {
				$fila = "";
				if($v->archivo != "") {
					$fila = '<li class="collection-item truncate" style="padding-bottom: 20px">
						' . $v->doc . ' <div class="chip right">
						 <a href="' . $ruta . $v->archivo . '" target="top">
					   ' . $v->archivo . '</a>
						  </div>  y vence el: 2016-07-04
							<a href="javascript:editarContenido(' . $v->oid . ')" class="secondary-content"><i class="material-icons green-text 
							text-darken-4">edit</i></a>
						  </li>';
				}
				echo $fila;
			}
		?>
		<li class="collection-item" >
			<form class="col s12" 
		      action="index.php/BienestarSocial/"  method="post">
		      <input type="hidden" name="codigo" value=""> </input>
		      <div class="row">
		        <div class="row">
		        <div class="input-field col s12">
		          <i class="material-icons prefix">mode_edit</i>
		          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
		          <label for="icon_prefix2">Escriba las observaciones que se enviaran al afiliado</label>
		        </div>
		      </div>
		      
		      <div class="row">
		      	<div class="col s12">        
		    		<button class="btn-large waves-effect waves-light" style="background-color:#00345A" type="submit">Aceptar
		    			<i class="material-icons right">contact_mail</i>
		    		</button>
		      	</div>
		      </div>       
    		</form>

		</li>

</ul>

  <!-- Modal Structure -->
  <div id="selecciones" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Seleccionar y ubicar contenido</h4>
      <p id="contenidoDoc">
      	
 <div class="row">
      <div class="input-field col s12">
          <input  disabled  id="fechaNacimiento" class="validate" type="text" value="<?php echo $Militar->Persona->fechaNacimiento?>">
          <label for="disabled">Fecha de Nacimiento</label>
        </div>
        
        <div class="input-field col s12">
          <select  disabled >
            <option value=""></option>
            
            
          </select>
          <label>Genero</label>
        </div>
     </div>


      </p>

    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Aceptar</a>
    </div>
  </div>

<?php 
$this->load->view("panel/inc/pie.php");
?>