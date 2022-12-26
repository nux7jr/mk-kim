<template>
  <section class="video">
    <h2 class="default__heading">интервью и мероприятия
    </h2>
    <div class="reviews-slider swiper" ref="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <LazyYoutube src="https://youtu.be/Y6DbkX8ml9Y"></LazyYoutube>
        </div>
        <div class="swiper-slide">
          <LazyYoutube src="https://www.youtube.com/watch?v=H3MeBnAEvfk"></LazyYoutube>
        </div>
        <div class="swiper-slide">
          <LazyYoutube src="https://www.youtube.com/watch?v=sNJ_XL2edg8"></LazyYoutube>
        </div>
        <div class="swiper-slide">
          <LazyYoutube src="https://www.youtube.com/watch?v=Dvx10Ob3UPg"></LazyYoutube>
        </div>
        <div class="swiper-slide">
          <LazyYoutube src="https://www.youtube.com/watch?v=REuRJF-AGjk"></LazyYoutube>
        </div>
        <div class="swiper-slide">
          <LazyYoutube src="https://www.youtube.com/watch?v=xEQt0DJnmqU"></LazyYoutube>
        </div>
        <div class="swiper-slide">
          <LazyYoutube src="https://www.youtube.com/watch?v=Dvx10Ob3UPg"></LazyYoutube>
        </div>
        <div class="swiper-slide">
          <LazyYoutube src="https://www.youtube.com/watch?v=F-w6J6xeiRQ"></LazyYoutube>
        </div>
      </div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
    <a href="https://www.youtube.com/@tiksangroup6533" class="default__link video__link" target="_blank" rel="noopener noreferrer">Больше видео о TIKSAN GROUP</a>
  </section>
</template>

<script>
import { LazyYoutube, LazyVimeo } from "vue-lazytube";
import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/swiper-bundle.min.css';

export default {
  name: 'MkKimVideoBlock',
  components: {
        LazyYoutube,
        LazyVimeo,
    },
  data() {  
    return {
      
    };
  },

  mounted() {
    const SECOND = 2000

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

.video__link {
  display: block;
  max-width: fit-content;
  background-color: #262B2E;
  display: block;
  margin: 30px auto;
}
.video__link:hover {
  background-color: #262B2E;
}
.swiper-slide {
  display: flex;
  justify-content: center;
}
</style>