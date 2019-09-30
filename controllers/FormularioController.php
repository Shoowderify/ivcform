
<?php
        require_once 'models/prueba.php';

class formularioController{
    
    public function index(){
        require_once 'views/formularios/prueba.php';
    }
    public function add(){
        if(isset($_SESSION['identity'])){
            $total= $_POST['horometrof'] - $_POST['horometroi'];
            $usuario_id = $_SESSION['identity']->id;
            $turno = isset($_POST['turno']) ? $_POST['turno'] : false;
            $petroleo = isset($_POST['petroleo']) ? $_POST['petroleo'] : false;
            $equipo = isset($_POST['equipo']) ? $_POST['equipo'] : false;
            $horometroi = isset($_POST['horometroi']) ? $_POST['horometroi'] : false;
            $horometrof = isset($_POST['horometrof']) ? $_POST['horometrof'] : false;
        if($turno && $petroleo && $equipo && $horometrof && $horometroi){
            $formulario = new Prueba();
            $formulario->setUsuario_id($usuario_id);
            $formulario->setTurno($turno);
            $formulario->setEquipo($equipo);
            $formulario->setPetroleo($petroleo);
            $formulario->setHorometroi($horometroi);
            $formulario->setHorometrof($horometrof);
            $formulario->setTotal($total);
            
            $save = $formulario ->save();
            if($save){
                $_SESSION['formulario'] = 'complete';
               
            }else{
                 $_SESSION['formulario'] = 'failed';
                 var_dump($formulario);
             }
          }else{
                $_SESSION['formulario'] = 'failed';
         }
        }else{
            header("Location:".base_url);
        }
    }
    public function gestion(){
        //Utils::isAdmin();
        $producto = new Producto();
        $productos = $producto->getAll();
        require_once 'views/formularios/gestion.php';

    }
    
    public function registro(){
        
        $usuario_id = $_SESSION['identity']->id;
        $pedido = new Prueba();
        //sacar del usuario
        $pedido -> setUsuario_id($usuario_id);
        $pedidos = $pedido->getAllByUser();
        
        require_once 'views/formularios/registro.php';

    }
    
    
}
