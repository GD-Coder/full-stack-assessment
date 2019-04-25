<!--
 *  Assessment
 *  messageForm.vue
 *  Author: Gerald Downey
-->

<template>
  <v-container>
    <v-layout row wrap>
      <v-card class="dsd-card">
        <v-card-title class="dsd-header">How can we help you?</v-card-title>
        <v-form
          ref="messageForm"
          v-model="valid"
          id="messageForm"
          class="message-form"
          lazy-validation
        >
          <v-layout row wrap>
            <v-flex xs12 sm12 md6 lg6 class="dsd-flex">
              <v-text-field
                prepend-icon="person"
                v-model="message.name"
                label="Name*"
                hint="What is your name?"
                :rules="nameRules"
                box
                color="success"
                required
              ></v-text-field>
            </v-flex>

            <v-flex xs12 sm12 md6 lg6 class="dsd-flex">
              <v-text-field
                prepend-icon="email"
                v-model="message.email"
                label="Email*"
                hint="What email address can we reach you at?"
                :rules="emailRules"
                box
                color="success"
                required
              ></v-text-field>
            </v-flex>
          </v-layout>

          <v-layout row wrap>
            <v-flex xs12 sm12 md6 lg6 class="dsd-flex">
              <v-text-field
                prepend-icon="work"
                v-model="message.company"
                label="Company*"
                hint="What company do you work for?"
                :rules="companyRules"
                box
                color="success"
                required
              ></v-text-field>
            </v-flex>

            <v-flex xs12 sm12 md6 lg6 class="dsd-flex">
              <v-text-field
                prepend-icon="phone"
                v-model="message.phone"
                label="Phone Number*"
                hint="What number we can reach you at?"
                :rules="phoneRules"
                mask="phone"
                box
                color="success"
                required
              ></v-text-field>
            </v-flex>
          </v-layout>

          <v-layout row wrap>
            <v-flex xs12 sm12 md12 lg12 class="dsd-flex">
              <v-text-field
                prepend-icon="label"
                v-model="message.subject"
                label="Subject*"
                hint="What is this message regarding?"
                :rules="subjectRules"
                box
                color="success"
                required
              ></v-text-field>
            </v-flex>

            <v-flex xs12 sm12 md12 lg12 class="dsd-flex">
              <v-textarea
                rows="3"
                prepend-icon="chat"
                v-model="message.content"
                label="Message*"
                hint="What would you like to say?"
                :rules="contentRules"
                box
                color="success"
                required
              ></v-textarea>
            </v-flex>
          </v-layout>

          <v-btn id="send-button" color="success" :disabled="!valid" @click="saveMessage">Send</v-btn>
          <v-btn color="error" @click="clearMessage">Clear</v-btn>
        </v-form>
        <div v-show="errors">
            <h3 class="error-header">Hmmm... Something's not right...</h3>
          <ul class="error-list" id="errors"></ul>
        </div>
      </v-card>
    </v-layout>
  </v-container>
</template>
<script>
export default {
  data: () => ({
    valid: true,
    errors: false,
    message: {},
    nameRules: [v => !!v || "Name is required"],
    emailRules: [v => !!v || "Email address is required"],
    companyRules: [v => !!v || "Company name is required"],
    phoneRules: [v => !!v || "Phone number is required"],
    subjectRules: [v => !!v || "Subject is required"],
    contentRules: [v => !!v || "Message is required"]
  }),
  mounted() {},
  components: {},
  methods: {
    saveMessage() {
      if (this.$refs.messageForm.validate()) {
        document.getElementById("send-button").disabled = true
        this.$root.messageStore.dispatch("saveMessage", this.message)
      }
    },
    clearMessage() {
      this.message = {};
      this.valid = true;
    }
  }
};
</script>
