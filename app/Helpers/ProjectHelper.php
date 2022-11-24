<?php
if (! function_exists('img_me')) {
    /**
     * Return url of image
     * 
     * @return string
     */
    function img_me($img = 'me.jpg')
    {
        return asset('front/images/me/'.$img);
    }
}

if (! function_exists('second_img_me')) {
    /**
     * Return url of image
     * 
     * @return string
     */
    function second_img_me($img = 'gafas.png')
    {
        return asset('front/images/me/'.$img);
    }
}
