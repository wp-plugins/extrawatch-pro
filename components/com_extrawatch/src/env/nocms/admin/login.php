<?php
/**
 * @file
 * ExtraWatch - A real-time ajax monitor and live stats
 * @package ExtraWatch
 * @version 2.2
 * @revision 1214
 * @license http://www.gnu.org/licenses/gpl-3.0.txt     GNU General Public License v3
 * @copyright (C) 2013 by CodeGravity.com - All rights reserved!
 * @website http://www.codegravity.com
 */

?>

<div style='background: url("extrawatch/components/com_extrawatch/img/backend.png"); height: 800px; border: 1px solid #ddd;'>
<center>
    <table width="300px" border="0" align="center" cellpadding='10' cellspacing='10' valign='top'>
        <tr><td colspan="2">
            <h2>Login form</h2>
			<br/><br/>
        </td></tr>
        <tr>
            <td width="300px">
                <form action="" method="POST">
                    <table width="300px" border="0">
                        <tr><td>Email: &nbsp;&nbsp;</td><td><input type="text" name="email"  value="<?php echo @$_SESSION['email'];?>" style='border: 1px solid #dddddd'/> <br/><br/></td></tr>
                        <tr><td></td></tr>
                        <tr><td>Password: &nbsp;&nbsp;</td><td><input type="password" name="password" value="<?php echo @$_SESSION['password'];?>"  style='border: 1px solid #dddddd'/><br/><br/></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td><td><input type="submit" name="Login" value="Login"  style='font-weight: bold; font-size: 16px;'/></td></tr>
                        <input type="hidden" name="action" value="login"/>
						<tr>
						<td></td><td>
						<br/>
										<a href='register.php' style='color: blue; text-decoration: none;'>Register here</a>

						</td>
						</tr>
                    </table>
                </form>
				<br/><br/>
            </td>
        </tr>
    </table>
</center>
</div>