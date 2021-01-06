<?php
include("connect.php");
//$sqldel = mysqli_query($connection, "DELETE FROM trade1 WHERE type  = '5'") ;
//$sqldel1 = mysqli_query($connection, " DELETE FROM trade WHERE date < 'DATE_SUB(CURRENT_TIME (),INTERVAL 10 MINUTE)' ") ;
?>
	<table width="80%" border="2" style= "background-color: #030ffc; color: #ffffff; margin: 0 auto;" >

              <tr align="center" class="title" bgcolor="#ffffff">
			  <th height="21" colspan="16" align="center" bgcolor="#030ffc"><span class="style2"><font size="4">ALL APPOINTMENT LIST</font></span> </th>
              </tr>
              
              <tr align="center" class="title">
               <th width="10%" align="center" bgcolor="#030ffc"><span class="style3">S.No</span></th>
	   		  <th width="10%" align="center" bgcolor="#030ffc"><span class="style3">ID </span></th>
	   		  <th width="10%" align="center" bgcolor="#030ffc"><span class="style3">NAME</span></th>
              <th width="15%" align="center" bgcolor="#030ffc"><span class="style3">EMAIL </span></th>
              <th width="15%" align="center" bgcolor="#030ffc"><span class="style3">PHONE</span></th>
              <th width="10%" align="center" bgcolor="#030ffc"><span class="style3">FEE in INR.</span></th>
              <th width="10%" align="center" bgcolor="#030ffc"><span class="style3">DATE</span></th>
              <th width="50%" align="center" bgcolor="#030ffc"><span class="style3">TIME</span></th>
              <th width="10%" align="center" bgcolor="#030ffc"><span class="style3">PAYMENT</span></th>
              
                </tr>
              <?php
			  $rowsPerPage = 20;
				$pageNum = 1;
				if(isset($_GET['page']))
				{
					$pageNum = $_GET['page'];
				}
				$offset = ($pageNum - 1) * $rowsPerPage;
				
				$counter=($pageNum -1)*$rowsPerPage + 1;
				
							$query1 = mysqli_query($connection,"SELECT * FROM appointment  order by id desc LIMIT $offset, $rowsPerPage") or die("Query Fail #1");
							$response1 = mysqli_num_rows($query1);
							if($response1>0)
							{
								for($count=1;$count<=$response1;$count++)
								{
									$data = mysqli_fetch_array($query1);
									?>
             
              <tr class="data">
			  	<td width="10%" align="center"><?php echo $counter;?></td>
                <td width="10%" align="justify"><?php echo $data['id']; ?></td>
                <td width="10%" align="center"><?php echo $data['name']; ?></td>
                <td width="15%" align="center"><?php echo $data['email']; ?></td>
                <td width="10%" align="center"><?php echo $data['phone']; ?></td>
                <td width="10%" align="center"><?php echo $data['plan']; ?></td>
                <td width="10%" align="center"><?php echo $data['date']; ?></td>
                <td width="15%" align="center"><?php echo $data['time']; ?></td>
                <td width="10%" align="center"><?php echo $data['status']; ?></td>

                <td width="15%" align="center"><?php echo $data['dlastbal']; ?>
            <form action="#" method="post">
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                    </td>
                    <td><input type="submit" name="submit" value="Del"></td></form>
                
                
              </tr>
              <tr align="center" class="title"></tr>
              <?php
			  		$counter++;
								}
							}	
						?>
            </table>
	<center>
	    <?php
	if(isset($_POST['submit']))
    {
        
        $id = $_POST['id'];
        //$dup = $_POST['dup'];
     $query = mysqli_query($connection,"delete from appointment where id='$id'");  
     echo "<H2>Data Deleted</h2>";
//header("Location: .php?id=$id");     
echo"<meta http-equiv=refresh content=0; url=#/>"; 
    }

        ?>
  <?php
  $resultpaging  = mysqli_query($connection,"SELECT * FROM appointment order by id desc") or die('Error, query failed');
						$rows = mysqli_num_rows($resultpaging);
						$maxPage = ceil($rows/$rowsPerPage);
						$self = $_SERVER['PHP_SELF'];
						$nav  = '';
						for($page = 1; $page <= $maxPage; $page++)
						{
							if ($page == $pageNum)
							{
								$nav .= " $page "; 
							}
							else
							{
								$nav .= " <a href=\"$self?page=$page\" class=\"new\" style=\"color:#000000\">$page</a> ";
							} 
						}
						if ($pageNum > 1)
						{
							$page  = $pageNum - 1;
							$prev  = " <a href=\"$self?page=$page\" class=\"new\" style=\"color:#000000\">[Prev]</a> ";
							$first = " <a href=\"$self?page=1\" class=\"new\" style=\"color:#000000\">[First Page]</a>" ;
						} 
						else
						{
						   $prev  = '&nbsp;'; 
						   $first = '&nbsp;';
						}
						if ($pageNum < $maxPage)
						{
						   $page = $pageNum + 1;
						   $next = " <a href=\"$self?page=$page\" class=\"new\" style=\"color:#000000\">[Next]</a> ";
						
						   $last = " <a href=\"$self?page=$maxPage\" class=\"new\" style=\"color:#000000\">[Last Page]</a> ";
						} 
						else
						{
						   $next = '&nbsp;';
						   $last = '&nbsp;';
						}
						echo "<tr><td align=\"center\" width=\"100%\"  style=\"color:#000000\"><strong>Page No: ".$first . $prev . "$pageNum of $maxPage" . $next . $last."</strong></td></tr>";
					
					  ?>

</center>
	</body>
	</html>