<?php
$con = mysql_connect('localhost','root','','samplecrud');
if(mysql_connect_errno())
{
echo 'Database Connection Error';
}