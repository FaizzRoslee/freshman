<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Freshman - Main</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ asset('favicon.ico') }}">
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    </head>
    <body class="antialiased">

<div class="relative overflow-hidden bg-gray-50">
  <div class="hidden sm:absolute sm:inset-y-0 sm:block sm:h-full sm:w-full" aria-hidden="true">
    <div class="relative h-full mx-auto max-w-7xl">
      <svg class="absolute transform right-full translate-x-1/4 translate-y-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
        <defs>
          <pattern id="4522f7d5-8e8c-43ee-89bd-ad34cbfb07fa" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="784" fill="url(#4522f7d5-8e8c-43ee-89bd-ad34cbfb07fa)" />
      </svg>
      <svg class="absolute transform left-full -translate-x-1/4 -translate-y-3/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
        <defs>
          <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
      </svg>
    </div>
  </div>

  <div class="relative pt-6 pb-16 sm:pb-24">
    <div class="z-40">
      <div class="px-4 mx-auto max-w-7xl sm:px-6">
        <nav class="relative flex items-center justify-between sm:h-10 md:justify-center" aria-label="Global">
          <div class="z-10 flex items-center flex-1 md:absolute md:inset-y-0 md:left-0">
            <div class="flex items-center justify-between w-full md:w-auto">
              <a href="#">
                <span class="sr-only">Your Company</span>
                <img class="w-auto h-8 sm:h-10" src="{{asset('img/logo/T1_Logo.png')}}" alt="">
              </a>
            </div>
          </div>
          <div class="z-10 hidden md:flex md:space-x-10">
            <a href="#announcement-section" class="font-medium text-gray-500 hover:text-gray-900">Announcement</a>
            <a href="#information-section" class="font-medium text-gray-500 hover:text-gray-900">Information</a>
            <a href="#link-section" class="font-medium text-gray-500 hover:text-gray-900">Quick Link</a>
            {{-- <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Company</a> --}}
          </div>
          <div class="z-10 hidden md:absolute md:inset-y-0 md:right-0 md:flex md:items-center md:justify-end">
            <span class="inline-flex rounded-md shadow">
                @auth
                    {{-- <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Dashboard</a> --}}
                    <a href="{{ url('/dashboard') }}" class="inline-flex items-center px-4 py-2 text-base font-medium text-yellow-400 bg-white border border-transparent rounded-md hover:bg-gray-50">Dashboard</a>
                @else
                    {{-- <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Log in</a> --}}
                    <a href="{{ route('login') }}" class="inline-flex items-center px-4 py-2 text-base font-medium text-yellow-400 bg-white border border-transparent rounded-md hover:bg-gray-50">Log in</a>
                    @if (Route::has('register'))
                        {{-- <a href="{{ route('register') }}" class="font-semibold text-gray-600 ms-4 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500" wire:navigate>Register</a> --}}
                        {{-- <a href="{{ route('register') }}" class="inline-flex items-center px-4 py-2 text-base font-medium text-yellow-400 bg-white border border-transparent rounded-md hover:bg-gray-50">Register</a> --}}
                    @endif
                @endauth
            </span>
          </div>
        </nav>
      </div>
    </div>

    <main  class="h-screen px-4 mx-auto mt-16 max-w-7xl sm:mt-24">
        <div class="absolute inset-0 z-0 flex items-center justify-center" id="particles-js"></div>
      <div class="pt-48 text-center">
        <h1 class="text-4xl font-bold tracking-tight text-gray-900 animate-fade-down animate-duration-1000 sm:text-5xl md:text-6xl">Welcome to <span class="text-yellow-400">Freshman</span></h1>
        {{-- <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl md:text-6xl">

          <span class="block xl:inline">Data to enrich your</span>

        </h1> --}}
        <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:max-w-3xl md:text-xl">
            Congratulations! You’ve joined an elite team of highly passionate people who are changing the world of enterprise software.
        </p>
      </div>
    </main>
  </div>
</div>

