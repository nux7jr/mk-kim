<template>
  <transition name="modal-fade">
    <div class="modal-backdrop">
      <div class="modal">
        <header class="modal-header">
          <slot name="header">
            <span class="header__text">
              Купить запись Мастер-класса за <strong>950 рублей</strong>
            </span></slot
          >
          <button type="button" class="btn-close" @click="close">
            <svg
              width="60"
              height="60"
              viewBox="0 0 60 60"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M21.1602 38.8388L38.8379 21.1612"
                stroke="white"
                stroke-width="1.5"
                stroke-linecap="round"
              />
              <path
                d="M21.1602 21.1612L38.8379 38.8388"
                stroke="white"
                stroke-width="1.5"
                stroke-linecap="round"
              />
            </svg>
          </button>
        </header>

        <section class="modal-body">
          <slot name="body">
            <form
              @submit.prevent="sendData"
              class="modal-form"
              id="modal-form"
              action=""
            >
              <div class="impor-inputs">
                <div class="input-label">
                  <label for="name">Ваше имя</label>
                  <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Игорь Меньшов"
                    required
                  />
                </div>
                <div class="input-label">
                  <label for="phone">Ваш телефон</label>
                  <masked-input
                    name="phone"
                    id="phone"
                    v-model="phoneValue"
                    mask="\+\7 (111) 111-11-11"
                    placeholder="+7 999 900 00 00"
                    required
                  />
                  <!-- {{ index.Of(this.phoneValue) }} -->
                </div>
              </div>
              <div class="input-label">
                <label for="email">Ваш e-mail</label>
                <input
                  type="email"
                  name="email"
                  id="email"
                  placeholder="aaa@mail.ru"
                  required
                />
              </div>
              <div class="loading">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="38"
                  height="38"
                  viewBox="0 0 38 38"
                  stroke="#fff"
                >
                  <g fill="none" fill-rule="evenodd">
                    <g transform="translate(1 1)" stroke-width="2">
                      <circle stroke-opacity=".5" cx="18" cy="18" r="18" />
                      <path d="M36 18c0-9.94-8.06-18-18-18">
                        <animateTransform
                          attributeName="transform"
                          type="rotate"
                          from="0 18 18"
                          to="360 18 18"
                          dur="1s"
                          repeatCount="indefinite"
                        />
                      </path>
                    </g>
                  </g>
                </svg>
              </div>
              <p class="succsses-text">Сообщение отправлено!</p>
              <input
                value="КУПИТЬ ЗАПИСЬ МАСТЕР-КЛАССА"
                type="submit"
                class="default__button"
              />
            </form>
          </slot>
        </section>

        <footer class="modal-footer">
          <slot name="footer">
            <small
              >Отправляя заявку, вы соглашаетесь на обработку персональных
              данных в соответствии с
              <a
                href="https://www.mk-kim.ru/politics.docx"
                target="_blank"
                rel="noopener noreferrer"
                >политикой конфиденциальности</a
              ></small
            >
          </slot>
        </footer>
      </div>
    </div>
  </transition>
</template>
<script>
import MaskedInput from "vue-masked-input";
export default {
  name: "Modal",
  data() {
    return {
      phoneValue: "",
    };
  },
  mounted() {
    this.closeOnArea();
  },
  methods: {
    close() {
      this.$emit("close");
    },
    closeOnArea() {
      const modal = document.querySelector(".modal-backdrop");
      modal.addEventListener("click", (evt) => {
        if (evt.target.classList.contains("modal-backdrop")) {
          this.close();
        }
      });
    },
    async sendData() {
      const phoneInput = document.getElementById("phone");
      if (this.phoneValue.indexOf("_") == -1 || this.phoneValue.value === "") {
        phoneInput.classList.remove("falid");
        const userForm = document.getElementById("modal-form");
        const loading = document.querySelector(".loading");
        const succMess = document.querySelector(".succsses-text");
        loading.classList.add("loading--active");
        const res = await fetch("/email_mess.php", {
          method: "POST",
          body: new FormData(userForm),
        });
        loading.classList.remove("loading--active");
        // succMess.classList.add("succsses-text--active");
        // setTimeout(() => {
        //   succMess.classList.remove("succsses-text--active");
        // }, 2000);
        const ans = await res.text();
        window.open(ans, "_blank");
        // window.location = ans;
        // target = "_blank";
        setTimeout(() => {
          userForm.reset();
          this.close();
        }, 1000);
      } else {
        phoneInput.classList.add("falid");
        setTimeout(function () {
          phoneInput.classList.remove("falid");
        }, 1000);
      }
    },
  },
  components: {
    MaskedInput,
  },
};
</script>
<style>
@keyframes shake {
  0% {
    border-color: red;
  }
  10%,
  90% {
    transform: translate3d(-1px, 0, 0);
  }

  20%,
  80% {
    transform: translate3d(2px, 0, 0);
  }

  30%,
  50%,
  70% {
    transform: translate3d(-4px, 0, 0);
  }

  40%,
  60% {
    transform: translate3d(4px, 0, 0);
  }
  100% {
    border-color: #dddcd7;
  }
}
.falid {
  animation: shake 0.82s cubic-bezier(0.36, 0.07, 0.19, 0.97) both;
  transform: translate3d(0, 0, 0);
  backface-visibility: hidden;
  perspective: 1000px;
}
.modal-backdrop {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.3);
  display: flex;
  justify-content: center;
  align-items: center;
}

.modal {
  background: #262b2e;
  overflow-x: auto;
  display: flex;
  flex-direction: column;
  color: white;
  border-radius: 43px;
  padding: 20px;

  position: relative;
}

.modal-header,
.modal-footer {
  padding: 0.1px;
  display: flex;
}

.modal-header {
  justify-content: space-between;
  margin-right: 30px;
}

.modal-footer {
  flex-direction: column;
  justify-content: flex-end;
}

.modal-body {
  padding: 20px 0.1px;
}

.btn-close {
  position: absolute;
  top: 0;
  right: 0;
  border: none;
  font-size: 20px;
  padding: 10px;
  cursor: pointer;
  font-weight: bold;
  color: white;
  background: transparent;
}

.modal-fade-enter,
.modal-fade-leave-to {
  opacity: 0;
}

.modal-fade-enter-active,
.modal-fade-leave-active {
  transition: opacity 0.3s ease;
}
.impor-inputs {
  display: flex;
  flex-wrap: wrap;

  width: 100%;
}
.input-label {
  display: flex;
  flex-direction: column;
  flex: 1;
  gap: 7px;
}
.input-label input {
  outline: none;
  padding: 11px 16px;
  background: #ffffff;
  border-radius: 6px;
  font-family: "Inter Regular";
  font-style: normal;
  font-weight: 400;
  font-size: 15px;
  line-height: 29px;
  color: #444141;
  border-color: transparent;
}
.header__text {
  font-family: "Inter Regular";
  font-style: normal;
  font-weight: 400;
  font-size: 24px;
  line-height: 29px;
}
.modal-form {
  display: flex;
  flex-direction: column;
  gap: 20px;
}
.modal-footer small {
  max-width: 500px;
}
.modal-footer a {
  color: #ff5000;
}
.loading {
  display: none;
  margin: 0 auto;
}
.loading--active {
  display: block;
}
.succsses-text {
  display: none;
  font-size: 14px;
}
.succsses-text--active {
  display: block;
}
@media (min-width: 432px) {
  .impor-inputs {
    gap: 15px;
  }
  .input-label input {
    font-size: 24px;
  }
}
@media (min-width: 767.98px) {
  .modal {
    padding: 50px 100px;
  }
}
</style>
