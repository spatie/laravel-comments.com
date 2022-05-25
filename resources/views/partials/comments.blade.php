@php


$faker = Faker\Factory::create();
@endphp
<div class="container mt-4 flex flex-wrap mx-auto  bg-gray-100 shadow-xl p-4">
    <div class="flex pb-4 gap-2">
        <div class="h-3 w-3 rounded-full bg-red-400"></div>
        <div class="h-3 w-3 rounded-full bg-yellow"></div>
        <div class="h-3 w-3 rounded-full bg-green-400"></div>
    </div>
    <div class="bg-white w-full p-4 ">
        <div id="first-comment" class="flex bg-gray-50 p-4 rounded-xs">

            <img class="w-10 h-10 min-w-10  rounded-full mx-3"
                src="https://fakeface.rest/thumb/view?gender=male&minimum_age={{ rand(20,30)}}&maximum_age={{ rand(30,35)}}" alt="random face">


            <div class=" max-w-full">
                <div class="flex items-center font-medium text-base">

                    {{ $faker->firstName($gender = 'male') }}
                    <div class="w-1 h-1 bg-gray-500 rounded-full mx-3"></div>
                    <p class="text-gray-400 text-xs">
                        Just now
                    </p>

                </div>

                <div>
                    <p id="first_typewriter" class="my-2">Last Season game of thrones!  thoughts?!</p>
                </div>
                <div class="flex gap-2">
                    <div id="first_reaction"
                        class='border border-purple bg-purple/20 rounded-full flex items-center px-2 h-6 text-sm'>
                        👍 34
                    </div>
                    <div id="first_reaction"
                        class='border border-purple bg-purple/20 rounded-full flex items-center px-2 h-6 text-sm'>
                        😍 23
                    </div>

                </div>
            </div>
        </div>
        <div id="second-comment" class="flex ml-8 p-4 rounded-xs">

            <img class="w-10 h-10 min-w-10  rounded-full mx-3"
                src="https://fakeface.rest/thumb/view?gender=female&minimum_age={{ rand(20,30)}}&maximum_age={{ rand(30,35)}}" alt="random face">


            <div class=" max-w-full">
                <div class="flex items-center font-medium text-base">

                    {{ $faker->firstName($gender = 'female') }}
                    <div class="w-1 h-1 bg-gray-500 rounded-full mx-3"></div>
                    <p class="text-gray-400 text-xs">
                        Just now
                    </p>

                </div>

                <div>
                    <p id="second_typewriter" class="my-2">Daenerys on her dragon was really something 
                    </p>
                </div>
                <div class="flex">
                    <div id="second_reaction"
                        class='border border-purple bg-purple/20 rounded-full flex items-center px-2 h-6 text-sm'>

                        🔥 18

                    </div>

                </div>
            </div>
        </div>
        <div id="third-comment" class="flex ml-8 p-4 rounded-xs">

            <img class="w-10 h-10 min-w-10  rounded-full mx-3"
                src="https://fakeface.rest/thumb/view?gender=male&minimum_age={{ rand(20,30)}}&maximum_age={{ rand(30,35)}}" alt="random face">


            <div class=" max-w-full">
                <div class="flex items-center font-medium text-base">

                    {{ $faker->firstName($gender = 'male') }}
                    <div class="w-1 h-1 bg-gray-500 rounded-full mx-3"></div>
                    <p class="text-gray-400 text-xs">
                        Just now
                    </p>

                </div>

                <div>
                    <p id="third_typewriter" class="my-2">I whish the season was longer
                    </p>
                </div>
                <div class="flex">
                    <div id="third_reaction"
                        class='border border-purple bg-purple/20 rounded-full flex items-center px-2 h-6 text-sm'>

                        👍 9

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>