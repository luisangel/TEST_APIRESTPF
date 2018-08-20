<?php
 header('Access-Control-Allow-Origin: *');
 header("Access-Control-Allow-Credentials: true");
 header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
 header('Access-Control-Max-Age: 1000');
 header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
  * @autor AFS
-1  	 Sin resultados	
200		 OK
Este código de respuesta indica que la solicitud se ha realizado correctamente.
201	 	Created
Esto indica que la solicitud tuvo éxito y se creó un recurso. Se utiliza para confirmar el éxito de una solicitud PUT o POST.
400 	Bad Request 
La solicitud fue malformada. Esto sucede especialmente con las solicitudes POST y PUT, cuando los datos no pasan la validación o están en el formato incorrecto.
404	 Not Found
Esta respuesta indica que no se pudo encontrar el recurso necesario. Esto generalmente se devuelve a todas las solicitudes que apuntan a una URL sin recurso correspondiente.
401	 Unauthorized
Este error indica que debe realizar la autenticación antes de acceder al recurso.
405	 Method Not Allowed
El método HTTP utilizado no es compatible con el de este recurso.
409	 Conflict
Esto indica un conflicto. Por ejemplo, está utilizando una solicitud PUT para crear el mismo recurso dos veces.
500	 Internal Server Error
Cuando todo lo demás falla; En general, se utiliza una respuesta 500 cuando el procesamiento falla debido a circunstancias imprevistas en el lado del servidor, lo que provoca el error del servidor.
 */

