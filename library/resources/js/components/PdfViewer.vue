<template>
  <div style="height: 100svh;">
    <vue-pdf-app :pdf="pdf"></vue-pdf-app>
  </div>
</template>

<script>
import VuePdfApp from "vue3-pdf-app";
import "vue3-pdf-app/dist/icons/main.css";

export default {
  components: {
    VuePdfApp,
  },
  props: {
    pdf: {
      type: String,
      required: true,
    },
  },
};
</script>
