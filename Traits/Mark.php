<?php

trait Mark {
    
    protected $mark;

    public function setMark(string $_mark) {
        $this->mark = $_mark;

        if (is_numeric($_mark)) {
            throw new Exception('Il valore passato non è valido');
        }

    }

    public function getMark() {
        return $this->mark;
    }
}