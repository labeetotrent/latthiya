<?php if ( ! defined('BASEPATH')) exit('No direct access allowed');

class Pages_module extends Main_Controller {

	public function __construct() {
		parent::__construct(); 																	// calls the constructor
		$this->load->model('Pages_model'); 														// load the menus model
		$this->lang->load('pages_module/pages_module');
	}

	public function index() {
		if ( ! file_exists(EXTPATH .'pages_module/views/pages_module.php')) { 								//check if file exists in views folder
			show_404(); 																		// Whoops, show 404 error page!
		}

		if (is_numeric($this->input->get('page_id'))) {
			$data['page_id'] = $this->input->get('page_id');
		} else {
			$data['page_id'] = 0;
		}


		$data['pages'] = array();
		$results = $this->Pages_model->getPages(); 										// retrieve all menu categories from getCategories method in Menus model
		foreach ($results as $result) {															// loop through menu categories array

			if (in_array('side_bar', $result['navigation'])) {
				$data['pages'][] = array( 														// create array of category data to pass to view
					'page_id'		=>	$result['page_id'],
					'name'			=>	$result['name'],
					'href'			=>	site_url('pages?page_id='. $result['page_id'])
				);
			}
		}

		// pass array $data and load view files
		return $this->load->view('pages_module/pages_module', $data, TRUE);
	}
}

/* End of file pages_module.php */
/* Location: ./extensions/pages_module/controllers/pages_module.php */