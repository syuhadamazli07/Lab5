<html>
    <body>
<?php
//array declaration 
$monthDAys=array('Splorch' =>23,'Sploo' =>28, 
                'Splat' =>2,'Splatt' =>3, 
                'Spleen' =>44,'Splune' =>30, 
                'Spling' =>61,'Slendo' =>61, 
                'Sploctember' =>31,'Splictember' =>31, 
                'Splanet' =>30,'TheRest' =>22);

print_r("Minimum Days: ".min($monthDAys)); 
//Part a minimum 
echo '</br>';
print_r("Minimum Days month: ".array_search(min($monthDAys), $monthDAys)); 
//part c minimum days month 
echo '</br>';
print_r("Number of Days in Year: ".array_sum($monthDAys)); 
//part b 
echo '</br>';



?>
</body>
</html>
