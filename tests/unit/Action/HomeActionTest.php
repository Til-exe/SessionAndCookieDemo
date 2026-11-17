<?php

namespace Synatix\Quantify\Test\Action;

use PHPUnit\Framework\TestCase;
use Synatix\Quantify\Action\HomeAction;

final class HomeActionTest extends TestCase
{
    public function testRenderHomePage(): void
    {
        $this->expectOutputRegex('Hallo von Quantify');

        $action = new HomeAction();
        $action->RenderHomePage();
    }
}
