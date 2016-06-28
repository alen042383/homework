
<?php
   
    $lottery[] = array(); 
     
   
    $n = 6; 
     
   
    for($i=0;$i<$n;$i++){ 
       
        $number = rand(1,49);  
        
        if(in_array($number, $lottery)){  // 如果判斷式成立，代表數字重複 
            $i--;  
        }else{  
            $lottery[$i] = $number;  
        }
   
    } 
     
   for($i=0;$i<6;$i++) {
      echo $lottery[$i]."<br />"; 
     

     


        } 
     
     
?>