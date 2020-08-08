<?php

declare(strict_types=1);

namespace PoPSchema\CustomPostMetaWP;

use PoP\Root\Component\AbstractComponent;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoPSchema\CustomPostMeta\Component::class,
            \PoPSchema\CustomPostsWP\Component::class,
        ];
    }

    public static function getDependedMigrationPlugins(): array
    {
        return [
            'pop-schema/migrate-custompostmeta-wp',
        ];
    }
}
