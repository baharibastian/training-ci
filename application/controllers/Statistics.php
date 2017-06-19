<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Statistics extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_statistics');
        $this->load->model('model_link_stats');

    }
 
    public function index()
    {
        $this->load->helper('url');
        $this->load->view('statistics');
    }
 
    public function ajax_list()
    {
        $list = $this->model_statistics->get_datatables();
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $statistics) {
            $no++;
            $row = array();
            $row[] = $statistics->id;
            $row[] = $statistics->code;
            $row[] = $statistics->link;
            $row[] = "<a href=statistics/view/$statistics->id>View</a>";
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->model_statistics->count_all(),
                        "recordsFiltered" => $this->model_statistics->count_filtered(),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }

    public function view($id) {
        $data['id'] = $id;
        $this->load->view('stats',$data);
    }

    public function ajax_link_stats($link_id)
    {
        $list = $this->model_link_stats->get_datatables($link_id);
        $data = array();
        $no = $_POST['start'];
        foreach ($list as $statistics) {
            $no++;
            $row = array();
            $row[] = $statistics->time;
            $row[] = $statistics->ip;
            $row[] = $statistics->browser;
 
            $data[] = $row;
        }
 
        $output = array(
                        "draw" => $_POST['draw'],
                        "recordsTotal" => $this->model_link_stats->count_all($link_id),
                        "recordsFiltered" => $this->model_link_stats->count_filtered($link_id),
                        "data" => $data,
                );
        //output to json format
        echo json_encode($output);
    }
 
 
}