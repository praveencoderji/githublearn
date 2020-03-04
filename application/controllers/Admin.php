<?php
class Admin extends MY_Controller
{
public function index()
{
  $this->load->library('form_validation');
  $this->form_validation->set_rules('uname','user name','required|alpha');
  $this->form_validation->set_rules('pass','Password','required|max_length[12]');
  $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
  if($this->form_validation->run())
    {
      $uname=$this->input->post('uname');
      $pass=$this->input->post('pass');
      $this->load->model('loginmodel');
      $id=$this->loginmodel->isvalidate($uname,$pass);
      if($id)
      {
      	$this->load->library('session');
      	$this->session->set_userdata('id',$id);
      	return redirect('Admin/welcome');
      

      }else{

           echo "not match";
      }

  }
  else
  {
  	$this->load->view('admin/login');
  
  }
}
public function welcome()
{
	    $this->load->model('loginmodel');
	    $articles=$this->loginmodel->articleList();
    	$this->load->view('admin/dashboard',['article'=>$articles]);


}


}


?>