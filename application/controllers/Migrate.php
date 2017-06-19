<?php

class migrate extends CI_Controller {

    public function index() {
        if(!$this->migration->latest()) {
             show_error($this->migration->error_string());
        }
    }
}