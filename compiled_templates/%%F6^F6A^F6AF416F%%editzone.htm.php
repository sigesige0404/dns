<?php /* Smarty version 2.6.9, created on 2012-09-04 05:01:40
         compiled from editzone.htm */ ?>
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
			<table width="50%" border="0" cellspacing="1" cellpadding="2" bgcolor="#dcdcdc" align="center" >
              <tr>
                <td bgcolor="whitesmoke" colspan="2"><p><b>
                    <center>
                      <b>レコード変更</b>
                    </center>
                </b></p></td>
              </tr>
              <tr>
                <td bgcolor="#ffffff" colspan="2">
                      <form name="editrecord" method="post" action="modrecord.php">
                        <input type="hidden" name="act" value="update">
                        <input type="hidden" name="type" value="<?php echo $_REQUEST['type']; ?>
">
                        <input type="hidden" name="recordid" value="<?php echo $_REQUEST['recordid']; ?>
">
                        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="53%">サブドメイン名 or 優先度</td>
                            <td width="47%">アドレス or 値</td>
                          </tr>
                          <tr>
                            <?php if ($_REQUEST['type'] == 'mx'): ?>
                            <td bgcolor="whitesmoke"><input name="address[name]" size="3" value="<?php echo $this->_tpl_vars['name']; ?>
"></td>
                            <td><input name="address[address]" type="text" size="22" value="<?php echo $this->_tpl_vars['ip']; ?>
"></td>
                            <?php elseif ($_REQUEST['type'] == 'txt'): ?>
                            <td bgcolor="whitesmoke"><?php echo $this->_tpl_vars['name']; ?>
</td>
                            <td><input name="address[address]" type="text" size="22" value='<?php echo $this->_tpl_vars['ip']; ?>
'</td>
                            <?php else: ?>
                            <td bgcolor="whitesmoke"><?php echo $this->_tpl_vars['name']; ?>
</td>
                            <td><input name="address[address]" type="text" size="22" value="<?php echo $this->_tpl_vars['ip']; ?>
"></td>
                            <?php endif; ?>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><div align="right">
                              <input type="submit" name="Submit" value="変更">
                            </div></td>
                          </tr>
                        </table>
                      </form>
                </div></td>
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