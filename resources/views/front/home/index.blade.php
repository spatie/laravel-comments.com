@extends('front.layouts.master')

@section('title', 'Writing Readable PHP - A collection of tricks and trip to improve the readability of your code.')

@section('description', 'Learn how to write code that’s a joy to read for your co-workers and future self. View high-quality videos on both clean coding and static analysis.')

@section('content')

<section>

        <canvas id="canvas3d" class="opacity-0 md:opacity-100  fixed max-w-3xl md:max-w-5xl h-full left-1/2 transform -translate-x-1/2 top-0 z-50 pointer-events-none">

    </canvas>
       
    
</section>

<header class="relative">
    
    <div class="absolute right-0 border-r-yellow border-r-[40vw] border-b-transparent border-b-[80vh] "></div>
    <x-layout class="pt-24">
        <div id="header-wrapper" class="flex flex-wrap justify-between">
            
            <div class="w-[55%]">
                <div class=" mb-8 inline-block bg-yellow px-4 py-2">
                    <p class="text-black markup-body-lg">Launching April 2022</p>
                </div>
                <p class="text-blue-500 markup-body-lg">
                    <a class="underline z-50 relative" href="https://spatie.be">Spatie</a> and <a class="underline" href="https://christoph-rumpel.com">Christoph Rumpel</a>
                    present:
                </p>

                <h1 class=" my-6 markup-h1">
                    <span class="ml-[-0.09em]">Writing</span> <br>Readable <span class="hidden">PHP</span>
                </h1>

                <div class="h-24 my-8">
                    <img class="h-full max-w-none w-auto md:opacity-0" src="/images/php.png" alt="">
                </div>
                

                @include('components.php-svg')

                
            </div>
            <div class="mt-12 top-12 px-12 md:px-0 md:w-[45%] w-full">

                <div class="">
                    <div class="w-full absolute h-full -left-4 -top-4 bg-star-patern bg-star bg-repeat"></div>
                    @include('partials.intro-video')
                </div>
            </div>
        </div>
        

            <p class="mt-12 markup-body-xl">
                Are you...
            </p>

            <ul class="my-6 grid gap-2 list-disc">
                <li class="flex items-baseline markup-body-xl">
                    <div
                        class="top-[-0.07em] mr-2 border-l-[0.75rem]  border-l-blue-500 border-t-8 border-b-8 border-t-transparent border-b-transparent">
                    </div>
                    <span>Staring at your old code as if someone else wrote it?</span>
                </li>
                <li class="flex items-baseline markup-body-xl">
                    <div
                        class="top-[-0.07em] mr-2 border-l-[0.75rem]  border-l-blue-500 border-t-8 border-b-8 border-t-transparent border-b-transparent">
                    </div>
                    <span>Coding in a team without clean code habits?</span>
                </li>
                <li class="flex items-baseline markup-body-xl">
                    <div
                        class="top-[-0.07em] mr-2 border-l-[0.75rem]  border-l-blue-500 border-t-8 border-b-8 border-t-transparent border-b-transparent">
                    </div>
                    <span>Struggling with consistent naming?</span>
                </li>
            </ul>

            <p class="leading-relaxed markup-body-xl">
                Stop the madness! Let’s learn how to write readable PHP in this hands-on course.
            </p>




    </x-layout>
</header>

<section id="cta" class="mt-24">
    <img class="absolute opacity-20 md:opacity-0 w-16 md:w-24 top-4 left-10 transform rotate-6" src="/images/H@4x.png"
        alt="">
    <img class="absolute opacity-20 md:opacity-0 w-16 md:w-24 top-32 right-10 transform rotate-12"
        src="/images/P-2@4x.png" alt="">
    <img class="absolute opacity-0 md:opacity-0 w-16 md:w-24 top-48 md:top-56 left-24 transform scale-50 -rotate-6"
        src="/images/P-1@4x.png" alt="">

    <x-layout class="text-center md:w-2/3">
        @include('partials.newsletter')
    </x-layout>


