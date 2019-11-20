<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	/*public function curang(){
		echo"Saya merasa dicurangi -02";
	}*/
	public function index(){	
		//$username = $this->session->userdata('username'); 
		//if($this->simple_login->cek_login() == 0){
			$this->load->view('account/beranda');
		//  }
		// else{
		//  	redirect(site_url('Welcome/dashboard'));

		// }
		
	}

	public function add_data(){
		$this->load->view('account/v_register');
	}

	public function insert(){
		$this->load->model('M_account');

		$this->load->library(array('form_validation'));

		$this->form_validation->set_rules('nama', 'NAME','required');
		$this->form_validation->set_rules('username', 'USERNAME','required');
		$this->form_validation->set_rules('email','EMAIL','required|valid_email');
		$this->form_validation->set_rules('password','PASSWORD','required');
		if($this->form_validation->run() == FALSE) {
			$this->load->view('account/v_register');
		}else{

		$data = array(
			'email' => $this->input->post('email'),
			'nama'  => $this->input->post('nama'),
			'password' => md5($this->input->post('password')),
			'username' => $this->input->post('username')
		);
		
	
			
		$data = $this->M_account->Insert('users', $data);
	
		$this->load->view('account/v_success');
	}
	}

	public function delete_data(){
		$id_user = $this->session->userdata('id'); 

		$akun = array('id_user' => $id_user);
		$this->load->model('M_account');
		$this->M_account->Delete('users',$akun);
		$this->load->view('account/dashboarddelete');
	}

	public function GetWhere($table, $data){
		$res=$this->db->get_where($table. $data);
		return $res->result_array();
	}

	public function edit_data(){
		$this->load->model('M_account');
		
		//$akun = $this->M_account->GetWhere('users', array('id_user' => $id_user));

		$id_user = $this->session->userdata('id'); 
		$akun = $this->M_account->GetWhere('users', array('id_user' => $id_user));
		$data = array(
			'email' => $akun[0]['email'],
			'nama' => $akun[0]['nama'],
			'password' => $akun[0]['password'],
			'username' => $akun[0]['username']
		);
		$this->load->view('account/v_edit',$data);
		
	}

	public function update_data(){
		$this->load->model('M_account');

		$nama = $_POST['nama'];
		$password = $_POST['password'];
		$username = $_POST['username'];
		$email = $_POST['email'];

		$data = array(
			'nama' => $nama,
			'password' => md5($password),
			'username' => $username,
			'email' => $email

		);

		$id_user = $this->session->userdata('id'); 

		$where = array(
			'id_user' => $id_user,
		);
		$res = $this->M_account->Update('users', $data, $where);
		if($res>0){
			$this->load->view('account/dashboardedit', $data);
		}
	}

	public function dsb_login(){
		$this->load->model('M_account');
		$id_user = $this->session->userdata('id'); 
		$akun = $this->M_account->GetWhere('pendaftar', array('id_user' => $id_user));
		$data = array(
			'id_pendaftaran' => $akun[0]['id_pendaftaran']
		);
		$this->load->view('dsb_sudah_daftar',$data);
	}
	public function login() {  
		// Fungsi Login  
		$this->load->model('M_account');

        $valid = $this->form_validation;  
        $username = $this->input->post('username');  
        $password = $this->input->post('password');  
        $valid->set_rules('username','Username','required');  
	    $valid->set_rules('password','Password','required');  

        if($valid->run()) {  
			$this->simple_login->login($username,$password);  
		
			$id_user = $this->session->userdata('id'); 
			$akun = $this->M_account->GetWhere('pendaftar', array('id_user' => $id_user));

			if($akun== NULL){
				redirect(site_url('Welcome/dashboard'));
			}else{
				redirect(site_url('Welcome/dsb_login'));  
			}
		}  
    	// End fungsi login  
        $this->load->view('account/v_login');  
	}  
	
	public function cek_login() {  
        if($this->simple_login->cek_login() == 0) {
			redirect(site_url('Welcome/login'));
		}
    }  

    public function logout(){  
        $this->simple_login->logout();  
	}      
	


    //Load Halaman dashboard
    public function dashboard() {  
		$this->simple_login->cek_login();  

		$this->load->model('M_account');

		$id_user = $this->session->userdata('id'); 
		$akun = $this->M_account->GetWhere('pendaftar', array('id_user' => $id_user));

		if($akun== NULL){
        	$this->load->view('account/v_dashboard');  
		}else{
			redirect(site_url('Welcome/dsb_login'));  
		}
	}
	

	public function view_bukutamu(){
		$this->load->model('M_account');
		$data = $this->M_account->GetAkun('buku_tamu');
		$data = array('data' => $data);

		$username = $this->session->userdata('username'); 

		if($username == NULL){
			$this->load->view('belumlogin/bukutamu',$data);  
		}
		else{

		$this->load->view('sudahlogin/bukutamu',$data);  
		}
	}

	public function add_bukutamu(){
				//MENGAMBIL ID_USER MELALUI AKUN USERNAME
		$username = $this->session->userdata('username'); 

		if($username == NULL){
				redirect(site_url('Welcome/cek_login'));  
		}
		else{

		
		$komentar = $_POST['komentar'];
		$data = array(
			'komentar' => $komentar,
			'username' => $username
		);

		/*$where = array(
			'id_user' => $id_user
		);*/
		$this->load->model('M_account');

		$res = $this->M_account->insert('buku_tamu', $data);
		if($res>0){
			redirect('Welcome/view_bukutamu','refresh');
		}
	}

	}

	public function daftar_kegiatan(){
		$id = $this->session->userdata('id'); 
		$data = array(
			'id_user' => $id
		);

		$this->load->model('M_account');

		$res = $this->M_account->insert('pendaftar', $data);
		if($res>0){
			redirect('Welcome/tampil_kode_pendaftaran','refresh');
		}
	}
	public function tampil_kode_pendaftaran(){
		$this->load->model('M_account');
		$id_user = $this->session->userdata('id'); 
		$akun = $this->M_account->GetWhere('pendaftar', array('id_user' => $id_user));
		$data = array(
			'id_pendaftaran' => $akun[0]['id_pendaftaran']
		);
		$this->load->view('notif_pendaftaran',$data);
	}

	public function artikel1(){
		$username = $this->session->userdata('username');
		//load library disqus
		$this->load->library('disqus');

		//membuat variabel disqus
		$data['disqus'] = $this->disqus->get_html();

		//parsing data ke dalam view
	 
		if($username == NULL){ 
			$this->load->view('belumlogin/artikel1',$data);
		}
		else{
			$this->load->view('sudahlogin/artikel1',$data);
		}
	}

	public function artikel(){
		$username = $this->session->userdata('username');
				//load library disqus
				$this->load->library('disqus');

				//membuat variabel disqus
				$data['disqus'] = $this->disqus->get_html();
		
		if($username == NULL){ 
			$this->load->view('belumlogin/artikel',$data);
		}
		else{
			$this->load->view('sudahlogin/artikel',$data);
		}
	}

	public function artikel2(){
		$username = $this->session->userdata('username');
				//load library disqus
				$this->load->library('disqus');

				//membuat variabel disqus
				$data['disqus'] = $this->disqus->get_html();
		
		if($username == NULL){ 
			$this->load->view('belumlogin/artikel2',$data);
		}
		else{
			$this->load->view('sudahlogin/artikel2',$data);
		}
	}
	public function artikelcp(){
		$username = $this->session->userdata('username');
				//load library disqus
				$this->load->library('disqus');

				//membuat variabel disqus
				$data['disqus'] = $this->disqus->get_html();
		
		if($username == NULL){ 
			$this->load->view('belumlogin/artikelcp',$data);
		}
		else{
			$this->load->view('sudahlogin/artikelcp',$data);
		}
	}
	public function artikelhiv(){
		$username = $this->session->userdata('username');
				//load library disqus
				$this->load->library('disqus');

				//membuat variabel disqus
				$data['disqus'] = $this->disqus->get_html();
		
		if($username == NULL){ 
			$this->load->view('belumlogin/artikelhiv',$data);
		}
		else{
			$this->load->view('sudahlogin/artikelhiv',$data);
		}
	}
	public function artikelll(){
		$username = $this->session->userdata('username');
				//load library disqus
				$this->load->library('disqus');

				//membuat variabel disqus
				$data['disqus'] = $this->disqus->get_html();
		
		if($username == NULL){ 
			$this->load->view('belumlogin/artikelll',$data);
		}
		else{
			$this->load->view('sudahlogin/artikelll',$data);
		}
	}


	public function view_artikel(){
		$username = $this->session->userdata('username');
		
		if($username == NULL){ 
			$this->load->view('belumlogin/view_artikel');
		}
		else{
			$this->load->view('sudahlogin/view_artikel');
		}
	}

	public function view_galeri(){
		$username = $this->session->userdata('username');
		
		if($username == NULL){ 
			$this->load->view('belumlogin/galeri');
		}
		else{
			$this->load->view('sudahlogin/galeri');
		}
	}


}
?>
