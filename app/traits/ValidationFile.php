<?php

namespace app\traits;

trait ValidationFile
{

    public function validation()
    {
        return in_array($this->extension(), $this->extensions);
    }
}
