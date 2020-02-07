<?php
/**
 * @package axy\codecs
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */

declare(strict_types=1);

namespace axy\codecs;

/**
 * A decoder
 */
interface IDecoder
{
    /**
     * Decodes a data
     *
     * @param string $data
     *        encoded string
     * @return string
     *         original data
     */
    public function decode(string $data): string;
}
