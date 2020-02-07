<?php
/**
 * @package axy\codecs
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 */

declare(strict_types=1);

namespace axy\codecs;

/**
 * A codec (encoder + decoder)
 */
interface ICodec extends IEncoder, IDecoder
{
}
