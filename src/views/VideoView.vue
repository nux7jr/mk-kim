<template>
  <div class="video">
    <section class="main">
      <div class="nav-pc">
        <div class="logos">
          <a
            href="https://tiksan.ru/"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
              class="nav__img nav__item nav__logo second__logo"
              src="@/assets/img/tiksan.svg"
              alt="tiksan"
            />
          </a>
        </div>
        <div class="nav__item social">
          <a
            href="https://vk.com/tiksangroup"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
              class="nav-social__icon"
              src="@/assets/img/nav/vk (1).svg"
              alt="VK"
            />
          </a>
          <a
            href="https://www.youtube.com/channel/UCCjQod9duCejwFDB3IqiR-w"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
              class="nav-social__icon"
              src="@/assets/img/nav/youtube.svg"
              alt="YouTube"
            />
          </a>
          <a
            href="https://t.me/tiksangroup2030"
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
              class="nav-social__icon"
              src="@/assets/img/nav/telegram.svg"
              alt="Telega"
            />
          </a>
        </div>
      </div>
      <div class="main-info">
        <h2>
          Мастер-класс
          <span class="selected-text upper">Сергея Ким</span>
        </h2>
        <h3 class="default__heading main-info__slogan upper">
          <div class="selected-text upper">От гастарбайтера</div>
          до миллиардера
        </h3>
        <p class="main-info__text">
          <strong>Действующие алгоритмы,</strong> которые приведут вас к
          результату.
        </p>
        <button
          id="show-modal"
          @click="showModal"
          class="main-info__link default__button"
        >
          Купить запись мастер-класса
        </button>
        <Modal v-show="this.isModalVisible" @close="closeModal" />
      </div>
      <div class="main__wrapper">
        <div class="advan">
          <p>На мастер- классе вы узнаете:</p>
          <ul>
            <li>• Как правильно ставить большие цели</li>
            <li>• Как формировать стратегию достижения высоких результатов</li>
            <li>• Как максимально эффективно использовать имеющиеся ресурсы</li>
            <li>• Алгоритм успешного дня</li>
            <li>• Механики формирования мотивации и энергии</li>
            <li>• Пошаговый план к первому миллиону $</li>
          </ul>
        </div>
      </div>
    </section>
    <div class="mobile-bg">
      <img src="@/assets/img/video/videoMobileBg.png" alt="mobile-bg" />
    </div>
    <Footer />
  </div>
</template>

<script>
import Footer from "@/components/Footer.vue";
import Modal from "@/components/Modal.vue";
export default {
  name: "MkKimMain",

  data() {
    return {
      isModalVisible: false,
    };
  },
  components: {
    Footer,
    Modal,
  },
  mounted() {},

  methods: {
    showModal() {
      this.isModalVisible = true;
    },
    closeModal() {
      this.isModalVisible = false;
    },
  },
};
</script>

<style lang="scss" scoped>
.location__item {
  display: flex;
  align-items: center;
  align-content: center;
  gap: 10px;
}
.location__item a {
  color: white;
}
.date_icon {
  width: 40px;
  height: 40px;
}
.date_icon:nth-child(2) {
  width: 20px;
  height: 20px;
}

.main-info__link {
  display: block;
  font-size: 1.2em;
  max-width: fit-content;
}
.main-info__slogan {
  background-image: url(@/assets/img/border.svg);
  background-repeat: no-repeat;
  background-size: contain;
  padding: 20px;
  font-size: 1.3em;
}
.main {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
  color: white;
  justify-content: center;
  background-color: #262b2e;

  gap: 55px;
}
.location {
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
}
.upper {
  text-transform: uppercase;
}

.main__wrapper {
  display: flex;
  flex-wrap: nowrap;
}
.data-location__text {
  font-style: normal;
  font-weight: 400;
  font-size: 0.8em;
  text-transform: uppercase;
  margin: 0;
}
@media (min-width: 575.98px) {
  .data-location__text {
    font-size: 1em;
  }
}
@media (min-width: 1199.98px) {
  .main {
    background-image: url(@/assets/img/video/videoBg.png);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center right;
  }
  .main-info__link {
    font-size: 2.3em;
  }
  .main-info__slogan {
    margin-top: 15px;
    margin-bottom: 15px;
    font-size: 4.4em;
    padding: 30px;
  }

  .main-info__text {
    font-size: 1.5em;
  }
  .main-info {
    margin-top: 0;
  }
  .location__item {
    gap: 0px;
  }
}
@media (min-width: 1199.98px) and (max-height: 818px) {
  .main-info {
    margin: 0 !important;
  }
}
@font-face {
  font-family: "Inter Light";
  src: url("@/assets/fonts/Inter-Light.ttf");
}

.nav-social__icon {
  width: 38px;
}
.nav__logo {
  width: 110px;
}
.social {
  display: none;
}

.logos {
  display: flex;
  flex-wrap: nowrap;
  align-items: center;
}

.second__logo {
  margin-left: 1px;
}
@media (min-width: 767.98px) {
  .nav__logo {
    width: 150px;
  }
}
@media (min-width: 1199.98px) {
  .second__logo {
    margin-left: 1px;
  }
  .mobile-bg {
    display: none;
  }
  .nav-mobile {
    display: none;
  }
  .social {
    display: flex;
    flex-direction: row;
    align-content: center;
    align-items: center;
    gap: 5px;
  }
  .footer__wrapper {
    justify-content: center;
    gap: 76px;
  }
}
.nav-pc {
  display: flex;
  justify-content: space-between;
  width: 100%;
}
.advan {
  padding-bottom: 30px;
}
.mobile-bg {
  background: #262b2e;
}
</style>
