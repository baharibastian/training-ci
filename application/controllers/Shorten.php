<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shorten extends CI_Controller { //Shorten extends CI -note the capital S

    public function __construct() {
        parent::__construct();
        $this->load->library('user_agent');
    }

    public function index() //called by default
    {
        if($this->session->userdata('id')!=null) {
            $data=array(); //data to be sent to the view 🙂
            if($this->input->post('url'))//did the user post a URL to be shorten?
            {
                $short_url = "";
                $url = prep_url($this->input->post('url'));
                $link_length = $this->config->item('link_length');
                // Check to see if this URL has an Alias
                $existing_alias = $this->alias_from_url($url);
                // Generate a new alias if needed
                if ($existing_alias == "") {
                    $this->load->helper('string');
                    $alias = random_string('alnum', $link_length);
                    while ($this->does_alias_exist($alias)) {
                        $alias = random_string('alnum', $link_length);
                    }
                    $this->save_url($url, $alias);
                    $short_url = $alias;
                } else {
                    $short_url = $existing_alias;
                }
                $data['short_url'] = $short_url;
                // $this->load->model('short_url_model');//load the model which deals with data for short URLs
                // $short_url=$this->short_url_model->store_long_url();//store the URL and get back the shorten URL
                // $this->save_url($short_url,$this->input->post('url'));
                // if($short_url)//using PHP's awesome power
                // {
                //     $data['short_url']=$short_url;
                // }
                // else //there was an error
                // {
                //     $data['error']=validation_errors();
                // }
            }

            $this->load->view('get_url', $data);//load the single view get_url and send any data to it
        } else {
            redirect('users/login');
        }
    }

    public function save_url($url,$code) {
        $data = array(
            'id'        => null,
            'user_id'   => '2',
            'title'     => '',
            'code'      => $code,
            'link'      => $url,
            'created'   => date('Y-m-d H:i:s')
            );
        $this->db->insert('links',$data);
    }

    public function get_shorty() //this function is called by the routes file using the 404_override 🙂
    {
        $this->load->model('short_url_model'); //load the model for dealing with short URLs
        $shorty=$this->uri->segment(1);//get the segment the user requested e.g. Nw from http://short.local/Nw
        $this->db->select('id');
        $this->db->from('links');
        $this->db->where('code',$shorty);
        $id = $this->db->get()->row()->id;
        $this->save_link_stats($id);
        redirect($this->short_url_model->get_long_url($shorty));//direct the user to the long URL the short URL is connected to
    }

    public function error_404() //a little error for when users enter an invalid short URL
    {
        $data['error']='Whoops cannot find that URL!';
        $this->load->view('get_url', $data);//load our single view 🙂
    }

    function save_link_stats($link_id) {
        $data = array(
            'id'        => null,
            'link_id'   => $link_id,
            'ip'        => $_SERVER['REMOTE_ADDR'],
            'browser'   => $this->agent->browser(),
            'time'      => date('Y-m-d H:i:s')
        );
        $this->db->insert('link_stats',$data);
    }

    function does_alias_exist($alias)
    {
        $this->db->select('id');
        $query = $this->db->get_where('links', array('code' => $alias), 1, 0);
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function alias_from_url($url) {
        $alias = "";
        $this->db->select('code');
        $query = $this->db->get_where('links', array('link' => $url), 1, 0);
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $alias = $row->code;
            }
        }

        return $alias;
    }

}