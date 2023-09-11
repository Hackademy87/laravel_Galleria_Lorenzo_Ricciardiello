<x-layout>
    <br>
    <br>

    <video class="video-bg" src="/pittura2.mp4" autoplay muted loop></video>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <div class="add">
                    <div class="add-body">
                        <h1 class="text-center mb-4">AGGIUNGI NUOVO QUADRO</h1>
                        <x-form :categories="$categories"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

