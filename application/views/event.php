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
        <div id="event" data-role="page">
            <div data-role="header" data-position="fixed">
                <h1><?php echo $name; ?></h1>
                <a href="javascript:window.history.back();" class="ui-btn ui-icon-back ui-btn-icon-left">Events</a>
            </div>
            <div data-role="content">
                <h2><?php echo $name; ?></h2>
                <h3>By <!--<a href="/business/<?php echo $organizer['id'];?>">--><?php echo $organizer['name']; ?><!--</a>--></h3>
                <h4><?php echo date('g:i A l, n/j/Y', strtotime($start_time)); if ($end_time) echo ' - '.date('g:i A l, n/j/Y', strtotime($end_time)); ?></h4>
                <h4><?php echo $location; ?></h4>
                <h4>Cost: $<?php echo $cost; ?></h4>
                <?php echo $description; ?>
            </div>
            <div data-role="footer" data-theme="b" data-position="fixed">
                <a href="#" class="ui-btn ui-shadow" style="display:block">I'm going!</a>
            </div>
        </div>
    </body>
</html>
