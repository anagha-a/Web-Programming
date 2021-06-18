<?php
	 include("connection.php");

     $id=$_GET['id'];
     $query="DELETE FROM books WHERE id='$id'";
 
if( $db->query($query)==TRUE){
    
 ?>
			
   <script>
		alert(" BOOK REMOVED");
		window.location="showbooks.php";
		</script>
        <?php
}

?>