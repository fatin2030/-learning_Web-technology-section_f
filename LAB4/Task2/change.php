<?php
$currentPassword = $_REQUEST['currentPassword'];
$newPassword = $_REQUEST['newPassword'];
$reTyped = $_REQUEST['reTyped'];

if($currentPassword==$newPassword)
{
    echo "Invalid";
}
else if($newPassword!=$reTyped)
{
    echo "Invalid";

}
else
{
    echo "Valid";

}



?>