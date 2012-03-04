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
$act = isset($_GET['act']) ? $_GET['act'] : '';
switch($act){
    case '2':
        if($_POST['gpl'] == 'on'){
            print '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
                <html xmlns="http://w3.org/1999/xhtml">
                <head>
       	           <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	           <link rel="stylesheet" type="text/css" href="style/skin.css" />
	           <title>Step 2: MySQL</title>
                </head>
                <body class="center">
	            <form action="install.php?act=3" method="post">
		        <p>MySQL Host: <input type="text" name="sqlhost" /></p>
		        <p>MySQL User:	<input type="text" name="sqluser" /></p>
		        <p>MySQL Password: <input type="password" name="sqlpass" /></p>
		        <p>MySQL Database: <input type="text" name="sqldb" /></p>
		        <p>Database Prefix: <input type="text" name="dbprefix" value="appt_" /></p>
		        <p><input type="submit" value="Go!" /></p>	
		    </form>';
        }
        else{
            die('You MUST agree to the terms of use...');
        }
        break;
    default:
        print '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
            <html xmlns="http://w3.org/1999/xhtml">
            <head>
	       <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	       <link rel="stylesheet" type="text/css" href="style/skin.css" />
	       <title>Step 1: GPL</title>
            </head>
	    <body class="center">
	        <textarea cols="72" rows="32">'.fread(fopen('LICENSE', 'r'), filesize('LICENSE')).'</textarea>
		<form action="install.php?act=2" method="post">
		    <p><input type="checkbox" name="gpl" /> I Agree. <input type="submit" /></p>';
}
?>
