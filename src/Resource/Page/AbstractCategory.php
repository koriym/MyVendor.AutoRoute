<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Resource\Page;

use BEAR\Resource\ResourceObject;

abstract class AbstractCategory extends ResourceObject
{
    public function onGet(string ...$params): static {
        $this->body = match (count($params)) {
            3 => $this->resource->get('app://self/category', [$params]),
            2 => $this->resource->get('app://self/subCategory', [$params])
        };
    }
}
