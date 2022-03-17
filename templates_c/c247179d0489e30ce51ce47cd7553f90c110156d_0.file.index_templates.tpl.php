<?php
/* Smarty version 3.1.33, created on 2021-11-21 16:19:55
  from 'C:\xampp\htdocs\smarty\templates\index_templates.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_619a639b60c3e0_23180098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c247179d0489e30ce51ce47cd7553f90c110156d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\index_templates.tpl',
      1 => 1637507986,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619a639b60c3e0_23180098 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
   <title>insertar</title>
   <meta  http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>


</table>

 <h3>New User Registration Form</h3>
  <p><font color="orangered" size="+1"><tt><b>*</b></tt></font>
     indicates a required field</p>
  <form method="post" action="index.php">
  <table border="0" cellpadding="0" cellspacing="5">
   <tr>
       <td align="right">
         <p>User ID</p>
       </td>
       <td>
         <input name="newid" type="text" maxlength="100" size="25"/>
         <font color="orangered" size="+1"><tt><b>*</b></tt></font>
       </td>
   </tr>
   <tr>
       <td align="right">
         <p>Full Name</p>
       </td>
       <td>
         <input name="newname" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="text" maxlength="100" size="25"/>
         <font color="orangered" size="+1"><tt><b>*</b></tt></font>
       </td>
     </tr>
     <tr>
       <td align="right">
         <p>E-Mail Address</p>
       </td>
       <td>
         <input name="newemail" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" type="text" maxlength="100" size="25"/>
         <font color="orangered" size="+1"><tt><b>*</b></tt></font>
       </td>
     </tr>
     <tr>
       <td align="right" colspan="2">
           <hr noshade="noshade"/>
             <input type="submit" name="reset" value="Reset Form"/>
             <input type="submit" name="submitok" value="  OK  "/>
       </td>
     </tr>
  </table>
  </form>


</body>

</html>



<?php }
}
