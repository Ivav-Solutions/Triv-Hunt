<?php

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/contact-us', function (Request $request) {
    //Validate Request
    // $this->validate($request, [
    //     'phone' => 'required|numeric',
    // ]);

    /** Store information to include in mail in $data as an array */
    $data = array(
        'name' => request()->name,
        'email' => request()->email,
        'phone' => request()->phone,
        'subject' => request()->subject,
        'description' => request()->message,
        'created_at' => now(),
        'admin' => 'ivavsolutionsinfo@gmail.com',
    );
    /** Send message to the admin */
    Mail::send('emails.contact', $data, function ($m) use ($data) {
        $m->to($data['admin'])->subject(config('app.name').' Contact Form Notification');
    });

    return back()->with('success_report', 'Form Submitted Successfully');
}); 