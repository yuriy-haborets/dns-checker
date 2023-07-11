<?php

namespace DnsChecker;

class DnsChecker
{
	public function getDnsRecords($domain)
	{
		$records = dns_get_record($domain, DNS_ALL);

		return $records;
	}
}
