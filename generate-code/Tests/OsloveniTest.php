<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once("../../php/osloveni.php");

final class OsloveniTest extends TestCase
{
    public function testOsloveni(): void {
        $handle = fopen("../words.txt", "r");
        for ($i = 0; $row = fgetcsv($handle ); ++$i) {
            if (strlen($row[0]) > 2 && ord($row[0][0]) == 239 && ord($row[0][1]) == 187 && ord($row[0][2]) == 191)
                $row[0] = substr($row[0], 3);  // strip UTF-8 file header
            list($nominative, $vocative) = explode(';', $row[0]);
            $this->assertEquals(osloveni(mb_convert_case($nominative, MB_CASE_UPPER)), mb_convert_case($vocative, MB_CASE_UPPER));
            $this->assertEquals(osloveni(mb_convert_case($nominative, MB_CASE_LOWER)), mb_convert_case($vocative, MB_CASE_LOWER));
            $this->assertEquals(osloveni(mb_convert_case($nominative, MB_CASE_TITLE)), mb_convert_case($vocative, MB_CASE_TITLE));
        }
        fclose($handle);
    }
}
?>