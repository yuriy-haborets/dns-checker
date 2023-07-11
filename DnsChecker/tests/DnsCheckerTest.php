<?php

namespace DnsChecker\Tests;

use DnsChecker\DnsChecker;
use PHPUnit\Framework\TestCase;

class DnsServiceTest extends TestCase
{
	public function testGetDnsRecords()
	{
		$expected = [
			["type" => "A", "host" => "gmail.com", "ttl" => 3360, "ip" => "142.250.1.19"],
			["type" => "TXT", "host" => "gmail.com", "ttl" => 18640, "txt" => "globalsign-smime-dv=CDYX+XFHUw2wml6/Gb8+59BsH31KzUr6c1l2BPvqKX8="]
		];

		$dnsChecker = new DnsChecker();

		$result = $dnsChecker->getDnsRecords("gmail.com");

		$this->assertEquals($expected, $result);
	}
}
