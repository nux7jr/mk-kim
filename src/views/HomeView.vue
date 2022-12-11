<template>
  <div class="home">
    <!-- <MkKimMenu /> -->
    <Main />
    <Benefit />
    <Call />
    <Advantages />
    <AboutKim />
    <Video />
    <Reviews />
    <Price />
    <BestLife />
    <Other />
    <Footer />
  </div>
</template>

<script>
import MkKimMenu from "@/components/Menu.vue";
import Main from "@/components/Main.vue";
import Benefit from "@/components/Benefit.vue";
import Call from "@/components/Call.vue";
import Advantages from "@/components/Advantages.vue";
import AboutKim from "@/components/AboutKim.vue";
import Video from "@/components/VideoBlock.vue";
import Reviews from "@/components/Reviews.vue";
import Price from "@/components/Price.vue";
import BestLife from "@/components/BestLife.vue";
import Other from "@/components/Other.vue";
import Footer from "@/components/Footer.vue";
export default {
  name: "HomeView",
  components: {
    MkKimMenu,
    Main,
    Benefit,
    Call,
    Advantages,
    AboutKim,
    Video,
    Reviews,
    Price,
    BestLife,
    Other,
    Footer,
  },
};
</script>
<style scoped></style>
