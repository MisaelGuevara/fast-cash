<?php 

class Creditos_Model extends CI_Model{

	public function ObtenerCreditos(){
		$sql = "SELECT c.Codigo_Cliente, c.Nombre_Cliente, c.Apellido_Cliente, a.ivaInteresCapital, cr.idCredito,cr.codigoCredito, cr.tipoCredito, cr.totalAbonado FROM tbl_creditos as cr INNER JOIN tbl_amortizaciones as a ON cr.idAmortizacion = a.idAmortizacion INNER JOIN tbl_solicitudes as s ON a.idSolicitud = s.idSolicitud INNER JOIN tbl_clientes as c ON s.idCliente = c.Id_Cliente ";
		$datos = $this->db->query($sql);
		return $datos;
	}

	public function ObtenerCreditoId($id){
		$sql="SELECT c.urlImg,c.Codigo_Cliente, c.Nombre_Cliente, c.Apellido_Cliente, c.Dui_cliente, c.Tipo_Cliente,c.Domicilio_Cliente,c.Telefono_Celular_Cliente, s.codigoSolicitud, s.estadoSolicitud, s.idLineaPlazo, a.idAmortizacion, a.tasaInteres, a.capital, a.ivaInteresCapital, a.totalInteres, a.pagoCuota, a.cantidadCuota, a.totalIva, cr.* FROM tbl_creditos as cr INNER JOIN tbl_amortizaciones as a ON cr.idAmortizacion = a.idAmortizacion INNER JOIN tbl_solicitudes as s ON a.idSolicitud = s.idSolicitud INNER JOIN tbl_clientes as c ON s.idCliente = c.Id_Cliente WHERE cr.idCredito=$id";
		$datos = $this->db->query($sql);
		return $datos;

	}

}
?>