<?php
   $max=5;
	$BaseArray = array("b","j","K","M","n","_","Q","t","u","X","1","3","4","7");
     echo "Following are blong to clientCode;<br><br>";
	for ($i=1;$i<=$max;$i++){
	    $clientCode="";
		shuffle($BaseArray);
		foreach ($BaseArray as $value){
				$clientCode.=$value;
		}
		echo $clientCode."<br>";
	}
    echo "<br>";

	$ChkArray = array("a","b","C","d","E","f","G","h","i","j","k","L","m","n","o","P","q","r","S","t","u","V","w","x","y","Z","0","8","2","5","7","9");

    echo "Following are blong to checkwords;<br>";
	for ($j=1;$j<=$max;$j++){
	    $checkword="";
		shuffle($ChkArray);
		foreach ($ChkArray as $value){
				$checkword.=$value;
		}
		echo $checkword."<br>";
	}	



?>
