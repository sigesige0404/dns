<?php /* Smarty version 2.6.9, created on 2012-08-24 01:23:33
         compiled from admin/login.htm */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title><?php echo $this->_tpl_vars['app_name']; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="<?php echo $this->_tpl_vars['base_url']; ?>
/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<table width="80%" border="0" cellpadding="2" cellspacing="1" onmouseover="this.style.backgroundColor = '#BCCBD2';" onmouseout="this.style.backgroundColor = '#CDDBE2';" class="mainBG" align="center">
  <tr> 
    <td align="center" valign="middle" class="headBG1"><span class="textSize0"><h1><?php echo $this->_tpl_vars['app_name']; ?>
 管理者画面</h1></span>
</td>
  </tr>
  <tr> 
    <td onmouseover="this.style.backgroundColor = '#FBFDFF';"
onmouseout="this.style.backgroundColor = '#FFFFFF';"
class="contentBGNewsMainTD"> <br>
      <table width="50%" border="0" cellspacing="1" cellpadding="2" bgcolor="#dcdcdc" align="center" >
        <tr> 
          <td bgcolor="whitesmoke" colspan="2"><p><b><center>ログイン画面</center></b></p></td>
        </tr>
        <tr> 
          <td bgcolor="#ffffff" colspan="2"><br> <center>
              <form name="login" method="post" action="login.php">
                <table>
                <tr>
                    <td align="left">ユーザ名：</td>
                    <td><input name="username"></td>
                </tr>
                <tr>
                    <td align="left">パスワード：</td>
                    <td><input name="password" type="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td align="left"><center><input type="submit" value="ログイン"></center></td>
                </tr>
                </table>
              </form>
            </center></td>
      </table>
        <br>
        <center><b><a href="register.php"></a></b></center>
      <br>
      <br>
      </td>
  </tr>
  </tr>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </tr>
</table>
</body>
</html>