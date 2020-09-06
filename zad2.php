<?php 
$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
$alp = explode(",",$alphabet);
$num = count($alp);
$y = 12;
$yc = 0;

for($i = 0; $i < $num; $i++){
    $x = $i;
    $count = 0;

    for($j = 0; $j < $num; $j++){

        if($x < $num){

            if($count == abs($y)){
                echo "<b>" . $alp[$x] . "</b>";
                $count++;
                $x++;
            }
        


            else{
                echo $alp[$x];
                $count++; 
                $x++;
            }
        }       
        
        else{
            $x = 0;
            if($count == abs($y)){
                echo "<b>" . $alp[$x] . "</b>";
                $count++;
                $x++;
            }    


            else{
                echo $alp[$x];
                $count++; 
                $x++;
            }    
            

        }

        
    }
    echo "<br>";
    $y--;
   
    } 
