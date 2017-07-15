<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
<Say voice="alice">
Good Morning! Welcome to Twilio Session.
</Say>
<Pause length="1"/>
<Say voice="alice">
Let us know if we can help you in any way during your development.
</Say>
<Play>http://demo.twilio.com/hellomonkey/monkey.mp3</Play>
<Gather numDigits="1" action="twilioIVRResponse.php" method="POST">
        <Say>To speak to actual monkey , press 1.  Press any other key to start over.</Say>
</Gather>
</Response>