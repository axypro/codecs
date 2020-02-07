<?php
/**
 * @package axy\codecs
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */

declare(strict_types=1);

namespace axy\codecs;

/**
 * A encoder
 */
interface IEncoder
{
    /**
     * Encodes a data
     *
     * @param string $data
     *        original data
     * @return string
     *         encoded string
     */
    public function encode(string $data): string;
}
