<?php
/**
 * Vain Framework
 *
 * PHP Version 7
 *
 * @package   vain-comparator
 * @license   https://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/allflame/vain-comparator
 */
declare(strict_types = 1);

namespace Vain\Comparator\Extension\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * Class ComparatorCompilerPass
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class ComparatorCompilerPass implements CompilerPassInterface
{
    /**
     * @inheritDoc
     */
    public function process(ContainerBuilder $container)
    {
        if (false === $container->has('comparator.repository')) {
            return $this;
        }

        $definition = $container->findDefinition('comparator.repository');
        $services = $container->findTaggedServiceIds('comparator');
        foreach ($services as $id => $tags) {
            $definition->addMethodCall('addComparator', [new Reference($id)]);
        }

        return $this;
    }
}