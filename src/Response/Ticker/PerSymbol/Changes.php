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

namespace BitcoinVietnam\BitcoinAverage\Response\Ticker\PerSymbol;

use BitcoinVietnam\BitcoinAverage\Response\Ticker\PerSymbol\Changes\Percent;
use BitcoinVietnam\BitcoinAverage\Response\Ticker\PerSymbol\Changes\Price;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class Changes
 * @package BitcoinVietnam\BitcoinAverage\Response\Ticker\PerSymbol
 */
class Changes
{
    /**
     * @var Price
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinAverage\Response\Ticker\PerSymbol\Changes\Price")
     * @Serializer\SerializedName("price")
     */
    private $price;

    /**
     * @var Percent
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinAverage\Response\Ticker\PerSymbol\Changes\Percent")
     * @Serializer\SerializedName("percent")
     */
    private $percent;

    /**
     * @return Price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return Percent
     */
    public function getPercent()
    {
        return $this->percent;
    }
}