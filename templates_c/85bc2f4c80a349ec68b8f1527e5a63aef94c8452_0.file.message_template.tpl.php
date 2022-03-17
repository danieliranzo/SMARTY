<?php
/* Smarty version 3.1.33, created on 2021-11-23 16:17:34
  from 'C:\xampp\htdocs\smarty\templates\message_template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_619d060e1cafd5_87987135',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85bc2f4c80a349ec68b8f1527e5a63aef94c8452' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\templates\\message_template.tpl',
      1 => 1637675881,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_619d060e1cafd5_87987135 (Smarty_Internal_Template $_smarty_tpl) {
?>  <html>
  <head>

   <?php if ($_smarty_tpl->tpl_vars['message_type']->value == 1) {?>
       <title>Registration Complete</title>
       <meta http-equiv="refresh" content="20; url=login_smarty.php" />
   <?php }?>
   <?php if ($_smarty_tpl->tpl_vars['message_type']->value == 2) {?>
       <title>Goodbye page</title>       
       <meta http-equiv="refresh" content="10; url=index_smarty.php" />
   <?php }?>
  </head>
  <body>
 
   <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

 
  </body>
  </html><?php }
}
