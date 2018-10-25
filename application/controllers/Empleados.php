<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Empleados extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Empleados_Model");
	}

	public function Index()
	{
		$registros=$this->Empleados_Model->ListaEmpleados();
		$datos = array('registros'=>$registros);
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view("Empleados/Index", $datos);
		$this->load->view('Base/footer');
	}

	public function ViewInsertarEmpleados()
	{
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Empleados/ViewInsertarEmpleados');
		$this->load->view('Base/footer');
	}

	public function InsertarEmpleados()
	{
		$datos = $this->input->POST();
		$bool = $this->Empleados_Model->InsertarEmleados($datos);
		if($bool)
		{
			// redirect('Empleados/Index');
		    $this->session->set_flashdata("guardar","El registro a sido guardar con exito.");
			redirect(base_url()."Empleados/Index");
		}
		else
		{
			// echo '<script type="text/javascript">
			// 	alert("No se pudo insertar");
			// 	</script>';
			$this->session->set_flashdata("errorr","Error el registro no se pudo guardar.");
			redirect(base_url()."Empleados/Index");
		}
	}

	public function ViewActualizarEmpleado()
	{
		$id = $this->input->GET('id');
		$query = $this->Empleados_Model->ObtenerEmpleadoID($id);
		$data = array("data" => $query);

		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Empleados/ViewActualizarEmpleados', $data);
		$this->load->view('Base/footer');
	}

	public function ActualizarEmpleados()
	{
		$data=$this->input->POST();
		$bool=$this->Empleados_Model->ActualizarEmleados($data);
		if($bool){
			// redirect('Empleados/Index');
				$this->session->set_flashdata("actualizado","Registro a sido actualizado con exito.");
				redirect(base_url()."Empleados/Index");
		}
		else
		{
			// echo '<script type="text/javascript">
			// 	alert("No se pudo Actualizar");
			// 	</script>';
				$this->session->set_flashdata("errorr","Error el registro no pudo ser actualizado.");
				redirect(base_url()."Empleados/Index");
		}
	}

	public function EliminarEmpleados()
	{
		$id=$this->input->GET('id');
		$bool=$this->Empleados_Model->EliminarEmpleados($id);
		if($bool){
			// redirect('Empleados/Index');
				$this->session->set_flashdata("informa","El registro a sido eliminado con exito.");
				redirect(base_url()."Empleados/Index");
		}
		else
		{
			// echo '<script type="text/javascript">
			// 	alert("No se pudo Actualizar");
			// 	</script>';
				$this->session->set_flashdata("errorr","Error el registro no pudo ser eliminado.");
			    redirect(base_url()."Empleados/Index");
		}
	}

	public function DetalleEmpleado()
	{
		if($this->input->is_ajax_request())
		{
			$id = $this->input->POST("id");
			$datos = $this->Empleados_Model->DetalleEmpleado($id);
			echo json_encode($datos);
		}
		else
		{
			echo "error";
		}
	}
}
?>