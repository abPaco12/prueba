<?php 
	class DataBase{
		public $host = DB_HOST;
		public $user = DB_USER;
		public $pass = DB_PASS;
		public $dbname = DB_NAME;

		public $link;

		public function __construct()
		{
			$this->connectDB();
		}

		private function connectDB()
		{
			$this->link = new mysqli($this->host, $this->user ,$this->pass,$this->dbname);
			if($this->link->connect_error){
				throw new Exception("Error Processing Request".$this->link->connect_error);
				
			}
		}
		public function select($query){
			$result=$this->link->query($query) or die ($this->link->error.__LINE__);
			if($result->num_rows>0){
				return $result;
			}
			else{
				throw new Exception("EL DATO NO EXISTE :(");
			}
		}
		public function registerUser($query){
			$sign_row=$this->link->query($query) or die($this->link->error.__LINE__);
			if($sign_row){
				header("Location: ../vista/public/registrarC.php?msg=LOS DATOS HAN SIDO REGISTRADOS EXITOSAMENTE :) FELICIDADES");
			}
			else{
				die("Error:(".$this->link->error.")".$this->link->error);
			}
		}
		/*public function registerPr($query){
			$sign_row=$this->link->query($query) or die($this->link->error.__LINE__);
			if($sign_row){
				header('Location: ../vista/public/registrarP.php?msg1=LOS DATOS HAN SIDO REGISTRADOS EXITOSAMENTE :) FELICIDADES');
			}
			else{
				die("Error:(".$this->link->error.")".$this->link->error);
			}
		}
		public function registerP($query){
			$sign_row=$this->link->query($query) or die($this->link->error.__LINE__);
			if($sign_row){
				header("Location: ../vista/public/registrarPr.php?msg2=LOS DATOS HAN SIDO REGISTRADOS EXITOSAMENTE :)");
				exit();
			}
			else{
				die("Error:(".$this->link->error.")".$this->link->error);
			}
		}*/
	}
	
 ?>