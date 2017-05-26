<?php

////*********API練習(身分證字號)



// YA的方炫
function ya($who, $pre='alooha'){
    Echo "{$pre},{$who} <br>";

}


//取得陣列
function sayHello(){
    $names =func_get_args();
    foreach ($names as $name){
        echo "Hello.$name.<br>";
    }


}


//身分證字號API

function twid(){
    $twid=func_get_args();
    if(preg_match("/^[A-Z][12][0-9]{8}$/","$twid")){
        $n12s = substr($twid,0,1);
//      echo $n12s;

        $realNumber = 'ABCDEFGHJKLMNPQRSTUVXYWZIO';

        $pos = strpos($realNumber, $n12s);

        $n12 = $pos+10;
        //TO DO;
        $n1 =  (int)($n12/10);
        $n2 =  ($n12%10);
        $n3 = substr($twid,1,1);
        $n4 = substr($twid,2,1);
        $n5 = substr($twid,3,1);
        $n6 = substr($twid,4,1);
        $n7 = substr($twid,5,1);
        $n8 = substr($twid,6,1);
        $n9 = substr($twid,7,1);
        $n10 = substr($twid,8,1);
        $n11 = substr($twid,9,1);

        $sum= $n1*1+$n2*9+$n3*8+$n4*7+$n5*6+$n6*5+$n7*4+$n8*3
            +$n9*2+$n10*1+$n11*1;

        if($sum%10 ==0){
            echo "1"; //身份證字號碼正確
        } else {echo "0";} //身分證字號瑪錯誤
    } else {
        echo '-1';} //正規表示法錯誤



}