<?php

class Prueba{
    private $id;
    private $usuario_id;
    private $equipo;
    private $turno;
    private $petroleo;
    private $horometroi;
    private $horometrof;
    private $total;
    private $fecha;
    private $hora;
    
    private $db;
    
    public function __construct(){
        $this->db = Database::connect();
    }
    function getId() {
        return $this->id;
    }

    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getEquipo() {
        return $this->equipo;
    }

    function getTurno() {
        return $this->turno;
    }

    function getPetroleo() {
        return $this->petroleo;
    }

    function getHorometroi() {
        return $this->horometroi;
    }

    function getHorometrof() {
        return $this->horometrof;
    }

    function getTotal() {
        return $this->total;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getHora() {
        return $this->hora;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setEquipo($equipo) {
        $this->equipo = $equipo;
    }

    function setTurno($turno) {
        $this->turno = $this->db->real_escape_string($turno);
    }

    function setPetroleo($petroleo) {
        $this->petroleo = $petroleo;
    }

    function setHorometroi($horometroi) {
        $this->horometroi = $horometroi;
    }

    function setHorometrof($horometrof) {
        $this->horometrof = $horometrof;
    }

    function setTotal($total) {
        $this->total = $total;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }
    
    public function getAll(){
        $productos = $this->db->query("SELECT * FROM formulario ORDER BY id DESC");
    }
    
    public function save(){
		$sql = "INSERT INTO formulario VALUES(NULL, {$this->getUsuario_id()}, {$this->getEquipo()}, '{$this->getTurno()}', {$this->getPetroleo()}, {$this->getHorometroi()}, {$this->getHorometrof()}, {$this->getTotal()}, CURDATE(), CURTIME());";
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}
    public function getAllByUser(){
            $sql = "SELECT p.* FROM formulario p "
                            . "WHERE p.usuario_id = {$this->getUsuario_id()} ORDER BY id DESC";

            $pedido = $this->db->query($sql);

            return $pedido;
}


}

