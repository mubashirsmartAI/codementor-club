<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\EngineerController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\MembershipController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\SolutionController;
use App\Http\Controllers\BookCallController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ReferralController;

Route::get('/', [AgentController::class, 'index'])->name('home');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/ai-agents', [AgentController::class, 'aiAgents'])->name('ai-agents');
Route::get('/engineers', [EngineerController::class, 'index'])->name('engineers');
Route::get('/training', [TrainingController::class, 'index'])->name('training');
Route::get('/membership', [MembershipController::class, 'index'])->name('membership');
Route::get('/process', [ProcessController::class, 'index'])->name('process');
Route::get('/solutions', [SolutionController::class, 'index'])->name('solutions');
Route::get('/book-call', [BookCallController::class, 'index'])->name('book-call');
Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::get('/refer', [ReferralController::class, 'index'])->name('refer');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
