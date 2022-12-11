<template>
  <section class="video">
    <h2 class="default__heading">Посмотрите видео Сергея</h2>
    <div class="video__wrapper">
      <LazyYoutube src="https://www.youtube.com/watch?v=H3MeBnAEvfk"></LazyYoutube>
      <!-- <LazyYoutube src="https://www.youtube.com/watch?v=dQw4w9WgXcQ"></LazyYoutube> -->
    </div>
    <a href="https://www.youtube.com/@tiksangroup6533" class="default__link video__link" target="_blank" rel="noopener noreferrer">Больше видео о Tiksan group</a>
  </section>
</template>

<script>
import { LazyYoutube, LazyVimeo } from "vue-lazytube";
export default {
  name: 'MkKimVideoBlock',
  components: {
        LazyYoutube,
        LazyVimeo
    },
  data() {
    return {
      
    };
  },

  mounted() {
    
  },

  methods: {
    
  },
};
</script>

<style lang="scss" scoped>
.video__link {
  display: block;
  max-width: 285px;
  background-color: #262B2E;
}
.video__link:hover {
  background-color: #262B2E;
}
.video__wrapper {
  display: flex;
  flex-direction: column;
  gap: 20px;
}
@media (min-width: 767.98px) {
  .video__wrapper {
    display: flex;
    flex-direction: row;
    gap: 20px;
  }
}
</style>