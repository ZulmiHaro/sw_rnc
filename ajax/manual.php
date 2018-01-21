<div class="row"> 
  <div class="col-xs-12"> 
  </div>
</div>
<div class="row"> 
  <div class="col-xs-12 col-sm-3">
    <div class="box box-pricing">
      <div class="thumbnail">
        <img src="img/manual/usuario.png" alt="">    
        <div class="caption">
          <h5 class="text-center">USUARIO</h5>
          <p>Podrá visualizar el perfil del usuario, y modificar sus datos. Así mismo, cerrar sesión .</p>
          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myUsuario">Ver Detalles</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-3">
    <div class="box box-pricing">
      <div class="thumbnail">
        <img src="img/manual/lock.png" alt="">    
        <div class="caption">
          <h5 class="text-center">BLOQUEO DE PANTALLA</h5>
          <p>Podrá bloquear la pantalla para evitar acceso no permitido y resguardar su trabajo.</p>
          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myBloqueo">Ver Detalles</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-3">
    <div class="box box-pricing">
      <div class="thumbnail">
        <img src="img/manual/servicios.jpg" alt="">    
        <div class="caption">
          <h5 class="text-center">SERVICIOS</h5>
          <p>Podrá procesar los pagos que realiza el apoderado. Abarca pago en caja y pago en el banco.</p>
          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myServicios">Ver Detalles</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-3">
    <div class="box box-pricing">
      <div class="thumbnail">
        <img src="img/manual/finanzas.png" alt="">    
        <div class="caption">
          <h5 class="text-center">FINANZAS</h5>
          <p>Podrá procesar operaciones del área de Tesorería, como registro de cuentas.</p>
          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myFinanzas">Ver Detalles</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-3">
    <div class="box box-pricing">
      <div class="thumbnail">
        <img src="img/manual/inventario.png" alt="">    
        <div class="caption">
          <h5 class="text-center">ALMACÉN</h5>
          <p>Podrá llevar un control de Egresos/Ingresos del área de Almacén, y operaciones de esta.</p>
          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myInventarios">Ver Detalles</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-3">
    <div class="box box-pricing">
      <div class="thumbnail">
        <img src="img/manual/personal.png" alt="">    
        <div class="caption">
          <h5 class="text-center">RECURSOS HUMANOS</h5>
          <p>Podrá procesar las operaciones del área de Recursos Humanos, referentes a Tesorería</p>
          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myPersonal">Ver Detalles</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-3">
    <div class="box box-pricing">
      <div class="thumbnail">
        <img src="img/manual/reportes.png" alt="">    
        <div class="caption">
          <h5 class="text-center">REPORTES</h5>
          <p>Podrá obtener los reportes de los procesos del sistema y los requeridos.</p>
          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myReportes">Ver Detalles</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 col-sm-3">
    <div class="box box-pricing">
      <div class="thumbnail">
        <img src="img/manual/admin.png" alt="">    
        <div class="caption">
          <h5 class="text-center">GESTIÓN DE SISTEMA</h5>
          <p>Podrá realizar operaciones asignadas de gestión y administración del sistema.</p>
          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myAdministrador">Ver Detalles</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- VENTANAS MODALES -->
