<?php

namespace SessionsAndCookies\Action;
use SessionsAndCookies\Router\PageRouter;

class Application
{
    public function start() :void {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
        new PageRouter()->Navigate();    
    }

    
}
    