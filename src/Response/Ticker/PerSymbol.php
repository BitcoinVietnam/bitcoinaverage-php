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

namespace BitcoinVietnam\BitcoinAverage\Response\Ticker;

use BitcoinVietnam\BitcoinAverage\Response\Ticker\PerSymbol\Averages;
use BitcoinVietnam\BitcoinAverage\Response\Ticker\PerSymbol\Changes;
use BitcoinVietnam\BitcoinAverage\Response\Ticker\PerSymbol\Open;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class PerSymbol
 * @package BitcoinVietnam\BitcoinAverage\Response\Ticker
 */
class PerSymbol
{
    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("ask")
     */
    private $ask;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("bid")
     */
    private $bid;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("last")
     */
    private $last;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("high")
     */
    private $high;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("low")
     */
    private $low;

    /**
     * @var Open
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinAverage\Response\Ticker\PerSymbol\Open")
     * @Serializer\SerializedName("open")
     */
    private $open;

    /**
     * @var Averages
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinAverage\Response\Ticker\PerSymbol\Averages")
     * @Serializer\SerializedName("averages")
     */
    private $averages;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("volume")
     */
    private $volume;

    /**
     * @var Changes
     *
     * @Serializer\Type("BitcoinVietnam\BitcoinAverage\Response\Ticker\PerSymbol\Changes")
     * @Serializer\SerializedName("changes")
     */
    private $changes;

    /**
     * @var float
     *
     * @Serializer\Type("float")
     * @Serializer\SerializedName("volume_percent")
     */
    private $volume_percent;

    /**
     * @var int
     *
     * @Serializer\Type("integer")
     * @Serializer\SerializedName("timestamp")
     */
    private $timestamp;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("display_timestamp")
     */
    private $display_timestamp;

    /**
     * @return float
     */
    public function getAsk()
    {
        return $this->ask;
    }

    /**
     * @return float
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @return float
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @return float
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @return float
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * @return Open
     */
    public function getOpen()
    {
        return $this->open;
    }

    /**
     * @return Averages
     */
    public function getAverages()
    {
        return $this->averages;
    }

    /**
     * @return float
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @return Changes
     */
    public function getChanges()
    {
        return $this->changes;
    }

    /**
     * @return float
     */
    public function getVolumePercent()
    {
        return $this->volume_percent;
    }

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @return string
     */
    public function getDisplayTimestamp()
    {
        return $this->display_timestamp;
    }
}