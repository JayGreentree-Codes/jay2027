@extends('layouts.frontend')

@section('content')




<section class="bg-center bg-no-repeat bg-[url('https://flowbite.s3.amazonaws.com/docs/jumbotron/conference.jpg')] bg-dark bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h1 class="mb-6 text-4xl font-bold tracking-tighter text-white md:text-5xl lg:text-6xl">
            We invest in the world’s potential
        </h1>
        <p class="mb-8 text-base font-normal text-white md:text-xl sm:px-16 lg:px-48">
            Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.
        </p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 md:space-x-4">
            <button type="button" class="inline-flex items-center justify-center text-white bg-brand hover:bg-brand-strong box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium rounded-base text-base px-5 py-3 focus:outline-none">
                Getting started
                <svg class="w-4 h-4 ms-1.5 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
            </button>
            <button type="button" class="text-body bg-neutral-secondary-medium box-border border border-default-medium hover:bg-neutral-tertiary-medium hover:text-heading focus:ring-4 focus:ring-neutral-tertiary shadow-xs font-medium leading-5 rounded-base text-base px-5 py-3 focus:outline-none">Learn more</button>
        </div>
    </div>
</section>



<div class="py-8 border-t border-b border-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <p class="text-center text-3xl font-medium text-gray-500 mb-6">
            Site made possible by
        </p>
        <div class="grid grid-cols-3 gap-8 md:grid-cols-5 items-center justify-items-center opacity-60">
            <img class="h-8 md:h-12" src="/img/NASA_logo.svg" alt="NASA">
            <img class="h-8 md:h-12" src="/img/cbc.svg" alt="Canadian Broadcasting Corporation">
            <img class="h-8 md:h-12" src="/img/craft-cms-logo-knockout.svg" alt="Craft CMS">
            <img class="h-8 md:h-12 hidden md:block" src="/img/umb.svg" alt="UMass Boston">
            <img class="h-8 md:h-12 hidden md:block" src="/img/uofc.svg" alt="University of Chicago">
        </div>
    </div>
</div>
@endsection