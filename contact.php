
<br><br><br>
 <?php
include('connection.php');
if(isset($_REQUEST['btnsubmit1']))
{

$sql="INSERT INTO feedback(first_name,last_name,message) VALUES('".$_REQUEST['first_name']."','".$_REQUEST['last_name']."','".$_REQUEST['message']."')";
$con -> query($sql);

}
?>
<?php
include "header.php";
?>
<table width="991" height="621" border="5" align="center" bgcolor="#DDDDDD">
  <tr>
    
	<td><table width="1083" height="545" border="0" align="center" >
  <tr  >
    <td width="814" ><p><font  color="#000000" size="+3"  ><img src="Admin/images/call.png" width="60" height="60" longdesc="Admin/images/call.png" /> : </font><font  color="#000000" size="+1">0203 771 2127 or 0790 387 5977</font></p>
      <p><font  color="#000000" size="+3"><img src="Admin/images/whatsapp.png" width="60" height="60" longdesc="Admin/images/whatsapp.png" /> : </font><font  color="#000000" size="+1"> 8264830498 , 6355124424 , 9409447069 </font></p></td>
    <td width="259"  ><font  color="#000000"  size="+3">
      <h3>Like us on Facebook </h3></a></font>
    <font color="#000000"  size="+1">
    <p><a  href="#" title="DecorVilla Facebook"> <img src="Admin/images/facebook.png" width="60" height="60" longdesc="Admin/images/facebook.png" /> <font color="#000000">DecorVilla</font></a></p>
    </font></td>
  </tr>
  <tr>
    <td ><font color="#000000"  size="+2" ><a  href="#" title="DecorVilla@gmail.com"> <img src="Admin/images/gmail.png" width="60" height="60" longdesc="Admin/images/gmail.png" /> <font color="#000000">: </font><font   size="+1"> <font color="#000000">DecorVilla@gmail.com </font></a></font></td>
    <td><font  color="#000000"  size="+3"><h3>Follow us on  Twitter </h3></font>
    <font color="#000000"  size="+1">
    <p><a  href="#" title="DecorVilla Twitter">  <img src="Admin/images/twitter.png" width="60" height="60" longdesc="Admin/images/twitter.png" /> <font color="#000000">Tweets by @DecorVilla</font></a> </p></font>
    </font></td>
  </tr>
  <tr>
 
    <td height="417" rowspan="2" ><font color="#000000"  size="+2"><p>Or simply send us a message by completing the short form</p></font>
      <font color="#000000" size="+2"><p> below and we will get back to you.</p>
      <p>&nbsp;</p>
      </font>
	  <div align="center">
      <p ><form>&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="fname"><font color="#000000" size="+1">First Name
    </font></label><br />
    &nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="first_name" name="first_name" placeholder="Your name.."><br />
	
	

    <label for="lname">&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#000000" size="+1"> Last Name
    </font></label><br />
   
   
    <p>
      &nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="last_name" name="last_name" placeholder="Your last name..">
      <br />
      </p>
    <label for="subject">&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font color="#000000" size="+1">Message&nbsp;&nbsp;&nbsp;</font></label>
    <p>
      &nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea id="message" name="message" placeholder="Write something.." style="height:100px"></textarea>
      <br />
      
    </p>
    <div align="center">&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="btnsubmit1" value="submit"/></div>
  </form>
  
</div></td>
  <td  ><font color="#000000"  size="+3"><h3>Follow us on  Insta </h3></font>
    <p><font  color="#000000" size="+1"> <a  href="#" title="DecorVilla Instagram"> <img src="Admin/images/instagram.png" width="60" height="60" longdesc="Admin/images/instagram.png" /><font color="#000000">Tweets by @DecorVilla </font></a></font></p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    </p></td>
    
  </tr>
</table>
</td>
  </tr>
</table><br />
<?php
include"footer.php";
?>
