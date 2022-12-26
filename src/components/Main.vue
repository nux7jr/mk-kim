<template>
  <section class="main">
    <MkKimMenu />
    <div class="main-info">
      <h2>
        Мастер-класс
        <span class="selected-text upper">Сергея Ким</span>
      </h2>
      <h3 class="default__heading main-info__slogan upper">
        <div class="selected-text upper">От гастарбайтера</div>
        до миллиардера
      </h3>
      <p class="main-info__text"><strong>Действующие алгоритмы,</strong> которые приведут вас к результату.</p>
      <a
        href="https://krs.kassir.ru/obrazovanie/ot-gastarbaytera-do-milliardera"
        target="_blank"
        class="main-info__link default__button" onclick="ym(90660050,'reachGoal','clickkassir')"
        >Купить билет</a
      >
    </div>
    <div class="main__wrapper">
      <div class="location">
        <ul class="location__wrapper">
          <li class="location__item">
            <img class="date_icon adress" src="@/assets/img/time.svg" alt="Адресс" />
            <a class="data-location__text" href="https://yandex.ru/maps/-/CCUjvHSCLA" target="_blank" rel="noopener noreferrer">
              МВДЦ «Сибирь»<br>Красноярск,<br> ул.Авиаторов, д.19
            </a>
          </li>
          <li class="location__item">
            <img class="date_icon" src="@/assets/img/Calendar.svg" alt="Дата" />
            <p class="data-location__text">24 декабря 2022</p>
          </li>
          <li class="location__item">
            <img class="date_icon" src="@/assets/img/Clock.svg" alt="Дата" />
            <p class="data-location__text">17:00</p>
          </li>
        </ul>
      </div>
    </div>
  </section>
</template>

<script>
import MkKimMenu from "@/components/Menu.vue";
export default {
  name: "MkKimMain",

  data() {
    return {};
  },
  components: {
    MkKimMenu,
  },
  mounted() {},

  methods: {},
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
   // border: 3px solid #ff5000; //
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

  background-image: url(@/assets/img/bg2.png);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center bottom;
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
  .main {
    background-image: url(@/assets/img/bg1.png);
    background-repeat: no-repeat;
    background-size: contain;
    background-position: center bottom;
  }
  .data-location__text {
    font-size: 1em;
  }
}
@media (min-width: 1199.98px) {
  .main {
    background-size: cover;
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
  .location__wrapper {
    display: flex;
    flex-direction: row;
  }
  .data-location__text {
    font-size: 2em;
    margin: 0;
  }
  .location__item:nth-child(1) {
    margin-top: 81px;
  }
  .adress {
    margin-bottom: 65px;
  }
  .main-info__text {
    font-size: 1.5em;
  }
  .main-info {
    margin-top: 0;
    margin-bottom: 50px;
  }
  .location__item {
    gap: 0px;
  }
  .location__wrapper {
    gap: 25px;
  }
}
@media (min-width: 1199.98px) and (max-height: 818px) {
  .main-info {
    margin: 0 !important;
  }
}
</style>
