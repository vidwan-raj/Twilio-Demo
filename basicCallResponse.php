<?php
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
<!-- <Play>http://demo.twilio.com/hellomonkey/monkey.mp3</Play> -->
<Say voice="alice">
Good Morning! Welcome to Code for Good 2017.
</Say>
<Pause length="1"/>
<Say voice="alice">
Let us know if we can help you in any way during your development.
</Say>
</Response>