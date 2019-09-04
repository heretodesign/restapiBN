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
