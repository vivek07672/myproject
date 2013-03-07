<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        <div style="position:absolute; height:400px; width:800px; float:left; top:50x; left:270px">
            <h1 style="position:absolute;left:200px;top:-10px;font-size: 30px;font-family: Arial, sans-serif,Verdana,Helvetica;font-weight: bold;color: #000080;">Shelfari1.0 Book Database</h1>
            <div style="position:absolute; width:800px; height:50px; left:0px; top:50px;background-color:#DCCCAA">
<table border = 0px cellspacing = 0px cellpading = 0px width = 800px height = 50 >
<tr>
<td bgcolor="lightblue" style="text-align: center;" ><a href="find.php" style="text-decoration:none;width:265px;height:50px;">FIND BOOK</a></td>
<td bgcolor="greenyellow" style="text-align: center;" ><a href="insert.php" style="text-decoration:none;width:265px;height:50px;">INSERT BOOK</a></td>
<td bgcolor="gold" style="text-align: center;"><a href="delete.php" style="text-decoration:none;width:265px;height:50px;">DELETE BOOK</a></td>
<td bgcolor="lightblue" style="text-align: center;" ><a href="index.php" style="text-decoration:none;width:265px;height:50px;">BOOK DATABASE</a></td>
</tr>
</table>
<div style="position:absolute; width:800px; height:50px; left:0px; top:50px;background-color:#DCCCAA">
    <table border = 0px cellspacing = 0px cellpading = 0px width = 800px height = 50 >

<tr>
<td bgcolor="lightsalmon" style="text-align: center;"><a href="updateauthorname.php" style="text-decoration:none;width:265px;height:50px;">UPDATE BY AUTHORNAME</a></td>
<td bgcolor= "lightseagreen" style="text-align: center;"><a href="updatebookname.php" style="text-decoration:none;width:265px;height:50px;">UPDATE BY BOOKNAME</a></td>
<td bgcolor= "lightsteelblue" style="text-align: center;"><a href="updatestatus.php" style="text-decoration:none;width:265px;height:50px; ">UPDATE BY BOOKSTATUS</a></td>

</tr>
</table>
</div>

<br>
</div>
            
<div style="position:absolute; width:800px; left:0px; top:150px;background-color:#DCCCAA">         
  <?php

        // Connects to your Database 
        $con=mysqli_connect("localhost","root","");
	if(!$con)
	{
		die('Could not Connect');
	}
        
        mysql_select_db("vivek") or die(mysql_error()); 
        // Collects data from "friends" table 
        $data = mysql_query("SELECT * FROM book") or die(mysql_error()); 
        
        Print "<table border cellpadding=3 width = 800px>"; 
        $i=0;
 while($info = mysql_fetch_array( $data )) 
 { if($i==0)
 {
    print "<tr>";
                      
               print "<th bgcolor= lightblue>'BookName'</th>";
               print "<th bgcolor= lightblue>'Author'</th>";
	       print "<th bgcolor= lightblue>'Status'</th></tr>";
                          
      $i=1;
 }
 Print "<tr>"; 
 Print "<td>".$info['author'] . "</td> "; 
 Print "<td>".$info['bookname'] . " </td> "; 
 Print "<td>".$info['status'] . " </td></tr>"; 
 } 
 Print "</table>"; 
 
        
?>
</div>
        </div>
      
    </body>
</html>
