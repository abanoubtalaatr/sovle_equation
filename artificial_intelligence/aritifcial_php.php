<?php 
header("Content-type: application/json; charset=utf-8");
$string = $_POST['equation'];
$string = preg_replace('/\s+/', '', $string);

function given_two_number($string){
  preg_match_all("/\d+/", $string, $matches);
  $first_number = $matches[0][0];
  $second_number = $matches[0][1];
  $sum = $first_number + $second_number;
  $sub = $second_number - $first_number;
 //  $first_number=0;
	// $second_number = 0;
	// $check = '';
	// $sum = 0;
	// $character = substr($string, 0, 1);
 //   for ($i=0; $i <strlen($string) ; $i++){ 
 //   	     if($string[$i] !='=' && $check =='' ){
 //              $first_number .= $string[$i];
 //              $first_number = preg_replace('/[^0-9]/', '', $first_number);
 //              $first_number = intval($first_number);
 //              $sum +=$first_number;

 //          }else{
 //          	$check = 'e';
 //          	$second_number .= $string[$i];
 //          	$second_number =preg_replace('/[^0-9]/', '', $second_number);
 //            $second_number =intval($second_number);
 //            $sum += $second_number;

 //          }
 //   }

 return [
  'first_number'=>$first_number,
  'second_number'=>$second_number,
  'sub'=>$sub,
  'sum'=>$sum

 ]; 
}

function given_three_number($string){
    preg_match_all("/\d+/", $string, $matches);
    $first_number = $matches[0][0];
    $second_number = $matches[0][1];
    $third_number = $matches[0][2];
    $sum =$third_number + $second_number;
    $sub = $third_number - $second_number;
    $divition = $sum / $first_number;
    preg_match_all("/\w/", $string, $all_characters);
    $character = $all_characters[0][1];
    return [
           'first_number'=>$first_number,
           'second_number'=>$second_number,
           'third_number'=>$third_number,
           'character'=>$character,
           'sum'=>$sum,
           'result_of_division'=>$divition,
           'sub'=>$sub
         ];
	//  $first_number ='';
 //        $second_number = '';
 //        $third_number = '';
 //        $check_1 = '';
 //        $check_2 = '';
       
 //        $div = 0;

 //        $character = preg_replace("/-/", '', $string);
 //        $character = preg_replace("/=/", '', $character);
 //        $character = preg_replace("/\d/", '', $character);
 //        $spicial = str_replace($character, "_", $string);
        

	// for($i = 0 ; $i < strlen($spicial); $i++){

 //      if($spicial[$i] !== "_" && $check_1 == ''){
 //      	$first_number .= $spicial[$i];
 //      	$first_number = intval($first_number);
      	
      	
 //      }
 //      elseif($spicial[$i] == "_" ){
 //      	 $check_1 = 's';
 //      }elseif($spicial[$i] != '=' && $check_2 ==''){
 //      	$second_number .= $spicial[$i];
 //      	$second_number =preg_replace("/-/", '',$second_number);
 //      	$second_number = floatval($second_number);
      	
 //      }else{
 //      	$check_2 = 'a';
 //      	$third_number .=$spicial[$i];
 //      	$third_number = preg_replace("/=/", '',$third_number);
 //      	$third_number = floatval($third_number);
 //      	$div = $third_number / $sum;
 //      	$div = $div;
 //      }
      
	// }

    
}
 function give_four_number($string){
	$numbers = [];
	$character = substr($string, 3, 1);
	preg_match_all("/\d+/", $string, $matches);
     $number_one =	$matches[0][0];
     $number_two = $matches[0][1];
     $number_three = $matches[0][2];
     $number_four = $matches[0][3];
     $sum_three_and_four = $number_four + $number_three;
     $div = ($number_one/$number_two);
     $sub = $number_four - $number_three;
     
     $final_result = floatval($sum_three_and_four/$div);
     return [
     	      'number_one'=>$number_one,
     	      'number_two'=>$number_two,
     	      'number_three'=>$number_three,
     	      'number_four'=>$number_four,
     	      'sum_three_and_four'=>$sum_three_and_four,
     	      'final_result'=>$final_result,
     	      'character'=>$character,
            'sub'=>$sub,
            'div'=>$div
     	    ];

}

$pattern_1 = "/^\D-\d+=\d+/u";//like a - 3 = 5
$patten_2 = "/^\d+\D-\d+=\d+/u";//like 3a - 4 = 10
$patern_3 = "/^\d+\/\d+\w-\d+=\d+/u";//like 1/2 a - 4 = 10
$patern_4 = "/^-\w-\d+=\d+/u";//like -a - 3  = 12
$patern_5 ="/^-\d+\/\d+\w-\d+=\d+/u";//like -1/3a -5 = 6
$patten_6 = "/^-\d+\w-\d+=\d+/u";//like -2a - 2 = 6
$patten_7 ="/^-\d+\w\+\d+=\d+/u";//like -4a + 5 = 12 
$pattern_8 = "/^-\w\+\d+=\d+/u";//like -a+4 = 13
$pattern_9 = "/^-\d+\/\d+\w\+\d+=\d+/u";//like -2/3 a + 8 = 19
$pattern_11 = "/^\d+\/\d+\w\+\d+=\d+/u";//like 3/2a + 12 = 20 
$pattern_12 = "/^\d+\D+\d+=\d+/u";//like 2a + 10 = 30 

if(preg_match($pattern_1, $string)){//like a - 3 = 5
	  $numbers=  given_two_number($string);
    preg_match_all("/\w/",$string, $matches);
    $character = $matches[0][0];
     echo "<div>
 	          <h6 class='response_h6'>(1)  -{$numbers['first_number']} when go to another hand will became  {$numbers['first_number']}</h6>
 	          <h6 class='response_h6'> (2) will sum {$numbers['second_number']} on {$numbers['first_number']}</h6>
	          <h6 class='response_h6'> (3) {$character} = {$numbers['second_number']} + {$numbers['first_number']} </h6>
	          <h6 class='response_h6'> (4) .`.  {$character} = {$numbers['sum']} </h6>
	         </div> ";

}
//like 3a - 4 = 10
elseif(preg_match($patten_2, $string)){
	   
	$numbers = given_three_number($string);
  
	 echo "<div>
	 	          <h6 class='response_h6'>(1) -{$numbers['second_number']} wil go to another hand became {$numbers['second_number']}</h6>
	 	          <h6 class='response_h6'> (2) will sum{$numbers['second_number']} on {$numbers['third_number']}</h6>
		          <h6 class='response_h6'> (3) {$numbers['first_number']}{$numbers['character']} = {$numbers['second_number']}+{$numbers['third_number']} </h6>
		           <h6 class='response_h6'> (4)   {$numbers['first_number']}{$numbers['character']} = {$numbers['sum']} </h6>
		           <h6 class='response_h6'> (5)  will divition {$numbers['first_number']} on two sides</h6>

		          <h6 class='response_h6'> (4) .`.  {$numbers['character']} = {$numbers['result_of_division']} </h6>
		         </div> ";	

}	

