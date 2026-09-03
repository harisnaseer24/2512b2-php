<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php 

// echo "<h1>We are Learning PHP</h1>";
// echo "<p>We are Learning PHP</p>";


// echo "Hello World! ";
//Strongly typed language
// datatypes must be given


// Loosely Typed language
//datatypes are not required

// // variables

// $age= 20;//integer
// $percentage=90.45;// float , double, decimal
// $isStudent= true;//boolean
// $fname="Haris";//string
// $lname="Naseer";

// echo "<br>";

// echo "<h1>".$fname." ".$lname."</h1>";
// echo "<h1> $fname $lname is $age years old</h1>";


// echo "<h1 class='name' >NAME : " .$fname ." ".$lname. " </h1>";
// echo "<h1>AGE : " .$age." </h1>";
// echo "<h1>PERCENTAGE : " .$percentage. " </h1>";




// //data types
// //arrays
// // indexed arrays`



// $A=3454545;//INT
// $a=67.9;//Float
// $B="jdhfhd";//String
// $b=true;//boolean
// $lang= "jf-17 thunder sdfsd fsd sdf dfgv  fgs";//3

// echo "$a $A $b $B haris $lang <br>";

// echo(strlen($lang));
// echo "<br>";
// echo(strlen("abcd"));
// echo "<pre>            </pre>";
// echo(strrev($lang));
// echo(str_word_count($lang));

// echo(round(67.549));// 68
// echo "<br>";
// echo(ceil(67.1));//68
// echo "<br>";
// echo(floor(67.9)); //67
// echo "<br>";
// echo(min(3454,-42,0));//  -42
// echo "<br>";
// echo(cos(60));
// echo "<br>";
// echo(sqrt(729));
// echo "<br>";
// echo(max(34234,-42,0));//34234

// +,-,/,*,%    -- Arithmetic operator

// echo 45+45;//90
// echo "<br>";

// //comparison operator  <,>,<=,>=,==,===,!=,!==
// echo 45 < 45;//false
// echo 45 <= 45;// true
// //logical operators and &&, Or ||, not !, XOR

// echo 45 <= 45  && 5 > 2 ;//true
// echo 45 <= 45  && 5 > 12 ;//false

// echo 45 <= 45  || 5 > 12 ;//true
// echo 45 < 45  || 5 > 12 ;//false


// echo !45 <= 45;// true




//assignment operators +=,-=,*=,/=,++,--
// $num = 10;
// echo ($num+=5);//15
// echo ($num= $num+5);//15

// echo $num /=5;//2
// echo $num *=5;//50
// echo ($num= $num/5);//2


// $salary=96000;

// if($salary>50000){
// echo "<h2>You have a good salary</h2>";
// }
// elseif($salary==50000){
//     echo "<h2>You have  average salary</h2>";
// }
// else{
//     echo "<h2>You have low salary</h2>";
// }

// if($salary == 90000 or $salary > 95000){
//     echo "<h2>You have a good salary</h2>";
//     }
//     else{
//         echo "<h2>You have low salary</h2>";
//     }

// print table of 40 till 77
// $num=25;
// for( $i = 1; $i <=10 ; $i++){

// // 25  X 1  =  25
// echo " $num X $i = ".$num* $i." <br>";


// }


// Indexed array
// $student = [
//     "Haris",
//     "Shakeel",
//     "Zaroon",
//     "Furqan",
//     "Musab"];  //5   0-4


// echo $student[3];//furqan/

// echo $student;
// echo "<pre>";
// print_r($student);
// echo "</pre>";


// echo "<ul>";

// for($i=0; $i < count($student); $i++ ){
// echo "<li><h2> $student[$i]</h2> </li>";
// }
// echo "</ul>";







// echo "<ul>";
// for ($i=0; $i < count($student) ; $i++) { 
//     # code...
//     echo "<li><h2>".$student[$i]."</h2></li>";
// }

// echo "</ul>";
// echo $student;

// for debugging purpose
// print_r($student);
// var_dump($age);

// associative arrays


// $marks = [
//     "haris"=>100,
//     "umar"=>89,
//     "talha"=>65
// ];

// echo $marks['umar'];






// $employee=[
//     "haris"=>"Software Developer",
//     "owais"=>"Mern Stack Developer",
//     "ebad"=>"Php/Laravel Developer",
//     "afzal"=>"Python Developer",
//     "usama"=>"Java Developer",
// ];

