<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/**
 * CodeIgniter CI_Controller Class Extension
 *
 * initializes common controller settings, this is to be derived by all controllers of this application
 *
 * @name    DH_Controller
 * @category    Core Libraries
 * @author  Ilir Kurti
 * @link
 */

class MY_Controller extends CI_Controller {
    protected $data;

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
    }

    public function clean_data(){
        unset($data);
        $path=base_url();
        $this->data['path']="{$path}metro";

    }
    /**
     * final view codes for showing template
     */
    public function view($template,$data=NULL)
    {
        //assigns all data as smarty variables. Reduces smarty assignment in controllers
        if($data != NULL)
        {
            foreach($data as $key => $value)
            {
                $this->smarty->assign($key, $value);
            }
        }

        $this->smarty->view($template.".tpl");
    }


}