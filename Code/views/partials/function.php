<?php

    function activePage($url){
        return $_SERVER['REQUEST_URI']==$url;
    }