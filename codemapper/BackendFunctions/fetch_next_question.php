<?php
  include_once 'db_conn.php';
  if (isset($_POST['rnum'])){
      fetchNext($conn);
  }
   function fetchNext($conn){
     //fetching question
     $sql = 'select * from questions where qid ='.$_POST['rnum'].';';
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);
     if($resultCheck > 0){
       $row = mysqli_fetch_assoc($result);
     }
     //fetching sample_test_cases
     $sql = 'select st_id,input,output from sample_test_cases where qid ='.$_POST['rnum'].';';
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);
     if($resultCheck>0){
       $testC = "";
       while($rowT = mysqli_fetch_assoc($result)){
         $testC = $testC."<p><b>Input</b> : ".$rowT['input']."&nbsp;&nbsp;<b>Output</b> : ".$rowT['output']."</p>\n";
       }
     }
     $row['sample_testcases'] = $testC;

     //fetching testcases
     $sql = 'select * from testcase where qid='.$_POST['rnum'].';';
     $result = mysqli_query($conn, $sql);
     $resultCheck = mysqli_num_rows($result);
     $inp_func=array();
     $exp_out=array();
     $level=array();
     $type=array();
     if($resultCheck>0){
          while($rowT = mysqli_fetch_assoc($result)){
            array_push($inp_func,$rowT['input_function_call']);
            array_push($exp_out,$rowT['expected_output']);
            array_push($level,$rowT['difficulty_level']);
            array_push($type,$rowT['type']);
          }
     }
     $row['testcases_inp'] = $inp_func;
     $row['testcases_out'] = $exp_out;
     $row['difficulty_level'] = $level;
     $row['type'] = $type;

     //encoding and returning response
     $response = json_encode($row);
     echo $response;
   }
?>
