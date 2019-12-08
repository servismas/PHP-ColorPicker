<?php
if(isset($_POST["submit"]))
{
echo 'You are welcome, '.$_POST["username"].
'! Your password is '.$_POST["userpass"].'<br/>';
}
else
{
echo 'No data were received!<br/>';
}
?>