<?php

namespace Quantify\Router;

use Quantify\Responder\ResponseObject;

class PageRouter
{
    public function Navigate(): void{
        
    }
    public function RenderPage(ResponseObject $responseObject): void {
        require_once $responseObject->GetTemplate();
    }
}