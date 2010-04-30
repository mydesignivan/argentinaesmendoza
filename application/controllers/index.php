<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Index extends Controller {

    /* CONSTRUCTOR
     **************************************************************************/
    function __construct(){
        parent::Controller();

        $this->load->library('webservice');

        $this->load->library('dataview', array(
            'tlp_section'     =>  'frontpage/index_view.php',
            'tlp_title'       =>  TITLE_INDEX
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
            'tlp_title_section' => 'Destacados',
            'tlp_script'        => array('datepicker', 'fly'),
            'divisas'           => $this->webservice->get_cotizacion(),
            'clima'             => $this->webservice->get_clima('ARMA0056')
        ));
        
        $this->load->view('template_frontpage_view', $this->_data);
    }

}
?>