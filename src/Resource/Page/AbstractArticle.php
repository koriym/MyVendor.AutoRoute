<?php

declare(strict_types=1);

namespace MyVendor\MyProject\Resource\Page;

use BEAR\Resource\ResourceObject;
use ReflectionClass;
use Symfony\Component\Config\Resource\ResourceInterface;

abstract class AbstractArticle extends ResourceObject
{
    public function __construct(
        private readonly ResourceInterface $resource
    ){}

    /** @return static */
    public function onGet(string ...$params): static
    {
        $params['cateGory'] = (new ReflectionClass(get_called_class()))->getShortName(); // static binding class name
        $this->body = match (count($params)) {
            3 => $this->resource->get('app://self/article', [$params]),
            2 => $this->resource->get('app://self/category', [$params]),
            1 => $this->resource->get('app://self/subCategory', [$params]),
        };

        return $this;
    }
}
