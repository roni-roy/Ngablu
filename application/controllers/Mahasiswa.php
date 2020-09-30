<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Mahasiswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $this->load->model('MahasiswaModel'); 
    }

    public function index()
    {
        $data['mahasiswa'] = $this->MahasiswaModel->view();
        /* $this->load->view('mahasiswa/index', $data); */
		$this->template->load('mahasiswa/home',$data);
    }

    public function tambah()
    {
        if ($this->input->post('submit')) { 
            if ($this->MahasiswaModel->validation("save")) { 
                $this->MahasiswaModel->save(); 
                redirect('mahasiswa/ruang');
            }
        }

        //$this->load->view('mahasiswa/form_tambah');
		$this->template->load('mahasiswa/form_tambah');
    }

    public function ubah($nis)
    {
        if ($this->input->post('submit')) { 
            if ($this->MahasiswaModel->validation("update")) { 
                $this->MahasiswaModel->edit($nis); 
                redirect('mahasiswa/ruang');
            }
        }

        $data['mahasiswa'] = $this->MahasiswaModel->view_by($nis);
        //$this->load->view('mahasiswa/form_ubah', $data);
		$this->template->load('mahasiswa/form_ubah',$data);
    }

    public function hapus($nim)
    {
        $this->MahasiswaModel->delete($nim);
        redirect('mahasiswa/ruang');
    }
    
    public function read()
    {
        $data['mahasiswa'] = $this->MahasiswaModel->view();
        /* $this->load->view('mahasiswa/index', $data); */
		$this->template->load('mahasiswa/read',$data);
    }
    
    public function login()
    {
        $data['mahasiswa'] = $this->MahasiswaModel->view();
        /* $this->load->view('mahasiswa/index', $data); */
		$this->template->load('mahasiswa/login',$data);
    }
    
    public function ruang()
    {
        $data['mahasiswa'] = $this->MahasiswaModel->view();
        /* $this->load->view('mahasiswa/index', $data); */
		$this->template->load('mahasiswa/ruang',$data);
    }
    
     public function logout()
    {
        $data['mahasiswa'] = $this->MahasiswaModel->view();
        /* $this->load->view('mahasiswa/index', $data); */
		$this->template->load('mahasiswa/logout',$data);
    }


}
