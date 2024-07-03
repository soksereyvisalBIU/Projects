@extends('client.layouts.master')
@section('title', 'Home | Your E-library')
@section('description', 'Welcome to our E-library. Find a wide range of books, articles, and resources to enhance your knowledge.')
@section('keywords', 'home, E-library, books, articles, resources, knowledge')
@section('canonical', 'https://www.your-website.com/home')
@section('head')
    <style>
        .hithere {
            animation: hithere 4s ease infinite;
        }

        @keyframes hithere {
            30% {
                transform: scale(1.1);
            }

            40%,
            60% {
                transform: rotate(-5deg) scale(1.1);
            }

            50% {
                transform: rotate(5deg) scale(1.1);
            }

            70% {
                transform: rotate(0deg) scale(1.1);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
@endsection

@section('content')


<div class="container xl:max-w-[1200px] xl:px-0 max-w-full px-10 lg:py-20 md:py-10 py-5 mx-auto">
    <div class="sm:flex sm:flex-row-reverse sm:items-center">
        <img class="sm:w-6/12 hithere w-full" data-aos="fade-left" data-aos-offset="500" data-aos-duration="500"
            src="{{ asset('assets/img/vecteezy_book-and-pencil-education-concept-illustration-for-business_8480552.png') }}"
            alt="Book and Pencil Education Illustration" id="slideshow-image">

        {{-- <div class="sm:w-6/12" data-aos="zoom-in" data-aos-duration="500" data-aos-offset="500"> --}}
        <div class="sm:w-6/12 sm:text-left text-center">
            <h1 class="lg:text-5xl md:text-4xl text-3xl font-bold mb-2 text-slate-50">Explore Our
                Online <br> <span class="lg:text-8xl md:text-7xl text-6xl text-white uppercase">Library</span></h1>
            <h2 class="sm:text-2xl text-1xl font-bold mb-4 mt-8 text-slate-300">Access a Wealth of Knowledge
                Anytime, Anywhere
            </h2>
            <p class="mb-4 text-slate-300 sm:text-1xl text-xs">Discover a vast collection of books, articles, and
                resources tailored to
                your interests and needs.</p>

            <div>
                <button
                    class="px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-500 text-white font-bold rounded-full transition-transform transform-gpu hover:shadow-lg hover:from-purple-500 hover:to-blue-500 hover:scale-95">
                    Start Reading
                </button>
            </div>
        </div>
    </div>

    <section class="text-center sm:px-8 mt-20 sm:mt-32 md:mt-40 mb-20">
        <h2 class="text-slate-900 text-4xl tracking-tight font-extrabold sm:text-5xl dark:text-white">“Best
            practices” don’t actually work.</h2>
        <figure>
            <blockquote>
                <p class="mt-6 max-w-3xl mx-auto sm:text-1xl text-sm">I’ve written<!-- --> <a
                        href="https://adamwathan.me/css-utility-classes-and-separation-of-concerns/"
                        class="text-sky-500 font-semibold dark:text-sky-400">a few thousand words</a> <!-- -->on why
                    traditional “semantic class names” are the reason CSS is hard to maintain, but the truth is
                    you’re never going to believe me until you actually try it. If you can suppress the urge to
                    retch long enough to give it a chance, I really think you’ll wonder how you ever worked with CSS
                    any other way.</p>
            </blockquote>
            <figcaption class="mt-6 flex items-center justify-center space-x-4 text-left"><img
                    src="/_next/static/media/adam.f69b0b90.jpg" alt="" class="w-14 h-14 rounded-full"
                    loading="lazy" decoding="async">
                <div>
                    <div class="text-slate-900 font-semibold dark:text-white">Adam Wathan</div>
                    <div class="mt-0.5 text-sm leading-6">Creator of Tailwind CSS</div>
                </div>
            </figcaption>
        </figure>
    </section>

    <div class="grid grid-cols-1 gap-6 lg:gap-8 sm:grid-cols-2 lg:grid-cols-3  overflow-hidden">
        <ul class="space-y-8 aos-list">
            <li class="text-sm leading-6" data-aos="fade-up" data-aos-duration="400">
                <figure
                    class="relative flex flex-col-reverse bg-slate-50 rounded-lg p-6 dark:bg-slate-800 dark:highlight-white/5">
                    <blockquote class="mt-6 text-slate-700 dark:text-slate-300">
                        <p>I feel like an idiot for not using Tailwind CSS until now.</p>
                    </blockquote>
                    <figcaption class="flex items-center space-x-4"><img
                            src="/_next/static/media/ryan-florence.3af9c9d9.jpg" alt=""
                            class="flex-none w-14 h-14 rounded-full object-cover" loading="lazy"
                            decoding="async">
                        <div class="flex-auto">
                            <div class="text-base text-slate-900 font-semibold dark:text-slate-300"><a
                                    href="https://twitter.com/ryanflorence/status/1187951799442886656"
                                    tabindex="0"><span class="absolute inset-0"></span>Ryan Florence</a></div>
                            <div class="mt-0.5">Remix &amp; React Training</div>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="text-sm leading-6" data-aos="fade-up" data-aos-duration="600">
                <figure
                    class="relative flex flex-col-reverse bg-slate-50 rounded-lg p-6 dark:bg-slate-800 dark:highlight-white/5">
                    <blockquote class="mt-6 text-slate-700 dark:text-slate-300">
                        <p>If I had to recommend a way of getting into programming today, it would be HTML + CSS
                            with Tailwind CSS.</p>
                    </blockquote>
                    <figcaption class="flex items-center space-x-4"><img
                            src="/_next/static/media/guillermo-rauch.8a24ab88.jpg" alt=""
                            class="flex-none w-14 h-14 rounded-full object-cover" loading="lazy"
                            decoding="async">
                        <div class="flex-auto">
                            <div class="text-base text-slate-900 font-semibold dark:text-slate-300"><a
                                    href="https://twitter.com/rauchg/status/1225611926320738304"
                                    tabindex="-1"><span class="absolute inset-0"></span>Guillermo Rauch</a></div>
                            <div class="mt-0.5">Vercel</div>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="text-sm leading-6" data-aos="fade-up" data-aos-duration="700">
                <figure
                    class="relative flex flex-col-reverse bg-slate-50 rounded-lg p-6 dark:bg-slate-800 dark:highlight-white/5">
                    <blockquote class="mt-6 text-slate-700 dark:text-slate-300">
                        <p>I have no design skills and with Tailwind I can actually make good looking websites with
                            ease and it's everything I ever wanted in a CSS framework.</p>
                    </blockquote>
                    <figcaption class="flex items-center space-x-4"><img
                            src="/_next/static/media/sara-vieira.e2bfc631.jpg" alt=""
                            class="flex-none w-14 h-14 rounded-full object-cover" loading="lazy"
                            decoding="async">
                        <div class="flex-auto">
                            <div class="text-base text-slate-900 font-semibold dark:text-slate-300">Sara Vieira
                            </div>
                            <div class="mt-0.5">CodeSandbox</div>
                        </div>
                    </figcaption>
                </figure>
            </li>

        </ul>
        <ul class="space-y-8 aos-list hidden  sm:block">


            <li class="text-sm leading-6" data-aos="fade-up" data-aos-duration="500">
                <figure
                    class="relative flex flex-col-reverse bg-slate-50 rounded-lg p-6 dark:bg-slate-800 dark:highlight-white/5">
                    <blockquote class="mt-6 text-slate-700 dark:text-slate-300">
                        <p>Getting buy-in on Tailwind CSS from our entire team of developers took some time and
                            discussion, but once we implemented company wide, it has made it a breeze for any
                            developer to jump into any project and quickly make changes/enhancements.</p>
                    </blockquote>
                    <figcaption class="flex items-center space-x-4"><img
                            src="/_next/static/media/jerredchurst.c7c2a8e0.jpg" alt=""
                            class="flex-none w-14 h-14 rounded-full object-cover" loading="lazy"
                            decoding="async">
                        <div class="flex-auto">
                            <div class="text-base text-slate-900 font-semibold dark:text-slate-300"><a
                                    href="https://twitter.com/jerredchurst/status/1468657838494998530"
                                    tabindex="-1"><span class="absolute inset-0"></span>Jerred Hurst</a></div>
                            <div class="mt-0.5">CTO Primitive</div>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="text-sm leading-6" data-aos="fade-up" data-aos-duration="500">
                <figure
                    class="relative flex flex-col-reverse bg-slate-50 rounded-lg p-6 dark:bg-slate-800 dark:highlight-white/5">
                    <blockquote class="mt-6 text-slate-700 dark:text-slate-300">
                        <p>Tailwind CSS has at the same time made CSS enjoyable and drastically changed how I build
                            out products. It's rapid, efficient and an absolute joy to work with.</p>
                    </blockquote>
                    <figcaption class="flex items-center space-x-4"><img
                            src="/_next/static/media/braunshizzle.b79c4dbf.jpg" alt=""
                            class="flex-none w-14 h-14 rounded-full object-cover" loading="lazy"
                            decoding="async">
                        <div class="flex-auto">
                            <div class="text-base text-slate-900 font-semibold dark:text-slate-300"><a
                                    href="https://twitter.com/braunshizzle/status/1468676003941830666"
                                    tabindex="-1"><span class="absolute inset-0"></span>Braunson Yager</a></div>
                            <div class="mt-0.5">Full Stack Developer &amp; Designer</div>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="text-sm leading-6" data-aos="fade-up" data-aos-duration="500">
                <figure
                    class="relative flex flex-col-reverse bg-slate-50 rounded-lg p-6 dark:bg-slate-800 dark:highlight-white/5">
                    <blockquote class="mt-6 text-slate-700 dark:text-slate-300">
                        <p>Using any CSS framework other than Tailwind seems like a step backward in web development
                            at this point. Absolutely nothing else comes close to making me as productive during the
                            design phase of development than Tailwind.</p>
                    </blockquote>
                    <figcaption class="flex items-center space-x-4"><img
                            src="/_next/static/media/zac_zajdel.f8bdbd3e.jpg" alt=""
                            class="flex-none w-14 h-14 rounded-full object-cover" loading="lazy"
                            decoding="async">
                        <div class="flex-auto">
                            <div class="text-base text-slate-900 font-semibold dark:text-slate-300"><a
                                    href="https://twitter.com/zac_zajdel/status/1468662057079914499"
                                    tabindex="-1"><span class="absolute inset-0"></span>Zac Jordan Zajdel</a>
                            </div>
                            <div class="mt-0.5">Developer</div>
                        </div>
                    </figcaption>
                </figure>
            </li>

        </ul>
        <ul class="space-y-8 aos-list hidden lg:block">
            <li class="text-sm leading-6" data-aos="fade-up" data-aos-duration="500">
                <figure
                    class="relative flex flex-col-reverse bg-slate-50 rounded-lg p-6 dark:bg-slate-800 dark:highlight-white/5">
                    <blockquote class="mt-6 text-slate-700 dark:text-slate-300">
                        <p>I pushed back hard at the mention of Tailwind initially due to the number of classes in
                            my code however within 5 minutes or using it I was hooked and now am the annoying guy
                            pushing Tailwind on anyone who will listen. It has simplified my dev workflow beyond
                            measurement.</p>
                    </blockquote>
                    <figcaption class="flex items-center space-x-4"><img
                            src="/_next/static/media/dbrooking.7cd5a6ad.jpg" alt=""
                            class="flex-none w-14 h-14 rounded-full object-cover" loading="lazy"
                            decoding="async">
                        <div class="flex-auto">
                            <div class="text-base text-slate-900 font-semibold dark:text-slate-300"><a
                                    href="https://twitter.com/dbrooking/status/1468718511040126982"
                                    tabindex="-1"><span class="absolute inset-0"></span>Dan Brooking</a></div>
                            <div class="mt-0.5">Head Engineer @SubscriptionBox</div>
                        </div>
                    </figcaption>
                </figure>
            </li>
            <li class="text-sm leading-6" data-aos="fade-up" data-aos-duration="500">
                <figure
                    class="relative flex flex-col-reverse bg-slate-50 rounded-lg p-6 dark:bg-slate-800 dark:highlight-white/5">
                    <blockquote class="mt-6 text-slate-700 dark:text-slate-300">
                        <p>I never bothered to learn vanilla CSS because it’s a waste of time — why bother when I
                            have Tailwind instead? Turns out I learned a ton of CSS anyway just by using Tailwind.
                            It’s such a perfect middleground between thoughtful abstraction, while still letting you
                            break free.</p>
                    </blockquote>
                    <figcaption class="flex items-center space-x-4"><img
                            src="/_next/static/media/TrevorCampbell_.4e550103.jpg" alt=""
                            class="flex-none w-14 h-14 rounded-full object-cover" loading="lazy"
                            decoding="async">
                        <div class="flex-auto">
                            <div class="text-base text-slate-900 font-semibold dark:text-slate-300"><a
                                    href="https://twitter.com/TrevorCampbell_/status/1468739918662930432"
                                    tabindex="-1"><span class="absolute inset-0"></span>Trevor Campbell</a>
                            </div>
                            <div class="mt-0.5"></div>
                        </div>
                    </figcaption>
                </figure>
            </li>

        </ul>
    </div>
    
</div>


@endsection

@section('scripts')
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            var aosListItems = document.querySelectorAll('.aos-list > li[data-aos]');

            aosListItems.forEach((item, index) => {
                let duration = 400 + (index * 100); // Start from 400 and increase by 100 for each item
                item.setAttribute('data-aos-duration', duration);
            });
        });

        
    </script>
@endsection

