<?php
  include_once('Reservas.php');

  /**
   * @author Jorge Martinez
   */
  class ControladorReservas
  {
    private $reservas;
    function __construct()
    {
      $this-> reservas = new Reservas();
    }

    /**
    * Permite Visualizar todos los datos de la tabla Reservas
    * @return $resultado (Resultado de la Consulta SQL)
    */
    public function indexReservas()
    {
      $resultado = $this-> reservas-> listarReservas();
      return $resultado;
    }

    /**
    * Permite Visualizar la informacion de las reservas
    * @param $id (ID de la Reserva a Visualizar)
    * @return $datos (Array Asociativo con la informacion del registro)
    */
    public function verR($id_Destino)
    {
      $this-> reservas-> setReservas('id_Destino', $id_Destino);
      $datos = $this-> reservas-> verReservas();
      return $datos;
    }

    public function crearR(
      $email, 
      $fecha_Viaje,   
      $total_a_pagar, 
      $codigo_Referencia,
      $id_Destino,
      $sillas_Reservadas
      )
    {

      $this-> reservas-> setReservas('email', $email);
      $this-> reservas-> setReservas('fecha_Viaje', $fecha_Viaje);
      $this-> reservas-> setReservas('total_a_pagar', $total_a_pagar);
      $this-> reservas-> setReservas('codigo_Referencia', $codigo_Referencia);
      $this-> reservas-> setReservas('id_Destino', $id_Destino);
      $this-> reservas-> setReservas('sillas_Reservadas', $sillas_Reservadas);

      $this-> reservas-> crearReservas();
    }    
}

?>
