<div x-data="{ introVideo: false }">
    
    <div class="max-w-md mx-auto">
        <div class="isolate group w-full h-0 pb-[56%] bg-indigo-900 rounded-b-md shadow-lg overflow-hidden">
            <img class="absolute inset-0 w-full h-full object-cover rounded-b-md group-hover:scale-105 transition duration-1000 delay-300"
                src="/images/intro-video.jpg" alt="Video still">
            <div class="absolute inset-0 bg-indigo-900/30 hover:bg-indigo-900/0 transition duration-500 delay-300 flex items-center justify-center cursor-pointer" @click="introVideo = true">
                <x-button>
                    Play intro video
                </x-button>
            </div>
        </div>
    </div>

    <div x-show="introVideo">
        <div style="background-color:rgba(0,0,0,0.85)"
            class="fixed inset-0 p-8 lg:p-16 z-50 fix-z flex flex-col items-center justify-center"
            @keydown.window.escape="introVideo = false">
            <button class="absolute top-0 right-0 m-6 leading-none text-white text-3xl">×</button>
            <div class="w-full h-64 md:h-96 lg:h-full">
                <iframe src="https://player.vimeo.com/video/713709403?h=b646ad716a?autoplay=1" width="640" height="360" class="absolute inset-0 w-full h-full"
                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture" frameborder="0" allowfullscreen @click.away="introVideo = false"></iframe>
                
            </div>
            <div class="bg-black rounded py-2 px-3 text-white text-xs text-center mt-4">
            </div>
        </div>
    </div>
</div>
