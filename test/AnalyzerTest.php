<?php

namespace JKrusy\MusicStreamingLinkAnalyzer\Tests;

use JKrusy\MusicStreamingLinkAnalyzer\Analyzer;
use JKrusy\MusicStreamingLinkAnalyzer\Enumerations\Provider;
use JKrusy\MusicStreamingLinkAnalyzer\Registries\ProviderRegistry;
use PHPUnit\Framework\TestCase;

class AnalyzerTest extends TestCase
{
    /**
     * @param string   $url
     * @param Provider $expected
     *
     * @dataProvider getTestCases
     */
    public function testAnalyze(string $url, Provider $expected)
    {
        $registry = new ProviderRegistry();
        $registry->load();

        $analyzer = new Analyzer($registry);
        $provider = $analyzer->analyze($url);

        $this->assertEquals($expected, $provider);
    }

    public static function getTestCases(): array
    {
        return [
            [
                'https://open.spotify.com/artist/6XyY86QOPPrYVGvF9ch6wz?si=MvO1PvSLRMWC50pjFyVcig',
                Provider::SPOTIFY
            ],
            [
                'https://music.amazon.de/artists/ABCDEFGHIJ/my-band',
                Provider::AMAZON_MUSIC
            ],
            [
                'https://open.unknown.test/link',
                Provider::UNKNOWN
            ]
        ];
    }
}
