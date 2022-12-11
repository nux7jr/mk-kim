<template>
  <div
    style="
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      width: 100%;
      background-color: transparent;
      backface-visibility: hidden;
    "
    :id="id"
    :style="{
      zIndex: autoIndex ? getMaxZIndex() : zIndex,
      transition: isAnimation ? 'transform 0.3s' : 'none',
      transform: visible ? 'translateX(0)' : 'translateX(100%)',
    }"
  >
    <slot></slot>
  </div>
</template>
<script>
const listener = function (e) {
  const curState = e.state && e.state.key ? e.state.key : "";
  const historyState = this.store().getCur();
  const _len = historyState.length;
  if (_len && curState != historyState[_len - 1]) {
    if (historyState[_len - 1] == this.id) {
      this.$emit("onClose", { isPopstate: true }, this.extra);
      this.$emit("update:visible", false);
      this.store().pop();
      this.isSynced = true;
      document.activeElement.blur();
    }
  }
};
export default {
  name: "PopupLayer",
  props: {
    visible: Boolean,
    isAnimation: {
      type: Boolean,
      default: true,
    },
    zIndex: {
      type: Number,
      default: 1000,
    },
    autoIndex: Boolean,
    storeName: {
      type: String,
      default: "historyState",
    },
    extra: {
      type: Object,
      default: () => ({}),
    },
    storeType: {
      type: String,
      default: "localStorage",
    },
    getContainer: {
      type: [Function, String],
      default: "",
    },
    isAsync: Boolean,
  },
  data() {
    return {
      isSynced: false,
      listener: listener.bind(this),
      id: "popuplayer_" + this.guid(),
    };
  },
  watch: {
    visible(val) {
      this[val ? "show" : "hide"]();
      window[(val ? "add" : "remove") + "EventListener"](
        "popstate",
        this.listener
      );
    },
  },
  mounted() {
    if (typeof this.getContainer === "function") {
      this.getContainer().appendChild(this.$el);
    } else if (this.getContainer) {
      document.querySelector(this.getContainer).appendChild(this.$el);
    }
    this.$once("hook:beforeDestroy", () => {
      window.removeEventListener("popstate", this.listener);
    });
  },
  created() {
    if (this.isAsync) return;
    const cache = this.store().getCur();
    const cacheLength = cache ? cache.length : 0;
    cacheLength && history.go(-cacheLength);
    this.store().reset();
  },
  methods: {
    /**
     * @description
     */
    store() {
      const name = this.storeName;
      const store = window[this.storeType];
      const stringify = JSON.stringify;
      const old = store.getItem(name) ? JSON.parse(store.getItem(name)) : [];
      return {
        reset() {
          if (!store.getItem(name) || old.length)
            store.setItem(name, stringify([]));
        },
        update(newVal) {
          store.setItem(name, stringify([...old, newVal]));
        },
        getCur() {
          return old;
        },
        pop() {
          old.pop();
          store.setItem(name, stringify(old));
        },
        push(val) {
          store.setItem(name, stringify([...old, val]));
        },
      };
    },
    /**
     * @description
     */
    guid() {
      return Array.from(
        { length: 8 },
        (_, i) =>
          (((1 + Math.random()) * 0x10000) | 0).toString(16).substring(1) +
          ([1, 2, 3, 4].includes(i) ? "-" : "")
      ).join("");
    },
    /**
     * @description
     */
    show() {
      window.history.pushState({ key: this.id }, "");
      this.store().push(this.id);
      this.$emit("onOpen", this.id, this.extra);
    },

    hide() {
      if (this.isSynced) return (this.isSynced = false);
      this.$emit("onClose", { isPopstate: false }, this.extra);
      this.store().pop();
      history.back();
    },
    /**
     * @description
     */
    closeLv() {
      this.$emit("update:visible", false);
    },
    /**
     * @description
     */
    getMaxZIndex() {
      const divs = document.querySelectorAll("*");
      return Math.max(
        ...[...divs].map((i) => parseInt(getComputedStyle(i).zIndex) || 1)
      );
    },
    /**
     * @description
     */
    backLvBy(targetLv, totalLv, callBack) {
      for (let i = targetLv + 1; i <= totalLv; i++) {
        setTimeout(() => {
          callBack && callBack(i);
        }, i * 30);
      }
    },
  },
  destroyed() {
    if (this.$el && this.$el.parentNode) {
      this.$el.parentNode.removeChild(this.$el);
    }
  },
};
</script>
