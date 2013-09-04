<?php
if(copy("http://aei:mdp@aei-asso.fr/cloud/remote.php/caldav/calendars/aei/aei?export", "../aei.ics")){
    echo "calendrier synchronisé. Have a really nice day.";
}
else{
    echo "oops";
}
?>
