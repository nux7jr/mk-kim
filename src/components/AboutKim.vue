<template>
  <section id="about" class="about">
    <h2 class="default__heading">О Сергее Ким</h2>
    <div class="more-kim">
      <div class="more-kim__item slider-kim">
        <img src="@/assets/img/bigPort.png" alt="Ким" />
      </div>
      <div class="more-kim__item more-kim__text">
        <p>
          <strong
            >Серийный предприниматель. Основатель международной группы компаний
            TIKSAN GROUP с годовым оборотом 1 млрд. рублей</strong
          >
          <a
            href="https://tiksan.ru/"
            class="more-kin__link default__button"
            target="_blank"
            rel="noopener noreferrer"
            >Подробнее о Tiksan group</a
          >
        </p>
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
      <ul>
        <p>4 производственных комплекса:</p>
        <li>отопительного оборудования</li>
        <li>строительных материалов</li>
        <li>пищевой продукции</li>
      </ul>
      <p>
        Компания Tiksan Group работает в более чем 100 городах России, СНГ,
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
    <div class="buyIt">
      <img src="#" alt="" />
      <p>
        Вы можете сами управлять своей судьбой и достичь результатов не зависимо
        от внешних обстоятельств.
      </p>
      <p>
        А значит, откроете в себе новые ресурсы, станете еще более успешным и
        счастливым!
      </p>
      <a
        href="https://krs.kassir.ru/obrazovanie/ot-gastarbaytera-do-milliardera"
        target="_blank"
        class="default__button"
        onclick="ym(90660050,'reachGoal','clickkassir')"
        >Купить билет</a
      >
    </div>
  </section>
</template>

<script>
export default {
  name: "MkKimAboutKim",

  data() {
    return {};
  },
  mounted() {},

  methods: {},
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
@media (min-width: 991.98px) {
  .more-kim {
    flex-direction: row;
    justify-content: space-between;
  }
}
</style>
