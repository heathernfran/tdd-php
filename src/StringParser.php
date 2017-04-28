<?php
declare(strict_types=1)

final class StringParser {
  private $textToParse;

  private function __construct(string $textToParse) {
    $this->replaceUnderscores($textToParse);
    $this->$textToParse = $textToParse;
  }

  public function replaceUnderscores(string $textToParse): string {
    return preg_replace("/(_)/", " ", $textToParse);
  }
}
 ?>
