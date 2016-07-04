<?php
require_once 'Crud.php';
class Noticias extends Crud{

	protected $table = 'news';
	private $titulo;
  private $data;
  private $noticia;

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	public function getTitulo(){
		return $this->titulo;
	}
	public function setData($data){
		$this->data = $data;
	}
  public function getData(){
		return $this->data;
	}
  public function setNoticia($noticia){
		$this->noticia = $noticia;
	}
  public function getNoticia(){
		return $this->noticia;
	}

	public function insert(){
		$sql  = "INSERT INTO $this->table (titulo, data, noticia) VALUES (:titulo, :data, :noticia)";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':titulo', $this->titulo);
		$stmt->bindParam(':data', $this->data);
    $stmt->bindParam(':noticia', $this->noticia);
		return $stmt->execute();
	}
	public function update($id){
		$sql  = "UPDATE $this->table SET titulo = :titulo, data = :data, noticia = :noticia WHERE guid = :guid";
		$stmt = DB::prepare($sql);
		$stmt->bindParam(':titulo', $this->titulo);
		$stmt->bindParam(':data', $this->data);
    $stmt->bindParam(':noticia', $this->noticia);
		$stmt->bindParam(':guid', $guid);
		return $stmt->execute();
	}
}
