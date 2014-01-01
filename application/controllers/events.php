<?php
class Events extends CI_Controller {
    public function uic() {
        $data['school'] = "UIC";
        $this->load->model('event', '', true);
        $data['eventlist'] = $this->event->list_events('uic');
        $this->load->view("events", $data);
    }
    public function depaul() {
        $data['school'] = "DePaul";
        $this->load->model('event', '', true);
        $data['eventlist'] = $this->event->list_events('depaul');
        $this->load->view("events", $data);
    }
    public function view($id) {
        $this->load->model('event', '', true);
        $data = $this->event->get_event($id);
        if ($data) $this->load->view("event", $data);
        else show_404($this->input->server('REQUEST_URI'));
    }
}
?>
