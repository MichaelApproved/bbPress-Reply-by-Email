<?php

/**
 * This file is part of the EmailReplyParser package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace EmailReplyParser;

/**
 * @author William Durand <william.durand1@gmail.com>
 */
class EmailReplyParser
{
    /**
     * Static method for convenient usage.
     *
     * @param string $text  An email as text.
     *
     * @return array
     */
    static public function read($text)
    {
        $email = new Email();
        return $email->read($text);
    }
}
