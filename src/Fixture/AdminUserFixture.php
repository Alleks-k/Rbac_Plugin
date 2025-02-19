<?php

declare(strict_types=1);

namespace Odiseo\SyliusRbacPlugin\Fixture;

use Sylius\Bundle\CoreBundle\Fixture\AdminUserFixture as BaseAdminUserFixture;
use Sylius\Bundle\FixturesBundle\Fixture\FixtureInterface;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;

final class AdminUserFixture extends BaseAdminUserFixture implements FixtureInterface
{
    protected function configureResourceNode(ArrayNodeDefinition $resourceNode): void
    {
        parent::configureResourceNode($resourceNode);

        $node = $resourceNode->children();

        $node->scalarNode('administration_role')->cannotBeEmpty();
    }

    public function getName(): string
    {
        return 'admin_user';
    }
}
