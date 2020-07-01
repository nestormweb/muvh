<?php get_header(); ?>
<style type="text/css">
<!--
.Estilo1 {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-weight: bold;
    font-size: 16px;
}
.Estilo2 {
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: 14px;
}
.Estilo3 {
    font-family: Geneva, Arial, Helvetica, sans-serif;
    font-size: 14px;
}
.Estilo4 {color: #FF0000}
.Estilo5 {
    font-size: 24px;
    font-weight: bold;
    font-family: Verdana, Arial, Helvetica, sans-serif;
}
.Estilo11 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: x-small; font-weight: bold; }
.Estilo12 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: xx-small; }
.Estilo14 {font-size: xx-small}
.Estilo15 {font-size: 18px}
.style1 {
    border-top-style: solid;
    border-top-width: 1px;
}
.style2 {
    border-width: 0px;
}
.style3 {
    border-style: solid;
    border-width: 1px;
}
.style4 {
    border-left-style: none;
    border-left-width: medium;
    border-right-style: none;
    border-right-width: medium;
    border-top-style: solid;
    border-top-width: 1px;
    border-bottom-style: none;
    border-bottom-width: medium;
}
.style6 {
    border-style: none;
    border-width: medium;
}
.Estilo16 {font-family: Verdana, Arial, Helvetica, sans-serif}
.Estilo18 {border-left-style: none; border-left-width: medium; border-right-style: none; border-right-width: medium; border-top-style: solid; border-top-width: 1px; border-bottom-style: none; border-bottom-width: medium; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: xx-small; }
.style7 {
    border-style: none;
    border-width: medium;
    font-family: Verdana, Arial, Helvetica, sans-serif;
    font-size: xx-small;
}
-->
</style>
<? 
include('/var/www/html/www.senavitat.gov.py/conexion/adoExpedientes.php');
$NroExp = 'null'; 
$mensaje_error = '';
if (isset($_POST['expediente'])) {
    $expediente = $_POST['expediente'];
    $anho = $_POST['anho'];
    $letra = $_POST['letra'];
    if($expediente==NULL){
        header('Location: https://www.senavitat.gov.py/consulta-de-expediente/?e=1');
        
    }   
    else if($anho==NULL){
        header('Location: https://www.senavitat.gov.py/consulta-de-expediente/?e=2');
        
    }   
    $NroExp = $expediente.$anho;
     
    $NroExpCad = $expediente.'-'.$anho;
}
if (isset($_GET['e'])) {
$error =$_GET['e'];
    if ($error==1){
        $mensaje_error="El numero de Expediente no fue enviado.";
    }   
    else if ($error==2){
        $mensaje_error="El numero del Expediente no fue enviado.";
    }
    else if ($error==3){
        $mensaje_error="El numero de Expediente es Invalido.";
    }
}
?>
<div class"container">
	<div class="row">
	           
	   <div class="col-sm-12">
	       <div class="noticias">
	       		<div class="publicacion clearfix">
	       			<?php include('plantilla_single.php'); ?> 
	       		
	       			
	       			
	       			<center>  
			       
			          <form action=" http://www.muvh.gov.py/?page_id=131" method="POST" >
			            <div align="left">
			              <table width="500px" >
			                
			                <caption>
		                    <span class="Estilo1">Consulta de Expedientes - SENAVITAT</span>
		                    </caption>
			                  <tr>
			                    <td colspan="3"><div align="center" class="Estilo2">Por favor Ingrese su Nro de Expediente </div></td>
			                </tr>
			                <tr>
			                  <td colspan="3"><div align="center"><a style="color: red;" href="../../../../pdf/Instructivo_ Expedientes.pdf" target="_blank">Descargar Instructivo de Uso del Sistema de Consulta</a> </div></td>
			                </tr>
			                <tr>
			                  <td width="19%" rowspan="2"><img src="https://www.senavitat.gov.py/images/expediente.png" class="left"   /></td>
		                      <td height="21" valign="bottom" ><div align="right" class="Estilo4">Ejemplo:</div></td>
		                      <td valign="bottom" ><div align="left"><span class="Estilo4"> 12456 - 12 A </span>Serie</div></td>
			                </tr>
			                <tr>
			                  <td width="24%" height="24" valign="top" ><div align="right"><span class="texto Estilo3">Nro. Expediente: </span></div></td>
		                      <td width="57%" valign="top" >
		                        <div style="float:left;">
			                        <div align="left">
			                         <input type="text" size="6" maxlength="10" id="expediente" name="expediente" class="form-control">
		                          </div>
			                    </div>  
		                            <div style="float:left; padding-left:5px; padding-right:5px;"> 
		                              <div align="left">- </div>
		                            </div>
		                             <div style="float:left;">
		                               <div align="left">
		                                 <input type="text" size="2" maxlength="2" id="anho" name="anho" class="form-control">
	                                   </div>
		                             </div>
		                             <div style="float:left; padding-left:5px;">
		                               <div align="left">
			                               <select name="letra"class="selectpicker">
			                                 <option value="A">A</option>
			                                 <option value="C">C</option>
		                                    </select>
			                               </div>
		                      </div></td>
			                </tr>
			                
			                <tr>
			                  <td >&nbsp;</td>
		                      <td >&nbsp;</td>
		                      <td ><p align="left"><input name="submit" type="submit" class="btn btn-primary" value="Consultar" class="botton"class="btn btn-primary" ></input></p></td>
			                </tr> 
		                  </table>
			              <?php if (isset($_GET['e'])) { ?>
		                </div>
			            <p>&nbsp;</p>
			                        <p class="error"><span class="Estilo4"><?php echo $mensaje_error; ?></span></p>
			                <?php   } ?>
			            
		              </form>
			<p>&nbsp;</p>
			
			
			<?php
			if ($NroExp=='null'){
			
			}else{
			$query = " SELECT SIG005.NroExp, SIG005.NroExpsol, RIGHT('00'+ cast(day(SIG005.NroExpFch) as varchar(2)),2) + '-' + RIGHT('00'+ cast(month(SIG005.NroExpFch) as varchar(2)),2) + '-' + cast(year(SIG005.NroExpFch) as varchar(4)) + ' ' + RIGHT('00'+ cast(DATEPART(HOUR,SIG005.NroExpFch) as varchar(2)),2) + ':' + RIGHT('00'+ cast(DATEPART(MINUTE,SIG005.NroExpFch) as varchar(2)),2) + ':' + RIGHT('00'+ cast(DATEPART(SECOND,SIG005.NroExpFch) as varchar(2)),2) , SIG0001.TexDes
			FROM         SIG005 LEFT OUTER JOIN
			                      SIG0001 ON SIG005.TexCod = SIG0001.TexCod
			WHERE     (SIG005.NroExp = '$NroExp' AND SIG005.NroExpS = '$letra') ";
			$query1 = " SELECT SIG006.NroExp,  RIGHT('00'+ cast(day(SIG006.DEFecDis) as varchar(2)),2) + '-' + RIGHT('00'+ cast(month(SIG006.DEFecDis) as varchar(2)),2) + '-' + cast(year(SIG006.DEFecDis) as varchar(4)),  SIG006.DEExpAcc, SIG006.DEExpEst,  SIG008.DepenDes AS destino, 
			                      SIG008_1.DepenDes AS origen
			FROM         SIG006 LEFT OUTER JOIN
			                      SIG008 ON SIG006.DEUnOrHa = SIG008.DepenCod LEFT OUTER JOIN
			                      SIG008 AS SIG008_1 ON SIG006.DEUnOrDe = SIG008_1.DepenCod
			WHERE     (SIG006.NroExp = '$NroExp' AND SIG006.NroExpS = '$letra') ORDER BY DEFecDis";
			//echo $query;
			$recordSet = &$conn->Execute($query);
			//echo $query1;
			if ($recordSet->RecordCount() > 0){
			?>
			            <table width="900PX" border="0" cellspacing="0" class="style2">
			              <tr>
			                <th colspan="4" scope="row" class="style1"><span class="Estilo5 Estilo15">Ficha del Expediente Nro: <?php echo $NroExpCad;?> </span></th>
			              </tr>
			              <tr>
			                <th colspan="4" scope="row"><p class="Estilo5 Estilo15">&nbsp;</p>                </th>
			              </tr>
			              <tr>
			                <th width="13%" scope="row" class="style3"><div align="center" class="Estilo11">Nro. Expediente </div></th>
			                <td width="40%" class="style3"><div align="center" class="Estilo11">Tipo de Expediente </div></td>
			                <td width="18%" class="style3"><div align="center" class="Estilo11">Fecha/Hora de Entrada </div></td>
			                <td width="29%" class="style3"><div align="center" class="Estilo11">Solicitante</div></td>
			              </tr>
			              
			              <tr>
			                <th scope="row" class="style4" style="height: 15px"><div align="center" class="Estilo12"><?php echo $NroExpCad;?></div></th>
			                <td class="style4" style="height: 15px"><div align="center" class="Estilo12"><?php echo $recordSet->fields[3];?> </div></td>
			                <td class="style4" style="height: 15px"><div align="center" class="Estilo12"><?php echo $recordSet->fields[2]; ?> </div></td>
			                <td class="style4" style="height: 15px"><div align="center" class="Estilo12"><?php echo $recordSet->fields[1];?> </div></td>
			              </tr>
			              <tr>
			                <th scope="row" class="style6">&nbsp;</th>
			                <td class="style6">&nbsp;</td>
			                <td class="style6">&nbsp;</td>
			                <td class="style6">&nbsp;</td>
			              </tr>
			            </table>
			
			            <table width="900px" border="0" cellspacing="0" class="style2">
			              <tr>
			                <th scope="row" class="style3"><div align="left" class="Estilo11">Fecha</div></th>
			                <td class="style3"><div align="left" class="Estilo11">Dependencia Origen </div></td>
			                <td class="style3"><div align="left" class="Estilo11">Dependencia Destino </div></td>
			                <td class="style3"><div align="left" class="Estilo11">Estado</div></td>
			                <td class="style3"><div align="left" class="Estilo11">Observacion</div></td>
			              </tr>
			              <tr>
			                <th height="2" class="style4" scope="row"></th>
			                <td class="style4"></td>
			                <td class="style4"></td>
			                <td class="style4"></td>
			                <td class="style4"></td>
			              </tr>
			              <?php 
			              $recordSet = &$conn->Execute($query1);    
			                
			                if (!$recordSet){
			
			                }else{
			
			                        while (!$recordSet->EOF) 
			                        { ?>
			                            <tr>
			                                <th scope="row" class="style6"><div align="left" class="Estilo12"><?php echo $recordSet->fields[1]; ?></div></th>
			                                <td class="style6"><div align="left" class="Estilo12"><?php echo $recordSet->fields[5];?> </div></td>
			                                <td class="style6"><div align="left" class="Estilo12"><?php echo $recordSet->fields[4];?> </div></td>
			                                <td class="style6"><div align="left" class="Estilo12"><?php 
			                                if ($recordSet->fields[3]=='P')
			                                {
			                                    echo 'Pendiente';
			                                }
			                                if ($recordSet->fields[3]=='D')
			                                {
			                                    echo 'Distribuido';
			                                }
			                                if ($recordSet->fields[3]=='A')
			                                {
			                                    echo 'Archivado';
			                                }
			                                if ($recordSet->fields[3]=='E')
			                                {
			                                    echo 'En lista de Espera';
			                                }
			                                if ($recordSet->fields[3]=='T')
			                                {
			                                    echo 'En tramite';
			                                }
			                                if ($recordSet->fields[3]=='R')
			                                {
			                                    echo 'Finiquitado c/ Resol';
			                                }
											if ($recordSet->fields[3]=='C')
			                                {
			                                    echo 'Prueba';
			                                }
			                                ?>
			                                    
			                                    
			                                    </div></td>
			                                <td class="style6"><div align="left" class="Estilo12"><?php echo $recordSet->fields[2];?></div></td>
			                            </tr>
			                        <?php
			                        
			                        $recordSet->MoveNext();
			
			                        }
			                }
			              
			              ?>
			
			              <tr>
			                <th class="style7" scope="row">&nbsp;</th>
			                <td class="style7">&nbsp;</td>
			                <td class="style7">&nbsp;</td>
			                <td class="style7">&nbsp;</td>
			                <td class="style7">&nbsp;</td>
			              </tr>
			              <tr>
			                <th class="style7" scope="row">&nbsp;</th>
			                <td class="style7">&nbsp;</td>
			                <td class="style7">&nbsp;</td>
			                <td class="style7">&nbsp;</td>
			                <td class="style7">&nbsp;</td>
			              </tr>
			            </table>
			          
			            
			             <p><a href="javascript:void(0)" onClick="javascript:window.open('https://www.senavitat.gov.py/consulta_expediente_imprimir.php?expediente=<?php echo $expediente; ?>&anho=<?php echo $anho; ?>');return false;" ><img src="../../../../images/imprimir.gif"  border="0" alt=""/></br>Imprimir</a></p>
			             
			               <p>&nbsp;</p>
			            <?php
			
			                } else{ 
			                    header('Location:https://www.senavitat.gov.py/consulta-de-expediente/?e=3');
			                    }
			              }
			              ?>
			
			             
			        </center>   
    
	       			
	       			
	       			
	       		</div>  
	    	</div>
	   </div> 
	</div>
<?php get_footer(); ?>       