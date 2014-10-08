<?php
echo "<b>Contact: </b>".$data['contact'];
echo "    <b>Title: </b>".$data['job_title'];
echo "<br><b>Phone: </b>".$data['phone_contact'];
echo "    <b>Mobile: </b>".$data['mobile_contact'];
$email=$data['email_contact'];
echo "<br><b>Email: </b><a href='mailto:$email'>$email</a>";
?>
