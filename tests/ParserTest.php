<?php
namespace Tests;

use Hayzem\Parser;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{
    public function testParse()
    {
        $parser = new Parser();

        $markdown = "```php\nfoobar\n```";
        $expectedMarkup = '<pre><code class="language-php">foobar</code></pre>';

        $markup = $parser->parse($markdown);

        $this->assertSame($expectedMarkup, $markup);
    }
}