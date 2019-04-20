<!--
 *  TCMS Project.
 *  SnackBar.vue
 *  Created: Sep 10, 2018
 *  Author: Gerald Downey
-->

<template>
  <v-snackbar v-model="display" :timeout="timeout" :top="true">
    <v-icon class="snackbar-icon">{{ icon }}</v-icon>
    <center>{{ text }}</center>
    <br>
    <v-btn :color="color" flat @click="display = false" width="100">Okay</v-btn>
  </v-snackbar>
</template>
<script>
export default {
  data: () => ({
    display: false,
    y: "top",
    x: null,
    mode: "",
    timeout: 10000
  }),
  props: ["text", "color", "icon"]
};
</script>
