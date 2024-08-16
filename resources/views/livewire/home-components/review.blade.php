<div>
    <section class="section reviews" id="review-section">
        <div class="container" data-aos="fade-up">
            <div class="row justify-between">
                <div class="lg:col-12">
                    <h2>Apa kata pengguna kami</h2>
                </div>
            </div>
            <div class="row mt-10">
                <div class="col-12">
                    <div class="swiper reviews-carousel" data-aos="fade-up">
                        <div class="swiper-wrapper">
                            @foreach ($reviews as $review)
                                <div class="swiper-slide" data-aos="fade-up" data-aos-delay="{{ $loop->index * 200 }}">
                                    <div class="review">
                                        <div class="review-author-avatar bg-blue-700">
                                            <img src="{{ $review['avatar'] }}" alt="" />
                                        </div>
                                        <h4 class="mb-2">{{ $review['name'] }}</h4>
                                        <p class="mb-4 text-[#666]">{{ $review['company'] }}</p>
                                        <p>
                                            {{ $review['review'] }}
                                        </p>
                                        <div class="review-rating mt-6 flex items-center justify-center space-x-2.5">
                                            @for ($i = 0; $i < 5; $i++)
                                                <img src="images/icons/star{{ $i < $review['rating'] ? '' : '-white' }}.svg"
                                                    alt="" />
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination reviews-carousel-pagination !bottom-0"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        AOS.init({
            duration: 1000, // Durasi animasi dalam milidetik
            easing: 'ease-in-out', // Easing animasi
            once: true // Animasi hanya terjadi sekali saat scroll ke elemen
        });

        new Swiper('.reviews-carousel', {
            loop: true,
            pagination: {
                el: '.reviews-carousel-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 20,
            breakpoints: {
                640: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            },
        });
    });
</script>
