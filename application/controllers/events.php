<?php
class Events extends CI_Controller {
    public function uic() {
        $data['school'] = "UIC";
        $this->load->view("events", $data);
    }
    public function depaul() {
        $data['school'] = "DePaul";
        $this->load->view("events", $data);
    }
}
?>
