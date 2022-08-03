<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
        parent::__construct();
        $this->load->model('M_Home');
    }

    public function index(){
        $data['indikator']  = $this->M_Home->getIndikator();
        $data['buktidata'] = $this->M_Home->getBukti();
        $this->load->view('V_Home', $data);
    }
 
    public function save(){
        $data = array(
            'responsibility' => $this->input->post('responsibility'),
            'unit' => $this->input->post('unit'),
            'btw1' => $this->input->post('btw1'),
            'ttw1' => $this->input->post('ttw1'),
            'btw2' => $this->input->post('btw2'),
            'ttw2' => $this->input->post('ttw2'),
            'btw3' => $this->input->post('btw3'),
            'ttw3' => $this->input->post('ttw3'),
            'btw4' => $this->input->post('btw4'),
            'ttw4' => $this->input->post('ttw4'),
            'strategi' => $this->input->post('strategi'),
        );
        $this->M_Home->saveIndikator($data);
        redirect('Home');
    }

    public function saveL(){
        $data = array(
            'bukti' => $this->input->post('bukti'),
            'link' => $this->input->post('link'),
        );
        $this->M_Home->saveBukti($data);
        redirect('Home');
    }
 
    public function update(){
        $id = $this->input->post('no');
        $data = array(
            'responsibility' => $this->input->post('responsibility'),
            'unit' => $this->input->post('unit'),
            'btw1' => $this->input->post('btw1'),
            'ttw1' => $this->input->post('ttw1'),
            'btw2' => $this->input->post('btw2'),
            'ttw2' => $this->input->post('ttw2'),
            'btw3' => $this->input->post('btw3'),
            'ttw3' => $this->input->post('ttw3'),
            'btw4' => $this->input->post('btw4'),
            'ttw4' => $this->input->post('ttw4'),
            'strategi' => $this->input->post('strategi'),
        );
        $this->M_Home->updateIndikator($id, $data);
        redirect('Home');
    }

    public function updateL(){
        $id = $this->input->post('no');
        $data = array(
            'bukti' => $this->input->post('bukti'),
            'link' => $this->input->post('link'),
        );
        $this->M_Home->updateBukti($id, $data);
        redirect('Home');
    }
 
    public function delete($id){
        $this->M_Home->deleteIndikator($id);
        redirect('Home');
    }
    
    public function deleteL($id){
        $this->M_Home->deleteBukti($id);
        redirect('Home');
    } 

}