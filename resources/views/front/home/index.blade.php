@extends('front.layouts.article')

@section('title', 'Laravel Comments')

@section('description', 'A package for Laravel. Get a comments section up an running in no time.')

@section('article')

<main>
    <div class="px-8 mt-16 mb-4 sm:my-16">
        <section class="absolute top-16 bottom-16 left-0 right-0 bg-gradient-to-br from-indigo-600 to-indigo-700 rounded-sm">
        </section>

        <x-browser class="max-w-4xl mx-auto">
            <livewire:comments hide-notification-options no-comments-text="Comments you submit will only be visible in your session. They will be deleted in an hour." :model="$post" />
        </x-browser>

        <section id="pricecards" class="z-10 mt-24 max-w-md sm:max-w-2xl mx-auto">
            <div class="grid sm:grid-cols-2 sm:items-stretch">
                <div class="z-30 sm:left-4">
                    <div class="z-20 h-full bg-gradient-to-br from-indigo-50 to-indigo-100 rounded shadow-2xl">
                        @include('partials.price-card')
                    </div>
                    <div class="z-10 absolute bottom-0 right-0 w-full sm:w-8 h-4 sm:h-full bg-gradient-to-br from-indigo-300 to-indigo-400 rounded transform origin-bottom-left sm:origin-bottom-right skew-x-[-45deg] sm:skew-x-0 sm:skew-y-[-45deg] ">
                    </div>
                </div>
                <div class="z-10 left-4 -top-4 sm:-left-4 sm:top-8">
                    <div class="h-full bg-gradient-to-br from-indigo-200 to-indigo-300 rounded shadow-2xl">
                        @include('partials.price-card-unlimited')
                    </div>
                </div>
            </div>
        </section>
    </div>

    <p class="text-xs text-gray-500 text-center">
        VAT will be calculated during checkout by Paddle.
        <br />
        We support Purchasing Power Parity.
    </p>

    <section id="features" class="mt-40 mb-16 max-w-4xl mx-auto">
        <div class="flex flex-col sm:flex-row gap-4 sm:gap-8">
            <h2 class="sm:w-1/2 markup-h2 -top- sm:text-right">
                <x-square class="w-5 h-5 mx-1"></x-square>
                A beautiful<br />Livewire component
            </h2>

            <p class="sm:w-1/2 markup-p">
                Laravel Comments contains a drop-in Livewire component that allows you to add comments to any Laravel app in no time.                
                <br>
                It's your application, so there is no third-party involved.
            </p>
        </div>

        <div class="mt-24 sm:mt-32 flex flex-col sm:flex-row-reverse gap-4 sm:gap-8">
            <h2 class="sm:w-1/2 markup-h2">
                Emoji <x-circle class="w-6 h-6 mx-1"></x-circle>
                <br>
                reactions
            </h2>

            <div class="sm:w-1/2">
                <p class="markup-p">
                    Sometimes you just want to give a thumbs up instead of typing a full comment. Laravel Comments comes with a set of emoji reactions out of the box.
                </p>

                <figure class="mt-4 flex justify-end">
                    <div class="relative right-2 comments-modal is-compact shadow-xl">
                        <div class="comments-modal-contents">
                            <div class="comments-reaction-picker-reactions">
                                <button type="button" class="comments-reaction-picker-reaction" wire:click="toggleReaction('👍')">
                                    👍
                                </button>
                                <button type="button" class="comments-reaction-picker-reaction" wire:click="toggleReaction('🥳')">
                                    🥳
                                </button>
                                <button type="button" class="comments-reaction-picker-reaction" wire:click="toggleReaction('👀')">
                                    👀
                                </button>
                                <button type="button" class="comments-reaction-picker-reaction" wire:click="toggleReaction('😍')">
                                    😍
                                </button>
                                <button type="button" class="comments-reaction-picker-reaction" wire:click="toggleReaction('💅')">
                                    💅
                                </button>
                            </div>
                        </div>
                    </div>
                </figure>
            </div>
        </div>

        <div class="mt-24 sm:mt-32 flex flex-col sm:flex-row gap-4 sm:gap-8">
            <h2 class="sm:w-1/2 markup-h2 -top- sm:text-right">
                <x-triangle class="w-5 h-5 mx-1"></x-triangle> Subscribe
                <br>
                to a thread
            </h2>

            <div class="sm:w-1/2">
                <p class="markup-p">
                    You’ll never miss a thing! Laravel Comments can send you email notifications whenever something happens in a discussion.
                    Follow everything, or just the topics you're participating in.

                </p>
                <figure class="mt-6">
                    <div class="comments-dropdown flex justify-start">
                        <div class="relative left-2 comments-dropdown-items shadow-xl">
                            <button class="text-xs comments-dropdown-item bg-gray-100">
                                Only when you are participating
                            </button>
                            <button class="text-xs comments-dropdown-item">
                                Always
                            </button>
                            <button class="text-xs comments-dropdown-item">
                                Never
                            </button>
                        </div>
                    </div>
                </figure>
            </div>
        </div>

        <div class="mt-24 sm:mt-32 flex flex-col sm:flex-row-reverse gap-4 sm:gap-8">
            <h2 class="sm:w-1/2 markup-h2">
                Markdown <x-square class="w-6 h-6 mx-1"></x-square>
                <br>
                savvy
            </h2>

            <div class="sm:w-1/2">
                <p class="markup-p">
                    Comments can be entered as Markdown. Not familiar with that syntax? No problem! You can use the CodeMirror editor with a compact toolbar out of the box.
                </p>

                <figure class="mt-6 flex justify-start">
                    <div class="left-2 dummy-editor shadow-xl">
                        <a title="Bold (Cmd-B)" tabindex="-1" class="fa fa-bold"></a>
                        <a title="Italic (Cmd-I)" tabindex="-1" class="fa fa-italic"></a>
                        <i class="separator">|</i>
                        <a title="Quote (Cmd-')" tabindex="-1" class="fa fa-quote-left"></a>
                        <a title="Generic List (Cmd-L)" tabindex="-1" class="fa fa-list-ul"></a>
                        <a title="Numbered List (Cmd-⌥-L)" tabindex="-1" class="fa fa-list-ol"></a><i class="separator">|</i><a title="Create Link (Cmd-K)" tabindex="-1" class="fa fa-link"></a>
                    </div>
                </figure>

            </div>
        </div>

        <div class="mt-24 sm:mt-32 flex flex-col sm:flex-row gap-4 sm:gap-8">
            <h2 class="sm:w-1/2 markup-h2 -top- sm:text-right">
                <x-circle class="w-5 h-5 mx-1"></x-circle> Code
                <br>
                highlighting
            </h2>

            <div class="sm:w-1/2">
                <p class="markup-p">
                    When you enter code snippets, we'll highlight them. Behind the scenes we use Shiki, supporting <a class="markup-link" href="https://github.com/shikijs/shiki/blob/main/docs/languages.md">over 100+ languages</a>.
                </p>

                <div class="mt-6">
                    <div class="left-2 p-4 rounded-sm comments-comment shadow-xl">
                        <img class="comments-avatar" src="https://www.gravatar.com/avatar/a1b4b398630bbd32b77a82cbc37fae9a" alt="avatar">
                        <div class="comments-comment-inner">
                            <div class="flex items-baseline gap-1">
                                Freek
                                <div class="text-gray-400 text-xs">•</div>
                                <span class="text-gray-400 text-xs">
                                    <time datetime="$date->format('Y-m-d H:i:s')" class="comments-date">
                                            Just now
                                    </time>
                                </span>
                            </div>
                            <div>
                                <pre class="dummy-shiki" style="background-color: #ffffff"><code class="block"><span class="line"><span style="color: #24292F">$comments </span><span style="color: #CF222E">=</span><span style="color: #24292F"> $yourModel</span><span style="color: #CF222E">-&gt;</span><span style="color: #24292F">comments</span></span>
