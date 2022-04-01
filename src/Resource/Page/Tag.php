<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Resource\Page;

use BEAR\Resource\ResourceObject;

/**
 * Tag page
 */
class Tag extends ResourceObject
{
    public function onGet(string $id): static
    {
        return $this;
    }
}
