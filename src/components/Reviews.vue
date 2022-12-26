<template>
  <section class="reviews">
    <h2 class="reviews__heading">Отзывы<br> Бизнес академии TIKSAN GROUP</h2>
    <div class="reviews-slider swiper" ref="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img class="slide__img" src="@/assets/img/feedback1.png" alt="отзыв">
        </div>
        <div class="swiper-slide">
          <img class="slide__img" src="@/assets/img/feedback2.png" alt="отзыв">
        </div>
        <div class="swiper-slide">
          <img class="slide__img" src="@/assets/img/feedback3.png" alt="отзыв">
        </div>
        <div class="swiper-slide">
          <img class="slide__img" src="@/assets/img/feedback4.png" alt="отзыв">
        </div>
        <div class="swiper-slide">
          <img class="slide__img" src="@/assets/img/feedback5.png" alt="отзыв">
        </div>
        <div class="swiper-slide">
          <img class="slide__img" src="@/assets/img/feedback6.png" alt="отзыв">
        </div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <a class="reviews__link default__button" href="https://t.me/batiksan_fb" target="_blank" rel="noopener noreferrer">Смотреть другие отзывы</a>
  </section>
</template>

<script>
import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/swiper-bundle.min.css';
export default {
  name: 'MkKimReviews',

  data() {
    return {
      
    };
  },

  mounted() {
    const SECOND = 1000

    new Swiper(this.$refs.swiper, {

      modules: [Navigation, Pagination, Autoplay],

      loop: true,
      autoplay: {
        delay: 3 * SECOND,
        disableOnInteraction: false,
      },
      speed: 2 * SECOND,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },

      // Events
      on: {
        slideChange: (swiper) => {
          this.activeIndex = swiper.realIndex
        },
      },
    })
  },

  methods: {
    
  },
};
</script>

<style lang="scss" scoped>
.swiper-pagination-bullet-active {
  background-color: #262B2E !important;
}
.reviews {
  background-color: #262B2E;
  color: white;
  padding: 30px 0;
}
:root {
  --swiper-theme-color: #38e265;
}
.swiper-pagination-bullet-active {
  background: #38e265 !important;
}
.reviews__link {
  display: block;
  max-width: 250px;
  margin: 0 auto;
  margin-top: 30px;
  margin-bottom: 30px;
}
.reviews__heading {
  text-align: center;
}
.slide__img {
  max-width: 450px;
}
.swiper-slide {
  display: flex;
  justify-content: center;
}
.swiper-pagination-bullet-active {
  background-color: #000 !important;
}
</style>