<template>
  <Slide right>
    <div class="mobile-links">
      <a href="#whats">Что будет</a>
      <a href="#about">О спикере</a>
      <a href="#price">Стоимость</a>
    </div>
  </Slide>
</template>

<script>
import { Slide } from "vue-burger-menu";
export default {
  name: "navigation",
  components: {
    Slide,
  },
};
</script>

<style>
.bm-burger-button {
  position: absolute;
  width: 36px;
  height: 30px;
  right: 15px !important;
  top: 10px !important;
  cursor: pointer;
}
.bm-burger-bars {
  background-color: #ffffff !important;
}
.line-style {
  position: absolute;
  height: 20%;
  left: 0;
  right: 0;
}
.cross-style {
  position: absolute;
  top: 12px;
  right: 2px;
  cursor: pointer;
}
.bm-cross {
  background: #bdc3c7;
}
.bm-cross-button {
  height: 24px;
  width: 24px;
}
.bm-menu {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 1000; /* Stay on top */
  top: 0;
  left: 0;
  background-color: rgb(63, 63, 65); /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /*0.5 second transition effect to slide in the sidenav*/
}

.bm-overlay {
  background: rgba(0, 0, 0, 0.3);
}
.bm-item-list {
  color: #b8b7ad;
  margin-left: 10%;
  font-size: 20px;
}
.bm-item-list > * {
  display: flex;
  text-decoration: none;
  padding: 0.7em;
}
.bm-item-list > * > span {
  margin-left: 10px;
  font-weight: 700;
  color: white;
}
.mobile-links {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}
.mobile-links a {
  color: rgb(255, 255, 255);
  text-align: center;
  padding: 30px;
}
</style>
