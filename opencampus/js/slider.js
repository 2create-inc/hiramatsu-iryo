window.addEventListener('load', () => {
  let swiper = undefined;
  const sliderEl = document.getElementById('js-dept-slider');

  if (!sliderEl) return;

  const handleSwiper = () => {
    const isMobile = window.innerWidth <= 768;

    if (isMobile && swiper === undefined) {
      // スマホサイズで未起動なら初期化
      swiper = new Swiper(sliderEl, {
        slidesPerView: 1.2,
        centeredSlides: true,
        spaceBetween: 20,
        navigation: {
          nextEl: '.swiper-button-next-custom',
          prevEl: '.swiper-button-prev-custom',
        },
        on: {
          init: function (s) {
            const total = document.querySelector('.slider-fraction .total');
            if (total) total.textContent = s.slides.length;
          },
          slideChange: function (s) {
            const current = document.querySelector('.slider-fraction .current');
            if (current) current.textContent = s.realIndex + 1;
          }
        }
      });
    } else if (!isMobile) {
      // PCサイズ時：Swiperが起動していたら破棄
      if (swiper !== undefined) {
        swiper.destroy(true, true);
        swiper = undefined;
      }

      // 💡【重要】PC時にSwiperが残すインラインスタイルを完全にキレイに除去する
      const wrapper = sliderEl.querySelector('.swiper-wrapper');
      const slides = sliderEl.querySelectorAll('.swiper-slide');

      if (wrapper) {
        wrapper.removeAttribute('style'); // heightやtransformを消去
      }
      slides.forEach(slide => {
        slide.removeAttribute('style'); // widthやmarginを消去
      });
    }
  };

  // 実行
  handleSwiper();
  
  // リサイズ時の発火（リサイズ頻度を考慮）
  window.addEventListener('resize', handleSwiper);
});