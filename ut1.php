<?php
class a {
    public $d,$a,$b;
    function __construct($f)
    {
       $this->a=$f;
       $d = 3.14*$this->a*$this->a;
       echo $d;
    }
    function __destruct()
    {
        /*destructor*/
    }
    
}
$k = new a(5);

