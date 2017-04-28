<?php
declare(strict_types=1)

use PHPUnit\Framework\TestCase;

/**
 * @covers StringParser
 */

 final class StringParserTest extends TestCase {

   public function testReplaceUnderscores(): {
     $this->assertEquals(
       'parsed text', StringParser::replaceUnderscores('parsed_text')
     );
   }

 }

 ?>
