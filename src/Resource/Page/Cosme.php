<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Resource\Page;

use BEAR\Resource\ResourceObject;

/**
 * Cosme page
 */
class Cosme extends ResourceObject
{
    public function onGet(string $id): static
    {
        return $this;
    }
}
