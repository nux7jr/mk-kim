<template>
    <div class="reviews-slider swiper" ref="swiperKim">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="@/assets/img/bigPort.png" alt="Ким" />
        </div>
        <div class="swiper-slide">
          <img src="@/assets/img/sliderKim1.png" alt="Ким" />
        </div>
        <div class="swiper-slide">
          <img src="@/assets/img/sliderKim2.png" alt="Ким" />
        </div>
        <div class="swiper-slide">
          <img src="@/assets/img/sliderKim3.png" alt="Ким" />
        </div>
      </div>
    </div>
</template>

<script>
import Swiper, { Navigation, Pagination, Autoplay } from 'swiper';
import 'swiper/swiper-bundle.min.css';

export default {
  name: 'Slider',
  components: {
    },
  data() {  
    return {
      
    };
  },

  mounted() {
    const SECOND = 600

    new Swiper(this.$refs.swiperKim, {

      modules: [Navigation, Pagination, Autoplay],

      loop: true,
      autoplay: {
        delay: 3 * SECOND,
        disableOnInteraction: false,
      },
      speed: 2 * SECOND,
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
.swiper {
  max-width: 460px;
}

</style>