<!-- Back to top button -->
<button
  type="button"
  data-te-ripple-init
  data-te-ripple-color="light"
  class="!fixed bottom-5 right-5 hidden rounded-full bg-red-600 p-3 text-xs font-medium uppercase leading-tight text-white shadow-md transition duration-150 ease-in-out hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg"
  id="btn-back-to-top">
  <svg
    aria-hidden="true"
    focusable="false"
    data-prefix="fas"
    class="w-4 h-4"
    role="img"
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 448 512">
    <path
      fill="currentColor"
      d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path>
  </svg>
</button>

<div id="announcement-section" style="background-image: url({{asset('img/cko-circle.png')}})" class="py-24 mx-auto bg-fixed bg-center bg-no-repeat bg-cover shadow-lg shadow-inner sm:py-32">
    <div class="px-6 mx-auto max-w-7xl lg:px-8">


        <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Announcement</h2>
        <p class="mt-2 text-lg leading-8 text-gray-600">Latest news and information regading your onboarding...</p>
        <div class="space-y-5 border-gray-200 sm:mt-16 sm:pt-16">

            @foreach ($announcements as $announcement)
                <div class="p-6 block rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
                    <article class="flex flex-col items-start justify-between max-w-xl">
                        <div class="flex items-center text-xs gap-x-4">
                        <time datetime="2020-03-16" class="text-gray-500">{{ \Carbon\Carbon::parse($announcement->created_at)->format('d M Y') }} | {{ \Carbon\Carbon::parse($announcement->created_at)->format('g:i A') }}</time>
                        <a href="#" class="relative z-10 rounded-full @if($announcement->description == 'important') bg-red-600 @else bg-blue-600 @endif shadow px-3 py-1.5 font-medium text-white hover:animate-pulse"> {{ ucfirst($announcement->description) }}</a>
                        </div>
                        <div class="relative group">
                        <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                            <span class="absolute inset-0"></span>
                            {{ $announcement->title }}
                            </a>
                        </h3>
                        <p class="mt-5 text-sm leading-6 text-gray-600 line-clamp-3">

                            {!! $announcement->post !!}

                        </p>
                        </div>
                    </article>
                </div>
            @endforeach
          <!-- More posts... -->
        </div>



    </div>

</div>



