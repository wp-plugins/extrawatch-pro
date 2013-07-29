
<div style='background: url("extrawatch/components/com_extrawatch/img/backend.png"); height: 800px; border: 1px solid #ddd;'>
<center>
<br/><br/>&nbsp;<br/><br/>
    <table width="300px" border="0" align="center" cellpadding='10' cellspacing='10' >
        <tr><td colspan="2">
            <h2>Login form</h2>
			<br/><br/>
        </td></tr>
        <tr>
            <td width="300px">
                <form action="" method="POST">
                    <table width="300px" border="0">
                        <tr><td>Email: &nbsp;&nbsp;</td><td><input type="text" name="email"  value="<?php echo @$_SESSION['email'];?>" style='border: 1px solid black'/> <br/><br/></td></tr>
                        <tr><td></td></tr>
                        <tr><td>Password: &nbsp;&nbsp;</td><td><input type="password" name="password" value="<?php echo @$_SESSION['password'];?>"  style='border: 1px solid black'/><br/><br/></td></tr>
                        <tr><td></td></tr>
                        <tr><td></td><td><input type="submit" name="Login" value="Login"  style='font-weight: bold; font-size: 16px;'/></td></tr>
                        <input type="hidden" name="action" value="login"/>
                    </table>
                </form>
				<br/><br/>

            </td>
        </tr>
    </table>
</center>
</div>