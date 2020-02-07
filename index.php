<?php
/**
 * Interfaces of axy codecs
 *
 * @package axy\codecs
 * @author Oleg Grigoriev <go.vasac@gmail.com>
 * @license https://raw.github.com/axypro/codecs/master/LICENSE MIT
 * @link https://github.com/axypro/codecs repository
 * @link https://packagist.org/packages/axy/codecs composer
 * @uses PHP7.1+
 */

declare(strict_types=1);

namespace axy\codecs;

use LogicException;

if (!is_file(__DIR__.'/vendor/autoload.php')) {
    throw new LogicException('Please: composer install');
}

require_once(__DIR__.'/vendor/autoload.php');
