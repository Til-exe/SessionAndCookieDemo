<?php

namespace Synatix\Quantify\Router;

use Synatix\Quantify\Responder\ResponseObject;

class PageRouter
{
    public function Navigate(): void{
        
    }
    public function RenderPage(ResponseObject $responseObject): void {
        require_once $responseObject->GetTemplate();
    }
}