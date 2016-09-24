<html>
<head>
<title>Pruebas</title>
</head>
<body>
<?php
class CabeceraPagina {

  public $cedula;
  public $nombre;
  public $apellido;
  public $edad;
  public $miclave;
  public $acceso;
  public $password;

  public function __construct($cedula1,$nombre1,$apellido1,$edad1,$password)
  {
    $this->cedula=$cedula1;
    $this->nombre=$nombre1;
    $this->apellido=$apellido1;
    $this->edad=$edad1;    
    $this->password=$password;
    $this->miclave="123";
  }

  public function ver()
  {
    echo "cedula ".$this->cedula;
    echo "<br>";
    echo "nombre ".$this->nombre;
    echo "<br>";
    echo "apellido ".$this->apellido;
    echo "<br>";
    echo "edad ".$this->edad;
    echo "<br>";    
  }

  public function validarclave()
  {
    if ($this->password===$this->miclave) {
      $acceso=true;
    }elseif ($this->password!=$this->miclave) {
      $acceso=false;
    }
    return $acceso;

  }

}

/*
$cabecera=new CabeceraPagina("0000","jose","lopez",41);
$cabecera->ver();

echo "<br>";
echo $cabecera->cedula;
*/

?>
</body>
</html>