//third pattern belong postive fraction before number like 1/2 a - 5 = 8
elseif(preg_match($patern_3, $string)){
   $values = give_four_number($string);
   if($values['number_four'] >$values['number_three']){
     echo "<div>
          <h6 class='response_h6'>(1)  - {$values['number_three']} wil go to another hand became {$values['number_three']}</h6>
          <h6 class='response_h6'> (2) will sum {$values['number_four']} on {$values['number_three']}</h6>
      <h6 class='response_h6'> (3) {$values['number_one']} / {$values['number_two']} {$values['character']}  = {$values['number_four']} + {$values['number_three']} </h6>
       <h6 class='response_h6'> (4)   {$values['number_one']} / {$values['number_two']} {$values['character']} = {$values['sum_three_and_four']} </h6>
       <h6 class='response_h6'> (5) we will divtion {$values['number_one']} / {$values['number_two']} on two sides</h6>
       <h6 class='response_h6'> (6) {$values['character']} = {$values['final_result']}</h6>         
    </div> "; 
   }else{
      echo "<div>
          <h6 class='response_h6'>(1)  - {$values['number_three']} wil go to another hand became {$values['number_three']}</h6>
          <h6 class='response_h6'> (2) will sum {$values['number_three']} on {$values['number_four']}</h6>
      <h6 class='response_h6'> (3) {$values['number_one']} / {$values['number_two']} {$values['character']}  = {$values['number_three']} + {$values['number_four']} </h6>
       <h6 class='response_h6'> (4)   {$values['number_one']} / {$values['number_two']} {$values['character']} = {$values['sum_three_and_four']} </h6>
       <h6 class='response_h6'> (5) we will divtion {$values['number_one']} / {$values['number_two']} on two sides</h6>
       <h6 class='response_h6'> (6) {$values['character']} = {$values['final_result']}</h6>         
    </div> "; 
   }
 
}
//like  -a - 5 = 4
elseif(preg_match($patern_4, $string)){
  $character = substr($string, 1, 1);
  $numbers=  given_two_number($string);
     echo "<div>
            <h6 class='response_h6'>(1)  -{$numbers['first_number']} when go to another hand will became  {$numbers['first_number']}</h6>
            <h6 class='response_h6'> (2) will sum {$numbers['second_number']} on {$numbers['first_number']}</h6>
            <h6 class='response_h6'> (3) -{$character} = {$numbers['second_number']} + {$numbers['first_number']} </h6>
            <h6 class='response_h6'> (4) .`.  {$character} = -{$numbers['sum']} </h6>
           </div> ";
}
//like -1/2 a - 4 = 9
elseif(preg_match($patern_5, $string)){
    $character = substr($string, 4, 1);
    $values = give_four_number($string);
       echo "<div>
              <h6 class='response_h6'>(1)  - {$values['number_three']} wil go to another hand became {$values['number_three']}</h6>
                  <h6 class='response_h6'> (2) will sum {$values['number_four']} on {$values['number_three']}</h6>
              <h6 class='response_h6'> (3) -{$values['number_one']} / {$values['number_two']} {$character}  = {$values['number_four']} + {$values['number_three']} </h6>
               <h6 class='response_h6'> (4) -{$values['number_one']} / {$values['number_two']} {$character} = {$values['sum_three_and_four']} </h6>
               <h6 class='response_h6'> (5) we will divtion -{$values['number_one']} / {$values['number_two']} on two sides</h6>
               <h6 class='response_h6'> (6) {$character} = -{$values['final_result']}</h6>        
            </div>";
}
//like -2a - 4 = 10  
elseif(preg_match($patten_6, $string)){

   $numbers = given_three_number($string);
   $character = preg_match_all("/\D/", $string, $matches);
   
   
   echo "<div>
              <h6 class='response_h6'>(1)  -{$numbers['second_number']} wil go to another hand became {$numbers['second_number']}</h6>
              <h6 class='response_h6'> (2) will sum{$numbers['second_number']} on {$numbers['third_number']}</h6>
              <h6 class='response_h6'> (3) -{$numbers['first_number']}{$matches[0][1]} = {$numbers['second_number']}+{$numbers['third_number']} </h6>
               <h6 class='response_h6'> (4)   -{$numbers['first_number']}{$matches[0][1]} = {$numbers['sum']} </h6>
               <h6 class='response_h6'> (5)  will divition -{$numbers['first_number']} on two sides</h6>

              <h6 class='response_h6'> (6) .`.  {$matches[0][1]} = -{$numbers['result_of_division']} </h6>
             </div> ";
}
//like -2a + 5 = 10  
elseif(preg_match($patten_7, $string)){

  $numbers=  given_three_number($string);

  $result_of_division_ = -$numbers['sub'] / $numbers['first_number'];
  $result_of_division =$numbers['sub'] / $numbers['first_number'];
  $character = preg_match_all("/\D/", $string, $matches);
    if($numbers['third_number'] < $numbers['second_number']){
     echo "<div>
              <h6 class='response_h6'>(1)  {$numbers['second_number']} wil go to another hand became -{$numbers['second_number']}</h6>
              <h6 class='response_h6'> (2) will sub {$numbers['second_number']} from {$numbers['third_number']}</h6>
              <h6 class='response_h6'> (3) -{$numbers['first_number']}{$matches[0][1]} = {$numbers['third_number']} - {$numbers['second_number']} </h6>
               <h6 class='response_h6'> (4)   -{$numbers['first_number']}{$matches[0][1]} = {$numbers['sub']} </h6>
               <h6 class='response_h6'> (5)  will divition -{$numbers['first_number']} on two sides</h6>

              <h6 class='response_h6'> (6) .`.  {$matches[0][1]} = {$result_of_division_} </h6>
             </div> ";
            }
        else{
            echo "<div>
              <h6 class='response_h6'>(1)  {$numbers['second_number']} wil go to another hand became -{$numbers['second_number']}</h6>
              <h6 class='response_h6'> (2) will sub {$numbers['second_number']} from {$numbers['third_number']}</h6>
              <h6 class='response_h6'> (3) -{$numbers['first_number']}{$matches[0][1]} = {$numbers['third_number']} - {$numbers['second_number']} </h6>
               <h6 class='response_h6'> (4)   -{$numbers['first_number']}{$matches[0][1]} = {$numbers['sub']} </h6>
               <h6 class='response_h6'> (5)  will divition -{$numbers['first_number']} on two sides</h6>

              <h6 class='response_h6'> (6) .`.  {$matches[0][1]} = -{$result_of_division} </h6>
             </div> ";
           }
 
}
//like -a + 4 = 2 
elseif(preg_match($pattern_8, $string)){
   $character = substr($string, 1, 1);
  $numbers=  given_two_number($string);
  $sub = -$numbers['sub'];
  if($numbers['first_number'] < $numbers['second_number']){
      echo "<div>
            <h6 class='response_h6'>(1) {$numbers['first_number']} when go to another hand will became  -{$numbers['first_number']}</h6>
            <h6 class='response_h6'> (2) will sub {$numbers['first_number']} from {$numbers['second_number']}</h6>
            <h6 class='response_h6'> (3) -{$character} = {$numbers['second_number']} - {$numbers['first_number']} </h6>
            <h6 class='response_h6'> (4) .`.  {$character} = {$numbers['sub']} </h6>
           </div>";
  }else{
     echo "<div>
            <h6 class='response_h6'>(1) {$numbers['first_number']} when go to another hand will became  -{$numbers['first_number']}</h6>
            <h6 class='response_h6'> (2) will sub {$numbers['first_number']} from {$numbers['second_number']}</h6>
            <h6 class='response_h6'> (3) -{$character} = {$numbers['second_number']} - {$numbers['first_number']} </h6>
            <h6 class='response_h6'> (4) .`.  {$character} = {$sub} </h6>
           </div>";
  }
    
}
//like -1/2a + 4 = 12
elseif(preg_match($pattern_9, $string)){
    $values = give_four_number($string);
    preg_match_all("/\w/", $string, $matches);
    
    $sub = $values['number_four'] - $values['number_three'];
    $result = -($sub*$values['number_two'])/$values['number_one'];
 if($values['number_three'] < $values['number_four']){
      echo "<div>
              <h6 class='response_h6'>(1) {$values['number_three']} wil go to another hand became -{$values['number_three']}</h6>
              <h6 class='response_h6'> (2) will sub {$values['number_three']} from {$values['number_four']}</h6>
          <h6 class='response_h6'> (3) - {$values['number_one']} / {$values['number_two']} {$matches[0][2]}  = {$values['number_four']} - {$values['number_three']} </h6>
           <h6 class='response_h6'> (4)  - {$values['number_one']} / {$values['number_two']} {$matches[0][2]} = {$values['sum_three_and_four']} </h6>
           <h6 class='response_h6'> (5) we will divtion - {$values['number_one']} / {$values['number_two']} on two sides</h6>
           <h6 class='response_h6'> (6) {$matches[0][2]} = - {$values['final_result']}</h6>         
        </div> "; 
      }else{
                echo "<div>
              <h6 class='response_h6'>(1) {$values['number_three']} wil go to another hand became -{$values['number_three']}</h6>
              <h6 class='response_h6'> (2) will sub {$values['number_three']} from {$values['number_four']}</h6>
          <h6 class='response_h6'> (3) - {$values['number_one']} / {$values['number_two']} {$matches[0][2]}  = {$values['number_four']} - {$values['number_three']} </h6>
           <h6 class='response_h6'> (4)  - {$values['number_one']} / {$values['number_two']} {$matches[0][2]} = {$sub} </h6>
           <h6 class='response_h6'> (5) we will divtion - {$values['number_one']} / {$values['number_two']} on two sides</h6>
           <h6 class='response_h6'> (6) {$matches[0][2]} = {$result}</h6>         
        </div> "; 
      } 
}

