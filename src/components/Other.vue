<template>
  <section class="other">
    <h2 class="default__heading">Мастер-классы в других городах на 2023 год</h2>
    <div class="other__wrapper">
      <img class="small-city__img" src="@/assets/img/mapCity.png" alt="city" />
      <img class="big-city__img" src="@/assets/img/cityBig.png" alt="city" />
    </div>
    <button class="default__button other__call" @click="layer.show1 = true">
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
          <div class="firstStep_wrapper">
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
                v-model="otherUserForm.name"
                placeholder="Игорь Меньшов"
              />
            </div>
            <div class="Cform__item">
              <label class="Cform__label" for="name">Ваш телефон</label>
              <masked-input
                class="Cform__input"
                mask="\+\7 (111) 111-11-11"
                @input="rawVal = arguments[2]"
                v-model="otherUserForm.phone"
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
                v-model="otherUserForm.city"
                placeholder="Название города"
              />
            </div>
            <div class="Cform__item">
              <label class="Cform__label" for="ticket">Кол-во билетов</label>
              <input class="Cform__input" type="number" name="ticket" id="" v-model="otherUserForm.quantity"/>
            </div>
          </form>
          <button
            @click="multiplyActions"
            class="default__button nextStepButton"
          >
            Забронировать
          </button>
          <small class="Cform__small"
            >Отправляя заявку, вы соглашаетесь на обработку персональных данных
            в соответствии с
            <a href="" class="politic">политикой конфиденциальности</a></small
          >
          </div>
        </div>
        <popup-layer
          :visible.sync="layer.show2"
          :extra="{ lv: 2 }"
          @onOpen="open"
          @onClose="close"
          ref="lv2"
        >
          <div class="secondStep">
            <div class="secondStep__wrapper">
              <div class="secondStep__heading">
                <h2>Ваша заявка принята</h2>
                <p>Скоро с вами свяжется специалист</p>
              </div>
              <button class="closeAll" @click="closeAll">
                <img class="close__img" src="@/assets/img/Close.svg" alt="" />
              </button>
              <!-- <button @click="layer.show2 = false" class="default__button">
                Назад
              </button> -->
            </div>
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
      otherUserForm: {
        name: "",
        phone: "",
        quantity: "",
        city: "",
      },
    };
  },
  components: {
    popupLayer,
    MaskedInput,
  },
  mounted() {},

  methods: {
    multiplyActions() {
      this.layer.show2 = true;
      this.sendLead();
    },
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
      this.$refs.lv1.backLvBy(0, 2, (i) => {
        this.layer["show" + i] = false;
      });
    },
    sendLead() {
        const params = new FormData();
        params.set("name", this.otherUserForm.name);
        params.set("quantity", this.otherUserForm.quantity);
        params.set("phone", this.otherUserForm.phone);
        params.set("city", this.otherUserForm.city);
        fetch("https://www.mk-kim.ru/emailMess.php", {
          method: "POST",
          body: params,
        })
          .then(function (response) {
            ym(90660050,'reachGoal','mklead');
            return response.json();
          })
          .then(function (data) {
            console.log(data)
          });
    },
  },
};
</script>

<style lang="scss" scoped>
.other {
  padding-top: 30px;
  background-color: #EBEBEB;
}
.politic {
  color: #ff5000;
}
.Cform__small {
  display: block;
  padding: 15px;
}
.Cform__item {
  display: flex;
  flex-direction: column;
  margin: 20px;
}
.Cform__label {
  margin-bottom: 10px;
}
.Cform__input {
  height: 36px;
  border-radius: 10px;
  border-color: transparent;
  outline: none;
}
::placeholder {
  font-size: 1.3em;
  padding: 8px 0 4px 0;
  margin: 5px;
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
  height: 100%;
}
.secondStep__wrapper {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-image: url(@/assets/img/maxfullsize.png);
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  text-align: left;
  border-radius: 15px;
  min-height: -webkit-fill-available;

  position: relative;
}
.closeAll {
  position: absolute;
  top: 0px;
  right: 0px;
  background-color: transparent;
  border: none;
  width: auto !important;
  cursor: pointer;
}
.close__img {
  width: 50px;
}
.close {
  background-color: transparent;
  border: none;
  width: auto !important;
  cursor: pointer;
}
.firstStep__heading {
  padding: 20px;
  display: flex;
  justify-content: space-between;
}
.secondStep__heading {
  padding: 40%;
  padding-left: 90%;
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
  .secondStep {
    border-radius: 15px;
  }
  .Cform {
    display: grid;
    grid-template-columns: 1fr 1fr;
  }
  .firstStep_wrapper {
    max-width: 50%;
    background-color: #262b2e;
    border-radius: 15px;
  }
  .firstStep {
    display: flex;
    justify-content: center;
    background-color: transparent;
  }
  .nextStepButton {
    margin: 0 0 0 20px;
  }
  .secondStep__wrapper {
    min-width: 51%;
    background-color: #262b2e;
    border-radius: 15px;
  }
  .secondStep {
    background-color: transparent;
    display: flex;
    justify-content: center;
    background-color: transparent;
  }
  .secondStep__heading {
    padding: 2%;
    padding-left: 70%;
  }
}
</style>
