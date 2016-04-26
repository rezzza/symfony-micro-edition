<?php

use Symfony\Component\Config\Resource\FileResource;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

class LoadValidationFile implements CompilerPassInterface
{
    private $validationFiles;

    public function __construct(array $validationFiles = array())
    {
        $this->validationFiles = $validationFiles;
    }

    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('validator.builder') || count($this->validationFiles) <= 0) {
            return;
        }

        $validatorBuilder = $container->findDefinition('validator.builder');
        $srcpath = $container->getParameter('kernel.root_dir');

        foreach ($this->validationFiles as $file) {
            $filepath = $srcpath . $file;
            $container->addResource(new FileResource($filepath));
            $validatorBuilder->addMethodCall('addYamlMapping', array($filepath));
        }
    }

}
