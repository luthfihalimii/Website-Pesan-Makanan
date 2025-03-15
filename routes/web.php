<?php

use Faker\Provider\ar_EG\Payment;
use Illuminate\Support\Facades\Route;

Route::middleware(CheckTableNumber::class)->group(function () {
    // Beranda | Home
    Route::get('/', HomePage::class)->name('home');
    // Semua Makanan | All Foods
    Route::get('/food', AllFoodsPage::class)->name('product.index');
    // Makanan Favorit | Favorite Food
    Route::get('/food/favorite', FavoritePage::class)->name('product.favorite');
    // Makanan Promo | Today's Promo
    Route::get('/food/promo', PromoPage::class)->name('product.promo');
    // Detail Makanan | Food Detail
    Route::get('/food/{id}', DetailPage::class)->name('product.detail');

});

Route::middleware(CheckTableNumber::class)->controller(TransactionController::class)->group(function(){

    Route::get('/cart', CartPage::class)->name('payment.cart');
    Route::get('/checkout', CheckoutPage::class)->name('payment.checkout');

    // Proses Pembayaran | Payment Process
    Route::middleware('throttle:10,1')->post('/payment', 'handlePayment')->name('payment');
    Route::get('/payment', function () {
        abort(404);
    });

    // Status Pembayaran
    Route::get('/payment/status/{id}', 'paymentStatus')->name('payment.status');
    Route::get('/payment/success', PaymentSuccessPage::class)->name('payment.success');
    Route::get('/payment/failure', PaymentFailurePage::class)->name('payment.failure');

});

// Webhook update status pembayaran | Webhook update payment status
    Route::post('/payment/webhook', [TransactionController::class, 'handleWebhook'])->name('payment.webhook');

    Route::controller(QRController::class)->group(function(){
        Route::post('/store-qr-result', 'storeResult')->name('product.scan.store');
        // Scanner
        Route::get('/scan', scanPage::class)->name('product.scan');
        Route::get('/{tableNumber}', 'checkCode')->name('product.scan.table');
    });
