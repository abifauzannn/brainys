<div class="section key-feature md:relative mt-5 " id="key-feature-section">
    <img class="absolute left-0 top-0 -z-[1] -translate-y-1/2" src="images/icons/feature-shape.svg" alt="" />
    <div class="container">
        <div class="row justify-between text-center lg:text-start">
            <div class="lg:col-12">
                <h2 data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-out">Daftar templat yang bisa
                    digunakan</h2>
            </div>
        </div>
        <!-- resources/views/features/index.blade.php -->
        <div class="key-feature-grid mt-10 grid grid-cols-2 gap-7 md:grid-cols-3 xl:grid-cols-4">
            @foreach ($features as $feature)
                <div class="flex flex-col rounded-lg bg-white p-5 shadow-lg" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-easing="ease-in-out" data-aos-delay="{{ $loop->index * 200 }}">
                    <img src="{{ asset('assets/images/' . $feature['icon']) }}" alt="{{ $feature['title'] }}"
                        class="w-12 h-12 mb-4" />
                    <h3 class="h4 text-xl lg:text-1xl">{{ $feature['title'] }}</h3>
                    <p>{{ $feature['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>