<div class="relative overflow-hidden bg-gray-50">
    <div class="hidden sm:absolute sm:inset-y-0 sm:block sm:h-full sm:w-full" aria-hidden="true">
      <div class="relative h-full mx-auto max-w-7xl">
        <svg class="absolute transform right-full translate-x-1/4 translate-y-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
          <defs>
            <pattern id="4522f7d5-8e8c-43ee-89bd-ad34cbfb07fa" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="784" fill="url(#4522f7d5-8e8c-43ee-89bd-ad34cbfb07fa)" />
        </svg>
        <svg class="absolute transform left-full -translate-x-1/4 -translate-y-3/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
          <defs>
            <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
        </svg>
      </div>
    </div>

    <div id="information-section" class="relative pt-6 pb-16 sm:pb-24">

        <div class="px-6 mx-auto max-w-7xl lg:px-8">
            <div class="max-w-2xl mx-auto lg:mx-0">
              <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Information</h2>
              <p class="mt-6 text-lg leading-8 text-gray-600">We’re a dynamic group of individuals who are passionate about what we do and dedicated to delivering the best results for our clients.</p>
            </div>
            <ul role="list" class="grid max-w-2xl grid-cols-1 mx-auto mt-20 gap-x-8 gap-y-16 sm:grid-cols-2 lg:mx-0 lg:max-w-none lg:grid-cols-3">


                <li>
                    <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                        class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        <img
                            src="https://images.pexels.com/photos/7688374/pexels-photo-7688374.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="card-image" />
                        </div>
                        <div class="p-6">
                        <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            Health Insurance
                        </h5>
                        <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                            {{-- {!! $information->post !!} --}}
                            We're committed to making TechnologyOne a great place to work. Our Corporate Health Program with AIA provides you with the opportunity to take advantage of health cover paid for by TechnologyOne.
                        </p>
                        </div>
                        <div class="p-6 pt-0">
                        <a target="_blank" href="https://intranet.technologyonecorp.com/life-at-techone/benefits/health-insurance"
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                            type="button">
                            Read More
                        </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                        class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        <img
                            src="{{ asset('img/Code-of-conduct.png') }}"
                            alt="card-image" />
                        </div>
                        <div class="p-6">
                        <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            Code of Business Conduct
                        </h5>
                        <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                            {{-- {!! $information->post !!} --}}
                            Our objective is not only to be valued for our products and services but also for the way that we work. We will lead our industry in demonstrating ethical business practices so that we can hire the best.                         </p>
                        </div>
                        <div class="p-6 pt-0">
                        <a target="_blank" href="https://intranet.technologyonecorp.com/our-company/code-of-business-conduct"
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                            type="button">
                            Read More
                        </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                        class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        <img
                            src="https://images.pexels.com/photos/3140204/pexels-photo-3140204.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="card-image" />
                        </div>
                        <div class="p-6">
                        <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            Travelling to Brisbane
                        </h5>
                        <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                            {{-- {!! $information->post !!} --}}
                            Your onboarding with TechnologyOne, you will be coming to Brisbane for orientation. This is your opportunity to learn about the different people and teams that make up TechnologyOne.
                        </p>
                        </div>
                        <div class="p-6 pt-0">
                        <a target="_blank" href="https://intranet.technologyonecorp.com/our-company/code-of-business-conduct"
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                            type="button">
                            Read More
                        </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                        class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        <img
                            src="https://images.pexels.com/photos/3613388/pexels-photo-3613388.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                            alt="card-image" />
                        </div>
                        <div class="p-6">
                        <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            Dress and Presentation
                        </h5>
                        <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                            {{-- {!! $information->post !!} --}}
                            Our dress and presentation guidelines are designed to enable you to work comfortably and project a professional
                            image for our customers and visitors. These guidelines will help you determine what’s appropriate.
                        </p>
                        </div>
                        <div class="p-6 pt-0">
                        <a target="_blank" href="https://intranet.technologyonecorp.com/_media/resources/guidelines/employment/Dress-and-Presentation-20230823.pdf"
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                            type="button">
                            Read More
                        </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                        class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        <img
                            src="https://cdn-assets-cloud.frontify.com/s3/frontify-cloud-files-us/eyJwYXRoIjoiZnJvbnRpZnlcL2ZpbGVcLzFRWXhiY2dhQVBndFdZNmF5YmRwLmpwZyJ9:frontify:ZSCZ7KxmO0y17_samlSin-ioLGAwTjf-64DOx6sjpMU?width=800"
                            alt="card-image" />
                        </div>
                        <div class="p-6">
                        <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            Buddy Program
                        </h5>
                        <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                            {{-- {!! $information->post !!} --}}
                            Starting a new job can be exciting but also a little stressful. When you join TechnologyOne we'll match you with a Buddy, one of our experienced team members, to make life simple by showing you the ropes.
                        </p>
                        </div>
                        <div class="p-6 pt-0">
                        <a target="_blank" href="https://intranet.technologyonecorp.com/resources/buddy-program"
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                            type="button">
                            Read More
                        </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                        <div
                        class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                        <img
                            src="https://cdn-assets-cloud.frontify.com/s3/frontify-cloud-files-us/eyJwYXRoIjoiZnJvbnRpZnlcL2FjY291bnRzXC8xZFwvMTc0MDc2XC9wcm9qZWN0c1wvMzExMDg3XC9hc3NldHNcL2VjXC82NzQzNTI2XC80NjUxZTQ3NjJiYTdjZjlmZjAyNTllNGM4NTJjZTM4NC0xNjU2OTcwOTA4LmpwZyJ9:frontify:XS3lTbT3U69F5Q4vDm5XucwTNBZNCkEaEqc_pF5C2Zk?width=800"
                            alt="card-image" />
                        </div>
                        <div class="p-6">
                        <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            TechOne Benefits
                        </h5>
                        <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                            {{-- {!! $information->post !!} --}}
                            At TechnologyOne we recognise that our people sometimes need to access more than their annual/holiday, Our benefits are designed to make your life simpler and our workplace more creative and dynamic.
                        </p>
                        </div>
                        <div class="p-6 pt-0">
                        <a target="_blank" href="https://intranet.technologyonecorp.com/resources/buddy-program"
                            class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                            type="button">
                            Read More
                        </a>
                        </div>
                    </div>
                </li>


              {{-- @foreach ($informations as $information)
                  <li>
                      <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
                          <div
                          class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                          <img
                              src="https://images.unsplash.com/photo-1540553016722-983e48a2cd10?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                              alt="card-image" />
                          </div>
                          <div class="p-6">
                          <h5 class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                              {{ $information->title }}
                          </h5>
                          <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit">
                              {!! $information->post !!}
                          </p>
                          </div>
                          <div class="p-6 pt-0">
                          <button
                              class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                              type="button">
                              Read More
                          </button>
                          </div>
                      </div>
                  </li>
              @endforeach --}}



              <!-- More people... -->
            </ul>
          </div>

    </div>
  </div>




  <div id="announcement-section" style="background-image: url(https://tailwindui.com/img/beams-home@95.jpg)" class="py-24 mx-auto bg-fixed bg-center bg-no-repeat bg-cover shadow-lg backdrop-blur-sm bg-blend-darken sm:py-32">
    <div id="link-section" class="px-6 mx-auto max-w-7xl lg:px-8">


        <h2 class="text-3xl font-bold tracking-tight text-gray-700 sm:text-4xl">Quick Link</h2>
        <p class="mt-2 text-lg leading-8 text-gray-700">Navigate yourself to important TechnologyOne sites...</p>
        <div class="sm:mt-16 sm:pt-16">

            <ul role="list" class="grid grid-cols-1 gap-5 mt-3 sm:grid-cols-2 sm:gap-6 lg:grid-cols-4">
                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-blue-600 rounded-l-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                      </svg>

                  </div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="https://intranet.technologyonecorp.com/" class="font-medium text-gray-900 hover:text-gray-600">T1 Intranet</a>
                      <p class="text-gray-500">intranet.technologyonecorp.com</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                    </div>
                  </div>
                </li>
                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-yellow-500 rounded-l-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                      </svg>

                  </div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="https://tne.t1cloud.com/T1Default/CiAnywhere/Web/TNE/Workplace" class="font-medium text-gray-900 hover:text-gray-600">CIA Workplace</a>
                      <p class="text-gray-500">tne.t1cloud.com</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                      <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="sr-only">Open options</span>
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </li>
                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-emerald-500 rounded-l-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                      </svg>

                  </div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="https://intranet.technologyonecorp.com/services/service-desk" class="font-medium text-gray-900 hover:text-gray-600">Service Desk</a>
                      <p class="text-gray-500">itservicedesk@technologyonecorp.com</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                      <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="sr-only">Open options</span>
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </li>
                <li class="flex col-span-1 rounded-md shadow-sm">
                  <div class="flex items-center justify-center flex-shrink-0 w-16 text-sm font-medium text-white bg-red-500 rounded-l-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.182 16.318A4.486 4.486 0 0 0 12.016 15a4.486 4.486 0 0 0-3.198 1.318M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0ZM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75Zm-.375 0h.008v.015h-.008V9.75Z" />
                      </svg>

                  </div>
                  <div class="flex items-center justify-between flex-1 truncate bg-white border-t border-b border-r border-gray-200 rounded-r-md">
                    <div class="flex-1 px-4 py-2 text-sm truncate">
                      <a href="https://intranet.technologyonecorp.com/services/employee-assistance-program-eap" class="font-medium text-gray-900 hover:text-gray-600">Employee Assistance Program</a>
                      <p class="text-gray-500">t1pcsupport@technologyonecorp.com</p>
                    </div>
                    <div class="flex-shrink-0 pr-2">
                      <button type="button" class="inline-flex items-center justify-center w-8 h-8 text-gray-400 bg-transparent bg-white rounded-full hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="sr-only">Open options</span>
                        <svg class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path d="M10 3a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM10 8.5a1.5 1.5 0 110 3 1.5 1.5 0 010-3zM11.5 15.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </li>
              </ul>


        </div>



    </div>

