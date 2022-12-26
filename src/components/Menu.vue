<template>
  <nav>
    <div class="logos">
      <a href="https://vk.com/tiksan_academy" target="_blank" rel="noopener noreferrer">
        <img
          class="nav__img nav__item nav__logo"
          src="@/assets/img/acadymy.png"
          alt="tiksan"
        />
      </a>
      <hr>
      <a href="https://tiksan.ru/" target="_blank" rel="noopener noreferrer">
        <img
        class="nav__img nav__item nav__logo second__logo"
        src="@/assets/img/tiksan.svg"
        alt="tiksan"
        />
      </a>
    </div>
    <ul class="nav__item nav__link">
      <li>
        <a href="#whats">Что будет</a>
      </li>
      <li>
        <a href="#about">О спикере</a>
      </li>
      <li>
        <a href="#price">Стоимость</a>
      </li>
    </ul>
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
      <a
        href="https://krs.kassir.ru/obrazovanie/ot-gastarbaytera-do-milliardera"
        target="_blank"
        rel="noopener noreferrer"
        class="default__button nav__call"
        onclick="ym(90660050,'reachGoal','clickkassir')"
        >Забронировать</a
      >
    </div>
    <navigation class="nav-mobile" />
  </nav>
</template>

<script>
import navigation from "@/components/Burger.vue";
export default {
  name: "MkKimMenu",

  data() {
    return {};
  },
  components: {
    navigation,
  },
  mounted() {},

  methods: {},
};
</script>

<style lang="scss">
@font-face {
  font-family: "Inter Light";
  src: url("@/assets/fonts/Inter-Light.ttf");
}
nav {
  background-color: transparent;
  position: relative;
  display: flex;
  position: absolute;
  width: 95%;
  left: 5px;
  top: 10px;
}
.nav-social__icon {
  width: 38px;
}
.nav__logo {
  width: 110px;
  padding: 7px;
}
.social {
  display: none;
}
.nav__link {
  display: none;
}
.nav__link {
  font-family: "Inter Light" !important;
}
.logos {
  display: flex;
  flex-wrap: nowrap;
  align-items: center;
}
hr {
  width: 2px;
  background-color: white;
  border-radius: 20px;
  height: 50px;
}
.second__logo {
  margin-left: 1px;
}
@media (min-width: 767.98px) {
  .nav__logo {
    width: 150px;
    padding: 15px;
  }
}
@media (min-width: 1199.98px) {
  .second__logo {
    margin-left: 1px;
  }
  .nav__logo {
    padding: 30px;
    padding-left: 80px;
  }
  nav {
    position: absolute;
    top: 0;
    left: -2vw;
    width: 100vw;

    justify-content: space-between;
    align-items: center;
    align-content: center;
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
  .nav__call {
    margin: 0;
  }
}
@media (min-width: 1439.98px) {
  nav {
    left: calc(50vw - 40vw);
    width: 80vw;
  }
  .nav__logo {
    padding: 30px;
    padding-left: 0px;
  }
  .nav__link {
    display: flex;
    flex-direction: row;
    gap: 10px;
    font-family: "Inter Light" !important;
  }
  .nav__link a {
    color: white;
    transition: 0.5s;
    font-size: 1.6em;
  }
  .nav__link a:hover {
    color: rgb(215, 211, 211);
  }
  .second__logo {
    margin-left: 20px;
  }
}
</style>
