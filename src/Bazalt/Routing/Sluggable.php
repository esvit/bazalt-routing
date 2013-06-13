<?php

namespace Bazalt\Routing;

interface Sluggable
{
    public function toUrl(Route $route);
}