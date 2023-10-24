<?php

namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;

class NavController extends Controller
{
    // YourController.php

public function showMenu()
{
    $links = [
        ['name' => 'HOME', 'link' => '/'],
        ['name' => "BLOG'S", 'link' => '/blogs'],
        ['name' => 'ABOUT', 'link' => '/about'],
        ['name' => 'CONTACT', 'link' => '/contact'],
    ];

    return view('welcome', ['links' => $links]);
}

}