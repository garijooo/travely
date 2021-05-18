<?php 
Class DataBase{
	private $connection;
	private $db;
	function __construct($db)
	{
		$this->db = $db;
		$this->open_connection($db); 
		$this->charset();
	}
	private function open_connection($db)
	{
		$this->connection = mysqli_connect('localhost','root','');

		if(!$this->connection)
		{
			die("Связи с базой данных нет: ".mysqli_connect_errno());
		}
		else
		{
			$db_select = mysqli_select_db($this->connection, $db);
			if(!$db_select) die("Связи с базой дынных нет - сбой: ".mysqli_connect_errno());
			
		}
	}
	public function charset(){
		mysqli_set_charset($this->connection,'utf8');
	}
	public function sql($query)
	{	
		$result = mysqli_query($this->connection, $query);
		if(!$result) die("Ваш запрос не прошёл - сбой: ".mysqli_connect_errno());
		return $result;
	}
}
?>