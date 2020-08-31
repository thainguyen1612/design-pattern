<?php

if (! function_exists('dd')) {
   /**
     * Dump the string and end the script.
     *
     * @return void
     */
    function dd($arg)
    {
        dump($arg);

        die(1);
    }
}