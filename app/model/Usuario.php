<?php 
class Usuario{
    
    private $db;
    
    public function __construct(){
        $this->db = new DataBase();
    }

    public function findAll(){
        $this->db->query('select * from usuario');
        return $this->db->rows();
    }

    public function save($data){
        $this->db->query('insert into usuario (nombre, email, telefono) values(:nombre, :email, :telefono)');
        // VINCULAR VALORES
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':telefono', $data['telefono']);
        // EJECUTAR
        if($this->db->execute()){
            return true;
        }
        return false;
    }

    public function findById($id){
        $this->db->query('select * from usuario where id = :id');
        $this->db->bind(':id', $id);
        return $this->db->row();         
    }

    public function update($data){
        $this->db->query('update usuario set nombre = :nombre, email = :email, telefono = :telefono where id = :id');
        // VINCULAR VALORES
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':nombre', $data['nombre']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':telefono', $data['telefono']);
        // EJECUTAR
        if($this->db->execute()){
            return true;
        }
        return false;
    }

    public function delete($id){
        $this->db->query('delete from usuario where id = :id');
        $this->db->bind(':id', $id);
        // EJECUTAR
        if($this->db->execute()){
            return true;
        }
            return false;         
    }
}