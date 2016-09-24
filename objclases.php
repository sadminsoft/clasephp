/*
 programa: objetos clases
*/

<?php
class Prueba {

  public $nombre;
  public $edad;
  public $ingreso;
  public $empresa;
  public $representante;
  public $direccion;
  public $ciudad;
  public $empleado;
  public $direemp;
  public $email;
  public $pasw1;
  public $pasw2;
  public $palabra;
  public $usuario;
  public $paslogin;
  public $registrousr;

  public function __construct($nombre1,$edad1,$monto,$emp,$repre,$direc,$ciud,$empl,$diremp,$mail,$pas1,$pas2,$letra,$usr,$pas3)
  {
    $this->nombre=$nombre1;
    $this->edad=$edad1;    
    $this->ingreso=$monto;    
    $this->empresa=$emp;    
    $this->representante=$repre;    
    $this->direccion=$direc;    
    $this->ciudad=$ciud;    
    $this->empleado=$empl;    
    $this->direemp=$diremp;    
    $this->email=$mail;    
    $this->pasw1=$pas1;    
    $this->pasw2=$pas2;    
    $this->palabra=$letra;    
    $this->usuario=$us;
    $this->paslogin=$pas3;
  }

  public function example1()
  {
    echo "<br>";
    echo "nombre ".$this->nombre;
    echo "<br>";
    echo "edad ".$this->edad;
    echo "<br>";
    if ($this->edad >= 21)
    {
      echo "Estatus: LEGALMENTE ADULTO" ;
    }else
    {
      echo "Estatus: LEGALMENTE CIUDADANO" ;
    }
  }

  public function example2()
  {
    echo "<br>";
    echo "El cliente ".$this->nombre;
    echo "<br>";
    echo "con ingresos de ".$this->ingreso;
    echo "<br>";
    if ($this->ingreso>3000){
      echo " Debe Cancelar Impuestos";
    }else
    {
      echo " No debe cancelar impuestos";
    }
  }

  public function example3()
  {    
    echo "<br>";
    echo "<h4>Contrato</h4>";
    echo "<br>";
    echo "En la ciudad de ".$this->ciudad.", se acuerda entre la empresa ".$this->empresa." representada por el sr. ".$this->representante." en su caracter de apoderado, con domicilio en la calle ".$this->direccion." y el sr ".$this->empleado." con domicilio en ".$this->direemp.", celebra el presente contrato a plazo fijo, de acuerdo a las normativa vigente de los articulos 90,92,93,94,95 y concordantes de la ley de contrato de trabajo no. 20.744";
    echo "<br>";    
  }


  public function example4()
  {

    if ($this->pasw1!=$this->pasw2){
      echo "<br>";
      echo "Contraseñas no coninciden";
    }else
    {
      $registrousr[0][0]=$this->nombre;
      $registrousr[0][1]=$this->email;
      $registrousr[0][2]=$this->pasw1;

      echo "<br>";
      echo "Se registro el usuario: ".$this->nombre;
      echo "<br>";
    }

  }

  public function example5()
  {
    echo "nombre ".$this->nombre;
    echo "<br>";
    echo "edad ".$this->edad;
    echo "<br>";    
  }

  public function example6() //Loguearse
  {
    
  }

}
