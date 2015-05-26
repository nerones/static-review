<?php

/**
 * This file is part of sjparkinson\static-review.
 *
 * Copyright (c) 2014-2015 Samuel Parkinson <sam.james.parkinson@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license http://github.com/sjparkinson/static-review/blob/master/LICENSE MIT
 */

namespace StaticReview\StaticReview\Review;

use StaticReview\StaticReview\File\FileInterface;

/**
 * ReviewSet class.
 *
 * @author Samuel Parkinson <sam.james.parkinson@gmail.com>
 */
class ReviewSet extends \ArrayObject
{
    /**
     * Gets all supported reviews contained in this collection.
     *
     * @param FileInterface $file
     *
     * @return array
     */
    public function getSupported(FileInterface $file)
    {
        return array_filter((array) $this, function (ReviewInterface $review) use ($file) {
            return $review->supports($file);
        });
    }
}
