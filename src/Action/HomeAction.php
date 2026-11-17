<?php

namespace Quantify\Action;

class HomeAction
{
    public function RenderHomePage(): void {
        require_once __DIR__ . "/../HTML/home.phtml";
    }
}   // neue Renderer Klasse für die Templates
    // gesammter Pfad oder nur Template-Name?
    