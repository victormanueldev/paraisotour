<?php
  //Incluir la Clase Conexion
  include_once('Conexion.php');

 /**
  * Modelo de Reservas en la Base de Datos
  * @author Jorge Martinez
  *2018/09/26
  */
 class Reservas
 {
   //Atributos de la Tabla Reservas
   private $id_Reservas;
   private $email;
   private $fecha_Viaje;
   private $total_a_pagar;
   private $codigo_Referencia;
   private $id_Destino;
   private $sillas_Reservadas;
   
  

   private $conex;//Permite Instanciar la Clase Conexion


  /**
  * Constructor de la Clase Reservas
  */
   public function __construct()
   {
     $this-> conex = new Conexion();
   }


   //Set & Get
   /**
   * Establece cualquier Atributos de la Clase Reservas
   * @param $atributo (Nombre del Atributo)
   * @param $contenido (Valor asignado al Atributo)
   */
   public function setReservas($atributo, $contenido){
     $this-> $atributo = $contenido;
   }


   /**
   * Devuelve cualquier Atributo de la Clase Reservas
   * @param $atributo (Nombre del Atributo)
   */
   public function getReservas($atributo){
     return $this-> $atributo;
   }


   /**
   * Lista todos los registros de la tabla Reservas
   * @return $resultado (Resultado de la Consulta SQL)
   */
   public function listarReservas()
   {
     $sql = "SELECT * FROM reservas";
     $resultado = $this-> conex-> consultaRetorno($sql);
     return $resultado;
   }


   //CRUD
   /**
   * Crea un registro en la tabla Reservas
   */
   public function crearReservas(){
     
       $sql = "INSERT INTO reservas (email, fecha_Viaje, total_a_pagar, codigo_Referencia, id_Destino, sillas_reservadas)
                VALUES ('{$this-> email}',
                        '{$this-> fecha_Viaje}',
                        '{$this-> total_a_pagar}',
                        '{$this-> codigo_Referencia}',
                        '{$this-> id_Destino}',
                        '{$this-> sillas_Reservadas}')";
        //Llama al Metodo consultaSimple para Ejecutar la Sentencia SQL
        $this-> conex-> consultaSimple($sql);
    }


   /**
   * Permite Visualizar toda la informacion de una Reserva
   * Requiere el ID de Reservas para ver el registro especifico
   * @return $fila (Arreglo Asociativo con el Resultado de la Consulta)
   */
   public function verReservas()
   {
      $sql = "SELECT * FROM reservas WHERE id_Destino = {$this-> id_Destino}";
      $resultado = $this-> conex-> consultaRetorno($sql);//Guarda el Resultado de la Consulta
      //Guarda una fila del Resulset(Tabla Virtual) en un array asociativo
      $fila = mysqli_fetch_all($resultado, MYSQLI_ASSOC);

    //  //Asignacion de Atributos de la Tabla Reservas

    // $this-> id_Reservas =           $fila['id_Reservas'];
    // $this-> email =                 $fila['email'];
    // $this-> fecha_Viaje =           $fila['fecha_Viaje'];
    // $this-> total_a_pagar =         $fila['total_a_pagar'];
    // $this-> cantidad_sillas =       $fila['codigo_Referencia'];
    // $this-> id_Destino =            $fila['id_Destino'];
    // $this-> total_a_pagar =         $fila['sillas_reservadas'];
    

    return $fila;
   }
    
}
?>