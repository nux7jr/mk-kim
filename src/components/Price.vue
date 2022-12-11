<template>
  <section id="price" class="price">
    <div class="classic-price">
      <h2 class="default__heading">
        Стоимость участия <span class="selected-text"> 2 000 рублей </span>
      </h2>
      <a
        href="https://krs.kassir.ru/obrazovanie/ot-gastarbaytera-do-milliardera"
        target="_blank"
        rel="noopener noreferrer"
        class="default__button"
        >Перейти к заказу билетов</a
      >
    </div>
    <div class="team-price">
      <h2 class="default__heading">
        Участвуете командой? -
        <span class="selected-text">Получите специальные условия</span>
      </h2>
      <div class="call__wrapper">
        <h2 class="call_heading">
          Забронируйте место на мастер-классе Сергея Ким прямо сейчас
        </h2>
        <form action="" method="post">
          <div class="comp-form__item">
            <label for="phone">Ваш телефон</label>
            <masked-input
              class="comp-from__input"
              v-model="leadFormData.phone"
              mask="\+\7 (111) 111-11-11"
              @input="rawVal = arguments[2]"
              placeholder="Номер телефона"
            />
          </div>
          <div class="comp-form__item">
            <label for="name">Ваш Имя</label>
            <input
              class="comp-from__input"
              type="text"
              name="name"
              id="name"
              placeholder="Игорь Меньшов"
            />
          </div>
          <div class="comp-form__item">
            <label for="name">Компания</label>
            <input
              class="comp-from__input"
              type="text"
              name="name"
              id="name"
              placeholder="Гугл"
            />
          </div>
        </form>
        <button class="comp-from__button default__button">
          Запросить условия
        </button>
        <div class="success"></div>
        <small
          >Отправляя заявку, вы соглашаетесь на обработку персональных данных в
          соответсвии с
          <a class="politic" href="#">политикой конфиденциальности</a></small
        >
      </div>
    </div>
  </section>
</template>

<script>
import MaskedInput from "vue-masked-input";
export default {
  name: "MkKimPrice",

  data() {
    return {
      leadFormData: {
        name: "",
        company: "",
        phone: "",
      },
    };
  },
  components: {
    MaskedInput,
  },
  mounted() {},

  methods: {
    sendLead(evt) {
      evt.preventDefault();
      if (
        (this.leadFormData.name == "" || this.leadFormData.company == "",
        this.leadFormData.phone == "")
      ) {
        this.errortext = true;
      } else {
        const params = new FormData();
        params.set("name", this.leadFormData.name);
        params.set("company", this.leadFormData.company);
        params.set("phone", this.leadFormData.phone);
        fetch("https://tiksan-record.ru/emailMess.php", {
          method: "POST",
          body: params,
        })
          .then(function (response) {
            return response.json();
          })
          .then(function (data) {
            const el = document.querySelector(".success");
            el.textContent = data;
          });
      }
    },
  },
};
</script>

<style lang="scss" scoped>
.call {
  padding-top: 30px;
  padding-bottom: 30px;
}
form {
  display: flex;
  flex-direction: column;
}
.comp-from__button {
  max-width: fit-content;
}
.comp-form__item {
  display: flex;
  flex-direction: column;
  gap: 3px;
}
.call__wrapper {
  color: white;
  background-color: #262b2e;
  border-radius: 15px;
  padding: 15px;
}
.call_heading {
  font-weight: 300;
  font-style: normal;
  font-weight: 400;
  font-size: 18px;
}
.comp-from__input {
  padding: 12px;
  outline: none;
  border-radius: 5px;
  border-color: transparent;
}
.politic {
  color: #ff5000;
}
@media (min-width: 1199.98px) {
  form {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: space-between;
  }
  .comp-form__item {
    min-width: 350px;
  }
}
</style>