</section>

<section id="pricecard" class="pt-24 pb-6 overflow-hidden">
    <x-layout>
        <div class="gap-12 flex justify-center items-end">


                {{-- @include('partials.priceCard') --}}



            {{--
            @include('partials.bundlePriceCard')
             --}}

            {{--
            <h2 class="markup-h3 mt-16 mb-6">Launching in September</h2>
            @include('partials.newsletter')--}}

        </div>
        {{--
            <p class="mt-12 text-xs text-center">
            VAT will be calculated during checkout by Paddle.
            <br>We support Purchasing Power Parity.
        </p>
            --}}

        <div id="course_contents" class="mx-auto md:w-2/3 mt-16 p-12 ">

            <div class="w-full absolute h-full -left-4 -top-4 bg-star-patern bg-star bg-repeat"></div>
            <div class="w-full absolute h-full bg-yellow left-0 top-0"></div>
            <img class="absolute md:opacity-0 w-36 -left-56 top-32 transform rotate-6" src="/images/r@4x.png" alt="">
            <img class="absolute md:opacity-0 w-36 -right-56 transform -rotate-12" src="/images/w-3D@4x.png" alt="">
            <h2 class="markup-h3 mb-6">What will the course <br>get me?</h2>
            <ul class="grid gap-4 markup-body-lg12">

                <li class="flex items-baseline">
                    <div
                        class="mr-2 border-l-[0.75rem]  border-l-blue-500 border-t-8 border-b-8 border-t-transparent border-b-transparent">
                    </div>
                    <span>Learn how to write code that’s a joy to read for your co-workers and future self.</span>
                </li>

                <li class="flex items-baseline">
                    <div
                        class="mr-2 border-l-[0.75rem]  border-l-blue-500 border-t-8 border-b-8 border-t-transparent border-b-transparent">
                    </div>
                    <span>Work with Spatie’s guidelines to code consistently in PHP and Laravel.</span>
                </li>

                <li class="flex items-baseline">
                    <div
                        class="mr-2 border-l-[0.75rem]  border-l-blue-500 border-t-8 border-b-8 border-t-transparent border-b-transparent">
                    </div>
                    <span>Learn how to use static analysis to ensure that your code is understandable and correct.</span>
                </li>

                <li class="flex items-baseline">
                    <div
                        class="mr-2 border-l-[0.75rem]  border-l-blue-500 border-t-8 border-b-8 border-t-transparent border-b-transparent">
                    </div>
                    <span>Get access to our learning platform to track progress and discuss good coding habits with other course participants and the authors.</span>
                </li>

                <li class="flex items-baseline markup-links">
                    <div
                        class="mr-2 border-l-[0.75rem]  border-l-blue-500 border-t-8 border-b-8 border-t-transparent border-b-transparent">
                    </div>
                    <span>View high-quality videos on both clean coding and static analysis.
                    </span>
                </li>
            </ul>
        </div>
    </x-layout>
</section>

