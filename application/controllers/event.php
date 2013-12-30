<?php
class Event extends CI_Controller {
    public function view($id) {
        $this->load->view("event", array("id"=>$id));
    }
}
?>
