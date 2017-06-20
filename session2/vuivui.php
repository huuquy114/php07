<?php
	define("NAME", "QUY");
	define("AGE", 24);
    $hoby="Learn to Java";
    if(AGE%2 == 0)
    {
        for($i=100; $i>=1; $i--)
        {
            if(AGE%2==0)
            {
                echo NAME.', '.AGE.'<br/>';
                break;
            }
            else{
                echo NAME.'<br/>';
                break;
            }
        }

        //thay chữ Java bằng PHP
        echo str_replace("Java", "PHP", $hoby).'<br/>';
        echo strlen(NAME).'<br/>';

        // fuction kiểm tra
        function kiemtra($age)
        {
            if($age%4 == 0)
            {
                return 99;
            }
            else{
                return 10;
            }
        }

        echo kiemtra(AGE).'</br>';

        //đảo ngược chuỗi trong chuỗi $hoby
        echo strrev($hoby).'<br/>';

        //đếm số từ trong chuỗi $hoby
        echo str_word_count($hoby);
    }

?>
