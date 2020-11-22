<?php

Route::middleware(['web', 'customer'])->group(function () {
    Route::get('browse-wishlist', [\AvoRed\Wishlist\Http\Controllers\WishlistController::class, 'index'])
        ->name('wishlist.index');

    Route::post('add-wishlist', [\AvoRed\Wishlist\Http\Controllers\WishlistController::class, 'store'])
        ->name('wishlist.store');

    Route::post('remove-wishlist', [\AvoRed\Wishlist\Http\Controllers\WishlistController::class, 'destroy'])
        ->name('wishlist.destroy');
});
