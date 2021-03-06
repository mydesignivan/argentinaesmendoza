<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class telefonos_utiles extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();
        $this->load->library('dataview', array(
            'tlp_section'     =>  'frontpage/telutil_view.php',
            'tlp_title'       =>  TITLE_TELUTIL
        ));
        $this->_data = $this->dataview->get_data();
    }

    /* PRIVATE PROPERTIES
     **************************************************************************/
    private $_data;

    /* PUBLIC FUNCTIONS
     **************************************************************************/
    public function index(){
        $this->_data = $this->dataview->set_data(array(
            'tlp_title_section' => 'Tel&eacute;fonos &uacute;tiles'
        ));
        $this->load->view('template_frontpage_view', $this->_data);
    }

}
?>