<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Resource\Page;

use BEAR\Resource\ResourceObject;

/**
 * Catalog page
 */
class Catalog extends ResourceObject
{
    public function onGet(string $id, string $articleId = ''): static
    {
        return $this;
    }
}