<section>
    <div class="relative border-l-yellow border-l-[100vw] border-t-transparent border-t-[8rem] ">

    </div>
    <div class="bg-yellow">
        <img class="absolute opacity-0 w-16 md:w-24 -top-10 md:-top-40 left-10 transform -rotate-6"
            src="/images/p-1@4x.png" alt="">
        <x-layout class="items-start " x-data="{ sample: 0 }">
            <div class="col-span-2 mb-12">
                <h2 id="code-examples-title" class="md:col-span-2 mb-8 markup-h3">Code Examples</h2>
                <h2 class=" mb-6">In general, code is more frequently read than written. That’s why you should optimize for readability, which is easier than you would think. It’s a matter of taking care of the details.
                    Here are some examples from the course:</h2>
            </div>


            <div class="flex flex-wrap w-full">
                <section id="sample-video" class="w-full md:w-2/5 sticky top-0" style="align-self: flex-start">
                    <ul class="mb-12  pr-12">
                        <li class="mb-2 md:mb-0  md:border-b-2 md:border-black w-full">
                            <button class="flex justify-between  items-center py-2 md:py-4 border-2 px-2 border-black md:border-none md:px-0 hover:bg-black hover:text-white hover:md:bg-transparent hover:md:text-black group"
                                :class="{'after:border-l-[0.75rem]   after:border-l-black after:border-t-8 after:border-b-8 after:border-t-transparent after:border-b-transparent bg-black md:bg-transparent md:text-black text-white': sample === 0, '': sample!= 0 }"
                                @click="sample = 0;document.getElementById('code-examples-title').scrollIntoView();">
                                <span class="mr-10 text-left">Adding metrics to names</span>
                                <div
                                    :class="{' border-l-[0.75rem] opacity-0  border-l-black border-t-8 border-b-8 border-t-transparent border-b-transparent transform -translate-x-4 transition-all  group-hover:opacity-100 group-hover:translate-x-0': sample != 0, 'hidden': sample === 0 }">
                                </div>
                            </button>
                        </li>
                        <li class="mb-2 md:mb-0 md:border-b-2 md:border-black w-full">
                            <button class="flex items-center py-2 md:py-4 border-2 px-2 border-black md:border-none md:px-0 hover:bg-black hover:text-white hover:md:bg-transparent hover:md:text-black group"
                                :class="{' after:border-l-[0.75rem]   after:border-l-black after:border-t-8 after:border-b-8 after:border-t-transparent after:border-b-transparent bg-black md:bg-transparent md:text-black text-white': sample === 1, '': sample != 1}"
                                @click="sample = 1; document.getElementById('code-examples-title').scrollIntoView();">

                                <span class="mr-10 text-left">How to structure complex conditionals</span>
                                <div
                                    :class="{' border-l-[0.75rem]  border-l-black border-t-8 border-b-8 border-t-transparent border-b-transparent transform -translate-x-4 transition-all opacity-0 group-hover:opacity-100 group-hover:translate-x-0': sample != 1, 'hidden': sample === 1 }">
                                </div>
                            </button>
                        </li>
                        <li class="mb-2 md:mb-0 md:border-b-2 md:border-black w-full">
                            <button class="flex items-center py-2 md:py-4 border-2 px-2 border-black md:border-none md:px-0 hover:bg-black hover:text-white hover:md:bg-transparent hover:md:text-black group"
                                :class="{' after:border-l-[0.75rem]   after:border-l-black after:border-t-8 after:border-b-8 after:border-t-transparent after:border-b-transparent bg-black md:bg-transparent md:text-black text-white': sample === 2, '': sample != 2}"
                                @click="sample = 2; document.getElementById('code-examples-title').scrollIntoView();">

                                <span class="mr-10 text-left"> Using array shapes with PHPStan</span>
                                <div
                                    :class="{' border-l-[0.75rem]  border-l-black border-t-8 border-b-8 border-t-transparent border-b-transparent transform -translate-x-4 transition-all opacity-0 group-hover:opacity-100 group-hover:translate-x-0': sample != 2, 'hidden': sample === 2 }">
                                </div>
                            </button>
                        </li>

                    </ul>

                </section>
                <section id="sample-video-content" class=" w-full md:w-3/5 pb-12 relative">
                    <div class="">
                        <div x-show="sample === 0">
                            <div class="w-full absolute h-full -left-4 -top-4 bg-star-patern bg-star bg-repeat"></div>
                            <div class="bg-white pb-8">

                                <p class="bg-white px-8 py-3 pt-8 ">
                                    Consider adding the unit to the name whenever you work with something measurable.
                                </p>
                            <x-code>


