<?php
	class temp extends CI_Controller
	{
		
			public function __construct() {
	        parent::__construct();
	        $this->load->database();
	    }


    /**
    * Create from display view
    *
    * @return Response
   */
	    public function index()
	    {
	        $this->load->view('temp_view');
	    }


    /**
    * response of ajax json
    *
    * @return Response
   */
	    public function ajaxPro()
	    {
	        $query = $this->input->get('query');
	        $this->db->like('country_name', $query);


	        $data = $this->db->get("tbl_country")->result();
	        

	        echo json_encode( $data);
	    }
	}
?>