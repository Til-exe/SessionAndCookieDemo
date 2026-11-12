<?php

class HomeAction
{
    public function RenderHomePage(): void{
        require_once __DIR__ . "/../HTML/home.phtml";
    }
}