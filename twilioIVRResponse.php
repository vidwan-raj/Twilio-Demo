<?php

    // if the caller pressed anything but 1 send them back
    if($_REQUEST['Digits'] != '1') {
        header("Location: twiliocallResponse.php");
        die;
    }

    // the user pressed 1, connect the call to +918106772379 
    header("content-type: text/xml");
    echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
?>
<Response>
    <Dial>+918106772379</Dial>
    <Say>The call failed or the remote party hung up. Goodbye.</Say>
</Response>