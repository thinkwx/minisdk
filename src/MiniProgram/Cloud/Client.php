<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyWeChat\MiniProgram\Cloud;

use EasyWeChat\Kernel\BaseClient;
use EasyWeChat\Kernel\Exceptions\InvalidArgumentException;
use ReflectionClass;

/**
 * Class Client.
 *
 * @author hugo <rabbitzhang52@gmail.com>
 */
class Client extends BaseClient
{

    /**
     * cloud database query
     *
     * @param string $env
     * @param string $query
     *
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function dbQuery(string $env, string $query)
    {
        return $this->httpPost('tcb/databasequery', ['env' => $env, 'query' => $query]);
    }

    /**
     * cloud database update
     *
     * @param string $env
     * @param string $query
     *
     * @return array|\EasyWeChat\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     *
     * @throws \EasyWeChat\Kernel\Exceptions\InvalidConfigException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function dbUpdate(string $env, string $query)
    {
        return $this->httpPost('tcb/databaseupdate', ['env' => $env, 'query' => $query]);
    }
}
