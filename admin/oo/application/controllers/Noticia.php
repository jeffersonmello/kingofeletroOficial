<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noticia extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('noticia_model','noticia');
    }

    public function index()
    {
        $this->load->helper('url');
        $this->load->view('noticia_view');
    }

    public function ajax_list()
    {
        $list = $this->noticia->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $noticia) {
            $no++;
            $row = array();
			$row[] = $noticia->guid;
            $row[] = $noticia->titulo;
            $row[] = $noticia->data;
            $row[] = $noticia->noticia;

            //add html for action
            $row[] = '<a class="btn btn-sm btn-primary" href="javascript:void()" title="Edit" onclick="edit_noticia('."'".$noticia->guid."'".')"><i class="glyphicon glyphicon-pencil"></i> Edit</a>
                  <a class="btn btn-sm btn-danger" href="javascript:void()" title="Hapus" onclick="delete_noticia('."'".$noticia->guid."'".')"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

            $data[] = $row;
        }

        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->noticia->count_all(),
                        "recordsFiltered" => $this->noticia->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function ajax_edit($guid)
    {
        $data = $this->noticia->get_by_id($guid);
        echo json_encode($data);
    }

    public function ajax_add()
    {
        $data = array(
                'titulo' => $this->input->post('titulo'),
                'data' => $this->input->post('data'),
                'noticia' => $this->input->post('noticia'),
            );
        $insert = $this->noticia->save($data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_update()
    {
        $data = array(
                'titulo' => $this->input->post('titulo'),
                'data' => $this->input->post('data'),
                'noticia' => $this->input->post('noticia'),
            );
        $this->noticia->update(array('guid' => $this->input->post('guid')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function ajax_delete($guid)
    {
        $this->noticia->delete_by_id($guid);
        echo json_encode(array("status" => TRUE));
    }

}
