<template>
  <footer>
    <div class="footer__wrapper">
      <div class="footer__item">
        <div class="footer-social__icons">
          <a
            href="https://vk.com/tiksangroup"
            target="_blank"
            rel="noopener noreferrer"
            ><img
              class="footer-social__item"
              src="@/assets/img/vk (2).svg"
              alt="LOGO"
          /></a>
          <a
            href="https://www.youtube.com/channel/UCCjQod9duCejwFDB3IqiR-w"
            target="_blank"
            rel="noopener noreferrer"
            ><img
              class="footer-social__item"
              src="@/assets/img/Ytbe.svg"
              alt="LOGO"
          /></a>
          <a
            href="https://t.me/tiksangroup2030"
            target="_blank"
            rel="noopener noreferrer"
            ><img
              class="footer-social__item"
              src="@/assets/img/Teleg.svg"
              alt="LOGO"
          /></a>
        </div>
        <p>@ 2022 Бизнес академия Tiksan Group</p>
      </div>
      <div class="footer-contact">
        <ul class="footer-contact__list">
          <strong>Контакты</strong>
          <li>ИП Ким Сергей Геннадьевич</li>
          <li>ИНН 272498786001</li>
          <li>ОГРН 272498786001</li>
          <li>Tiksan group</li>
          <li>660135, г. Красноярск, ул. Октябрьская, 8а</li>
        </ul>
      </div>
      <div>
        <a
          href="http://"
          class="footer-politic"
          target="_blank"
          rel="noopener noreferrer"
          >Политика Конфиденциальности</a
        >
        <p>Информация на сайте является публичной офертой.</p>
        <p>Регистрация на мероприятие и оплата участия обязательна.</p>
      </div>
    </div>
  </footer>
</template>

<script>
export default {
  name: "MkKimFooter",

  data() {
    return {};
  },

  mounted() {},

  methods: {},
};
</script>

<style lang="scss" scoped>
footer {
  background-color: #262b2e;
}
.footer-social__icons {
  display: block;
}

.footer__wrapper {
  color: white;
  font-weight: 400;
  font-size: 12px;
  line-height: 15px;

  display: flex;
  flex-direction: column;
  padding: 30px 0;
}
.footer-social__item {
  width: 30px;
}
.footer-social__icons {
  display: flex;
  gap: 5px;
  flex-direction: row;
}
.footer-politic {
  color: white;
  text-decoration: underline;
}
.footer-contact__list {
  display: flex;
  gap: 7px;
  flex-direction: column;
}
@media (min-width: 575.98px) {
  .footer__wrapper {
    flex-direction: row;
    justify-content: space-between;
  }
}
</style>