<span class="line"><span style="color: #24292F">$comment</span><span style="color: #CF222E">-&gt;</span><span style="color: #8250DF">react</span><span style="color: #24292F">(</span><span style="color: #0A3069">'👍'</span><span style="color: #24292F">);</span></span></code></pre>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-24 sm:mt-32 flex flex-col sm:flex-row-reverse gap-4 sm:gap-8">
            <h2 class="sm:w-1/2 markup-h2">
                Good vibes <x-triangle class="w-5 h-5 mx-1 rotate-90"></x-triangle>
                <br>
                only
            </h2>

            <div class="sm:w-1/2">
                <p class="markup-p">
                    To prevent unwanted comments from being displayed, you can turn on the optional approval flow. 
                    Admins will be mailed and can also approve comments inline. 
                    Using code, you have fine-grained control over <a class="markup-link" href="https://spatie.be/docs/laravel-comments/v1/basic-usage/approving-comments#content-determining-if-a-comment-should-be-automatically-approved">which comments</a> need to be approved.
                </p>

                <div class="mt-6 p-2 left-2 sm:-mr-16 flex items-center justify-between gap-4  bg-indigo-50 rounded shadow-xl text-xs">
                    <span class="text-indigo-700 pl-2">
                        This is a pending comment that is awaiting approval
                    </span>
                    <span class="flex items-center gap-1">
                        <button disabled class="bg-red-500 text-white px-2 h-6 rounded font-semibold text-xs">
                            Reject
                        </button>
                        <button disabled class="bg-indigo-500 text-white px-2 h-6 rounded font-semibold text-xs">
                            Approve
                        </button>
                    </span>
                </div>

            </div>
        </div>

        <div class="mt-24 sm:mt-32 flex flex-col sm:flex-row gap-4 sm:gap-8">
            <h2 class="sm:w-1/2 markup-h2 -top- sm:text-right">
                <x-square class="w-6 h-6 mx-1"></x-square> Endlessly
                <br>
                customisable
            </h2>

            <p class="sm:w-1/2 markup-p">
                We've made it easy to customise any aspects of the package. 
                <br>
                You want a flat discussion or nested comments?
                Need some extra behaviour? Just hook into an event fired by Laravel Comments. Need to change the looks? Publish the views and make any change you want.
                <br><br>
                Using <a class="markup-link" href="https://spatie.be/docs/laravel-comments/">our extensive documentation</a>, you'll be up and running in no time!

            </p>
        </div>

        <div class="mt-24 sm:mt-32 flex flex-col sm:flex-row-reverse gap-4 sm:gap-8">
            <h2 class="sm:w-1/2 markup-h2">
                Build <x-circle class="w-6 h-6 mx-1"></x-circle> 
                <br>
                your own UI
            </h2>

            <p class="sm:w-1/2 markup-p">
                Our Livewire component is built upon a headless package which you’ll also get access to. That core package contains all models, notifications, and logic that can serve as the basis for a UI built on any front-end technology you like.
            </p>
        </div>
    </section>

    <section id="install" class="mt-40 mb-16 max-w-2xl mx-auto">
        <x-triangle class="absolute -top-20 -left-20 w-72 h-72"></x-triangle>

        <div class="px-8 sm:px-16 py-16 bg-indigo-900 rounded-sm text-white markup">
            <h2 class="markup-h2 mb-16">
                <x-triangle class="w-5 h-5 mx-1"></x-triangle>
                Easy installation
            </h2>
            <p>
                After you've <a class="markup-link" href="{{ spatieUrl('https://spatie.be/products/laravel-comments') }}">purchased a license</a>, install the package using Composer.
            </p>

            <div class="markup-code">
            <div>
