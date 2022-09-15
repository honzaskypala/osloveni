<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once("../../php/osloveni.php");

final class OsloveniTest extends TestCase
{
    public function testOsloveni(): void {
        $handle = fopen("../words.txt", "r");
        $values = [];
        for ($i = 0; $row = fgetcsv($handle ); ++$i) {
            list($nominative, $vocative) = explode(';', reset($row));
            $this->assertEquals(mb_detect_encoding($vocative, "UTF-8"), mb_detect_encoding(osloveni($nominative), "UTF-8"));
        }
        fclose($handle);
    }
}
?>