class Ws extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('Test_model','model');	
        $this->load->library('form_validation');
	$X_API_KEY='$2y$11$q5MkhSBtlsJcNEVsYh64a.aCluzHnGog7TQAKVmQwO9C8xb.t89F.';
	
	if($this->in_access($X_API_KEY)==false)
	{
	$this->no_access();
	exit();
	}

    }


	
	
	
  public function insert_calificacion()	
  {

    $result = array();
    if($this->input->post()){
                                      //campo POST   titulo   
    $this->form_validation->set_rules('id_materia', 'id_materia', 'required|integer');
    $this->form_validation->set_rules('id_usuario', 'id_usuario', 'required|integer');
    $this->form_validation->set_rules('calificacion', 'calificacion', 'required|less_than_equal_to[10]|greater_than_equal_to [0]');
    $this->form_validation->set_message('required','El campo %s es obligatorio.'); 
    if($this->form_validation->run() == FALSE)
                {

		$res=validation_errors();
                $resF = explode('.',strip_tags($res));
        
                foreach($resF as $r)
                {
                if(strlen($r)>4)
                {

		$result['msg'][]= trim(str_replace("[\n|\r|\n\r]", '', $r));
		$result['code'] =400;
		$result['status'] ='error';
                } 
                
                }

                }
                else
                {
                $res = $this->model->insert_calificacion();
		
		if($res==true)
		{
		$result['msg'] = 'Calificacion registrada correctamente';
		$result['code'] =200;
		$result['success'] ='ok';

		}
		else
		{
		$result['msg'] = 'Ocurrio un Error';
		$result['code'] = 500;
		$result['success'] ='Error';

		}
               
		}    
    }
         echo json_encode($result); 
    	
	}


	public function get_calificaciones($id=0)
	{

    $result = array();
    $sum_cal =0;
                                      //campo POST   titulo   
    if($id==0)
                {
		$result['msg'] = 'El identificador del alumno es requerido';
		$result['code'] =400;
		$result['success'] ='error';

                }
                else
                {
                $res = $this->model->get_calificaciones($id);

		if(count($res)>0)
		{
		foreach($res as $r)
		{
		$sum_cal = $sum_cal+$r['calificacion'];
		}
		
		$result['msg'] = 'Calificacion registrada correctamente';
		$result['code'] =200;
		$result['success'] ='ok';
		$result['details'] = $res;
		$result['promedio'] = $sum_cal/count($res);
		
		
		}
		else
		{
		$result['msg'] = 'Sin Resultados';
		$result['code'] = -1;
		$result['success'] ='ok';
		$result['details'] = null;
		}
               
		}    
    
         echo json_encode($result); 
    	
	
	}		



      public function update_calificacion()
      {
       
  
    $result = array();
    if(file_get_contents('php://input')){
    parse_str(file_get_contents('php://input'), $_PUT);
    
    $this->form_validation->set_data($_PUT);
                                      //campo POST   titulo   

    $this->form_validation->set_rules('id_pk_calificacion', 'id_pk_calificacion', 'required|integer');
    $this->form_validation->set_rules('calificacion', 'calificacion', 'required|less_than_equal_to[10]|greater_than_equal_to[0]');
    $this->form_validation->set_message('required','El campo %s es obligatorio.'); 
    if($this->form_validation->run() == FALSE)
                {

		$res=validation_errors();
                $resF = explode('.',strip_tags($res));
        
                foreach($resF as $r)
                {
                if(strlen($r)>4)
                {

		$result['msg'][]= trim(str_replace("[\n|\r|\n\r]", '', $r));
		$result['code'] =400;
		$result['status'] ='error';
                } 
                
                }

                }
                else
                {
                $res = $this->model->update_calificacion($_PUT);
		
		if($res==true)
		{
		$result['msg'] = 'Calificacion actualizada correctamente';
		$result['code'] =200;
		$result['success'] ='ok';

		}
		else
		{
		$result['msg'] = 'Ocurrio un Error';
		$result['code'] = 500;
		$result['success'] ='Error';

		}
               
		}    
    }
         echo json_encode($result); 
    
      }



	public function delete_calificacion()
	{
	 
  
    $result = array();
    if(file_get_contents('php://input')){
    parse_str(file_get_contents('php://input'), $_DELETE);
  
    $this->form_validation->set_data($_DELETE);
                                      //campo POST   titulo   

    $this->form_validation->set_rules('id_pk_calificacion', 'id_pk_calificacion', 'required|integer');
    $this->form_validation->set_message('required','El campo %s es obligatorio.'); 
    if($this->form_validation->run() == FALSE)
                {

		$res=validation_errors();
                $resF = explode('.',strip_tags($res));
        
                foreach($resF as $r)
                {
                if(strlen($r)>4)
                {

		$result['msg'][]= trim(str_replace("[\n|\r|\n\r]", '', $r));
		$result['code'] =400;
		$result['status'] ='error';
                } 
                
                }

                }
                else
                {
                $res = $this->model->delete_calificacion($_DELETE);
		
		if($res==true)
		{
		$result['msg'] = 'Calificacion eliminada correctamente';
		$result['code'] =200;
		$result['success'] ='ok';

		}
		else
		{
		$result['msg'] = 'Ocurrio un Error';
		$result['code'] = 500;
		$result['success'] ='Error';

		}
               
		}    
    }
         echo json_encode($result); 
    	
	
	}



	public function request_headers() {
        $arh = array();
        $rx_http = '/\AHTTP_/';
        foreach($_SERVER as $key => $val) {
                if( preg_match($rx_http, $key) ) {
                        $arh_key = preg_replace($rx_http, '', $key);
                        $rx_matches = array();
                        // do string manipulations to restore the original letter case
                        $rx_matches = explode('_', $arh_key);
                        if( count($rx_matches) > 0 and strlen($arh_key) > 2 ) {
                                foreach($rx_matches as $ak_key => $ak_val) $rx_matches[$ak_key] = ucfirst($ak_val);
                                $arh_key = implode('-', $rx_matches);
                        }
                        $arh[$arh_key] = $val;
                }
        }
        return( $arh );
      }	


	public function no_access()
	{
	$result['code'] =401;
	$result['msg'] = 'Acceso no autorizado';  
	$result['status'] ='Unauthorized';
	$result['details']='';

	echo json_encode($result);	
	}

	public function in_access($api_ok)
	{
	$headers = $this->request_headers();	
        $api_key = @$headers['X-API-KEY'];
 	$response = array();

	if($api_key == $api_ok) {
                $authorized = true;
        } else if ($api_key == NULL) {
                $response["error"] = true;
                $response["message"] = '{"error":{"text": "api key not sent" }}';
                $authorized = false;
        } else {
                $response["error"] = true;
                $response["message"] = '{"error":{"text": "api key invalid" }}';
                $authorized = false;
        }
 
        if(!$authorized){
	return false;
        }	
        else
	{
	return true;
	}
		
	}



}
?>
