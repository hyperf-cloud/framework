<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.org
 * @document https://wiki.hyperf.org
 * @contact  group@hyperf.org
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Framework\Event;

use Swoole\Server as SwooleServer;
use Swoole\Http\Server as SwooleHttpServer;

class BeforeMainServerStart
{
    /**
     * @var object|SwooleHttpServer|SwooleServer
     */
    public $server;

    /**
     * @var array
     */
    public $serverConfig;

    public function __construct($server, array $serverConfig)
    {
        $this->server = $server;
        $this->serverConfig = $serverConfig;
    }
}