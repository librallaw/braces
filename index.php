<?php


$braces = $_GET['braces'];

$input_array = str_split($braces, 1);

//divide the array into two to tell the loop how man iterations to gp
$divided_input_array_count = count($input_array) / 2;


/**
Store the last and first index number of the array
 **/
$first  = 0;
$last = count($input_array) - 1;

$mismatch = 0;

//Total number of item in the string
$total_array_count = count($input_array);

for($i = 0; $i < $divided_input_array_count; $i++){

    /**
    Check if the item in the array match each other if they are fliped
     **/
    if($input_array[$first] != brother($input_array[$last])){
        $mismatch++;
    }

    /**
    Increment the values of the first and last  to compare the next two items in the array
     **/
    $first++;
    $last--;

}

/**
If error is greater then 0 then there was a mismatch
 **/
if($mismatch > 0){



    //split array into diferent array of 2 indexes
    $input_array = str_split($braces, 2);


    $mismatch = 0;


    //loop through the array
    foreach ($input_array as $array){


        //split the array into subarray of 1
        $split_array  = str_split($array, 1);

        //check if second index of the array matches flips side of the first

        if($split_array[0] != brother($split_array[1])){
            $mismatch++;
        }

    }

    if($mismatch > 0){
        echo "false";exit;
    }else{
        echo "true";exit;
    }

}else{
    echo "true"; exit;
}





function brother($s){

    if($s == "["){
        return "]";
    }


    if($s == "]"){
        return "[";
    }


    if($s == "{"){
        return "}";
    }


    if($s == "}"){
        return "{";
    }

    if($s == "("){
        return ")";
    }


    if($s == ")"){
        return "(";
    }


}

