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
                    <li data-role="list-divider">Friday, December 8, 2014
                        <span class="ui-li-count">2</span>
                    </li>
                    <li>
                        <a href="/event/view/1">
                            <h3>An Event Name</h3>
                            <p><strong>Hosted by {Business Name}</strong></p>
                            <p>Short blurb here</p>
                            <p class="ui-li-aside"><strong>6:24</strong>PM</p>
                        </a>
                    </li>
                    <li>
                        <a href="/event/view/2">
                            <h3>An Event Name</h3>
                            <p><strong>Hosted by {Business Name}</strong></p>
                            <p>Short blurb here</p>
                            <p class="ui-li-aside"><strong>9:18</strong>AM</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </body>
</html>
