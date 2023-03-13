<?php

namespace JKrusy\MusicStreamingLinkAnalyzer\Registries;

use HaydenPierce\ClassFinder\ClassFinder;
use JKrusy\MusicStreamingLinkAnalyzer\ProviderAnalyzers\ProviderAnalyzerInterface;
use ReflectionClass;

class ProviderRegistry
{
    private array $classes = [];

    public function load($namespace = 'JKrusy\MusicStreamingLinkAnalyzer\ProviderAnalyzers'): void
    {
        $classes = ClassFinder::getClassesInNamespace($namespace);
        foreach ($classes as $class) {
            $reflection = new ReflectionClass($class);
            if (!$reflection->isAbstract() && $reflection->implementsInterface(ProviderAnalyzerInterface::class)) {
                $this->classes[$class] = $class;
            }
        }
    }

    public function getClasses(): array
    {
        return array_values($this->classes);
    }
}