</div>





<div class="mx-auto max-w-7xl lg:p-8">
    <div class="flex justify-center px-0 mt-16 sm:items-center sm:justify-between">
        <div class="text-sm text-center sm:text-start">
            &nbsp;
        </div>

        <div class="text-sm text-center text-gray-500 dark:text-gray-400 sm:text-end sm:ms-0">
            Freshman - HackDay 2024 (PHP v{{ PHP_VERSION }})
        </div>
    </div>
</div>
<button id="to-top-button" onclick="goToTop()" title="Go To Top"
    class="fixed z-50 hidden p-4 text-lg font-semibold text-yellow-400 transition-colors duration-300 bg-white border-0 rounded-full shadow-md bottom-10 right-10 w-14 h-14 hover:bg-yellow-100">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
        <path d="M12 4l8 8h-6v8h-4v-8H4l8-8z" />
    </svg>
    <span class="sr-only">Go to top</span>
</button>

<script>
    // Get the 'to top' button element by ID
    var toTopButton = document.getElementById("to-top-button");

    // Check if the button exists
    if (toTopButton) {

        // On scroll event, toggle button visibility based on scroll position
        window.onscroll = function() {
            if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
                toTopButton.classList.remove("hidden");
            } else {
                toTopButton.classList.add("hidden");
            }
        };

        // Function to scroll to the top of the page smoothly
        window.goToTop = function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        };
    }