<div id="myUsuario" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">USUARIO</h4>
      </div>
      <div class="modal-body">
        <p>La vista de Usuario le permite visualizar los datos del perfil del usuario, y modificarlos en caso sea necesario.</p>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>NOMBRE</th>
              <th>FUNCIÓN</th>
              <th>UBICACIÓN</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Ver Perfil</td>
              <td>Se muestra una ventana donde se visualizan los datos del usuario que está con sesión avtivada .</td>
              <td>En la parte superior</td>
            </tr>
            <tr>
              <td>Editar Perfil</td>
              <td>Se habilita la opción de edición del perfil del usuario. Pudiendo, de esta manera, editarlos datos que se haian registrado.</td>
              <td>Dentro de la ventana de Perfil de Usuario</td>
            </tr>
            <tr>
              <td>Cerrar Sesión</td>
              <td>Sobre el calendario, deberá seleccionar el evento que desea eliminar y hacerlo a través del botón "Eliminar"</td>
              <td>En la parte inferior</td>
            </tr>
            <tr>
            </tr>
          </tbody>
        </table>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<div id="myBloqueo" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Bloqueo de Pantalla</h4>
      </div>
      <div class="modal-body">
        <p>La vista de Bloqueo de Pantalla, da la opción de bloquear la sesión sin necesidad de cerrar sesión y de esta manera
        evitar el acceso, a la cuenta, a personas no autorizadas.</p>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>NOMBRE</th>
              <th>FUNCIÓN</th>
              <th>UBICACIÓN</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Desbloquear</td>
              <td>Brinda la opción de detener el bloqueo y re ingresar a la cuenta.</td>
              <td>Se muestra un ícono de candado en la parte inferior media, de la pantalla principal.</td>
            </tr>
            <tr>
              <td>Re Ingresar</td>
              <td>Luego de desbloquear, aparece un formulario donde podrá acceder a su sesión de trabajo, ingresando la clave y su cuenta.</td>
              <td>Superio Medio</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<div id="myServicios" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Servicios</h4>
      </div>
      <div class="modal-body">
        <p>Este módulo cuenta con dos sub módulos: El pago de servicios en caja (Que se realizan en el colegio) y los que se realizan en el banco, para estos el sistema permite hacer la carga de data que el banco envía.</p>
        <table class="table table-hover">
          <thead class="thead-dark">
            <tr>
              <th>NOMBRE</th>
              <th>OPCIONES</th>
              <th>FUNCIÓN</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Pago en Caja</td>
              <td>Se realizan los pagos de los siguientes servicios, que se brindan:
                  <ol type="a">
                    <li>Derecho de certificado</li>
                    <li>Derecho de constancia</li>
                    <li>Duplicado de Agenda</li>
                    <li>Derecho de Inscripción por Nuevo</li>
                    <li>Derecho de Aplazado</li>
                    <li>Afianzamiento Vacaional</li>
                  </ol>
              </td>
              <td>El sistema nos mostrará dos grupos de campos que debemos llenar, los cuales son los datos del servicio y los datos del alumno.</td>
            </tr>
            <tr>
              <td>Pago en Banco</td>
              <td>se procesará el pago de un servicio realizado en el banco o agente del banco. .</td>
              <td>Se procesan los siguientes datos de los siguientes servicios, que se brindan:
                  <ol type="a">
                    <li>Código del alumno</li>
                    <li>Monto de la cuota</li>
                    <li>Mora, en caso exista</li>
                    <li>Fecha y hora de pago</li>
                    <li>Derecho de Aplazado</li>
                    <li>Nro. de Operación</li>
                    <li>Código Terminalista</li>
                    <li>Código de Agente</li>
                  </ol>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<div id="myFinanzas" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Finanzas</h4>
      </div>
      <div class="modal-body">
        <p>Es la sub sección “Cuentas”, esta opción permite ingresar los tipos de cuentas con las que se trabajan en el área de contabilidad para poder elaborar los informes financieros que se requieran.</p>
        Los pasos por seguir son los siguientes: 
        <li>Se registra el nivel de la cuenta</li>
        <li>Se registra el nombre de la cuenta</li>
        <li>Se registra el código de la cuenta</li>  
        <li> Si los datos son correctos se pulsa el botón “Confirmar” y se guardan los datos, caso contrario se pulsa el botón “Cancelar” y se cancela la operación. 
        e.  Una vez registrados los datos se muestran en la tabla inferior, donde además se presentan las opciones de editar el registro y/o eliminar el registro.</li>  

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<div id="myInventarios" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Almacén</h4>
      </div>
      <div class="modal-body">
        <h3>Registro de Productos</h3>
        Los pasos por seguir, para el registro, son los siguientes: 
        <li>Se registra el nombre del producto</li>  
        <li>Se registra el código del producto.</li>   
        <li>Se registra la cantidad y la medida (en que unidades se mide) del producto.</li>   
        <li>Se registra el costo del producto.</li>   
        <li>Se registra una descripción del producto. </li>  
        <li> Si los datos son correctos se pulsa el botón “Confirmar” y se guardan los datos, caso contrario se pulsa el botón “Cancelar” y se cancela la operación. </li> 
        <li>Una vez registrados los datos se muestran en la tabla inferior, donde además se presentan las opciones de editar el registro y/o eliminar el registro. </li>  

        <h3>Requerimientos</h3>
        Los pasos por seguir, para el registro, son los siguientes: 
        <li>Se selecciona el código del producto. </li>  
        <li>Se registra la cantidad del producto. </li>   
        <li>Se registra una descripción del motivo de requerimiento. </li>   
        <li>Si los datos son correctos se pulsa el botón “Confirmar” y se guardan los datos, caso contrario se pulsa el botón “Cancelar” y se cancela la operación. </li>   
        <li>Una vez registrados los datos se muestran en la tabla inferior, donde además se presentan las opciones de editar el registro y/o eliminar el registro.</li>  
        <li> Si los datos son correctos se pulsa el botón “Confirmar” y se guardan los datos, caso contrario se pulsa el botón “Cancelar” y se cancela la operación. </li>  
        <li>Se muestra la pantalla de edición, donde se pueden modificar los datos registrados y actualizar la información. </li>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<div id="myPersonal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Recursos Humanos</h4>
      </div>
      <div class="modal-body">
        <p>
          <h3>Datos del Personal</h3>
          <p>Es la sub sección “Datos del Personal”, esta opción permite registrar todos los datos del empleado del CEE Rafael Narváez Cadenillas tomando en cuenta si es trabajador contratado por el colegio o por la universidad. De esta manera se tiene un registro de todo el personal que labora en el colegio. </p>
          Los pasos por seguir, para el registro, son los siguientes: 
          <li>Se registran los nombres del empleado.</li>  
          <li>Se registran los apellidos del empleado.</li>  
          <li>Se registra una descripción del empleado.</li>  
          <li>Si los datos son correctos se pulsa el botón “Confirmar” y se guardan los datos, caso contrario se pulsa el botón “Cancelar” y se cancela la operación. </li> 
          <li>Una vez registrados los datos se muestran en la tabla inferior, donde además se presentan las opciones de editar el registro y/o eliminar el registro. </li> 
          <li>Se muestra la pantalla de edición, donde se pueden modificar los datos registrados y actualizar la información. </li> 
        </p>
        <p>
          <h3>Listar Personal</h3>
          <p>Es la sub sección “Listar Personal”, esta opción permite registrar todos los datos del empleado del CEE Rafael Narváez Cadenillas tomando en cuenta si es trabajador contratado por el colegio o por la universidad. De esta manera se tiene un registro de todo el personal que labora en el colegio.  </p>
          Los pasos por seguir son los siguientes: 
          <li>Se puede seleccionar “Editar” los registros del empleado.</li>  
          <li>Se puede seleccionar “Eliminar” los registros del empleado.</li>  
          <li>Se puede seleccionar “Ver Contrato” los registros del empleado.</li>  
        </p>
        <p>
          <h3>Generar Capacitación</h3>
          <p>Es la sub sección “Generar Capacitación”, esta opción permite registrar todos los datos del empleado del CEE Rafael Narváez Cadenillas tomando en cuenta si es trabajador contratado por el colegio o por la universidad. De esta manera se tiene un registro de todo el personal que labora en el colegio. </p>
          Los pasos por seguir, para el registro, son los siguientes: 
          <li>Se registran los nombres del empleado.</li>
          <li>Se registran los apellidos del empleado.</li> 
          <li>Se registra una descripción del empleado.</li> 
          <li>Si los datos son correctos se pulsa el botón “Confirmar” y se guardan los datos, caso contrario se pulsa el botón “Cancelar” y se cancela la operación.</li> 
          <li>Una vez registrados los datos se muestran en la tabla inferior, donde además se presentan las opciones de editar el registro y/o eliminar el registro.</li> 
          <li>Se muestra la pantalla de edición, donde se pueden modificar los datos registrados y actualizar la información.</li> 
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<div id="myReportes" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reportes</h4>
      </div>
      <div class="modal-body">
        <p>En esta sección tenemos los reportes de las operaciones que se realizan en el sistema.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<div id="myAdministrador" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Gestión de Sistema</h4>
      </div>
      <div class="modal-body">
        <p>En esta sección se tiene las opciones que el administrador tiene para realizar en el sistema, como:
          <h4>Ingresar Nuevo Usuario</h4>
          <h4>Gestionar Permisos a Usuarios</h4>
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>

  </div>
</div>
<script type="text/javascript">
// Run Select2 on element
function Select2Test(){
  $("#product-select").select2();
}
$(document).ready(function() {
  // Load script of Select2 and run this
  LoadSelect2Script(Select2Test);
  WinMove();
});
</script>
