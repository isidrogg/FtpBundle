<?php

namespace Isidrogg\Bundle\FtpBundle\Tests\DependencyInjection;

use Isidrogg\Bundle\FtpBundle\DependencyInjection\IsidroggFtpExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class IsidroggFtpBundleExtensionTest extends \PHPUnit_Framework_Testcase
{
    public function testDefault()
    {
        $container = new ContainerBuilder();
        $loader = new IsidroggFtpExtension();
        $loader->load(array(array()), $container);
        $this->assertTrue($container->hasDefinition('isidrogg_ftp'), 'The extension is loaded');
    }
}
