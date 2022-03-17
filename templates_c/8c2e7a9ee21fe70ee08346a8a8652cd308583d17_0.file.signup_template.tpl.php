<?php
/* Smarty version 3.1.33, created on 2021-11-23 15:15:35
  from 'C:\xampp\htdocs\smarty\templates\signup_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_619cf787211d84_42418295',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c2e7a9ee21fe70ee08346a8a8652cd308583d17' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\signup_template.tpl',
      1 => 1637675717,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619cf787211d84_42418295 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
  <head>
   <title> New User Registration </title>
  </head>
  <body>
 

 
  <h2><font color="red"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</font></h2>
 


  <h3>New User Registration Form</h3>
  <p><font color="orangered" size="+1"><tt><b>*</b></tt></font>
     indicates a required field</p>
  <form method="post" action="signup_action_smarty.php">
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
         <input name="newname" value="<?php echo $_smarty_tpl->tpl_vars['newname']->value;?>
" type="text" maxlength="100" size="25"/>
         <font color="orangered" size="+1"><tt><b>*</b></tt></font>
       </td>
     </tr>
     <tr>
       <td align="right">
         <p>E-Mail Address</p>
       </td>
       <td>
         <input name="newemail" value="<?php echo $_smarty_tpl->tpl_vars['newemail']->value;?>
" type="text" maxlength="100" size="25"/>
         <font color="orangered" size="+1"><tt><b>*</b></tt></font>
       </td>
     </tr>
     <tr valign="top">
       <td align="right">
         <p>Other Notes</p>
       </td>
       <td>
         <textarea wrap="soft" name="newnotes" rows="5" cols="30"><?php echo $_smarty_tpl->tpl_vars['newnotes']->value;?>
</textarea>
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
  </html><?php }
}
