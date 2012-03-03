<?php
/*
    This file is part of phpAPPT.

    phpAPPT is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    phpAPPT is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with phpAPPT.  If not, see <http://www.gnu.org/licenses/>.
*/
require('inc/conf.php');
$act = isset($_GET['act']) ? $_GET['act'] : '';
switch($act){
    case 'login':
        $username = $_POST['username'];
        $password = md5($_POST['pass']); 
        $query = mysql_query("SELECT * FROM staff WHERE username='$username' AND password='$password'");
        //check login details
	if(empty($_POST['username']) || empty($_POST['pass']) || mysql_num_rows($query) == 0){
            //raise error
            print 'Please attempt to log in again...';
        }
        break;
    default:
        print '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 
          4.0 Transitional//EN">
        <html xmlns="http://w3.org/1999/xhtml">
        <head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	    <link rel="stylesheet" type="text/css" href="style/skin.css" />
	    <title>Admin Login</title>
        </head>
        <body class="admlogin">
	    <form action="admin.php?act=login" method="post">
		    <p>Username: <input type="text" name="username" /></p>
		    <p>Password: <input type="password" name="pass" /></p>
		    <p><input type="submit" value="Login!" /></p>	
	    </form>
        </body>
        </html>';
}
?>
