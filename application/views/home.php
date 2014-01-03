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
        <div id="home" data-role="page">
            <div data-role="header" data-theme="a" data-position="fixed">
                <h1>NiteLife</h1>
            </div>
            <div data-role="content">
                <h2>NiteLife</h2>
                <a href="#selectschool" class="ui-btn ui-shadow ui-corner-all" data-rel="dialog" data-transition="pop">View Events</a>
                <a href="/events/create/" class="ui-btn ui-shadow ui-corner-all">Create Event</a>
            </div>
            
        </div>
        <div data-role="page" id="selectschool">

            <div data-role="header" data-theme="b">
                <h1>Choose your University</h1>
            </div>

            <div role="main" class="ui-content">
                <h2>Press a button:</h2>
                <a href="/events/uic/" class="ui-btn ui-shadow ui-corner-all ui-btn-a">UIC</a>
                <a href="/events/depaul/" class="ui-btn ui-shadow ui-corner-all ui-btn-a">DePaul</a>
            </div>
        </div>
    </body>
</html>
