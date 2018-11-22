<?php 
class Rol extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("Rol_Model");
	}


	public function index()
	{
		$data = array('datosPermisos' => $this->Rol_Model->obtenerPermisos(), 'datosMenu' => $this->Rol_Model->obtenerMenu(), 'datosRol' => $this->Rol_Model->obtenerRol());
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Rol/Gestionar_Rol', $data);
		$this->load->view('Base/footer');
	}

	public function Crear()
	{
		$data = array('datosRol' => $this->Rol_Model->obtenerRol(), 'datosMenu' => $this->Rol_Model->obtenerMenu());
		$this->load->view('Base/header');
		$this->load->view('Base/nav');
		$this->load->view('Rol/insertarPermiso', $data);
		$this->load->view('Base/footer');
	}

	public function Guardar(){
		$datos=$this->input->POST();
		$bool=$this->Rol_Model->InsertarPermisos($datos);
		if($bool){
		    $this->session->set_flashdata("guardar","El registro a sido guardar con exito.");
			redirect(base_url()."Rol");
		}
		else{
			$this->session->set_flashdata("errorr","Error el registro no se pudo guardar.");
			redirect(base_url()."Rol");
		}

	}
	public function validarPermisos(){
		$id=$this->input->GET("Id");
		$bool=$this->Rol_Model->validarPermiso($id);
		echo json_encode($bool->result());

	}
	
	// public function Editar(){
	// 	$datos=$this->input->POST();
	// 	$bool=$this->User_Model->EditarUser($datos);
	// 	if($bool){
	// 		$this->session->set_flashdata("actualizado","Registro a sido actualizado con exito.");
	// 		redirect(base_url()."User");
	// 	}
	// 	else{
	// 		$this->session->set_flashdata("errorr","Error el registro no pudo ser actualizado.");
	// 		redirect(base_url()."User");
	// 	}

	// }
	
	// public function Eliminar(){
	// 	$datos=$this->input->GET('id');
	// 	$bool=$this->User_Model->OcultarUser($datos);
	// 	if($bool){
	// 		$this->session->set_flashdata("informa","El registro a sido eliminado con exito.");
	// 		redirect(base_url()."User");
	// 	}
	// 	else{
	// 		$this->session->set_flashdata("errorr","Error el registro no pudo ser eliminado.");
	// 		redirect(base_url()."User");
	// 	}

	// }

}

?>