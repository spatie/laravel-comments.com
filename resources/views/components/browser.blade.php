<section {{ $attributes }}>
    <div id="browser-underlay" class="browser-underlay"></div>

    <div id="browser" class="group browser">
        <header id="browser-bar" class="browser-bar">
            <button class="browser-button" disabled></button>
            <button disabled class="browser-button"></button>
            <button id="browser-button-maximize" class="browser-button browser-button-maximize"></button>
        </header>

        <main id="browser-content" class="browser-content">
            {{ $slot }}

            <div style="display:none;" id="browser-content-block" class="h-full">
                <div class="flex items-center p-8 h-full bg-gradient-to-b from-red-50 to-red-100 text-red-600 text-lg leading-normal rounded">
                    <p>
                        Looks like you're running a smart little thingy that blocks comments –we get that 😅.
                        <br>
                        Sweet paradox! This is a site about comments! 
                        <br>
                        <br>
                        <strong>Disable your content blocker (for this site) to run the demo</strong>.
                    </p>
                </div>
            </div>
        </main>
    </div>
</section>
