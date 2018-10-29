<?php
class UsuarioController extends Controller{

    private $usuarioModel;

    public function __construct(){
        // CARGAR MODELO
        $this->usuarioModel = $this->model('Usuario');
    }

    public function index(){
        // OBTENER LOS USUARIOS
        $usuarios = $this->usuarioModel->findAll();
        $data = array(
            'title' => 'LISTA DE USUARIOS',
            'usuarios' => $usuarios
        );
        $this->view('usuario/index', $data);
    }

    public function adicionar(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'nombre' => trim($_POST['nombre']),
                'email' => trim($_POST['email']),
                'telefono' => trim($_POST['telefono']),
            ];
            if($this->usuarioModel->save($data)){
                redirect('usuario');
            }else{
                die('Error al guardar');
            }
        }else{
            $data = [
                'nombre' => '',
                'email' => '',
                'telefono' => '',
            ];
            $this->view('usuario/adicionar', $data);
        }
    }

    public function editar($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'id' => $id,
                'nombre' => trim($_POST['nombre']),
                'email' => trim($_POST['email']),
                'telefono' => trim($_POST['telefono']),
            ];
            if($this->usuarioModel->update($data)){
                redirect('usuario');
            }else{
                die('Error al actualizar');
            }
        }else{
            // OBTENER DATOS DE USUARIO DESDE EL MODELO
            $usuario = $this->usuarioModel->findById($id);
            $data = [
                'id' => $usuario->id,
                'nombre' => $usuario->nombre,
                'email' => $usuario->email,
                'telefono' => $usuario->telefono,
            ];
            $this->view('usuario/editar', $data);
        }
    }

    public function eliminar($id){
        if($this->usuarioModel->delete($id)){
            redirect('usuario');
        }else{
            die('Error al eliminar');
        }

    }
}