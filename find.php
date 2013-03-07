<html>
<head>
<style>

.top-header{
	height:100px;
	background:black;
}
.logo{
	float:left;
	padding:40px 30px;
	color:#cccccc;
	font-size:14px;
	width:30px;
}
.page-title{
	float:left;
	width:750px;
	padding:40px 30 px;
	font-size:12px;
	text-align:center;
	color:Red;
}
.link2{
	text-decoration:none;
}
.link2:link{
	color:black;
	background:#DCCCAA;
}
</style>
</head>
<body>


<!--<link rel="stylesheet" type="text/css" href="mystyles.css" /> -->   

<script type="text/javascript">
function validateForm()
{

    var n=document.forms["myform"]["bookname"].value;

if (n==null || n=="" )
  {
  
   alert(" Book Name must be filled out");
 return false; 
  } 
       
}
</script>




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
          if(isset($_POST['submit'])) 
{
session_start();
        $bookname=$_POST['bookname'];
        // Connects to your Database 
        $con=mysqli_connect("localhost","root","");
	if(!$con)
	{
		die('Could not Connect');
	}
        
        mysql_select_db("vivek") or die(mysql_error()); 
        // Collects data from "friends" table 
        $data = mysql_query("SELECT * FROM book where  bookname='$bookname' ") or die(mysql_error()); 
        
        $i=0;
        Print "<table border cellpadding=3 width = 800px>"; 
        
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
 
}     
?>  
            
        
         <form name="myform" action="find.php" method="POST" left ="250px" top ="250px"  onSubmit="return validateForm();">

    
		<table  bgcolor="" align="center">
			<tbody>
			<tr>
				<td colspan="2"><br/>
                                </td>
			</tr>
			
                        
			<tr>
				<td width="30%"> Book Name :</td>
				<td width="50%">
					<input maxlength="50" name="bookname" id="pass" type="text">&nbsp;*
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			
                        <tr>
				
				        <td style="position: absolute; left:375;">
					<input name="submit" value="Submit" type="submit">
					</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			</tbody>
		</table>
    
		</form>
</div>
            
        </div>


   


</body>
</html>