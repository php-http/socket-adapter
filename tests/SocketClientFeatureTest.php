<?php

namespace Http\Client\Socket\Tests;

use Http\Client\Socket\Client as SocketHttpClient;
use Http\Client\Tests\HttpFeatureTest;
use Psr\Http\Client\ClientInterface;

class SocketClientFeatureTest extends HttpFeatureTest
{
    protected function createClient(): ClientInterface
    {
        return new SocketHttpClient();
    }

    public function testAutoSetContentLength(): void
    {
        $this->markTestSkipped('Feature is unsupported');
    }

    public function testGzip(): void
    {
        $this->markTestSkipped('Feature is unsupported');
    }

    public function testDeflate(): void
    {
        $this->markTestSkipped('Feature is unsupported');
    }

    public function testChunked(): void
    {
        $this->markTestSkipped('Feature is unsupported');
    }

    public function testRedirect(): void
    {
        $this->markTestSkipped('Feature is unsupported');
    }
}
