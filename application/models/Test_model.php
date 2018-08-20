<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test_model extends CI_Model 
{
    
  public function __construct() 
  {
  parent::__construct();

  }    


  public function insert_calificacion()
  {

  $data=array(
	  'id_t_materias'  =>$this->input->post('id_materia'),
	  'id_t_usuarios'  =>$this->input->post('id_usuario'),
	  'calificacion'   =>str_replace(',','',$this->input->post('calificacion')),
	  'fecha_registro' =>date('Y-m-d H:i:s')

  );

    try {
        $this->db->trans_start(FALSE);
        $r=  $this->db->insert('t_calificaciones', $data);
        $db_error = $this->db->error();
        $this->db->trans_complete();

   
        if (!empty($db_error['code'])) {
        
            throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);

            return false; 
            
        }
        else{
        return true;
        }
    } 
    catch (Exception $e) {

        log_message('error: ',$e->getMessage());
        return false;
    }

  }

	public function get_calificaciones($id_alumno)
	{
	$query =$this->db->query('SELECT
	t_calificaciones.id_t_usuarios,
	t_alumnos.nombre,
	t_alumnos.ap_paterno,
	t_alumnos.ap_materno,
	t_materias.nombre as materia,
	t_calificaciones.calificacion,
	DATE_FORMAT(t_calificaciones.fecha_registro, "%d/%m/%Y") AS fecha_registro
	FROM
	t_calificaciones
	INNER JOIN t_materias ON t_calificaciones.id_t_materias = t_materias.id_t_materias
	INNER JOIN t_alumnos ON t_calificaciones.id_t_usuarios = t_alumnos.id_t_usuarios
	WHERE
	t_calificaciones.id_t_usuarios = '.$id_alumno.' AND
	t_materias.activo = 1 AND
	t_alumnos.activo = 1
	ORDER BY t_materias.nombre asc
	');
	
       return $query->result_array();	
	}
	
	
	
	public function update_calificacion($_PUT)
	{
	 $data=array(
	  'calificacion'   =>str_replace(',','',$_PUT['calificacion'])
        );

    try {
        $this->db->trans_start(FALSE);
        $this->db->where('id_t_calificaciones',$_PUT['id_pk_calificacion']);
        $this->db->update('t_calificaciones', $data);
        $db_error = $this->db->error();
        $this->db->trans_complete();

   
        if (!empty($db_error['code'])) {
        
            throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);

            return false; 
            
        }
        else{
        return true;
        }
    } 
    catch (Exception $e) {

        log_message('error: ',$e->getMessage());
        return false;
    }
	
	}


	
	public function delete_calificacion($_DELETE)
	{
	
	$id = $_DELETE['id_pk_calificacion'];
    try {
        $this->db->trans_start(FALSE);
        $this->db->delete('t_calificaciones', array('id_t_calificaciones' => $id));
        $db_error = $this->db->error();
        $this->db->trans_complete();

   
        if (!empty($db_error['code'])) {
        
            throw new Exception('Database error! Error Code [' . $db_error['code'] . '] Error: ' . $db_error['message']);

            return false; 
            
        }
        else{
        return true;
        }
    } 
    catch (Exception $e) {

        log_message('error: ',$e->getMessage());
        return false;
    }

	
	   	
	
	}
		
}
?>
