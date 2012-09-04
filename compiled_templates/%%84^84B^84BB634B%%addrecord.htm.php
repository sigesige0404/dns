<?php /* Smarty version 2.6.9, created on 2012-09-04 05:13:20
         compiled from addrecord.htm */ ?>
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
    <td align="center" valign="middle" class="headBG1"><span class="textSize0"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></span>
</td>
  </tr>
  <tr> 
    <td onmouseover="this.style.backgroundColor = '#FBFDFF';"
onmouseout="this.style.backgroundColor = '#FFFFFF';"
class="contentBGNewsMainTD"> <br>
      <table width="70%" border="0" cellspacing="1" cellpadding="2" bgcolor="#dcdcdc" align="center" >
        <tr> 
          <td bgcolor="whitesmoke" colspan="2"><p><b><center>
            レコード追加: <?php echo $this->_tpl_vars['domain']; ?>
 
          </center></b></p></td>
        </tr>
        </table>
			<br>
			<table width="70%" border="0" cellspacing="1" cellpadding="2" bgcolor="#dcdcdc" align="center" >
              <tr>
                <td bgcolor="whitesmoke" colspan="2"><p><b>
                    <center>
                      <b>Aレコード追加</b>
                    </center>
                </b></p></td>
              </tr>
              <tr>
                <td bgcolor="#ffffff" colspan="2">
                      <form name="addrecord" method="post" action="addrecord.php">
                        <input type="hidden" name="type" value="a">
                        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="53%">サブドメイン名</td>
                            <td width="47%">アドレス</td>
                          </tr>
                          <tr>
                            <td><input name="name" type="text" size="22">.<?php echo $this->_tpl_vars['domain']; ?>
</td>
                            <td><input name="address" type="text" size="22"></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><div align="right">
                              <input type="submit" name="Submit" value="追加">
                            </div></td>
                          </tr>
                        </table>
                      </form>
                </div></td>
            </table>
			<br>
			<table width="70%" border="0" cellspacing="1" cellpadding="2" bgcolor="#dcdcdc" align="center" >
              <tr>
                <td bgcolor="whitesmoke" colspan="2"><p><b>
                    <center>
                      <b>CNAME 追加</b>
                    </center>
                </b></p></td>
              </tr>
              <tr>
                <td bgcolor="#ffffff" colspan="2">
                  <form name="addrecord" method="post" action="addrecord.php">
                    <input type="hidden" name="type" value="cname">
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="53%">サブドメイン名</td>
                        <td width="47%">アドレス</td>
                      </tr>
                      <tr>
                        <td><input name="name" type="text" size="22">.<?php echo $this->_tpl_vars['domain']; ?>
</td>
                        <td><input name="address" type="text" size="22"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><div align="right">
                            <input type="submit" name="Submit" value="追加">
                        </div></td>
                      </tr>
                    </table>
                </form></td>
            </table>
			<br>
			<table width="70%" border="0" cellspacing="1" cellpadding="2" bgcolor="#dcdcdc" align="center" >
              <tr>
                <td bgcolor="whitesmoke" colspan="2"><p><b>
                    <center>
                      <b>MXレコード追加 </b>
                    </center>
                </b></p></td>
              </tr>
              <tr>
                <td bgcolor="#ffffff" colspan="2">
                  <form name="addrecord" method="post" action="addrecord.php">
                    <input type="hidden" name="type" value="mx">
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="53%">優先度</td>
                        <td width="47%">アドレス</td>
                      </tr>
                      <tr>
                        <td><input name="name" type="text" size="5"></td>
                        <td><input name="address" type="text" size="22"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><div align="right">
                            <input type="submit" name="Submit23" value="追加">
                        </div></td>
                      </tr>
                    </table>
                </form></td>
            </table>
		<br>
			<table width="70%" border="0" cellspacing="1" cellpadding="2" bgcolor="#dcdcdc" align="center" >
              <tr>
                <td bgcolor="whitesmoke" colspan="2"><p><b>
                    <center>
                      <b>TXT 追加</b>
                    </center>
                </b></p></td>
              </tr>
              <tr>
                <td bgcolor="#ffffff" colspan="2">
                  <form name="addrecord" method="post" action="addrecord.php">
                    <input type="hidden" name="type" value="txt">
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="53%">サブドメイン名</td>
                        <td width="47%">値</td>
                      </tr>
                      <tr>
                        <td><input name="name" type="text" size="22">.<?php echo $this->_tpl_vars['domain']; ?>
</td>
                        <td><input name="address" type="text" size="40"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><div align="right">
                            <input type="submit" name="Submit" value="追加">
                        </div></td>
                      </tr>
                    </table>
                </form></td>
            </table>

			<center>
			</center>
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