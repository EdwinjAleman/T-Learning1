<?php
	class Database
	{
		public static function Conectar()
		{
			$pdo = new PDO('mysql:host=192.168.0.3;dbname=t-learning;charset=utf8','cauger','Cauger2549**');
			$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}
	}
?>