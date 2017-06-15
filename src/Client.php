<?php
/**
 * MIT License
 *
 * Copyright (c) 2017 Bitcoin Vietnam
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 */

namespace BitcoinVietnam\BitcoinAverage;

use BitcoinVietnam\BitcoinAverage\Response;
use BitcoinVietnam\BitcoinAverage\Utils;

/**
 * Class Client
 * @package BitcoinVietnam\BitcoinAverage
 */
class Client
{
    const BASE_URL = 'https://apiv2.bitcoinaverage.com';

    /**
     * @var string
     */
    private $apiKey;

    /**
     * @var string
     */
    private $apiSecret;

    /**
     * @var array
     */
    private $factory = [];

    /**
     * Client constructor.
     * @param string $apiKey
     * @param string $apiSecret
     */
    public function __construct($apiKey = null, $apiSecret = null)
    {
        $this->apiKey = $apiKey;
        $this->apiSecret = $apiSecret;
    }

    /**
     * @param string $symbol
     * @param string $market
     * @return Response\Ticker\PerSymbol
     */
    public function getTickerPerSymbol($symbol, $market = 'global')
    {
        return $this->utils()->serializer()->deserialize(
            $this->utils()->guzzle()->get(
                self::BASE_URL . '/indices/' . $market . '/ticker/' . $symbol,
                ['headers' => $this->buildHeader()]
            )->getBody()->getContents(),
            Response\Ticker\PerSymbol::class,
            'json'
        );
    }

    /**
     * @return Utils\Manager
     */
    private function utils()
    {
        return isset($this->factory[__FUNCTION__]) ? $this->factory[__FUNCTION__] : ($this->factory[__FUNCTION__] = new Utils\Manager());
    }

    /**
     * @return array
     */
    private function buildHeader()
    {
        if (!$this->apiKey || !$this->apiSecret) {
            return [];
        }

        $payload = time() . '.' . $this->apiKey;
        $hash = hash_hmac('sha256', $payload, $this->apiSecret, true);
        $keys = unpack('H*', $hash);
        $hexHash = array_shift($keys);
        $signature = $payload . '.' . $hexHash;

        return ['x-signature' => $signature];
    }
}