<pre class="shiki" style="background-color: #282A36"><code><span class="line"><span style="color: #F8F8F2">composer require spatie/laravel-comments-livewire</span></span></code></pre>
            </div>
            </div>

            <p>
                After <a class="markup-link" href="https://spatie.be/docs/laravel-comments/v1/installation-setup#content-migrating-the-database">migrating the database</a> and having <a class="markup-link" href="https://spatie.be/docs/laravel-comments/v1/installation-setup#content-preparing-your-models">prepared your models</a>, you can drop in the comments component in any view.
                <br>
                Pass in any Eloquent model you want your users to comment on.
            </p>

            <div class="markup-code">
                <div>
<pre class="shiki" style="background-color: #282A36"><code><span class="line"></span><span class="line"><span style="color: #F8F8F2">&lt;</span><span style="color: #FF5555; ">livewire:comments</span><span style="color: #F8F8F2"> </span><span style="color: #50FA7B; font-style: italic">:model</span><span style="color: #FF79C6">=</span><span style="color: #E9F284">"</span><span style="color: #F1FA8C">$blogPostModel</span><span style="color: #E9F284">"</span><span style="color: #F8F8F2"> /&gt;</span></span><span class="line"></span><span class="line"></span></code></pre>
                </div>
            </div>
        </div>
    </section>

    <section id="cta" class="my-32 flex justify-center">
        @include('partials.price-card-compact')
    </section>

    <aside id="related" class="z-10 mt-24">
        <div class="absolute -bottom-8 -right-8 w-16 h-full bg-gradient-to-br from-indigo-200 to-indigo-300 rounded">
        </div>

        <div class="absolute bottom-0 right-0 w-8 h-full bg-gradient-to-br from-indigo-300 to-indigo-400 rounded transform origin-bottom-right skew-y-[-45deg] ">
        </div>

        <div class="px-8 sm:px-16 py-16 bg-gradient-to-br from-indigo-50 to-indigo-100">
            @include('partials.related')
        </div>
    </aside>
</main>

<footer class="mt-8 flex justify-start">
    <a href="https://spatie.be">
        <x-logo-spatie class="text-indigo-900 h-6" /></a>
</footer>
@endsection
