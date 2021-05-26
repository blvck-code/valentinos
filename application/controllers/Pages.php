<?php

	class Pages extends CI_Controller{
		public function index($page = 'home'){
//			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
//				show_404();
//			}

			$data['title'] = "Home";
			$data['active'] = "index";


			$this->load->view('commons/imports');
			$this->load->view('commons/loader');
			$this->load->view('pages/'.$page, $data);
			$this->load->view('commons/dishes');
			$this->load->view('commons/menu');
			$this->load->view('commons/book');
			$this->load->view('commons/footer');
			
		}

		public function about(){

			$data['title'] = 'about us';
			$data['link'] = 'about';
			$data['active'] = "about";

			$this->load->view('commons/imports');
			$this->load->view('commons/loader');
			$this->load->view('commons/header');
			$this->load->view('commons/breadcrumb', $data);
			$this->load->view('pages/about');
			$this->load->view('commons/footer');
		}

		public function menu(){

			$data['title'] = 'food menu';
			$data['link'] = 'menu';

			$this->load->view('commons/imports');
			$this->load->view('commons/loader');
			$this->load->view('commons/header');
			$this->load->view('commons/breadcrumb', $data);
			$this->load->view('pages/menu');
			$this->load->view('commons/dishes');
			$this->load->view('commons/menu');
			$this->load->view('commons/book');
			$this->load->view('commons/footer');
		}

		public function contact(){

			$data['title'] = 'contact us';
			$data['link'] = 'contact';

			$this->load->view('commons/imports');
			$this->load->view('commons/loader');
			$this->load->view('commons/header');
			$this->load->view('commons/breadcrumb', $data);
			$this->load->view('pages/contact');
			$this->load->view('commons/footer');
		}

		public function reservation(){

			$data['title'] = 'reservation';
			$data['link'] = 'reservation';


			$this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('mobile', 'Mobile', 'required');
            $this->form_validation->set_rules('date', 'Date', 'required');
            $this->form_validation->set_rules('persons', 'Persons', 'required');


			$this->load->view('commons/imports');
			$this->load->view('commons/loader');
			$this->load->view('commons/header');
			$this->load->view('commons/breadcrumb', $data);
			$this->load->view('pages/reservation');
			$this->load->view('commons/footer');
		}
	}
