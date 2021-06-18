<?php
	 include("connection.php");

     $id=$_GET['id'];
     $query="DELETE FROM members WHERE id='$id'";
 
if( $db->query($query)==TRUE){
    
 ?>
			
   <script>
		alert(" MEMBER DELETED");
		window.location="showmembers.php";
		</script>
        <?php
}

?>