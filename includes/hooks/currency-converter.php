<?php

/**
 * Register hook function call.
 *
 * @param string $hookPoint The hook point to call.
 * @param integer $priority The priority for the hook function.
 * @param string|function The function name to call or the anonymous function.
 *
 * @return This depends on the hook function point.
 */

use Illuminate\Database\Capsule\Manager as Capsule;

if (!defined('WHMCS'))
    die('You cannot access this file directly.');


function hook_currency_exchange_rates($vars) 
{
    $exchangeRate = 1; // Default to 1 if the rate is not found
    $exchangerate = Capsule::table('tblcurrencies')
                ->where('default', '0')
                ->get();

    // Add some error handling
    if ($exchangeRate === null) {
        // Handle the case where the exchange rate is not found (perhaps log an error)
        $exchangeRate = 1; // Default to 1 if the rate is not found
    }

    return array("exchangerate" => $exchangerate[0]->rate);
}

add_hook("ViewInvoiceDetailsPage", 1, "hook_currency_exchange_rates");
