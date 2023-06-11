<?php

class ABC{
    public function Testing(){
        echo "something";
    }
    public function Checking(){
        $this->Testing();
        echo "<br>data";
   }
}
Class B extends ABC{
    function Check(){
        $this->Testing();
        echo "<br>";
        $this->Checking();
    }
}

$objectOf = new B;
$objectOf->Check();
?>