<template>
  <section id="price" class="price">
    <div class="classic-price">
      <h2 class="default__heading">
        Стоимость участия <span class="selected-text"> 2 000 рублей </span>
      </h2>
      <p>При покупке двух билетов - третий в подарок!</p>
      <a href="tel:89029475852">
        <p class="default__button">ПОЗВОНИ НАМ!</p>
      </a>
      <a
        href="https://krs.kassir.ru/obrazovanie/ot-gastarbaytera-do-milliardera"
        target="_blank"
        rel="noopener noreferrer"
        class="default__button"
        onclick="ym(90660050,'reachGoal','clickkassir')"
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
            <label for="name">Ваше Имя</label>
            <input
              class="comp-from__input"
              type="text"
              name="name"
              id="name"
              v-model="leadFormData.name"
              placeholder="Игорь Меньшов"
            />
          </div>
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
            <label for="name">Компания</label>
            <input
              class="comp-from__input"
              type="text"
              name="name"
              id="name"
              v-model="leadFormData.company"
              placeholder="TIKSAN GROUP"
            />
          </div>
        </form>
        <p class="error" v-show="error">Заполните все поля!</p>
        <svg class='loader-form' viewBox='20 0 50 120'>
          <defs>
            <filter id='goo'>
              <feGaussianBlur in='SourceGraphic' stdDeviation='8' result='blur' />
              <feColorMatrix in='blur' mode='matrix' values='1 0 0 0 0
                                                             0 1 0 0 0
                                                             0 0 1 0 0
                                                             0 0 0 25 -8' result='goo' />
              <feBlend in='SourceGraphic' in2='goo' />
            </filter>
          </defs>
          <g filter='url(#goo)' fill='#ff5000' stroke='#ff5000'>
            <g transform='translate(50, 50)'>
              <g class='circle -a'>
                <g transform='translate(-50, -50)'>
                  <circle cx='25' cy='50' r='9' />
                </g>
              </g>
            </g>
            <g transform='translate(50, 50)'>
              <g class='circle -b'>
                <g transform='translate(-50, -50)'>
                  <circle cx='50' cy='25' r='8' />
                </g>
              </g>
            </g>
            <g transform='translate(50, 50)'>
              <g class='circle -c'>
                <g transform='translate(-50, -50)'>
                  <circle cx='75' cy='50' r='7' />
                </g>
              </g>
            </g>
            <g transform='translate(50, 50)'>
              <g class='circle -d'>
                <g transform='translate(-50, -50)'>
                  <circle cx='50' cy='75' r='6' />
                </g>
              </g>
            </g>
            <g transform='translate(50, 50)'>
              <g class='circle -e'>
                <g transform='translate(-50, -50)'>
                  <circle cx='25' cy='50' r='5' />
                </g>
              </g>
            </g>
            <g transform='translate(50, 50)'>
              <g class='circle -f'>
                <g transform='translate(-50, -50)'>
                  <circle cx='50' cy='25' r='4' />
                </g>
              </g>
            </g>
            <g transform='translate(50, 50)'>
              <g class='circle -g'>
                <g transform='translate(-50, -50)'>
                  <circle cx='75' cy='50' r='3' />
                </g>
              </g>
            </g>
            <g transform='translate(50, 50)'>
              <g class='circle -h'>
                <g transform='translate(-50, -50)'>
                  <circle cx='50' cy='75' r='2' />
                </g>
              </g>
            </g>
          </g>
        </svg>
        <div class="success"></div>
        <button class="comp-from__button default__button" @click="sendLead">
          Запросить условия
        </button>
        <small
          >Отправляя заявку, вы соглашаетесь на обработку персональных данных в
          соответсвии с
          <a class="politic" href="https://www.mk-kim.ru/politics.docx">политикой конфиденциальности</a></small
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
      error: false,
    };
  },
  components: {
    MaskedInput,
  },
  mounted() {
    const circles = document.querySelectorAll('.circle');

    function update(time) {
      circles.forEach((circle, index) => {
        const angle = time * (2 - index / 10) / 5;
        circle.setAttribute('transform', `rotate(${angle} 0 0)`);
      });
      requestAnimationFrame(update);
    }
    update(0);
  },

  methods: {
    sendLead(e) {
      e.preventDefault();
      if (
        (this.leadFormData.name == "" || this.leadFormData.company == "",
        this.leadFormData.phone == "")
      ) {
        this.error = true;
      } else {
        this.error = false;
        const loading = document.querySelector(".loader-form");
        loading.style.display = "block";
        const params = new FormData();
        params.set("name", this.leadFormData.name);
        params.set("company", this.leadFormData.company);
        params.set("phone", this.leadFormData.phone);
        fetch("https://www.mk-kim.ru/send.php", {
          method: "POST",
          body: params,
        })
          .then(function (response) {
            loading.style.display = "none";
            return response.json();
          })
          .then(function (data) {
            const el = document.querySelector(".success");
            el.textContent = data;
            ym(90660050,'reachGoal','mklead');
          });
      }
    },
  },
};
</script>

<style lang="scss" scoped>
@keyframes ani {
  0% {
    transform: translateX(-150%);
  }

  100% {
    transform: translateY(0);
  }
}
.loader-form {
  position: static;
  display: none;
  height: 50px;
  width: 50px;
  margin: 0 auto;
}
.success {
  color: green;
  display: block;
  margin-top: 10px;
  transform: translateX(-150%);
  animation: ani 1s forwards;
}
.error {
  color: red;
  display: block;
  transform: translateX(-150%);
  animation: ani 1s forwards;
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
