<?php
	 include("connection.php");

     $id=$_GET['id'];
     $query="DELETE FROM Bbooks WHERE Bid='$id'";
 
if( $db->query($query)==TRUE){
    
 ?>
			
   <script>
		alert(" BOOK RETURNED ");
		window.location="showborrowebooks.php";
		</script>
        <?php
}

?>