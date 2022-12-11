<template>
  <section id="whats" class="advantages">
    <div class="advantages__wrapper">
      <h2 class="advantages__heading default__heading">
        На мастер-классе вы узнаете:
      </h2>
      <ul class="advantages__text">
        <li>• Как правильно ставить <strong>большие цели</strong></li>
        <li>
          • Как формировать стратегию достижения
          <strong>высоких результатов</strong>
        </li>
        <li>
          • Как <strong>максимально эффективно</strong> использовать имеющиеся
          ресурсы
        </li>
        <li>• Алгоритм <strong>успешного дня</strong></li>
        <li>• Механики формирования <strong>мотивации и энергии</strong></li>
        <li>• Пошаговый план <strong>к первому миллиону $</strong></li>
      </ul>
      <a
        href="https://krs.kassir.ru/obrazovanie/ot-gastarbaytera-do-milliardera"
        class="default__button"
        target="_blank"
        rel="noopener noreferrer"
        onclick="ym(90660050,'reachGoal','clickkassir')"
        >Забронировать место</a
      >
    </div>
    <img class="advantages__img" src="@/assets/img/leftKim.png" alt="Ким" />
  </section>
</template>

<script>
export default {
  name: "MkKimAdvantages",

  data() {
    return {};
  },

  mounted() {},

  methods: {},
};
</script>

<style lang="scss" scoped>
.main-info__link {
  display: block;
  max-width: 134px;
}
.advantages {
  background: #ebebeb;
  display: flex;
}
.advantages__heading {
  padding-top: 20px;
}
.advantages__text > li {
  margin: 20px 0;
}
.advantages__img {
  display: none;
}
@media (min-width: 1199.98px) {
  .advantages__img {
    display: block;
    width: 350px;
    padding: 30px;
  }
  .advantages {
    justify-content: space-between;
  }
}
</style>
