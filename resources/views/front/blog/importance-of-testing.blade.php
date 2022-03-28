@extends('front.layouts.article')

@section('title', 'The Benefits of Testing')

@section('description', 'Importance of Testing Laravel applications')

@section('article')
<div class="layout-sm">
<div class="-mt-10 mb-12 text-red-900 opacity-90 uppercase tracking-widest text-xs">
    By Freek Van der Herten
</div>
<x-highlighted-markdown>
I've been creating web applications for over 15 years now. It's only in the last five years that I've learned how to test an application automatically. I can safely say that there is no other technique that has improved the quality of my code more.

Let's go over what a test is and all the benefits it provides.

### What is a test?

A test is a little function or script that executes some part of your application. In that script, you will also verify whether the result of that execution matches what you were expecting.

Here's a little example. Don't worry if you don't understand everything yet.

```php
it('can handle a form submission', function() {
    $url = route('blogPost.create');

    $values = [
        'email' => 'john@example.com',
        'name' => 'My name',
    ];

    post($url, $values)->assertSuccessful();

    assertDatabaseHas(BlogPost::class, $values);
});
```

In this test, we will send a POST request to the `blogPost.create` route with the given `$values`. After that request has been made, we make sure that those values are stored in the database in the `BlogPost` model table.

A test like this can be run by a test runner, such as [Pest](https://pestphp.com) or [PHPUnit](https://phpunit.de). The test runner will inform you whether the test failed or not. By having a test like this, you don't need to manually fill out the form to ensure it works. Instead, you can just run this test. This test will run in under a second, which is probably less time than most humans need to fill in and submit a form.

There are many types of tests. Most types are defined by the scope of the code they test.  In our [Testing Laravel](/) course, we will start very practically with tests that offer the most value. After only a few lessons, you'll be able to test the most critical parts of your app.

### The benefits of testing

The most significant benefit of having a test suite is that it will give you confidence that everything is working correctly without testing everything manually.

When coding up functionality, such as a form submission, you can write a test (like the one in the snippet above). This test can be used to verify if your form is working correctly.

After most applications are launched, work continues to be done on them. New features are added, and maintenance needs to be done. With a quality test suite, you don't need to be afraid that you'll break existing functionality. You can just rerun all your tests to ensure that everything works correctly — no need to start testing everything all over again manually.

If you're working in a team, having tests has many benefits as well. Chances are that, when an application grows, you do not know every little detail about how it works. A change by you might result in changed behaviour somewhere else in the app. When your app has a good test suite, failing tests will notify you of this.

When going through the code of an application, you might see some things that can quickly be improved. I still remember that, without a good test suite backing me, I didn't dare to touch existing code, as I was afraid I might break it, even for simple changes. Having tests allow you to refactor your code with confidence. After a refactor, you can run your test to ensure the results are still the same as before the refactor. Being able to improve your codebase without fear will result in a much healthier codebase over time.

Another thing that is very risky to do without a test suite backing you is upgrading some of your app's dependencies or the PHP version. Being able to upgrade to the latest versions of things often has many advantages: you can make use of the newest features, get protected by the latest security fixes and more. In the old days, I didn't do this as I didn't know how this would break my app. With a test suite backing me, I can upgrade a package, Laravel or PHP version and run the tests. If any of the tests start failing, I know in which place to make adjustments.

### Start learning how to test now

I think knowing how to write tests is a fundamental skill for every developer.

In my experience, there are still too many devs not testing their apps. In the recent [developer ecosystem survey](https://www.jetbrains.com/lp/devecosystem-2021/php/) performed by JetBrains, 28% of respondents indicated that they are not writing tests. I think the actual percentage is way higher, as the JetBrains survey probably reaches many PHP developers that already have a certain level of experience.

If you don't know how to test yet, then things are looking good for you. After taking our course, you'll be able to test all functionalities of your Laravel app. This will allow you to ship applications with higher quality than what you're writing now. You'll refactor without fear. It will be easier to upgrade to new versions of Laravel and PHP. By knowing how to test your app well, you will become a better developer.

In case you are already testing your Laravel app, I'm confident that in our course, you'll pick up some tricks you didn't know before.

We've put a lot of love into creating our [Testing Laravel](/) course, and we hope that you'll enjoy it!

</x-highlighted-markdown>
</div>
@endsection
