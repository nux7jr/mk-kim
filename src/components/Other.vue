<template>
  <section class="other">
    <h2 class="default__heading">Мастер-классы в других городах на 2023 год</h2>
    <div class="other__wrapper">
      <img class="small-city__img" src="@/assets/img/mapCity.png" alt="city" />
      <img class="big-city__img" src="@/assets/img/cityBig.png" alt="city" />
    </div>
    <button class="default__button other__call">
      <!-- @click="layer.show1 = true" -->
      Забронировать билеты в своем городе
    </button>
    <div class="container">
      <popup-layer
        :visible.sync="layer.show1"
        @onOpen="open"
        @onClose="close"
        :extra="{ lv: 1 }"
        ref="lv1"
      >
        <div class="firstStep">
          <div class="firstStep__heading">
            <h2>Забронируйте билеты на мастер-класс в своем городе</h2>
            <button class="close" @click="layer.show1 = false">
              <img class="close__img" src="@/assets/img/Close.svg" alt="" />
            </button>
          </div>
          <form class="Cform">
            <div class="Cform__item">
              <label class="Cform__label" for="name">Ваше имя</label>
              <input
                class="Cform__input"
                type="text"
                name="name"
                id=""
                placeholder="Игорь Меньшов"
              />
            </div>
            <div class="Cform__item">
              <label class="Cform__label" for="name">Ваш телефон</label>
              <masked-input
                class="Cform__input"
                mask="\+\7 (111) 111-11-11"
                @input="rawVal = arguments[2]"
                placeholder="+7 999 900 00 00"
              />
            </div>
            <div class="Cform__item">
              <label class="Cform__label" for="city">Ваш город</label>
              <input
                class="Cform__input"
                type="text"
                name="city"
                id=""
                placeholder="Название города"
              />
            </div>
            <div class="Cform__item">
              <label class="Cform__label" for="ticket">Кол-во билетов</label>
              <input class="Cform__input" type="number" name="ticket" id="" />
            </div>
          </form>
          <button
            @click="layer.show2 = true"
            class="default__button nextStepButton"
          >
            Забронировать
          </button>
          <small
            >Отправляя заявку, вы соглашаетесь на обработку персональных данных
            в соответствии с
            <a href="" class="politic">политикой конфиденциальности</a></small
          >
        </div>
        <popup-layer
          class="secondStep"
          :visible.sync="layer.show2"
          :extra="{ lv: 2 }"
          @onOpen="open"
          @onClose="close"
          ref="lv2"
        >
          <div class="secondStep">
            <div class="secondStep__heading">
              <h2>Ваша заявка принята</h2>
              <button class="close" @click="closeAll">
                <img class="close__img" src="@/assets/img/Close.svg" alt="" />
              </button>
            </div>
            <p>Скоро с вами свяжется специалист</p>
            <button @click="layer.show2 = false" class="default__button">
              Назад
            </button>
          </div>
        </popup-layer>
      </popup-layer>
    </div>
  </section>
</template>

<script>
import popupLayer from "@/components/PopUp.vue";
import MaskedInput from "vue-masked-input";
export default {
  name: "MkKimOther",

  data() {
    return {
      layer: {
        show1: false,
        show2: false,
      },
    };
  },
  components: {
    popupLayer,
    MaskedInput,
  },
  mounted() {},

  methods: {
    open(id, extra) {
      console.log("Pop-up layer opened ：" + extra.lv, id, extra);
    },
    /**
     * @param {Boolean} isPopstate
     */
    close({ isPopstate }, extra) {
      console.log(
        isPopstate
          ? "Click the physical return button to close the pop-up layer： " +
              extra.lv
          : "Manually closed the popup layer ：" + extra.lv,
        extra
      );
    },
    closeAll() {
      // back the root level 0,total level 2
      this.$refs.lv1.backLvBy(0, 2, (i) => {
        this.layer["show" + i] = false;
      });
    },
  },
};
</script>

<style lang="scss" scoped>
.politic {
  color: #ff5000;
}
.Cform__item {
  display: flex;
  flex-direction: column;
  margin: 20px;
}
.Cform__input {
  height: 40px;
  border-radius: 10px;
  border-color: transparent;
  outline: none;
}
.firstStep {
  background-color: #262b2e;
  color: white;
  border-radius: 15px;
  margin: 30px;
}
.secondStep {
  background-color: #262b2e;
  color: white;
  border-radius: 15px;
  height: 95%;
  background-image: url(@/assets/img/maxfullsize.png);
  background-position: left center;
  background-repeat: no-repeat;
  background-size: cover;
  background-size: contain;
  background-size: auto;
}
.close__img {
  width: 30px;
}
.close {
  background-color: transparent;
  border: none;
  width: auto !important;
  cursor: pointer;
}
.firstStep__heading {
  display: flex;
  justify-content: space-between;
}
.secondStep__heading {
  display: flex;
  justify-content: space-between;
}
.nextStepButton {
  display: block;
  margin: 0 auto;
}
.small-city__img {
  width: 160px;
}
.big-city__img {
  display: none;
}
.other__wrapper {
  display: flex;
  justify-content: center;
}
@media (min-width: 575.98px) {
  .small-city__img {
    display: none;
  }
  .big-city__img {
    display: block;
    max-width: 1000px;
  }
  .other__call {
    display: block;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
  }
}
.container {
  height: 100%;
  overflow: hidden;
  button {
    width: 100%;
  }
}
@media (min-width: 991.98px) {
  .Cform {
    display: grid;
    grid-template-columns: 1fr 1fr;
  }
}
</style>
