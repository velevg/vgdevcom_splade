<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
// use App\Mail\ContactFormMail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/about', function () {
        return view('about');
    })->name('about');

    Route::get('/portfolio', function () {
        return view('portfolio');
    })->name('portfolio');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::post('/contact', function (Request $request) {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        // Get the submitted data
        $email = $request->input('email');
        $message = $request->input('message');

        // Log the posted data for debugging
        Log::info('Posted data:', ['request_data' => $request->all()]);
        Log::info('Email:', ['email' => $email]);
        Log::info('Message:', ['message' => $message]);

        // Handle the form submission here
        // Example: Send email, store data in the database, etc.
        // Once done, you can redirect the user to a success page or back to the contact page
        // Mail::to('vgdevcom@gmail.com')->send(new ContactFormMail($email, $message));
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    });


    Route::get('/docs', function () {
        return view('docs');
    })->name('docs');

    Route::middleware('auth')->group(function () {
        // Route::get('/dashboard', function () {
        //     return view('dashboard');
        // })->middleware(['verified'])->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__ . '/auth.php';
});
