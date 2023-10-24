@extends('welcome')

@section('navbar')
@php
$links = [
    ['url' => '/index', 'label' => 'HOME'],
    ['url' => '/blogs', 'label' => "BLOG'S"],
    ['url' => '/about', 'label' => 'ABOUT'],
    ['url' => '/contact', 'label' => 'CONTACT'],
];
@endphp

<div class="w-full fixed top-0 left-0">
    <div class="md:flex items-center justify-between bg-[#101828] py-4 md:px-10 px-7">
      <div>
        <div class="text-white text-2xl cursor-pointer flex justify-start items-center gap-1">
          <span>TECH BLOG</span>
        </div>
      </div>
      <div class="">
        <ul
          class="md:flex md:items-center md:pb-0 pb-12 absolute md:static bg-[#101828] md:z-auto z-[-1] left-0 w-full md:w-auto md:pl-0 pl-9 transition-all duration-500 ease-in"
        >
        <li class="md:ml-8 md:my-0 my-7 text-center p-4">
            @foreach($links as $link)
                <a href="{{ $link['url'] }}" class="text-[#fff] no-underline hover:text-gray-500 duration-500 p-5">
                    {{ $link['label'] }}
                </a>
            @endforeach
        </li>    
        </ul>
      </div>
      <div class="ml-20">
        <button
          id="loginButton"
          class="bg-[#101828] text-white font-semibold px-3 py-1 h-10 w-24 rounded-[50px] absolute right-16 top-6 cursor-pointer"
        >
          Login
        </button>
      </div>
    </div>
  </div>
@endsection