<?php

use Illuminate\Http\Request;

/*===========================      ExchangeRate  ================================*/

Route::resource('/exchange-rate', 'ExchangeRate\ExchangeRateController')->only(['index', 'show']);
Route::resource('/exchange-rate/{currency_code}', 'ExchangeRate\ExchangeRateCurrencyCodeController')->only(['index']);
Route::resource('/exchange-rate/{currency_code}/date/{date}', 'ExchangeRate\ExchangeRateCurrencyCodeDateController')->only(['index']);


/*===========================      Base Rates/ BLR / Effective LR  ================================*/

Route::resource('/base-rate', 'BaseRate\BaseRateController')->only(['index', 'show']);
Route::resource('/base-rate/{bank_code}', 'BaseRate\BaseRateBankCodeController')->only(['index']);


/*===========================      Interest Rate  ========================================*/

Route::resource('interest-rate', 'InterestRate\InterestRateController')->only(['index', 'show']);
Route::resource('/interest-rate/date/{date}', 'InterestRate\InterestRateDateController')->only(['index']);


/*===========================      KUALA LUMPUR USD/MYR  ========================================*/

Route::resource('/kl-usd-reference-rate', 'KlUsdReferenceRate\KlUsdReferenceRateController')->only(['index']);
// Route::resource('/kl-usd-reference-rate/date/{date}', 'KlUsdReferenceRate\KlUsdReferenceRateDateController@index')->only(['index']);

/*===========================      Financial Consumer Alert   ========================================*/
// Route::get('/consumer-alert', 'ConsumerAlert\ConsumerAlertController@index');
// Route::get('/public/consumer-alert/{str}', 'ConsumerAlertSearchController@index');
Route::resource('/consumer-alert', 'ConsumerAlert\ConsumerAlertController')->only(['index', 'show']);
