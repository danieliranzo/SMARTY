<html>
  <head>
   <title> New User Registration </title>
  </head>
  <body>
 

 
  <h2><font color="red">{$MESSAGE}</font></h2>
 


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
         <input name="newname" value="{$newname}" type="text" maxlength="100" size="25"/>
         <font color="orangered" size="+1"><tt><b>*</b></tt></font>
       </td>
     </tr>
     <tr>
       <td align="right">
         <p>E-Mail Address</p>
       </td>
       <td>
         <input name="newemail" value="{$newemail}" type="text" maxlength="100" size="25"/>
         <font color="orangered" size="+1"><tt><b>*</b></tt></font>
       </td>
     </tr>
     <tr valign="top">
       <td align="right">
         <p>Other Notes</p>
       </td>
       <td>
         <textarea wrap="soft" name="newnotes" rows="5" cols="30">{$newnotes}</textarea>
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