<?php

const BR = '<br />';

interface Element {
    //define method signature
    public function characteristics();
}

class Water implements Element {
    public function characteristics(){
        return array(1,2,3,5);
    }
}

class Fire implements Element {
    public function characteristics(){
        return array(6,7,8,9);
    }
}

class Air implements Element {
    public function characteristics(){
        return array(10,11,12,13);
    }
}

class Earth implements Element {
    public function characteristics(){
        return array(14,15,16,17);
    }
}

function describe (Element $element) {
    echo get_class($element).BR;
    if (is_array($element->characteristics())){
        foreach ($element->characteristics() as $val){
            echo $val.BR;
        }
    }
}

$element = new Water;
describe($element);
echo BR;
$element = new Fire;
describe($element);
echo BR;
$element = new Air;
describe($element);
echo BR;
$element = new Earth;
describe($element);