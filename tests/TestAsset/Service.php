<?php

declare(strict_types = 1);

namespace ZendTest\DI\Config\TestAsset;

class Service implements ServiceInterface
{

    protected $time;

    protected $injected = [];

    public function __construct()
    {
        $this->time = microtime(true);
    }

    public function getTime(): string
    {
        return '' . $this->time;
    }

    public function inject(string $name): void
    {
        $this->injected[] = $name;
    }

    public function getInjected(): array
    {
        return $this->injected;
    }
}
