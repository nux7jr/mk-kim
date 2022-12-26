<template>
  <section id="about" class="about">
    <h2 class="default__heading">О Сергее Ким</h2>
    <div class="more-kim">
      <div class="more-kim__item slider-kim">
        <SliderVue />
      </div>
      <div class="more-kim__item more-kim__text">
        <p class="more-kim__small-heading">
          <strong
            >Серийный предприниматель. Основатель международной группы компаний
            TIKSAN GROUP с годовым оборотом 1 млрд. рублей</strong
          >
        </p>
        <a
          href="https://tiksan.ru/"
          class="more-kin__link default__button"
          target="_blank"
          rel="noopener noreferrer"
          >Подробнее о TIKSAN GROUP</a
        >
        <div class="growth">
          <p>Начинал свой путь с обычного гастарбайтера</p>
          <img
            class="grow__img"
            src="@/assets/img/grow.png"
            alt="Ким гастарбайтер"
          />
        </div>
      </div>
    </div>
    <div class="now">
      <p>
        <strong>А сейчас:</strong>
      </p>
      <p>
        11 направлений бизнеса в области строительства, отопления, сфере
        общепита
      </p>
      <ul class="now__items">
        <p>4 производственных комплекса:</p>
        <li>• отопительного оборудования</li>
        <li>• строительных материалов</li>
        <li>• пищевой продукции</li>
        <li>• строительной технологии - SIP-панелей</li>
      </ul>
      <p>
        Компания TIKSAN GROUP работает в более чем 100 городах России, СНГ,
        Европы и Азии
      </p>
      <p>
        Через наставничество Сергея <strong>прошло более 1000 человек</strong>
      </p>
      <p>В 32 года заработал первый миллион долларов</p>
      <p>
        Цель компании <strong>попасть в TOP-200 Forbes</strong> частных компаний
        России
      </p>
    </div>
  </section>
</template>

<script>
import SliderVue from '@/components/Slider.vue';
export default {
  name: "MkKimAboutKim",

  data() {
    return {};
  },
  mounted() {},

  methods: {},
  components: {
    SliderVue,
  }
};
</script>

<style lang="scss" scoped>
.more-kin__link {
  display: block;
  max-width: fit-content;
}
.more-kim__text {
  max-width: 400px;
}
.grow__img {
  max-width: 500px;
}
.about {
  color: black;
}
.more-kim {
  display: flex;
  flex-direction: column;
}
.more-kin__link {
  background-color: #262B2E;
}
@media (min-width: 991.98px) {
  .more-kim__small-heading {
    font-size: 1.4em;
  }
  .more-kim {
    flex-direction: row;
    justify-content: flex-start;
    gap: 150px;
  }
  .now__items li {
    font-size: 1.3em;
  }
}
</style>
