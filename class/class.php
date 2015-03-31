<?php
session_start();
class Trabajo 
{
	
	private $p;
	private $dbh;
	
	public function __construct()
	{
		$this->p=array();
		$this->dbh= new PDO('mysql:host=localhost;dbname=testvocacional', "root", "");
	}
	
	private function set_names()
	{
		return $this->dbh->query("SET NAMES 'utf8'");
	}
	
	public function get_preguntas()
	{
		self::set_names();
		$sql="select * from preguntas ;";
		foreach ($this->dbh->query($sql) as $row)
		{
			$this->p[]=$row;
		}
			return $this->p;
			$this->dbh=null;
	}
	public function get_especialidades($area)
	{
		self::set_names();
		$sql="select * from especialidad where idarea=$area;";
	
		foreach ($this->dbh->query($sql) as $row)
		{
			$this->p[]=$row;
		}
			return $this->p;
			$this->dbh=null;
		}
		
	}
	

















?>