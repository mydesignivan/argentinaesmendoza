<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Guia_turistica extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();
        $this->load->library('dataview', array(
            'tlp_section'     =>  'frontpage/guiaturistica_view.php',
            'tlp_title'       =>  TITLE_GUIATURISTICA
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
            'tlp_title_section' => 'Gu&iacute;a tur&iacute;stica'
        ));
        $this->load->view('template_frontpage_view', $this->_data);
    }

}
?>