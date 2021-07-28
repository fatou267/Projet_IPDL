<?php

namespace App\Utilities;

class StringVerifier
{
    
    /**
     * stringEscaping
     *
     * @param  mixed $data
     * @return string
     */
    public static function stringEscaping($data) : string
    {
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}
