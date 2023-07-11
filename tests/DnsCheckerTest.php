<?php

namespace DnsChecker\Tests;

use DnsChecker\DnsChecker;
use PHPUnit\Framework\TestCase;

class DnsServiceTest extends TestCase
{
	public function testGetDnsRecords()
	{
		$dnsChecker = new DnsChecker();

		$result = $dnsChecker->getDnsRecords("gmail.com");

        	$this->assertIsArray($result);
        	$this->assertNotEmpty($result);
	}
}
