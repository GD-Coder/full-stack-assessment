require('./bootstrap')
window.axios = require('axios')

import Vue from 'vue'
import Vuex from 'vuex'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import 'babel-polyfill'
Vue.use(Vuex)
Vue.use(Vuetify)

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

'./components/MessageForm.vue'
'./components/SnackBar.vue'

const baseUrl = window.location
const location = baseUrl.protocol + "//" + baseUrl.host + "/"
const messageStore = new Vuex.Store({
    state: {
        message: {},
    },
    mutations: {
        setMessage(state, data) {
            state.message = data
        },
        createMessage(state) {
            axios.post('create/message', {
                message: state.message
            }).then(response => {
                app.$refs.messageForm.errors = false
                setTimeout(() => {
                    window.location.assign(location + "success")
                }, 100);
            }).catch(error => {
                app.$refs.messageForm.errors = true
                app.objectToArray(error.response.data.errors).forEach(error => {
                    document
                    .getElementById("errors")
                    .insertAdjacentHTML("beforeend", "<li>"+ error[1][0].replace('message.','') + "</li>")
                })
            })
        }
    },
    actions: {
        saveMessage(context, data) {
            context.commit('setMessage', data)
            context.commit('createMessage')
        },
    }
})

const app = new Vue({
    el: '#app',
    data: () => ({
        drawer: false,
        snackbarText: null,
        snackbarColor: null,
        snackbarIcon: null,
        messageStore: messageStore
    }),
    mounted() {},
    methods: {
        notify(message, result) {
            this.snackbarText = message
            this.snackbarColor = result
            var icon = null
            switch (result) {
                case "error":
                    icon = "thumb_down_alt"
                    break;
                case "warning":
                    icon = "pan_tool"
                    break;
                default:
                    icon = "thumb_up_alt"
            }
            this.snackbarIcon = icon
            this.$refs.snackBar.display = true
        },
        objectToArray(object) {
            return Object.keys(object).map((key) => [Number(key), object[key]])
        }
    }
})
