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

namespace Vain\Comparator\Extension;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Vain\Comparator\Extension\Compiler\ComparatorCompilerPass;
use Vain\Core\Extension\AbstractExtension;

/**
 * Class ComparatorExtension
 *
 * @author Taras P. Girnyk <taras.p.gyrnik@gmail.com>
 */
class ComparatorExtension extends AbstractExtension
{
    /**
     * @inheritDoc
     */
    public function load(array $configs, ContainerBuilder $container) : AbstractExtension
    {
        $container->addCompilerPass(new ComparatorCompilerPass());

        return parent::load($configs, $container);
    }
}