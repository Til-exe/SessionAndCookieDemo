<?php

namespace SessionsAndCookies\Action;

class HomeAction
{
    public function RenderHomePage(): void {
        require_once __DIR__ . "/../HTML/home.phtml";
    }
    public function RenderPage1(): void {
        require_once __DIR__ . "/../HTML/Page1.phtml";
    }
    public function RenderPage2(): void {
        require_once __DIR__ . "/../HTML/Page2.phtml";
    }
    public function RenderPage3(): void {
        require_once __DIR__ . "/../HTML/Page3.phtml";
    }
    public function RenderPage4(): void {
        require_once __DIR__ . "/../HTML/Page4.phtml";
    }
    public function RenderPage5(): void {
        require_once __DIR__ . "/../HTML/Page5.phtml";
    }
    
}   // neue Renderer Klasse für die Templates
    // gesammter Pfad oder nur Template-Name?
    