```php
// bad: we don't know what that 100 represents
$averageTime = 100;

// good: we now know that it is 100ms
$averageTimeInMs = 100;
````
</x-code>

    <p class=" px-8 py-3 ">
        Another way of dealing with this is by creating dedicated objects. Imagine that you need to work with a percentage. Which of these is correct?

    </p>

<x-code>
```php
$percentage = 0.5;
$percentage = 50;
```
</x-code>

    <p class="bg-white px-8 py-3 ">
        You can’t tell what your application expects. Let’s now use an object with a static constructor, one for each possibility.

    </p>

<x-code>
```php
class Percentage
{
public static fromInt(int $percentage): self
{
    new self($percentage);
}

public static fromFloat(float $percentage): self
{
    new self($percentage * 100);
}

private function __construct(
    public int $value
    ) {};
}
```
</x-code>
    <p class="  px-8 py-3 ">
        Using a `Percentage` class clarifies that an integer is expected.


    </p>
<x-code>

```php
$percentage = Percentage::fromInt(50);
```
                            </x-code>

                            </div>
                        </div>

                        <div x-show="sample === 1">
                            <div class=" inset-0">

                                @include('partials.sample-video')

                            </div>
                        </div>
                        <div class="relative" x-show="sample === 2">
                            <div class="w-full absolute h-full -left-4 -top-4 bg-star-patern bg-star bg-repeat"></div>
<div class="bg-white pb-8 relative">

    <p class=" px-8 py-3 pt-8">
        PHPStan is a wonderful static analysis tool that can detect many types of errors. In this course, you'll learn how to use this tool to eliminate entire categories of bugs. Let's take a look at a small example.
        <br>
        <br>
        When using arrays, you can hint at specific keys and their type. Imagine you have an array with a person’s properties. You could type-hint the properties like this:

    </p>
<x-code>
```php
/**
* @param array{first_name: string, last_name: string} $personProperties
* return string
*/
function fullName(array $personProperties): string
{
    // ...
}
```
</x-code>

    <p class="px-8 py-3">
        Should we try to use `$person[‘non-existing’]` then PHPStan would warn us with:
    </p>
    <x-code>
```
Offset 'non-existing' does not exist on array{first_name: string, last_name: string}.
```
    </x-code>
    <p class=" px-8 py-3 ">
        And here's a very nice bonus: when using this type docblock modern IDEs can provide autocompletion when working with the array keys.
    </p>

<div class="pt-8 w-full px-8">
    <img class="w-full" src="/images/auto-completion-keys.png">
</div>

    <p class=" px-8 py-3 ">
        Ain't that great? We just made it far less likely that you'll use an non-existing array key.
    </p>


</div>
                        </div>
                    </div>
                </section>
            </div>

        </x-layout>
    </div>

</section>

{{--

<section id="objectives" class="py-12">
    <x-layout small class="md:-left-16">
        <h2 class="markup-h3 mb-6">The basics of testing</h2>

        <p class="markup-body-lg">You will learn how to write a test suite from scratch. We'll cover how to make sure
            your homepage works, how you can test form submissions, what the different types of tests are, and much
            more!</p>


        <x-code>
            ```php
            /** @test */
            public function it_can_handle_a_form_submission()
            {
            $this
            ->post(route('contact.submit'), [
            'message' => 'Hello, PHPUnit!',
            ])
            ->assertRedirect(route('home'))
            ->assertSessionHasNoErrors();
            }
            ```
        </x-code>

        <h2 class="mt-24 markup-h3 mb-6">Writing Readable PHP</h2>
        <p class="markup-body-lg">
            After we've covered the basics, we'll show you how to tests policies, middlewares, controllers,
            mails, views, and all kinds of features. We'll cover snapshots testing, pragmatic mocks, how to test
            domain code, how to set up CI, and much more.
        </p>

        <x-code>
            ```php
            /** @test */
            public function the_command_will_publish_scheduled_posts()
            {
            TestTime::freeze('Y-m-d H:i:s', '2021-01-01 00:00:00');

            $post = Post::factory()->create([
            'publish_date' => now()->addHour(),
            'published' => false,
            ]);

            // Travel to a second before the post should be published
            TestTime::addHour()->subSecond();

            $this->artisan(PublishScheduledPostsCommand::class);

            $this
            ->get(route('posts.show'), $post->slug))
            ->assertNotFound();

            // Travel to the time that a post should be published
            TestTime::addSecond();

            $this->artisan(PublishScheduledPostsCommand::class);

            $this
            ->get(route('posts.show'), $post->slug))
            ->assertSuccessful();

            $this->assertTrue($post->refresh()->published);
            }
            ```
        </x-code>
    </x-layout>

    <x-layout small class="mt-24">
        <div class="hidden md:block z-10 absolute -bottom-32 -left-28 w-56">
            <div class="absolute -top-10 left-4 w-40 h-40 bg-red-200 rounded-full"></div>
            <div>
                <img loading="lazy" class="mix-blend-multiply" src="/images/skaterboi.png" alt="Skaterboi">
                <img loading="lazy" class="parallax-dizzy absolute top-[-13%] left-[48%] w-[25%]"
                    src="/images/dizzy.svg" alt="">
            </div>
        </div>
        <div class="md:left-24">

            <h2 class="markup-h3 mb-6">Let's Pest this</h2>

            <p class="markup-body-lg">
                Pest is the new kid on the block in the PHP testing world that focuses on stellar developer experience.
                It's rapidly rising in popularity, and we believe it'll only grow in the near future. That's why we've
                recorded our entire course twice: first with
                PHPUnit, then with Pest and all the awesome features it has to offer.
            </p>
            <p class="mt-6 markup-body-lg">
                We'll also show you how to convert an existing PHPUnit test suite to Pest.
            </p>


            <x-code>
                ```php
                it('has a scope to retrieve all published blogposts', function() {
                $publishedBlogPost = BlogPost::factory()->published()->create();
                $draftBlogPost = BlogPost::factory()->draft()->create();

                $publishedBlogPosts = BlogPost::wherePublished()->get();

                expect($publishedBlogPosts)
                ->toHaveCount(1)
                ->and($publishedBlogPosts->first()->id)->toBe($publishedBlogPost->id);
                });
                ```
            </x-code>
        </div>
    </x-layout>
</section>
--}}
<section id="testimonials" class="">
    <div class=" pb-8  pt-32">
        <div
            class="w-full absolute h-1/2  left-0 top-2/4 transform -translate-y-1/4  bg-circle-patern bg-circle bg-repeat">
        </div>
        <h2 class="markup-h2 mb-12 text-center">
            What ohters have to say
        </h2>
        <x-layout class=" grid justify-center md:grid-cols-2 items-start gap-x-12">
            <x-testimonial textClass="" name="Taylor Otwell" handle="taylorotwell" avatar="taylor.jpg"
                title="Laravel Founder & Creator" class="-left-4">
                Nothing inspires confidence while shipping like a good test suite. I'm thrilled Spatie is introducing a
                new generation of Laravel developers to the strong testing culture of the Laravel ecosystem.
            </x-testimonial>
            <x-testimonial textClass="" name="Nuno Maduro" handle="enunomaduro" avatar="nuno.jpg"
                title="Pest creator & developer at Laravel" class="md:top-2 left-8" frame="2">
                Wish I had seen a video course like "Testing Laravel" years ago when was learning Laravel myself. It's
                the perfect starting point for developers that want to learn how to write tests in Laravel.
            </x-testimonial>
            <x-testimonial textClass="" name="Mohamed Said" handle="themsaid" avatar="mohamed.jpg"
                title="Author & developer at Laravel" class="top-12" frame="2">
                Anyone can show you how to write tests. A few can answer the question of what to test. Which is the real
                elephant in the room. Spatie has the experience and expertise to answer the big question. This course is
                going to have a huge impact on how Laravel developers test their apps. </x-testimonial>
            <x-testimonial textClass="" name="Oliver Nybroe" handle="OliverNybroe" avatar="oliver.jpg"
                title="Author of the Pest PhpStorm plugin" class="hidden md:block top-10" frame="2">
                I wish that this course existed when I started testing. The concepts are well explained and easy to
                follow. It's amazing to have the first video course for Pest being such a joy to watch.
            </x-testimonial>
            

        </x-layout>
    </div>
</section>

{{--

<section id="toc" class="pb-12 bg-red-100">
    <div class="hidden md:block absolute inset-0 overflow-hidden">
        <div class="absolute -bottom-6 md:-bottom-24 -right-40 w-[30rem] h-[30rem] bg-blue-500/50 rounded-full"></div>
    </div>
    <x-layout class="pt-8 pb-24">

        <h2 class="mb-2 markup-h2">Table of contents</h2>

        <div class="mb-12 text-sm">All videos are recorded in
            <x-pest-only-title /> and
            <x-php-unit-only-title /> versions unless indicated otherwise</div>

        <div class="grid md:grid-cols-2 gap-12">
            <div class="md:row-span-2">
                <h3 class="mb-4 markup-h4">Getting started</h3>
                <ul class="markup-ul markup-body-lg grid gap-1">
                    <li>Intro</li>
                    <li>Our first HTTP test</li>
                    <li>Using a database</li>
                    <li>Using factories</li>
                    <li>Factory relations</li>
                    <li>Testing a form</li>
                    <li>Authenticated testing</li>
                    <li>JSON assertions</li>
                    <li>Exploring the expectation API
                        <x-pest-only />
                    </li>
                    <li>Automatically rerun tests
                        <x-pest-only />
                    </li>

                    <li>Higher order tests
                        <x-pest-only />
                    </li>
                    <li>Higher order expectations
                        <x-pest-only />
                    </li>
                </ul>
            </div>
            <div>
                <h3 class="mb-4 markup-h4">Mocking dependencies</h3>
                <ul class="markup-ul markup-body-lg grid gap-1">
                    <li>Testing fakes</li>
                    <li>Mocking</li>
                    <li>Handcrafted mocks</li>
                    <li>Testing time</li>
                </ul>
            </div>
            <div class="md:col-start-2 md:row-span-2">
                <h3 class="mb-4 markup-h4">Testing Laravel in depth</h3>
                <ul class="markup-ul markup-body-lg grid gap-1">
                    <li>Middleware tests</li>
                    <li>Validation in depth</li>
                    <li>Validation rule testing</li>
                    <li>Testing file uploads</li>
                    <li>Policy testing</li>
                    <li>Policies continued</li>
                    <li>Testing console applications</li>
                    <li>The HTTP facade</li>
                    <li>Testing blade components</li>
                    <li>Browser tests</li>
                    <li>Dusk in Depth</li>
                    <li>Testing Livewire</li>
                    <li>Testing Jobs</li>
                    <li>Custom factories</li>
                </ul>
            </div>
            <div>
                <h3 class="mb-4 markup-h4">Configuring tests</h3>
                <ul class="markup-ul markup-body-lg grid gap-1">
                    <li>Parallel testing
                        <x-php-unit-only />
                    </li>
                    <li>Data providers</li>
                    <li>Configuring database connections</li>
                </ul>
            </div>
            <div>
                <h3 class="mb-4 markup-h4">Testing tidbits</h3>
                <ul class="markup-ul markup-body-lg grid gap-1">
                    <li>Testing exceptions</li>
                    <li>Testing domain code</li>
                    <li>Trying out TDD</li>
                    <li>Refactoring with tests</li>
                    <li>Regression testing</li>
                    <li>Snapshot testing</li>
                    <li>Tests and CI</li>
                </ul>
            </div>
            <div class="col-start-1">
                <h3 class="mb-4 markup-h4">Converting an existing PHPUnit test suite to Pest
                    <x-pest-only />
                </h3>
                <ul class="markup-ul markup-body-lg grid gap-1">
                    <li>Why use Pest?</li>
                    <li>Installing Pest</li>
                    <li>Using traits</li>
                    <li>Grouping tests</li>
                    <li>Using datasets</li>
                    <li>Rewriting the base testcase</li>
                    <li>Introducing higher order tests</li>
                    <li>Converting assertions to the expectation API</li>
                </ul>
            </div>
        </div>
    </x-layout>

    <div class="hidden md:absolute md:flex justify-end right-12 md:-bottom-24">
        <div class="parallax-monorail-01 mix-blend-multiply">
            <img loading="lazy" class="w-80 lg:w-[30rem]" src="/images/monorail.png" alt="">
            <img loading="lazy" class="absolute top-[2%] left-[56%] w-[15%]" src="/images/turn-02.svg" alt="">
        </div>
        <img loading="lazy" class="parallax-monorail-02 absolute top-[23%] left-[-13%] w-[15%]" src="/images/turn-01.svg" alt="">
    </div>
</section>

--}}



<section id="authors" class="py-32">
    <img class="absolute opacity-20 md:opacity-0 w-16 md:w-24 bottom-96 left-10 transform rotate-6"
        src="/images/H@4x.png" alt="">
        <h2 class="markup-h2 mb-12 text-center">
            About the authors
        </h2>
    <x-layout small class="grid grid-cols-1 md:grid-cols-2 gap-12">
        

        <div class="flex relative flex-col items-end markup-links">
            <div class="relative flex flex-col items-end markup-links">
                <div class=" absolute left-1/2 transform -translate-x-1/2  w-full h-full">
                    <div
                        class="absolute w-full h-full transform -translate-x-2 -translate-y-2 bg-black border border-black">
                    </div>
                    <div
                        class="w-2 h-full transform absolute right-0 -top-1 bg-white border border-black skew-y-[45deg]">
                    </div>
                    <div class="absolute w-full h-full bg-white border border-black"></div>
                    <div
                        class="w-2 h-full transform absolute -left-2 -top-1 bg-white border border-black skew-y-[45deg]">
                    </div>
                </div>
                <div class="">
                    <div class="absolute bottom-4 right-6 w-20 h-20  bg-yellow"></div>
                    <div class=" overflow-hidden">
                        <img loading="lazy" src="/images/christoph.jpg" class=" w-32 h-32 mix-blend-multiply"
                            alt="Brent">
                    </div>
                </div>
                <h4 class=" mr-4 markup-h4 mix-blend-multiply">Christoph Rumpel</h4>
                <a class="mr-4 mb-6 text-blue-500" href="https://twitter.com/christophrumpel">
                    @christophrumpel
                </a>
                <p class="text-right px-4 mb-8">
                    Christoph is a Laravel enthusiast hailing from Austria.
                    He has created successful courses such as <a href="https://masteringphpstorm.com">Mastering PhpStorm</a> and <a
                        href="https://laravelcoreadventures.com">Laravel Core adventures</a>.
                    He has also created <a href="https://larastreamers.com">Larastreamers</a>, a popular aggregator for all Laravel related streams on major video platforms.
                </p>
            </div>


        </div>

        <div class="mt-12 flex flex-col items-start markup-links">
            <div class=" absolute left-1/2 transform -translate-x-1/2  w-full h-full">
                <div
                    class="absolute w-full h-full transform -translate-x-2 -translate-y-2 bg-black border border-black">
                </div>
                <div class="w-2 h-full transform absolute right-0 -top-1 bg-white border border-black skew-y-[45deg]">
                </div>
                <div class="absolute w-full h-full bg-white border border-black"></div>
                <div class="w-2 h-full transform absolute -left-2 -top-1 bg-white border border-black skew-y-[45deg]">
                </div>
            </div>
            <div class="relative">
                <div class="absolute bottom-4 left-6 w-20 h-20  bg-yellow"></div>
                <div class="overflow-hidden">
                    <img loading="lazy" src="/images/freek.jpg" class=" w-32 h-32 mix-blend-multiply opacity-90"
                        alt="Freek">
                </div>
            </div>
            <h4 class="mt-4 ml-4 markup-h4 mix-blend-multiply">Freek Van der Herten</h4>

            <a class="ml-4 mb-6 text-blue-500" href="https://twitter.com/freekmurze">
                @freekmurze
            </a>
            <p class="px-4 mb-8">
                Freek works at <a href="https://spatie.be">Spatie</a> and has created countless popular <a href="https://spatie.be/open-source">Laravel and PHP
                    packages</a>. He has a passion for spreading his knowledge via his well-respected blog <a
                    href="https://freek.dev" class="underline">freek.dev</a>, user groups, conference talks, and streams
                on <a href="https://www.youtube.com/c/FreekVanderHerten/videos">his YouTube channel</a>.
                He is a developer and partner at <a href="https://spatie.be">Spatie</a>. After hours, he also organises
                the <a href="https://meetup.laravel.com">Laravel Worldwide Meetup</a> and the <a
                    href="https://fullstackeurope.com">Full Stack Europe</a> conference.

            </p>
        </div>

        <div class="mt-4 md:col-span-2 flex justify-center">
            <div class="max-w-md markup-links text-center">

                <a class="ml-2 mb-4 button-container logo" href="https://spatie.be">
                    <span class=" mas bg-white font-inter  tracking-wider">SPATIE</span>
                    <button type="submit" name="submit" id="submit" class="font-inter tracking-widest">
                        SPATIE
                    </button>
                </a>
                <p>
                    <a href="https://spatie.be">Spatie</a> is a web development agency
                    that crafts web applications, courses
                    & open source packages in the Laravel ecosystem. With over 300 open source packages for Laravel
                    and PHP, chances are that your <code class="markup-code text-sm">composer.json</code> has our
                    name in it.

                </p>
                <p class="mt-2">
                    We are <a class="text-blue-500" href="https://twitter.com/spatie_be">
                        @spatie_be
                    </a> on Twitter.
                </p>
            </div>
        </div>
    </x-layout>
</section>



<h2 class="mt-8 markup-h2 text-center">Other courses <br>from Spatie</h2>
<section id="related" class="py-32 ">
    <x-layout>

        {{-- <div class="my-16 text-white flex justify-center">
            @include('partials.newsletter', ['onDark' => true])
        </div> --}}
        <div class="relative">
            <div
                class="w-full absolute h-1/3 lg:h-full left-0 -top-0 transform -translate-y-24 bg-circle-patern bg-circle bg-repeat">
            </div>
            <div
                class="w-full absolute h-1/3 lg:hidden left-0 top-1/2 transform -translate-y-24 bg-circle-patern bg-circle bg-repeat">
            </div>
            <div class="grid justify-center sm:grid-cols-2 lg:grid-cols-3 lg:-mx-24 gap-x-10 gap-y-10">
                <x-related url="https://laravel-beyond-crud.com" alt="Laravel Beyond Crud" src="images/related/crud.jpg"
                    short="Learn how to build larger-than-average Laravel applications and maintain them for years to come."
                    frame="/images/frame-white-01.svg" />
                <x-related url="https://front-line-php.com" alt="Front Line PHP" src="images/related/flphp.jpg"
                    short="An ebook on cutting edge tactics in PHP 8, accompanied by videos and practical examples."
                    frame="/images/frame-white-02.svg" />
                <x-related url="https://event-sourcing-laravel.com" alt="Event Sourcing Laravel"
                    src="images/related/event-sourcing.jpg"
                    short="The best resource to get started with event sourcing in your Laravel applications."
                    frame="/images/frame-white-03.svg" />
                <x-related url="https://laravelpackage.training" alt="Laravel Package Training"
                    src="images/related/packagetraining.jpg"
                    short="Learn how to create a Laravel package in this 4 hour video course."
                    frame="/images/frame-white-04.svg" />
                <x-related url="https://testing-laravel.com" alt="Testing Laravel course"
                    src="images/related/testing-laravel.jpeg"
                    short="A video course to get started with Pest and PHPUnit
                    by Brent Roose & Freek Van der Herten."
                    frame="/images/frame-white-04.svg" />
            </div>
        </div>
    </x-layout>
</section>


@endsection
