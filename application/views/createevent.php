<!DOCTYPE html>
<html>
    <head>
        <title>NiteLife</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css">
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
        <script src="/assets/js/jquery.timepicker.min.js"></script>
        <link rel="stylesheet" href="/assets/css/jquery.timepicker.css" />
    </head>
    <body>
        <div id="createevent" data-role="page">
            <div data-role="header" data-position="fixed">
                <h1>Create New Event</h1>
                <a href="javascript:window.history.back();" class="ui-btn ui-icon-back ui-btn-icon-left">Home</a>
            </div>
            <div data-role="content">
                <form name="event" action="/events/create/" method="POST">
                    <label for="name" class="required">Event Name:</label>
                    <input type="text" name="name" id="name" value="" />
                    <label for="organizer" class="required">Business Name:</label>
                    <input type="text" name="organizer" id="organizer" value="" />
                    <label for="startdate" class="required">Start Date:</label>
                    <input type="text" name="startdate" id="startdate" data-role="date" data-inline="true" />
                    <label for="starttime" class="required">Start Time:</label>
                    <input type="text" name="starttime" id="starttime" autocomplete="off" />
                    <label for="enddate">End Date:</label>
                    <input type="text" name="enddate" id="enddate" data-role="date" data-inline="true" />
                    <label for="endtime">End Time:</label>
                    <input type="text" name="endtime" id="endtime" autocomplete="off" />
                    <label for="location" class="required">Location/Address:</label>
                    <textarea cols="40" rows="8" name="location" id="location"></textarea>
                    <label for="cost" class="required">Cost:</label>
                    <input type="range" name="cost" id="cost" value="0" min="0" max="100" data-highlight="true" />
                    <label for="description" class="required">Event description:</label>
                    <textarea cols="40" rows="20" name="description"></textarea>
                    <input type="submit" value="Add Event" />
                </form>
            </div>
        </div>
    </body>
</html>
