<?php 
	
	class DBconnect
	{
		private $host="localhost";
		private $name="project_sem6";
		private $user="root";
		private $pass="";
		
		public function connect()
		{
			try
			{
				$conn=new PDO('mysql:host='.$this->host.