<?php

namespace JKrusy\MusicStreamingLinkAnalyzer;

use JKrusy\MusicStreamingLinkAnalyzer\Enumerations\Provider;
use JKrusy\MusicStreamingLinkAnalyzer\ProviderAnalyzers\ProviderAnalyzerInterface;
use JKrusy\MusicStreamingLinkAnalyzer\Registries\ProviderRegistry;

class Analyzer implements AnalyzerInterface
{
    protected ProviderRegistry $registry;

    /**
     * @param ProviderRegistry $registry
     */
    public function __construct(ProviderRegistry $registry)
    {
        $this->registry = $registry;
    }

    public function analyze(string $url): Provider
    {
        $classes = $this->registry->getClasses();

        foreach ($classes as $class) {
            $analyzer = new $class();
            if ($analyzer instanceof ProviderAnalyzerInterface) {
                $result = $analyzer->analyze($url);
                if ($result instanceof Provider) {
                    return $result;
                }
            }
        }

        return Provider::UNKNOWN;
    }
}