//like 1/2 a + 4 = 9 
elseif(preg_match($pattern_11, $string)){
     $values = give_four_number($string);
     $final_result = $values['sub']/$values['div'];
     
        echo "<div>
              <h6 class='response_h6'>(1)  - {$values['number_three']} wil go to another hand became {$values['number_three']}</h6>
              <h6 class='response_h6'> (2) will sub {$values['number_three']} from {$values['number_four']}</h6>
              <h6 class='response_h6'> (3) {$values['number_one']} / {$values['number_two']} {$values['character']}  = {$values['number_four']} - {$values['number_three']} </h6>
              <h6 class='response_h6'> (4)   {$values['number_one']} / {$values['number_two']} {$values['character']} = {$values['sub']} </h6>
             <h6 class='response_h6'> (5) we will divtion {$values['number_one']} / {$values['number_two']} on two sides</h6>
             <h6 class='response_h6'> (6) {$values['character']} = {$final_result}</h6>         
       </div> ";
}

// //like 2a + 5 = 20
elseif(preg_match($pattern_12, $string)){

  $numbers = given_three_number($string);
  $result_of_division = $numbers['sub']/$numbers['first_number'];
   echo "<div>
              <h6 class='response_h6'>(1)  {$numbers['second_number']} wil go to another hand became - {$numbers['second_number']}</h6>
              <h6 class='response_h6'> (2) will sub{$numbers['third_number']} on {$numbers['second_number']}</h6>
              <h6 class='response_h6'> (3) {$numbers['first_number']}{$numbers['character']} = {$numbers['third_number']} - {$numbers['second_number']} </h6>
               <h6 class='response_h6'> (4)   {$numbers['first_number']}{$numbers['character']} = {$numbers['sub']} </h6>
               <h6 class='response_h6'> (5)  will divition {$numbers['first_number']} on two sides</h6>
              <h6 class='response_h6'> (6) .`.  {$numbers['character']} = {$result_of_division} </h6>
             </div> ";
}elseif(preg_match("/^(-)?(\d+)?\w\^2[-+]+\d+\w[-+]+\d+=0$/u", $string)){
 
    var_dump(q_equation($string)); 
}

function q_equation($equation)
{
    
    $equation1 = get_nice_equation($equation);
    
    $q = q_factor($equation1);
    $q_factor = $q[0];
    $sign_q_factor = sign_q_factor($equation1);
    
    $s = s_factor($equation1);
    $s_factor = $s[0];
    $sign_s_factor = sign_s_factor($equation1);
    
    $third = third_factor($equation1);
    $third_factor = $third[0];
    $sign_third_factor = sign_third_factor($equation1);
    
    $char = first_char($equation1);
    
    //echo "q_factor " . $q_factor . " sign of q_factor " .$sign_q_factor."<br>";
    //echo "s_factor " . $s_factor . " sign of s_factor " .$sign_s_factor."<br>";
    //echo "third_factor " . $third_factor . " sign of third_factor " .$sign_third_factor."<br>";
    /*
     * equation will be like 3x^2 - 5x + 9 = 0
     * 
     *   q_factor          ==> 3
     *   sign_q_factor     ==> +
     * 
     *   s_factor          ==> 5
     *   sign_s_factor     ==> -
     * 
     *   third_factor      ==> 9
     *   sign_third_factor ==>+
     *   
     *   
     * */
    
    
    if($sign_s_factor == "-")
    {
        $s_num = get_m($s_factor);
    }
    else if($sign_s_factor == "+")
    {
        $s_num = $s_factor;
    }
    $solutions = '';
    
    //if sign of third factor - so the two possible solution will have different signs
    if($sign_third_factor == '-')
    {
        /*
           get result of multiply two numbers that will be the result of them  = q_factor
           get result of multiply two numbers that will be the result of them  = third factor
        
        */
        
        //s_factor delivered to us in positive
        
        
        $q_arr = multiply($q_factor);
        $t_arr = multiply($third_factor);
        for($i=0;$i<count($q_arr) ; $i++)
        {
            $q_arr2 = $q_arr[$i];
            
            $q_num1 = $q_arr2[0];
            $q_num2 = $q_arr2[1];
            
            
            
            $m_q_num1 = get_m($q_num1);
            $m_q_num2 = get_m($q_num2);
            for($i2 = 0;$i2< count($t_arr) ; $i2++)
            {
                $t_arr2  = $t_arr[$i2];
                
                $t_num1 = $t_arr2[0];
                $t_num2 = $t_arr2[1];
                
                
                
                $m_t_num1 = get_m($t_num1);
                $m_t_num2 = get_m($t_num2);
                
                
                /*on this we will two res  
                 * 
                 * res1 ==> (q_num1 * t_num2) positive
                 * res2 ==> (q_num2 * t_num1) nagative
                 */
                
                $res1 = ($q_num1 * $t_num2) + get_m($q_num2 * $t_num1);
                
                $res2 = get_m($q_num1 * $t_num2) + ($q_num2 * $t_num1);
                
                //we try res1 and res2 == s_factor to make sure that we choose correct signs in correct position
                
              
                if($res1 == $s_num)
                {
                    
                    
                    /*
                     in res1 the t_num2 is positive
                              the t_num1 is nagative
                              
                     so in res1 first_x will be nagative of t_num2 and  / q_num1
                               secand_x will be positive of t_num1 and  / q_num2
                               
                     */
                    $step0 = $equation;
                    $step1 = "( " . $q_num1 . $char ." - " . $t_num1 . " ) " . " ( " . $q_num2 . $char . " + " . $t_num2 . " ) = 0". "<br>";
                    $step2 =  "( " . $q_num1 . $char . " - " . $t_num1 . " ) = 0  ||" . " ( " . $q_num2 . $char . " + " . $t_num1 . " ) = 0". "<br>";
                    
                    if($q_num1 != 1)
                    {
                        $step3 = "---------------------------------------------------". "<br>";
                        $step4 = "( " . $q_num1 . $char . " - " . $t_num1 . " ) = 0". "<br>";
                        $step5 = $q_num1 . $char . " = " .  $t_num1. "<br>";
                        $step6 = $char . " = " . $t_num1  . " / " . $q_num1 . "<br>";
                        $step7 = $char . " = " . $t_num1 / $q_num1. "<br>";
                        $step8 = "---------------------------------------------------". "<br>";
                    }   
                    else if($q_num1 == 1)
                    {
                        $step3 = "---------------------------------------------------". "<br>";
                        $step4 = "( " . $q_num1 . $char . " - " . $t_num1 . " ) = 0". "<br>";
                        $step5 = $char . " = " .  $t_num1. "<br>";
                        $step6 = "";
                        $step7 = "";
                        $step8 = "---------------------------------------------------". "<br>";
                    }  
                    if($q_num2 != 1)
                    {
                        $step9 = "---------------------------------------------------". "<br>";
                        $step10 = "( " . $q_num2 . $char . " + " . $t_num2 . " ) = 0". "<br>";
                        $step11  = $q_num2 . $char . " = " .  get_m($t_num2). "<br>";
                        $step12 = $char . " = " . get_m($t_num2) . " / " . $q_num2 . "<br>";
                        $step13 = $char . " = " . get_m($t_num2)  / $q_num2 . "<br>";
                        $step14 = "---------------------------------------------------". "<br>";
                    }  
                    else if($q_num2 == 1)
                    {
                        $step9 = "---------------------------------------------------". "<br>";
                        $step10 = "( " . $char . " + " . $t_num2 . " ) = 0". "<br>";
                        $step11  =  $char . " = " . get_m($t_num2). "<br>";
                        $step12 = "";
                        $step13 = "";
                        $step14 = "---------------------------------------------------". "<br>";
                    }
                     
                    
                        
                    //$first_x = get_m($t_num1) / $q_num1;
                    //$secand_x  = $t_num2 / $q_num2;
                    
                    $steps = $step0 . $step1 . $step2 . $step3 . $step4 . $step5 . $step6 . $step7 . $step8 . $step9 . $step10 . $step11 . $step12 . $step13 . $step14;
                    
                     $solutions .= "<br><br>"."|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||"."<br><br>" .$steps;
                   
                }
                else if($res2 == $s_num)
                {
                   
                    /*
                     in res2 the t_num2 is nagative
                             the t_num1 is positive
                     
                     so in res1 first_x will be positive of t_num2 and  / q_num1
                               secand_x will be nagative of t_num1 and  / q_num2
                     
                     */
                    $step0 = $equation;
                    $step1 = "( " . $q_num1 . $char ." + " . $t_num1 . " ) " . " ( " . $q_num2 . $char . " - " . $t_num2 . " ) = 0" . "<br>";
                    $step2 = "( " . $q_num1 . $char . " + " . $t_num1 . " ) = 0 || ( " . $q_num2 . $char . " - " . $t_num2 . " ) = 0". "<br>";
                    
                    if($q_num1 != 1)
                    {
                        $step3 = "---------------------------------------------------". "<br>";
                        $step4 =  "( " . $q_num1 . $char . " + " . $t_num1 . " ) = 0". "<br>";
                        $step5 = $q_num1 . $char . " = " .  get_m($t_num1). "<br>";
                        $step6 = $char . " = " . get_m($t_num1)  . " / " . $q_num1 . "<br>";
                        $step7 = $char . " = " . get_m($t_num1) / $q_num1. "<br>";
                        $step8 = "---------------------------------------------------". "<br>";
                    }
                    else if($q_num1 == 1)
                    {
                        $step3 = "---------------------------------------------------". "<br>";
                        $step4 =  "( " . $char . " + " . $t_num1 . " ) = 0". "<br>";
                        $step5 = $char . " = " .  get_m($t_num1). "<br>";
                        $step6 = "";
                        $step7 = "";
                        $step8 = "---------------------------------------------------". "<br>";
                    }
                    if($q_num2 != 1)
                    {
                        $step9 = "---------------------------------------------------". "<br>";
                        $step10 =  "( " . $q_num2 . $char . " - " . $t_num2 . " ) = 0". "<br>";
                        $step11 =  $q_num2 . $char . " = " .  $t_num2. "<br>";
                        $step12 = $char . " = " . $t_num2 . " / " . $q_num2 . "<br>";
                        $step13 = $char . " = " . $t_num2  / $q_num2. "<br>";
                        $step14 = "---------------------------------------------------". "<br>";
                    }
                    else if($q_num2 == 1)
                    {
                        $step9 = "---------------------------------------------------". "<br>";
                        $step10 =  "( " . $char . " - " . $t_num2 . " ) = 0". "<br>";
                        $step11 = $char . " = " . $t_num2  / $q_num2. "<br>";
                        $step12 = "";
                        $step13 = "";
                        $step14 = "---------------------------------------------------". "<br>";
                    }
                    
                    
                    
                    //$first_x = $t_num1 / $q_num1;
                    //$secand_x = get_m($t_num2) / $q_num2;
                    
                    $steps = $step0 . $step1 . $step2 . $step3 . $step4 . $step5 . $step6 . $step7 . $step8 . $step9 . $step10 . $step11 . $step12 . $step13 . $step14;
                    
                    $solutions .= "<br><br>"."|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||"."<br><br>" .$steps;
                    
                }
                else
                {
                    continue;
                }
                
            }
            
                
        }     
    }
    //if sugn of third factor is + so the sign of each solution equal the sign of secand factor (-3x) - ==> the sign of two solution
    else if($sign_third_factor == "+")
    {
        /*if he come here so
         * 
         * if sign of s_factor == (-)
         the sign of arr2[0] is -  (X - arr2[0])
         the sign of arr2[1] is -  (X - arr2[1])
         
         but must the sum of arr2[0] and arr2[1] equel s_factor
         (X - arr2[0]) (X - arr2[1]) = 0
         
         (X - arr2[0]) = 0 |||| (X - arr2[1]) = 0
         
         X = - arr2[0]     |||| X = arr2[1]
         */
        $q_arr = multiply($q_factor);
        $t_arr = multiply($third_factor);
        for($i=0;$i<count($q_arr) ; $i++)
        {
            $q_arr2 = $q_arr[$i];
            
            $q_num1 = $q_arr2[0];
            $q_num2 = $q_arr2[1];
            
           
            for($i2 = 0;$i2< count($t_arr) ; $i2++)
            {
                $t_arr2  = $t_arr[$i2];
                
                $t_num1 = $t_arr2[0];
                $t_num2 = $t_arr2[1];
                
                
                
                $m_t_num1 = get_m($t_num1);
                $m_t_num2 = get_m($t_num2);
                
                
            if($sign_s_factor == "-")//if (-) so the two sign of num1 and num2 == (-)
            {
                
                
                $res = get_m($q_num1 * $t_num2) + get_m($q_num2 * $t_num1);
                
                
                
                if($res == $s_num)
                {
                    // first x will be the positive of t_num2 / q_num1
                    //secand x will be the positive of t_num1 / q_num2
                    
                    $step0 = $equation;
                    $step1 = "( " .$q_num1 . $char . " - " . $t_num1 . " ) ( " . $q_num2 . $char . " - " . $t_num2 . " ) = 0" . "<br>";
                    $step2 = "( " .$q_num1 . $char . " - " . $t_num1 . " ) = 0 ||  ( " . $q_num2 . $char . " - " . $t_num2 . " ) = 0". "<br>";
                    
                    if($q_num1 != 1)
                    {
                        $step3 = "---------------------------------------------------". "<br>";
                        $step4 = "( " .$q_num1 . $char . " - " . $t_num1 . " ) = 0 ". "<br>";
                        $step5 = $q_num1 . $char . " = " . $t_num1. "<br>";
                        $step6 = $char ." = ". $t_num1 ." / " . $q_num1. "<br>";
                        $step7 = $char ." = ". $t_num1  / $q_num1. "<br>";
                        $step8 = "---------------------------------------------------". "<br>";
                        
                    }
                    else if($q_num1 == 1)
                    {
                        $step3 = "---------------------------------------------------". "<br>";
                        $step4 = "( " . $char . " - " . $t_num1 . " ) = 0 ". "<br>";
                        $step5 = $char . " = " . $t_num1. "<br>";
                        $step6 = "";
                        $step7 = "";
                        $step8 = "---------------------------------------------------". "<br>";
                    }
                    if($q_num2 != 1)
                    {
                        $step9 = "---------------------------------------------------". "<br>";
                        $step10 = "( " .$q_num2 . $char . " - " . $t_num2 . " ) = 0 ". "<br>";
                        $step11 = $q_num2 . $char . " = " . $t_num2. "<br>";
                        $step12 = $char . " = " . $t_num2 ." / " . $q_num2. "<br>";
                        $step13 = $char . " = " . $t_num2  / $q_num2. "<br>";
                        $step14 = "---------------------------------------------------". "<br>";
                    }
                    else if($q_num2 == 1)
                    {
                        $step9 = "---------------------------------------------------". "<br>";
                        $step10 = "( " .$q_num2 . $char . " - " . $t_num2 . " ) = 0 ". "<br>";
                        $step11 = $char . " = " . $t_num2. "<br>";
                        $step12 = "";
                        $step13 = "";
                        $step14 = "---------------------------------------------------". "<br>";
                    }
                    
                    //$first_x  = $t_num2 / $q_num1;
                    //$secand_x = $t_num1 / $q_num2;
                    
                    $steps = $step0 . $step1 . $step2 . $step3 . $step4 . $step5 . $step6 . $step7 . $step8 . $step9 . $step10 . $step11 . $step12 . $step13 . $step14;
                    
                    $solutions .= "<br><br>"."|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||"."<br><br>" .$steps;
                    
                }
                else
                {
                    continue;
                }
            }
            else if($sign_s_factor == "+")//if (+) so the two sign of num1 and num2 == (+)
            {
                $res = ($q_num1 * $t_num2) + ($q_num2 * $t_num1);
                
                if($res == $s_num)
                {
                    // first x will be the nagative of t_num2 / q_num1
                    //secand x will be the nagative of t_num1 / q_num2
                    
                    
                    $step0 = $equation;
                    $step1 = "( " .$q_num1 . $char . " + " . $t_num1 . " ) ( " . $q_num2 . $char . " + " . $t_num2 . " ) = 0" . "<br>";
                    $step2 = "( " .$q_num1 . $char . " + " . $t_num1 . " ) = 0 ||  ( " . $q_num2 . $char . " + " . $t_num2 . " ) = 0". "<br>";
                    
                    if($q_num1 != 1)
                    {
                        $step3 = "---------------------------------------------------". "<br>";
                        $step4 = "( " .$q_num1 . $char . " + " . $t_num1 . " ) = 0 ". "<br>";
                        $step5 = $q_num1 . $char . " = " . get_m($t_num1). "<br>";
                        $step6 = $char ." = ". get_m($t_num1) ." / " . $q_num1. "<br>";
                        $step7 = $char ." = ". get_m($t_num1)  / $q_num1. "<br>";
                        $step8 = "---------------------------------------------------". "<br>";
                        
                    }
                    else if($q_num1 == 1)
                    {
                        $step3 = "---------------------------------------------------". "<br>";
                        $step4 = "( " . $char . " + " . $t_num1 . " ) = 0 ". "<br>";
                        $step5 = $char . " = " . get_m($t_num1). "<br>";
                        $step6 = "";
                        $step7 = "";
                        $step8 = "---------------------------------------------------". "<br>";
                    }
                    if($q_num2 != 1)
                    {
                        $step9 = "---------------------------------------------------". "<br>";
                        $step10 = "( " .$q_num2 . $char . " + " . $t_num2 . " ) = 0 ". "<br>";
                        $step11 = $q_num2 . $char . " = " . get_m($t_num2). "<br>";
                        $step12 = $char . " = " . get_m($t_num2) ." / " . $q_num2. "<br>";
                        $step13 = $char . " = " . get_m($t_num2)  / $q_num2. "<br>";
                        $step14 = "---------------------------------------------------". "<br>";
                    }
                    else if($q_num2 == 1)
                    {
                        $step9 = "---------------------------------------------------". "<br>";
                        $step10 = "( " . $char . " + " . $t_num2 . " ) = 0 ". "<br>";
                        $step11 = $char . " = " . get_m($t_num2). "<br>";
                        $step12 = "";
                        $step13 = "";
                        $step14 = "---------------------------------------------------". "<br>";
                    }
                    
                    //$first_x  = get_m($t_num1 / $q_num1);
                    //$secand_x = get_m($t_num2 / $q_num2);
                    $steps = $step0 . $step1 . $step2 . $step3 . $step4 . $step5 . $step6 . $step7 . $step8 . $step9 . $step10 . $step11 . $step12 . $step13 . $step14;
                    
                    $solutions .= "<br><br>"."|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||"."<br><br>" .$steps;
                    
                }
                else
                {
                    continue;
                }
            }
          }
        }
    }
    
    if($solutions == '')
        return "this equation has not solution";
    else
        return $solutions;
}
function multiply($num)
{
    /*
     * this function used to get the Multiplying of two number and the result is $num
     *
     *
     */
    $possible_solution = array();
    $ps_counter = 0;
    
    $data = array();
    $data_counter = 0;
    for($i1 = 1;$i1<=10;$i1++)
    {
        for($i2 = 1;$i2<=10;$i2++)
        {
            if(($i2 * $i1) == $num)
            {
                
                $data[$data_counter] = array($i1 , $i2);
                $data_counter++;
                
            }
        }
    }
    return $data;
}
/*
$arr = multiply(4);
for($i=0;$i<count($arr);$i++)
{
    $two_num = $arr[$i];
    $num1 = $two_num[0];
    $num2 = $two_num[1];
    
    echo $num1 . " * " . $num2 . "<br>";
}
*/
    
function get_m($num)
{
    //this function used to the nagative value of any value entered ($num)
    return $num - ($num + $num);
}
function is_sign($char)
{
    //this function return true if the char is sign 
    if($char == "-" || $char == "+")
    {
        return true;
    }
    else
        return false;
}
function get_nice_equation($equation)
{
    /*
     * this function used to set the equation on right standard
     *
     * if the equation written like this x^2+x-20=0
     *
     * the function will return 1x^2+1x-20=0
     */
    
    $equation = str_replace(' ' , '' ,$equation);
    
    $first_char = first_char($equation);
    $pos_f_char = strpos($equation,$first_char);
    
    
    if($pos_f_char == 0)
    {
        $equation1 = '1' . $equation;
    }
    else if(is_sign($equation[$pos_f_char - 1]) && $pos_f_char == 1)
    {
        $equation1 = $equation[0] . '1' . substr($equation , 1);
    }
    else
    {
        $equation1 = $equation;
    }
    
    
    $new_equation = '';
    if(filter_var($equation1[$pos_f_char - 1] , FILTER_VALIDATE_INT) || $equation1[$pos_f_char -1] == "0")
    {
        $new_equation = $equation1;
        
    }
    else
    {
        for($i=0;$i<strlen($equation1);$i++)
        {
            if($i == $pos_f_char)
                $new_equation .= '1';
                
                $new_equation .= $equation1[$i];
        }
    }
    $arr = secand_char($new_equation);
    $secand_char = $arr[0];
    $pos_s_char = $arr[1];
    
    
    $new_equation2 = '';
    if(filter_var($new_equation[$pos_s_char - 1] , FILTER_VALIDATE_INT) || $new_equation[$pos_s_char -1] == "0")
    {
        $new_equation2 = $new_equation;
        
    }
    else
    {
        for($i=0;$i<strlen($new_equation);$i++)
        {
            if($i == $pos_s_char)
                $new_equation2 .= '1';
                
                $new_equation2 .= $new_equation[$i];
        }
    }
    /*
     * if the equation written like this x^2-x+3 = 1
     * we want change the standard to be like this x^2 - x  + 3 -1 = 0  
     */
    
    $fourth_factor = fourth_factor($new_equation2);
    $sign_fourth = sign_fourth_factor($new_equation2);
    
    $t_arr = third_factor($new_equation2);
    $third_factor = $t_arr[0];
    $pos_third = $t_arr[1];
    
    $sign_third = sign_third_factor($new_equation2);
    
    if($fourth_factor != 0)
    {
        //here we want to know the sign of fourth factor 
       
        if($sign_fourth == "+")
        {
            //here we want Subtraction the third factor from fourth factor 
            
            if($sign_third == "+")
            {
                $new_third = $third_factor - $fourth_factor;
            }
            else if($sign_third == "-")
            {
                $new_third = get_m($third_factor) - $fourth_factor;
            }
        }
        else if($sign_fourth == "-")
        {
            //here we want sum the third factor with fourth factor
            if($sign_third == "+")
            {
                
                $new_third = $third_factor + $fourth_factor;
            }
            else
            {
                $new_third = get_m($third_factor) + $fourth_factor;
            }
        }
        else
        {
            //there no probability to come here
            return "fuck";
        }
        //we want to know the sign of new third factor
        if($new_third > 0)
        {
            //so the sign is +
            //if sign is + so we will put + sign to equation on the place of old third factor
            if($pos_third == 0)//so he write the third factor on first
            {
                $substr = substr($new_equation2 , ($pos_third + strlen($third_factor) - 1));
                $new_equation3 = $new_third . $substr;
            }
            else
            {
                if($sign_third == "+" || $sign_third == "-")
                {
                    //so we will just change the number
                    
                    
                    $test_equation = '';
                    for($i=0;$i<strlen($new_equation2);$i++)
                    {
                        if($i == $pos_third -1)
                        {
                            $test_equation .=  "+" . $new_third;
                            $i = $pos_third + strlen($third_factor) -1 ;
                        }
                        else
                        {
                            $test_equation .= $new_equation2[$i];
                        }
                    }
                    
                    $new_equation3 = $test_equation;
                }
               
                   
            }
        }
        else
        {
            //so the sign of new third -
            
            if($pos_third == 0)//so he write the third factor on first
            {
                $substr = substr($new_equation2 , ($pos_third + strlen($third_factor) - 1));
                $new_equation3 = "-" . $new_third . $substr;
            }
            else
            {
                if($sign_third == "+" || $sign_third == "-")
                {
                    //in + and in - we will change it with 
                    
                    $test_equation = '';
                    for($i=0;$i<strlen($new_equation2);$i++)
                    {
                        if($i == $pos_third -1)
                        {
                            $test_equation .=  $new_third;
                            $i = $pos_third + strlen($third_factor) -1 ;
                        }
                        else
                        {
                            $test_equation .= $new_equation2[$i];
                        }
                    }
                    
                    $new_equation3 = $test_equation;
                }
                
            }
        }
    }
    else if($fourth_factor == 0)
    {
        //nothing will change
        $new_equation3 = $new_equation2;
    }
    //we want change the old fourth factor to be zero
    $arr = explode("=" , $new_equation3);
    
    $first_part = $arr[0];
    
    $new_equation4 = $first_part . "=0";
    
    
    
    /*
     * if the q_factor has nagative sign we will reverse all equation signs 
     * like this -x^2+4x-12=0
     * will be like this x^2-4x+12=0
     */
    $q = q_factor($new_equation4);
    $pos_sign_q = $q[1] - 1;
    
    
    $s = s_factor($new_equation4);
    $pos_sign_s = $s[1] -1;
    if($pos_sign_s == -1)
    {
        $pos_sign_s++;
    }
    $sign_s_factor = sign_s_factor($new_equation4); 
    
    $t = third_factor($new_equation4);
    $pos_sign_t = $t[1] -1;
    if($pos_sign_t == -1)
    {
        $pos_sign_t++;
    }
    $sign_t_factor = sign_third_factor($new_equation4);
    
    $sign_q_factor = sign_q_factor($new_equation4);
    if($sign_q_factor == "-")
    {
        $new_equation5 = '';
        for($i=0;$i<strlen($new_equation4);$i++)
        {
            if($i == $pos_sign_q)
            {
                $new_equation5 .= "+";
            }
            else if($i == $pos_sign_s)
            {
                
                if($sign_s_factor == "+")
                    $new_equation5 .= "-";
                else 
                    $new_equation5 .= "+";
                
                if($pos_sign_s == 0)
                {
                      $new_equation5 .= $new_equation4[$i];  
                }
            }
            else if($i == $pos_sign_t)
            {
                if($sign_t_factor == "+")
                    $new_equation5 .= "-";
                else
                    $new_equation5 .= "+";
                
                if($pos_sign_t == 0)
                   $new_equation5 .= $new_equation4[$i];
            }
            else
                $new_equation5 .= $new_equation4[$i];
        }
    }
    else
    {
        //nothing will be change
        $new_equation5 = $new_equation4;
    }
    
    return  $new_equation5;
}
function q_factor($string)
{
    /*
     *  string like this ==> 3s^2-4s+10=0
     *  q_factor ==> 3
     * 
     */
    
        $pos = strpos($string , "^2");
    
        $number1 = '';
        for($i = $pos-2;$i >= 0 ; $i--)
        {
            if(filter_var($string[$i] , FILTER_VALIDATE_INT) || $string[$i] == "0")
            {
                $number1 .= $string[$i];
                
                
            }
            else
                break;
        }
        $number = '' ;
        for($i=strlen($number1)-1  ;$i >=0 ; $i--)
        {
            $number .= $number1[$i];
        }
        
        $pos_num = ($pos - 1) - strlen($number); 
        
        return array((int)$number , $pos_num);
    
    
}
function s_factor($equation)
{
    /*
     *  string like this ==> 3s^2-4s+10=0
     *  s_factor ==> 4
     *
     * 
     */
    
    $first_char = first_char($equation);
    $pos_f_char = strpos($equation , $first_char);
    
    $arr = secand_char($equation);
    $secand_char = $arr[0];
    $pos_s_char = $arr[1];
    
    
    if($equation[$pos_f_char + 1] == "^")
    {
        $pos = $pos_s_char;
    }
    else
    {
        $pos = $pos_f_char;
    }
    
    $number1 = '';
    for($i = $pos-1;$i >= 0 ; $i--)
    {
        if(filter_var($equation[$i] , FILTER_VALIDATE_INT) || $equation[$i] == "0")
        {
            $number1 .= $equation[$i];
            
        }
        else
            break;
    }
    $number = '' ;
    for($i=strlen($number1)-1  ;$i >=0 ; $i--)
    {
        $number .= $number1[$i];
    }
    
    $pos_num = $pos - strlen($number);
    return array((int)$number , $pos_num);
    
    
}
function third_factor($equation)
{
    /*
     *  string like this ==> 3x^2-4x+10=0
     *  third_factor ==> 10
     *
     *  
     *  first we will remove q_factor and x^2 
     *  secand we will remove s_factor 
     *  
     *  finally get the finally result 10
     */
   
    //remove q_factor
    $q = q_factor($equation);
    $q_factor = $q[0];
    $pos_q = $q[1];
    
    $pos = strpos($equation , "^2");
    
    $remove_str =  $q_factor . $equation[$pos -1 ] ."^2";
    $equation2 = str_replace($remove_str , '' , $equation);
    
    //remove s_factor
    $s = s_factor($equation);
    $s_factor = $s[0];
    $pos_s = $s[1];
   
    
    
    $remove_str =   $s_factor . $equation[$pos_s + 1] ;
    
    $equation3 = str_replace($remove_str , '' , $equation2);
    
    //equation3 will be like this x+10=0 so the third factor equal first number will see
    
    $third_factor = first_number($equation3);
    
    $pos = strpos($equation , $third_factor);
    
    if($pos == $pos_q)
    {
        $pos2 = strrpos($equation , $third_factor);
        if($pos2 == $pos_s)
        {
            //if he come here so the equation written like this 3x^2-3x+3=0
            //so we will reverse the string and get again the sign 
               
            $rev_equation  = strrev($equation1);
            $pos_sign_rev = strpos($rev_equation , $third_factor);
            $pos = strlen($equation) - ($pos_sign_rev + 1);
        }
        else
        {
            $pos = $pos2;
        }
    }
    else if($pos == $pos_s)
    {
        $pos2 = strrpos($equation , $third_factor);
        if($pos2 == $pos_q)
        {
            //if he come here so the equation written like this 3x-3x^2+3=0
            //so we will reverse the string and get again the sign 
            $rev_equation  = strrev($equation1);
            $pos_sign_rev = strpos($rev_equation , $third_factor);
            $pos_sign = strlen($equation) - ($pos_sign_rev + 1);
            
        }
        else
            $pos = $pos2;
    }
    
    return array($third_factor , $pos);
    
    
}
function fourth_factor($equation)
{
    
    $arr = explode('=' , $equation);
    
    $number = '';
    if(count($arr) == 2)//so the string have = sign
    {
        $number = first_number($arr[1]);
    }
    else
    {
        $number = "0";
    }
    return (int)$number;
}
function first_number($string)
{
        $number = '';
        $number_start = false;
        for($i=0;$i<strlen($string);$i++)
        {
            
            if(filter_var($string[$i] , FILTER_VALIDATE_INT) || $string[$i] == "0")
            {
                $number_start = true;
                
                $number .= $string[$i];
                
                
            }
            else
            {
                if($number_start == true)
                    break;
                 else
                    continue;
            }
        }
    return $number;
}
function first_char($string)
{
    $new_string = str_replace('-' ,'',$string);
    $new_string = str_replace('+' ,'',$new_string);
    $new_string = str_replace('=' ,'',$new_string);
    $new_string = str_replace('*' ,'',$new_string);
    $new_string = str_replace('/' ,'',$new_string);
    $new_string = str_replace('^2' ,'',$new_string);
    for($i =0 ;$i<strlen($new_string) ; $i++)
    {
        
        if(filter_var($new_string[$i] , FILTER_VALIDATE_INT) || $new_string[$i] == "0")
        {
            continue;
        }
        else  
            return $new_string[$i];
    }
}
function secand_char($string)
{
    $char_counter = 0;
    
    for($i =0 ;$i<strlen($string) ; $i++)
    {
        
        if(filter_var($string[$i] , FILTER_VALIDATE_INT) || $string[$i] == "0")
        {
            continue;
        }
        else
        {
            
            if($string[$i] != '+' && $string[$i] != '-'&& $string[$i] != '=' && $string[$i] !='^')
            {
                $char_counter++;
                
                if($char_counter == 2)
                {
                    return array($string[$i] , $i);
                }
            }   
            else 
                continue;
            
            
        }
            
    }
}
function sign_q_factor($equation)
{
    $q = q_factor($equation);
    $pos_sign = $q[1] -1 ;
    
    if($equation[$pos_sign] == '-' || $equation[$pos_sign] == '+')
        return $equation[$pos_sign];
    else if(($q[1]) == 0 )//it is meaning that write on first so the sign equal +
        return "+";
    
    else
        return false;
}
function sign_s_factor($equation)
{
    $s = s_factor($equation);
    $pos_sign = $s[1] - 1;
    
    if($equation[$pos_sign] == '-' || $equation[$pos_sign] == '+')
        return $equation[$pos_sign];  
    else if(($s[1]) == 0 )//it is meaning that write on first so the sign equal +
        return "+";
    else
        return false;
}
function sign_third_factor($equation)
{
    $third = third_factor($equation);
    $pos_sign = $third[1] -1;
   
    
    if($equation[$pos_sign] == '-' || $equation[$pos_sign] == '+')
        return $equation[$pos_sign];
    else if(($third[1]) == 0 )//it is meaning that write on first so the sign equal +
         return "+";
    else
        return false;
}
function sign_fourth_factor($equation)
{
    $f_factor = (string)fourth_factor($equation);
    $pos_sign = strpos($equation , "=") + 1;
    
    
    if($f_factor == "0")
        return "zero";
    else if(filter_var($equation[$pos_sign] , FILTER_VALIDATE_INT))
        return "+";
    else if($equation[$pos_sign] == '-' || $equation[$pos_sign] == '+')
        return $equation[$pos_sign];
            
    else
       return false;
}

// if(isset($_POST['equation']))
// {
//     $solutions = q_equation($_POST['equation']);
// }

?>