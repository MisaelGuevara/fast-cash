<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Leyendo el Modelo...
		$this->load->model("Solicitud_Model");
	}

	public function index()
	{
		$datos = $this->Solicitud_Model->ObtenerSolicitudes();
		$data = array('datos' => $datos );
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Solicitud/ver_solicitudes', $data);
		$this->load->view('Base/footer');
	}

	public function CrearSolicitud()
	{
		$plazos = $this->Solicitud_Model->obtenerPlazos();
		$clientes = $this->Solicitud_Model->obtenerClientes();
		$data = array('plazos' => $plazos,'clientes' => $clientes);

		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Solicitud/solicitud_prestamo', $data);
		$this->load->view('Base/footer');
	}

	public function gestionarPlazos()
	{
		$plazos = $this->Solicitud_Model->obtenerPlazos();
		$data = array('plazos' => $plazos );

		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Solicitud/gestionar_plazos', $data);
		$this->load->view('Base/footer');
	}

	public function guardarPlazo()
	{
		$datos = $this->input->post();
		$bool = $this->Solicitud_Model->guardarPlazo($datos);
		if ($bool)
		{
		    $this->session->set_flashdata("guardar","El registro a sido guardar con exito.");
			redirect(base_url()."Solicitud/gestionarPlazos");
			// echo '<script type="text/javascript">alert("Error al insertar el plazo")</script>';
		}
		else
		{
			// echo '<script type="text/javascript">
			// 	alert("El nuevo plazo fue agregado con exito !!!");
			// 	self.location ="'.base_url().'Solicitud/gestionarPlazos"
			// 	</script>';
			$this->session->set_flashdata("errorr","Error el registro no se pudo guardar.");
			redirect(base_url()."Solicitud/gestionarPlazos");
		}
	}

	public function actualizarPlazo()
	{
		$datos = $this->input->post();
		$bool = $this->Solicitud_Model->actualizarPlazo($datos);
		if ($bool)
		{
			// echo '<script type="text/javascript">alert("Error al actualizar el plazo")</script>';
				$this->session->set_flashdata("actualizado","Registro a sido actualizado con exito.");
				redirect(base_url()."Solicitud/gestionarPlazos");
		}
		else
		{
			// echo '<script type="text/javascript">
			// 	alert("El plazo fue actualizado con exito !!!");
			// 	self.location ="'.base_url().'Solicitud/gestionarPlazos"
			// 	</script>';
				$this->session->set_flashdata("errorr","Error el registro no pudo ser actualizado.");
				redirect(base_url()."Solicitud/gestionarPlazos");
		}
	}

	public function eliminarPlazo()
	{
		$datos=$this->input->GET('id');
		$bool = $this->Solicitud_Model->eliminarPlazo($datos);
		if($bool){
			// echo '<script type="text/javascript">
				
			// 	self.location ="'.base_url().'Solicitud/gestionarPlazos"
			// 	</script>';
				$this->session->set_flashdata("informa","El registro a sido eliminado con exito.");
				redirect(base_url()."Solicitud/gestionarPlazos"); 
		}
		else{
			// echo '<script type="text/javascript">
			// 	alert("Error al insertar la informacion");
			// 	self.location ="'.base_url().'Solicitud/gestionarPlazos"
			// 	</script>';
			$this->session->set_flashdata("errorr","Error el registro no pudo ser eliminado.");
			redirect(base_url()."Solicitud/gestionarPlazos");

		}
	}

	public function GuardarSolicitud()
	{
		$datos = $this->input->post();
		$bool = $this->Solicitud_Model->GuardarSolicitud($datos);
		if($bool){
				$this->session->set_flashdata("informa","Se creo exitosamente la solicitud !!!");
				redirect(base_url()."Solicitud/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al crear la solicitud");
			redirect(base_url()."Solicitud/");

		}
	}

	public function EliminarSolicitud()
	{
		$id = $_GET['id'];
		$bool = $this->Solicitud_Model->EliminarSolicitud($id);
		if($bool){
				$this->session->set_flashdata("informa","Se elimino exitosamente la solicitud !!!");
				redirect(base_url()."Solicitud/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al eliminar la solicitud");
			redirect(base_url()."Solicitud/");

		}
	}


	public function DetalleSolicitud($id)
	{
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$fiadores = $this->Solicitud_Model->ObtenerFiadores($id);
		$garantias = $this->Solicitud_Model->ObtenerGarantias($id);
		$datos = $this->Solicitud_Model->DetalleSolicitud($id);
		// $data = array('datos' => $datos );
		// if (sizeof($fiadores->result() > 0))
		// {
		// 	// if (sizeof($fiadores->result()) > 0)
		// 	// {
		// 	// 	$data = array('datos' => $datos, 'fiadores' => $fiadores ,'garantias' => $garantias);
		// 	// }
		// 	// else
		// 	// {
		// 	// 	$data = array('datos' => $datos, 'fiadores' => $fiadores );
		// 	// }
		// }
		// if (sizeof($garantias->result()) > 0)
		// {
		// 	$data = array('datos' => $datos, 'garantias' => $garantias);
		// }
		$data = array('datos' => $datos, 'fiadores' => $fiadores ,'garantias' => $garantias);
		$this->load->view('Solicitud/detalle_solicitud', $data);
		$this->load->view('Base/footer');
	}

	public function FrmActualizarSolicitud($id)
	{
		$plazos = $this->Solicitud_Model->obtenerPlazos();
	
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$datos = $this->Solicitud_Model->DetalleSolicitud($id);
		$data = array('datos' => $datos, 'plazos' => $plazos);
		$this->load->view('Solicitud/actualizar_solicitud', $data);
		$this->load->view('Base/footer');
	}

	public function ActualizarSolicitud($id)
	{
		$datos = $this->input->post();
		$bool = $this->Solicitud_Model->ActualizarSolicitud($datos);
		if($bool){
				$this->session->set_flashdata("informa","Se actualizo la solicitud !!!");
				redirect(base_url()."Solicitud/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al actualizar la solicitud");
			redirect(base_url()."Solicitud/");

		}
	}

	public function ActualizarEstadoSolicitud($i)
	{
		$id = $_GET['id'];
		$bool = $this->Solicitud_Model->ActualizarEstadoSolicitud($id, $i);
		if($bool){
				$this->session->set_flashdata("actualizado","Se actualizo el estado la solicitud !!!");
				redirect(base_url()."Solicitud/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al actualizar el estado la solicitud");
			redirect(base_url()."Solicitud/");

		}
	}

	public function AgregarCredito()
	{
		$id = $_GET['k'];
		$datos = $this->Solicitud_Model->obtenerSolicitud($id);
		$data = array('id' => $id, 'datos' => $datos);

		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Solicitud/frm_agregar_credito', $data);
		$this->load->view('Base/footer');
	}

	public function GuardarCredito()
	{
		$datos = $this->input->post();
		$bool = $this->Solicitud_Model->GuardarCredito($datos);
		if($bool){
				$this->session->set_flashdata("actualizado","Operación realizada exitosamente!!!");
				redirect(base_url()."Solicitud/"); 
		}
		else{
			$this->session->set_flashdata("errorr","Error al realizar la operacion");
			redirect(base_url()."Solicitud/");

		}
	}
}
