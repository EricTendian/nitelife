<?php
function formatdate($start, $end=false) {
    $start = strtotime($start);
    $date = "<strong>".date('g:i', $start)."</strong>".date('A',$start);
    if ($end) {
        $end = strtotime($end);
        $date .= " - <strong>".date('g:i', $end)."</strong>".date('A',$end);
        if (date("z", $start)!=date("z", $end)) $date .= " ".date("n/j", $end);
    }
    return $date;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>NiteLife</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css">
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
    </head>
    <body>
        <div id="eventlist" data-role="page">
            <div data-role="header" data-position="fixed">
                <h1>Events - <?php echo $school; ?></h1>
                <a href="/" class="ui-btn ui-icon-back ui-btn-icon-left">Home</a>
            </div>
            <div data-role="content">
                <ul data-role="listview" data-theme="d" data-divider-theme="d">
<?php 		foreach ($eventlist as $day=>$events) { ?>
                    <li data-role="list-divider"><?php echo date("l, F j, Y", strtotime($day)); ?>
                        <span class="ui-li-count"><?php echo count($events); ?></span>
                    </li>
<?php 			foreach ($events as $event) { ?>
                    <li>
                        <a href="/events/view/<?php echo $event['id']; ?>"<?php if (floatval($event['cost'])>0) echo ' class="hascost"'; ?>>
                            <h3><?php echo $event['name']; ?></h3>
                            <p><strong>Hosted by <?php echo $event['organizer']; ?></strong></p>
                            <p><?php echo $event['description']; ?></p>
                            <p class="ui-li-aside"><?php echo formatdate($event['start_time'], $event['end_time']); ?></p>
                        </a>
                    </li>
<?php 			} ?>
<?php 		} ?>
                </ul>
            </div>
        </div>
    </body>
</html>