</script>
    <script>
    particlesJS(
        {
    "particles": {
        "number": {
        "value": 80,
        "density": {
            "enable": true,
            "value_area": 1200
        }
        },
        "color": {
        "value": [
            "#197B8A",
            "#09B5D1",
            "#008662",
            "#003F30",
            "#EDADA5",
            "#A6657C",
            "#E8A02C"]
        },
        "shape": {
        "type": "image",
        "stroke": {
            "width": 0,
            "color": "#000000"
        },
        "polygon": {
            "nb_sides": 5
        },
        "image": {
            "src": "{{ asset('img/ariez.png') }}",
            "width": 200,
            "height": 200
        }
        },
        "opacity": {
        "value": 0.5,
        "random": false,
        "anim": {
            "enable": false,
            "speed": 1,
            "opacity_min": 0.1,
            "sync": false
        }
        },
        "size": {
        "value": 35,
        "random": true,
        "anim": {
            "enable": false,
            "speed": 80,
            "size_min": 0.1,
            "sync": false
        }
        },
        "line_linked": {
        "enable": false,
        "distance": 300,
        "color": "#ffffff",
        "opacity": 0.4,
        "width": 2
        },
        "move": {
        "enable": true,
        "speed": 6,
        "direction": "none",
        "random": false,
        "straight": false,
        "out_mode": "out",
        "bounce": false,
        "attract": {
            "enable": false,
            "rotateX": 600,
            "rotateY": 1200
        }
        }
    },
    "interactivity": {
        "detect_on": "canvas",
        "events": {
        "onhover": {
            "enable": true,
            "mode": "repulse"
        },
        "onclick": {
            "enable": true,
            "mode": "push"
        },
        "resize": true
        },
        "modes": {
        "grab": {
            "distance": 800,
            "line_linked": {
            "opacity": 1
            }
        },
        "bubble": {
            "distance": 800,
            "size": 80,
            "duration": 2,
            "opacity": 0.8,
            "speed": 3
        },
        "repulse": {
            "distance": 100,
            "duration": 0.4
        },
        "push": {
            "particles_nb": 20
        },
        "remove": {
            "particles_nb": 2
        }
        }
    },
    "retina_detect": true
    }
        );
    </script>


    </body>
</html>
