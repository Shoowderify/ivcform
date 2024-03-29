<?php
require_once 'models/usuario.php';

class usuarioController{
	
	public function index(){
		echo "Controlador Usuarios, AcciÃ³n index";
	}
	
	public function registro(){
		Utils::isIdentity();
		require_once 'views/usuario/registro.php';
	}
        
	public function inicio(){
		require_once 'views/usuario/inicio.php';
	}
        
	public function save(){
		if(isset($_POST)){
			
			$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : false;
			$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : false;
			$email = isset($_POST['email']) ? $_POST['email'] : false;
			$password = isset($_POST['password']) ? $_POST['password'] : false;
			
			if($nombre && $apellidos && $email && $password){
				$usuario = new Usuario();
                                if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/",$nombre)){
				$usuario->setNombre($nombre);
                                }
                                
                                if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/",$apellidos)){
				$usuario->setApellidos($apellidos);
                                }
                                if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
				$usuario->setEmail($email);
                                }
                                
                                if(!empty($password)){
				$usuario->setPassword($password);
                                }
				$save = $usuario->save();
				if($save){
					$_SESSION['register'] = "complete";
				}else{
					$_SESSION['register'] = "failed";
				}
			}else{
				$_SESSION['register'] = "failed";
			}
		}else{
			$_SESSION['register'] = "failed";
		}
		header("Location:".base_url.'usuario/registro');
	}
	
	public function login(){
		if(isset($_POST)){
			// Identificar al usuario
			// Consulta a la base de datos
			$usuario = new Usuario();
			$usuario->setEmail($_POST['email']);
			$usuario->setPassword($_POST['password']);
			
			$identity = $usuario->login();
			
			if($identity && is_object($identity)){
				$_SESSION['identity'] = $identity;
				
				if($identity->rol == 'admin'){
					$_SESSION['admin'] = true;
				}
				
			}else{
				$_SESSION['error_login'] = 'Identificación fallida !!';
			}
		
		}
		echo "Sesión iniciada";
		header("Location:".base_url);
	}
        
        public function logout(){
            if(isset($_SESSION['identity'])){
                unset($_SESSION['identity']);
            }
            if(isset($_SESSION['admin'])){
                unset($_SESSION['admin']);
            }
		echo "Sesión cerrada";
            header("Location:".base_url);
        }
	
	
	
} // fin clase
