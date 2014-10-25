<?php $argument2 = "new_page.php";  ?>


<?php 
function say_hello() {
	$argument = "KAIDO"; 
	echo " Tere " . $argument;
}

return say_hello();
 ?>


    <?php  
    	

      function redirect_to($argument2){
        return header("Location: " . $argument2);
      };

       ?>
    	
