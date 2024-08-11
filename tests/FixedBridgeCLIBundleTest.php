<?php declare(strict_types=1);

namespace BrbcodeTools\FixerBridgeCLI\Tests;

use BrbcodeTools\FixerBridgeCLI\DependencyInjection\FixerBridgeCLIExtension;
use BrbcodeTools\FixerBridgeCLI\FixerBridgeCLIBundle;
use PHPUnit\Framework\TestCase AS TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class FixedBridgeCLIBundleTest extends TestCase
{


    public function testGetContainerException(): void
    {
        $bundle = new FixerBridgeCLIBundle();
        self::assertInstanceOf(FixerBridgeCLIExtension::class, $bundle->getContainerExtension());
    }

    public function testFixerBridgeCLICommandBinding(): void
    {
        $container = new ContainerBuilder();

        $extension = new FixerBridgeCLIExtension();
        $extension->load([], $container);

        self::assertTrue($container->has('app.fixer_bridge'));
    }
}