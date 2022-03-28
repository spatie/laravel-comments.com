<div x-data="{ introVideo: false }">
    <div class="group w-full bg-black mb-12 cursor-pointer" @click="introVideo = true; ">
        <img class="w-full opacity-80 group-hover:opacity-100 transition-opacity duration-300"
            src="/images/intro-video.jpg" alt="Video still">
        <div class="absolute top-1/2 h-1/2 w-full flex items-center justify-center cursor-pointer"
            @click="introVideo = true; ">
            <div class=" button-container ">
                <span class="mas bg-white">
                    <div
                        class="mr-2 inline-block border-l-[1rem]  border-l-blue-500 border-t-[.6rem]  border-b-[.6rem] border-t-transparent border-b-transparent transform translate-y-[.25rem]">
                    </div>
                    Play intro video
                </span>
                <button class="  text-white">
                    <div
                        class="mr-2 inline-block border-l-[1rem]  border-l-white border-t-[.6rem]  border-b-[.6rem] border-t-transparent border-b-transparent transform translate-y-[.25rem]">
                    </div>
                    Play intro video
                </button>
            </div>
        </div>
    </div>

    <template x-if="introVideo">
        <div style="background-color:rgba(0,0,0,0.85)"
            class="fixed inset-0 p-8 lg:p-16 z-50 fix-z flex flex-col items-center justify-center"
            @keydown.window.escape="introVideo = false">
            <button class="absolute top-0 right-0 m-6 leading-none text-white text-3xl">×</button>
            <div class="w-full h-64 md:h-96 lg:h-full">
                <iframe src="https://player.vimeo.com/video/683695801?autoplay=1" width="640" height="360" class="absolute inset-0 w-full h-full"
                    frameborder="0" allow="autoplay; fullscreen; picture-in-picture" frameborder="0" allowfullscreen @click.away="introVideo = false"></iframe>
                
            </div>
            <div class="bg-black rounded py-2 px-3 text-white text-xs text-center mt-4">
            </div>
        </div>
    </template>
</div>