# music-streaming-link-analyzer
Analyze streaming links to get the streaming provider.

## Installing
Install the package via composer:
```
composer require jkrusy/music-streaming-link-analyzer
```

## Usage
```php
use JKrusy\MusicStreamingLinkAnalyzer\Analyzer;
use JKrusy\MusicStreamingLinkAnalyzer\Registries\ProviderRegistry;

$registry = new ProviderRegistry();
$registry->load();

// $registry->load('\Your\Own\Namespace');

$analyzer = new Analyzer($registry);
$provider = $analyzer->analyze($url);
```

## Running tests
```shell 
docker-compose run composer install
docker-compose run php /app/vendor/bin/phpunit /app
```
