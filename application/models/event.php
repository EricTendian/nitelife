<?php
class Event extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    function getOrgName($id) {
        $this->db->select('name');
        $this->db->where('id', $id);
        $query = $this->db->get('businesses');
        return $query->first_row()->name;
    }

    function get_event($id) {
        $query = $this->db->get_where('events', array('id' => $id));
        $data = $query->first_row('array');
        if (empty($data)) return false;
        $data['organizer'] = array('id'=>$data['organizer'], 'name'=>$this->getOrgName($data['organizer']));
        return $data;
    }

    function list_events($school) {
        $events = array(); //we use this to make our first list of events
        $this->db->select('id, name, description, start_time, end_time, cost, organizer');
        $this->db->where('school', $school);
        $query = $this->db->get('events');
        //add results to our list
        foreach($query->result_array() as $row) {
            $row['organizer'] = $this->getOrgName($row['organizer']);
            $events[] = $row;
        }

        //start organizing results
        $eventlist = array();
        foreach($events as $event) {
            $key = date('Y/m/d', strtotime($event['start_time']));
            $eventlist[$key][] = $event;
        }

        function sorttime($a, $b) {
            $timeA = strtotime($a['start_time']);
            $timeB = strtotime($b['start_time']);
            if ($timeA == $timeB) {
                return 0;
            }
            return $timeA < $timeB;
        }
        //now we sort each day's events based on start time
        foreach($eventlist as $dayevents) usort($dayevents, 'sorttime');

        return $eventlist;
    }
}
?>
