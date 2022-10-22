<?php

namespace App;

class Hello
{

    private string $talk = "Hello World";

    /**
     * Get the value of talk
     */ 
    public function getTalk()
    {
        return $this->talk;
    }

    /**
     * Set the value of talk
     *
     * @return  self
     */ 
    public function setTalk($talk)
    {
        $this->talk = $talk;

        return $this;
    }
}
