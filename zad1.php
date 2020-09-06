<?php 
$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
$alp = explode(",",$alphabet);
$num = count($alp);
$name = 'tomislav';
$name = strtolower($name);
$n = str_split($name);
$namenum = count($n);
$j = $namenum-1;
for($i = 0; $i < $namenum; $i++){
    for($k = 0; $k < $num; $k++){
        if($alp[$k] == $n[$i] && $alp[$k] == $n[$j]){
            echo "<b><u>",  $alp[$k] , "</b></u>";
        }
        elseif($alp[$k] == $n[$i]){
            echo  "<b>",  $alp[$k], "</b>";
        }
        elseif($alp[$k] == $n[$j]){
            echo  "<u>",  $alp[$k], "</u>";
        }
        else echo $alp[$k];
    }
    $j--;
    echo "<br>";

}