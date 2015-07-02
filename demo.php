<?php
class Demo implements Countable
{
    protected $data = array();

    public function __call($method, $args){
        if (array_key_exists($method, $this->data)) {
            return $this->data[$method];
        }
    }
    public function __set($name, $value){
        $this->data[$name] = $value;
    }

    public function __get($method)
    {
        if (array_key_exists($method, $this->data)) {
            return $this->data[$method];
        }
    }

    public function __toString(){
        return json_encode($this->data);
    }

    public function count()
    {
        return count($this->data);
    }



}


