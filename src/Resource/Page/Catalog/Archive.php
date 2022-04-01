<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Resource\Page;

use BEAR\Resource\ResourceObject;

/**
 * Catalog page
 */
class Archive extends ResourceObject
{
    public function onGet(string $id): static
    {
        return $this;
    }
}
