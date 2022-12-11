<template>
  <nav>
    <img
      class="nav__img nav__item nav__logo"
      src="@/assets/img/tiksan.svg"
      alt="tiksan"
    />
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
nav {
  background-color: transparent;

  position: relative;
  display: flex;
}
.nav-social__icon {
  width: 38px;
}
.nav__logo {
  width: 180px;
}
.social {
  display: none;
}
.nav__link {
  display: none;
}

@media (min-width: 1199.98px) {
  .nav__logo {
    padding: 30px;
    padding-left: 80px;
  }
  nav {
    position: absolute;
    top: 0;
    right: calc(50vw - 45vw);
    width: 90vw;

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
  .nav__link {
    display: flex;
    flex-direction: row;
    gap: 10px;
  }
  .nav__link a {
    color: white;
    transition: 0.5s;
  }
  .nav__link a:hover {
    color: rgb(215, 211, 211);
  }

  .nav__call {
    margin: 0;
  }
}
</style>
