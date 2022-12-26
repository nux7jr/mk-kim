<template>
  <section class="best-life">
    <h2 class="default__heading">Вас ждет много полезной информации, которая улучшит вашу жизнь</h2>
    <div class="footer-location">
      <ul class="footer-location__wrapper">
        <li class="footer-location__item">
          <img class="footer-location__date_icon" src="@/assets/img/LocationFooter.svg" alt="Адресс">
          <a class="data-location__text" href="https://yandex.ru/maps/-/CCUjvHSCLA" target="_blank" rel="noopener noreferrer">
            Красноярск,<br> ул.Авиаторов, д.19
          </a>
        </li>
        <li class="footer-location__item">
          <img class="footer-location__date_icon" src="@/assets/img/CalendarFooter.svg" alt="Дата">
          <p class="data-location__text">24 декабря 2022</p>
        </li>
        <li class="footer-location__item">
          <img class="footer-location__date_icon" src="@/assets/img/ClockFooter.svg" alt="Дата">
          <p class="data-location__text">17:00</p>
        </li>
      </ul>
    </div>
    <div class="map">
      <img class="map__item" src="@/assets/img/famaly.png" alt="семья">
      <a class="map__item" href="https://yandex.ru/maps/-/CCUjvHSCLA" target="_blank" rel="noopener noreferrer">
        <img class="map__img" src="@/assets/img/map.png" alt="map img">
      </a>
    </div>
  </section>
</template>

<script>
export default {
  name: 'MkKimBestLife',

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
.best-life {
  padding-bottom: 40px;
}
.data-location__text {
  font-size: 1.2em;
  margin: 5px;
}
.footer-location {
  color: black;
}
.map__img {
  border-radius: 15px;
}
.footer-location__date_icon {
  width: 20px;
}
.footer-location__item {
  display: flex;
  gap: 10px;
}
.footer-location__item a {
  color: black;
}
@media (min-width: 767.98px) {
  .map {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    flex: 2 2;
  }
  .map__item {
    flex: 2 2;
  }
  .footer-location__wrapper {
    display: flex;
    justify-content: left;
    align-items: center;
    align-content: center;
    margin: 30px 0;
    gap: 45px;
  }
  .data-location__text {
    font-size: 1.7em;
    margin: 5px;
  }
  .footer-location__item {
    gap: 0;
  }
  .footer-location__date_icon {
    width: 30px;
  }
}
</style>