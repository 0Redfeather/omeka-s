<?php
namespace Omeka\Permissions\Assertion;

use Omeka\Entity\Site;
use Zend\Permissions\Acl\Acl;
use Zend\Permissions\Acl\Assertion\AssertionInterface;
use Zend\Permissions\Acl\Resource\ResourceInterface;
use Zend\Permissions\Acl\Role\RoleInterface;

class SiteHasAllItems implements AssertionInterface
{
    public function assert(Acl $acl, RoleInterface $role = null,
        ResourceInterface $resource = null, $privilege = null
    ) {
        if (!$resource instanceof Site) {
            return false;
        }
        return $resource->getHasAllItems();
    }
}
