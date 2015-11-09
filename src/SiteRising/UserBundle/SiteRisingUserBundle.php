<?php

namespace SiteRising\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SiteRisingUserBundle extends Bundle
{
     public function getParent()
    {
        return 'FOSUserBundle';
    }
}
