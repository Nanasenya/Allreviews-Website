<?php

namespace GeminiLabs\SiteReviews\Controllers\ListTableColumns;

use GeminiLabs\SiteReviews\Contracts\ColumnValueContract;
use GeminiLabs\SiteReviews\Review;

class ColumnValueType implements ColumnValueContract
{
    public function handle(Review $review): string
    {
        return $review->type();
    }
}
