<?php
class Db {

	// Host and Database information
	private $host = "localhost";
	private $user = "root";
	private $pass = "";
	private $db   = "kamus";
	private $mysqli;

	public function __construct(){
		
		// Database Connection
		$this->mysqli = new Mysqli($this->host, $this->user, $this->pass, $this->db);
		
		// Checking the connection is okay or not
		if ($this->mysqli->connect_error) {
		    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
		}
	}

	/**
	* Closing the DB connection
	* @params null
	* @return void 
	*/
	public function __destruct(){
		$this->mysqli->close();
	}

	/**
	* Data insertion in student table
	* @params $name, $email, $address
	* @return (int) insert_id
	*/
	public function insert($katadasar, $tipekatadasar){
		$this->mysqli->query("INSERT INTO tb_katadasar (katadasar, tipe_katadasar) VALUES ('$katadasar', '$tipekatadasar')");
		return $this->mysqli->insert_id;
	}

	/**
	* Data updating in student table
	* @params $id, $name, $email, $address
	* @return (boolean) 
	*/
	public function update($id, $katadasar, $tipe_katadasar){
		return $this->mysqli->query("UPDATE tb_katadasar SET katadasar='$katadasar', tipe_katadasar='$tipe_katadasar' WHERE id_katadasar=$id");
	}

	/**
	* Data deletion from student table
	* @params $id
	* @return (boolean) 
	*/
	public function delete($id){
		return $this->mysqli->query("DELETE FROM tb_katadasar WHERE id_katadasar=$id");
	}

	/**
	* Data retriving from student table
	* @params $condition (optional)
	* @return (array) mixed
	*/
	public function getAll(){
		$result = $this->mysqli->query("SELECT * FROM tb_katadasar limit 1000");
		return $result->fetch_all(MYSQLI_ASSOC);
	}

	/**
	* Row data retriving from student table according to $id
	* @params $id
	* @return (array) mixed
	*/
	public function getById($id){
		return $this->mysqli->query("SELECT * FROM tb_katadasar WHERE id_katadasar=$id")->fetch_assoc();
	}
}

?>