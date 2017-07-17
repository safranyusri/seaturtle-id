<?php

class allspecies extends CI_Controller {

        public function __construct()
        {
                parent::__construct();

                $this->load->model('M_penyu');
				$this->load->model('M_allspecies');
				$this->load->helper('url');
				$this->load->helper('text');
				$this->load->helper('form');
        }


		public function index()
		{
				$data['allspecies'] = $this->M_allspecies->get_all_characters();
				$data['title'] = 'Identification by Visual Interpretation';
				$this->load->view('allspecies', $data);
				$this->load->view('header', $data);
				$this->load->view('nav', $data);
				$this->load->view('footer', $data);
		}

		
		
	
}
