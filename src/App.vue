<template>
  <div id="app">
    <router-view />
  </div>
</template>
<script>
export default {
  components: {},
};
</script>
<style lang="scss">
#app {
  -webkit-font-smoothing: antialiased;
  color: black;
  padding: 0;
  margin: 0;
}

@font-face {
  font-family: "Inter Regular";
  src: url("assets/fonts/Inter-Regular.ttf");
}
@font-face {
  font-family: "Inter Bold";
  src: url("assets/fonts/Inter-Bold.ttf");
}
html {
  scroll-behavior: smooth;
}
nav {
  a {
    font-weight: bold;
    color: #2c3e50;

    &.router-link-exact-active {
      color: #42b983;
    }
  }
}
body {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Inter Regular", sans-serif;
}
// выделенный текст
.selected-text {
  color: #ff5000;
}
.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  padding: 0;
  overflow: hidden;
  border: 0;
  clip: rect(0 0 0 0);
}
ul,
li {
  margin: 0;
  padding: 0;
  list-style-type: none;
}
a {
  text-decoration: none;
}
p {
  font-size: 1.2em;
}
img {
  width: 100%;
  height: auto;
}
section,
header,
footer {
  padding: 0 15px;
}
@media (min-width: 575.98px) {
  section,
  header,
  footer {
    padding: 0 calc(50vw - 270px);
  }
}
@media (min-width: 767.98px) {
  section,
  header,
  footer {
    padding: 0 calc(50vw - 360px);
  }
}
@media (min-width: 991.98px) {
  section,
  header,
  footer {
    padding: 0 calc(50vw - 480px);
  }
}
@media (min-width: 1199.98px) {
  section,
  header,
  footer {
    padding: 0 calc(50vw - 590px);
  }
}
.default__button {
  border-color: transparent;
  padding: 10px 25px;
  color: white;
  font-family: "Inter Bold";
  background-color: #ff5000;
  border-radius: 5px;
  font-weight: 400;
  font-size: larger;
  margin: 20px 0;
  transition: 0.5s;
  cursor: pointer;
  font-weight: medium;
  display: block;
  max-width: fit-content;
}
.default__button:hover {
  background-color: #ff854d;
}
.default__link {
  border-color: transparent;
  padding: 10px 25px;
  color: white;
  font-family: "Inter Bold";
  background-color: #ff5000;
  border-radius: 5px;
  font-weight: 400;
  font-size: larger;
  margin: 20px 0;
  transition: 0.5s;
  cursor: pointer;
  font-weight: medium;
}
.default__link:hover {
  background-color: #ff854d;
}
.default__heading {
  font-family: "Inter Regular";
  font-style: normal;
  font-weight: 700;
  font-size: 2em;
}
</style>
