echo "# zahra" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/zahramnia/zahra.git
git push -u origin main
<html>
<?php 
$server = "localhost";  
$db_user = "root";
 
$db_name = "tbb"; //insert your batabase name 
$tbl_name = "table_data"; //insert your table name 
$user = $_POST['userName']; 
$pass = $_POST['passWord']; 
$email = $_POST['eMail']; 
if(!$user) {
	die('áØÝÇ äÇã ˜ÇÑÈÑí ÑÇ æÇÑÏ äãÇííÏ');
} 
if(!$pass) {
	die('ÑãÒ ÚÈæÑ äãí ÊæÇäÏ ÎÇáí ÈÇÔÏ');
} 
if(!$email) {
	die('ÇÏÑÓ Çíãíá ãÚÊÈÑ äíÓÊ');
} 
if(!preg_match('/[a-zA-z0-9._-]+@[a-zA-z0-9\.-]+\.[a-zA-z\.]+/', $email)) {
	die('ÂÏÑÓ Çíãíá ãÚÊÈÑ äãí ÈÇÔÏ'); 
} 
$conn = mysql_connect($server, $db_user, $db_pass);
if(!$conn) { 
	die('connection error, connection not found');
} 
if(!mysql_select_db($db_name)) {
	die("database not found");
}
$pass_hash = md5($pass);
$query = mysql_query("insert into '$tbl_name' (user_Name, user_Pass, user_Email) values ('$user', '$pass_hash', '$email')"); 
if(mysql_affected_rows()>0) {
	die('ãÊÔ˜Ñíã! ËÈÊ äÇã ÔãÇ ÈÇ ãæÝÞíÊ ÇäÌÇã ÔÏ'); 
}
else {
	die('ËÈÊ äÇã ÈÇ ãÔ˜á ãæÇÌå ÔÏ¡ áØÝÇ ãÌÏÏÇ ÓÚí äãÇííÏ'); 
} 
?>
</html>