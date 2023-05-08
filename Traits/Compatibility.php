<?php

trait Compatibility {
    
    protected $compatibility;

    public function setCompatibility(string $_compatibility) {
        $this->compatibility = $_compatibility;
    }

    public function getCompatibility() {
        return $this->compatibility;
    }
}