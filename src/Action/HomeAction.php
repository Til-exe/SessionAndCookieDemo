<?php

namespace Quantify\Action;

class HomeAction
{
    public function RenderHomePage(): void{
        require __DIR__ . "/../HTML/home.phtml";
    }
}