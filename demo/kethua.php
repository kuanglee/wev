<?php
class sieuNhan {
  public $ten;
  public $sucManh;
  function sayHi(){
    return "i am sieu nhan";
  }
  function saySieu(){

  }
  function sieuNhan($t , $s){
    $this->ten = $t;
    $this->sucManh = $s;
  }

}

$ironMen = new sieuNhan("quang",58);
  // $ironMen->ten = "quang";
  // $ironMen->sucManh = "69";
  ///echo $ironMen->sayHi;
  echo $ironMen->sucManh;
  //echo "quang";















 ?>
