<?php
include('A_Header.php');
?>
<?php
include('connection.php');
if(isset($_REQUEST['submit']))
{

$sql="INSERT INTO additem(rname,category,des,image) VALUES('".$_REQUEST['rname']."','".$_REQUEST['category']."','".$_REQUEST['des']."','".$_REQUEST['image']."')";
$con -> query($sql);

}

?>

      <!-- content -->
      <article id="content">
        <div class="wrap">
          <div class="box">
            <div>
              <h2 class="letter_spacing">ADD<span>ITEM</span></h2>
             <form action="" method="post">
                <tr>
   				 <td>Recipe Name:</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  				  <td><input style="width: 170px; height: 20px;margin-left: 8px" name="rname" required /></td>
  				</tr><br>
    			 <tr>
					<td><br>Category:</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    		<td><select style="width: 170px; height: 23px;margin-left: 8px" name="category"/><br>
				<option value="1">Gujarati</option>
				<option value="2">Chinese</option>
				<option value="3">South-indian</option>
				</select>
		    </td>
               </tr><br>
			    <tr>
   				 <td><br>Description:</td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  				  <td><input style="width: 170px; height: 20px;margin-left: 8px" name="des" required /></td>
  				</tr><br>
    			 
 <tr>
                  <div class="textarea_box" > <span><br>Image:</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                   <input type="file"  name="image" value="Choose File" />
                  </div><br>
				  <input type="submit" class="button1" name="submit" value="Additem" />
                <a href="" class="button1">Clear</a> </div>
              </form>
            </div>
          </div>
        </div>
      </article>
    </div>
  </div>
</div>

<?php
include('Footer.php');
?>

<script>Cufon.now();</script>
</body>
</html>
