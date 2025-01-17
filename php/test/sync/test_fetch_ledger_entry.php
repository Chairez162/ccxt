<?php
namespace ccxt;

// ----------------------------------------------------------------------------

// PLEASE DO NOT EDIT THIS FILE, IT IS GENERATED AND WILL BE OVERWRITTEN:
// https://github.com/ccxt/ccxt/blob/master/CONTRIBUTING.md#how-to-contribute-code

// -----------------------------------------------------------------------------
include_once PATH_TO_CCXT . '/test/base/test_ledger_entry.php';

function test_fetch_ledger_entry($exchange, $skipped_properties, $code) {
    $method = 'fetchLedgerEntry';
    $items = $exchange->fetch_ledger($code);
    $length = count($items);
    if ($length > 0) {
        $item = $exchange->fetch_ledger_entry($items[0]->id);
        $now = $exchange->milliseconds();
        test_ledger_entry($exchange, $skipped_properties, $method, $item, $code, $now);
    }
}