// echo $employee['ebad'];

// echo "<pre>";
// print_r($employee);
// echo "</pre>";

// echo $employee['afzal'];


// foreach ($employee as $name => $designation) {
//     // haris                   Software Developer
// echo ucwords($name)." works as a <b> $designation </b><br>";
// }

// create an index array of names and print using for loop
// create an associative array of product and print using foreach

// Multidimensional  Indexed array



$result=[

    ["haris",16,90,"A-1"],

    ["imam",15,56,"b"],

    ["zoraiz",17,65,"b"],

    ["sadaf",16,90,"A-1"],
];

// echo $result[2][3];

// echo $result[3][3];
// echo $result[1][2];

// $number= [
//     [      
//          [ 1,2,3  ]
//     ],
//     [
//          [ 4,5,6  ]
//     ],
//     [
//        [ 7,8,9  ]
//     ],
   
// ];

// echo $number[1][0][1];
// echo $number[2][0][2];






// echo $result[2][2];
// echo $result[1][0];
// echo $result[3][3];


// echo "<pre>";
// print_r($number);
// echo "</pre>";

// echo $result[3][0];
// echo $result[5][0];




$result=[
        // value
    ["haris",16,90,"A-1"],

    ["imam",15,56,"b"],

    ["zoraiz",17,65,"b"],

    ["sadaf",16,90,"A-1"],
];


// name, age, percentage, grade



echo "<table border=1 cellpadding=5px>
<caption><h2>Student Result</h2></caption>
<tr>
    <th>Name</th>
    <th>Age</th>
    <th>Percentage</th>
    <th>Grade</th>
</tr>
 "
;

foreach( $result as $key => $value){

echo"<tr>";

foreach( $value as $key1 => $value1){

echo"<td> $value1</td>";

}

echo"</tr>";

}







// echo "<table border=1 cellpadding=5px>
// <caption><h2>Student Result</h2></caption>
// <tr>
//     <th>Name</th>
//     <th>Age</th>
//     <th>Percentage</th>
//     <th>Grade</th>
// </tr>
//  "
// ;

// foreach ($result as $key => $value) {
//     echo "<tr>";
// foreach ($value as $key1 => $value1) {
//     # code...
//       echo "<td>$value1</td>";
// }
//     echo "</tr>";
//     # code...
// }


 //Multidimensional Associative array
    
    
$marks=[
        // key
    "haris"=>    
                //    value
                [    
                    //    key1    value1
                    "Computer"=>88,
                    "Maths"=>100,
                    "Physics"=>75],


    "owais"=>["Computer"=>75,"Maths"=>88,"Physics"=>65],
    "ebad"=>["Computer"=>60,"Maths"=>55,"Physics"=>90],
    "afzal"=>["Computer"=>98,"Maths"=>95,"Physics"=>45],
    "usama"=>["Computer"=>18,"Maths"=>25,"Physics"=>35]

];

// echo $marks['usama']['Maths'];
// echo $product['title'];
// echo $product['price'];
// echo $product['stock'];
//        c m    p  
// haris 88 100 75








// echo $marks['afzal']['Physics'];

echo "<table border=1 cellpadding=5px>
<caption><h2>Student Marks</h2></caption>
<tr>
    <th>Name</th>
    <th>Computer</th>
    <th>Maths</th>
    <th>Physics</th>
</tr>
 "
;

// foreach($marks as $key => $value){

// echo "<tr>
//     <td>$key</td>
//       <td>".$value['Computer']."
//       </td>  
//       <td>".$value['Maths']."
//       </td> 
//       <td>".$value['Physics']."
//       </td>
// </tr>";

// }



// $students= ["a"=>"abc","b"=>"def"];
// $name="kamran";
// echo "student name is $name ". $students['a']."";



foreach($marks as $key => $value){

echo "<tr>
    <td>$key</td>";
     
foreach($value as $key1 => $value1){
echo "<td>$value1</td>";
}



echo "</tr>";

}



    

// foreach ($marks as $names => $value) {
//     echo "<tr>";
//     echo "<td>$names</td>";
// foreach ($value as $subject => $value1) {
//     # code...
//       echo "<td>$value1</td>";
// }
//     echo "</tr>";
//     # code...
// }








// ?>





</body>
</html>