<?php
//echo ('Hello world'); -----------------------------------------------------------------------
//echo ini_get('upload_max_filesize');
//phpinfo();

//echo $_SERVER('PHP_SELF');


//echo ini_get('upload_max_filesize');
//echo "<h1>My first PHP page</h1><br>";

//1.2
// echo "My heading dragonball ";
// print "with style";

//1.3
// echo "<h1>My heading with style</h1><br>"; //br คือจัดบรรทัดให้สวย
// print "<h2>My heading</h2>";

//1.4	

//   $month='March';
//   echo 'current variable type is <b>'.gettype($month) . "</b><br>"; //bคือตัวหนา //.gettypeคือชนิดของตัวแปรที่เก็บ
//   $month=3;
//   echo 'new variable type is <b>'.gettype($month) . "</b><br>";
//   $month="3";
//   echo "month \'s value is $month , variable type is <b>".gettype($month) . "</b><br>";
//   $monthId=(int)$month; //เปลี่ยนเป็น int
//   echo "monthId \'s value is $monthId , variable type is <b>".gettype($monthId) . "</b><br>";

//1.5
//   $a = 'hello';
//   $$a = 'world';
//   $$$a = 'av';
//   echo "$a $hello $world";	


//   echo '<br>';
//   ${'a' . 'b'} = 'hello there';
//   echo $ab;

  //1.6
//   define('FRUIT','apple',true);//ไม่สนตัวใหญ่ตัวเล็กถ้าใส่ true
//   ECHO FRUIT;
//   echo '<br>';
//   ECHO fruit;
//   echo '<br>';

  //1.7  
//   echo  "This line number is : " .__LINE__;	
//   echo "<br>";
//   echo "The full path of this file is: " . __FILE__;
//   echo "<br>";
//   echo dirname(__FILE__); 
//   echo "<br>";

//1.8
//   $variable='GOKU';// \'s value
//   echo 'My $variable will not print'; 
//   echo "<br>";
//   echo "My $variable will print";

//1.9
//   $x=100;
//   $y="100";
//   if($x===$y) //=== เปรียบเทียบ type ด้วย
//     echo 'equal';
//   else 
//     echo 'not equal';

//1.10
//   $next=1;
//   //$next++;
//   //$next = $next+2;
//   echo 'next number is '.$next++;
//   echo "<br>";
//   $next=1;
//   echo 'next number is '.++$next;
//   echo "<br>";

//1.11
//     #index array
// $cars = array("Volvo", "BMW", "Toyota");
// echo 'I like '. $cars[0].' , '.$cars[1].' and '.$cars[2];
// echo '<br>';
// echo '<br>';
// $arrlength=count($cars);
// for($x=0;$x<$arrlength;$x++) {
// 	echo $cars[$x].'<br>';	
// }
// echo '<br>';

    
    //var_dump();
    //print

//1.12

// #assoc array
// $age['Peter'] = 35;	
// $age['Ben'] = 43;	
// $age['Joe'] = 53;
// echo 'Peter is ' .$age['Peter'].' years old.';
// echo '<br>';echo '<br>';


// // var_dump($age);
// // print_r($age);
// foreach($age as $key=>$value)
// {
//   echo 'Key= '.$key. ' , Value= '.$value.'<br>';
// }

//1.13

//   #multi array
//   $marks = array(             
//     "john" => array (
//        "course" => "physics",
//        "point" => 32
//     ),            
//     "zara" => array (
//        "course" => "physics", 
//        "point" => 39
//     )
//  );
// echo '<pre>'; //show สวย
// print_r($marks);
// echo '</pre>';
// echo '<br>';
// echo 'John get '. $marks['john']['point'] .' point in '. $marks['john']['course'] ;

//2.0








?>