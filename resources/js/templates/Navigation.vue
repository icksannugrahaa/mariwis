<template>
  <div class="vue-nav">
    <v-list-item>
      <v-card v-if="!currentUser" class="mx-auto">
        <v-img
          class="white--text"
          height="150px"
          src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
        >
          <!-- <v-card-title class="align-end fill-height">Icksan Nugraha</v-card-title> -->
        </v-img>
        <v-card-text>
          <h1>Login Yuk !</h1>
        </v-card-text>
        <v-card-actions>
          <LRModal></LRModal>
        </v-card-actions>
      </v-card>
      <v-card v-else class="mx-auto">
        <v-img
          class="white--text"
          height="150px"
          src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
        >
          <!-- <v-card-title class="align-end fill-height">Icksan Nugraha</v-card-title> -->
        </v-img>
        <v-card-text>
          <h1>{{currentUser.firstname +' '+ currentUser.lastname }}</h1>
        </v-card-text>
        <v-card-actions>
          <v-tooltip right>
            <template v-slot:activator="{ on }">
              <v-btn small color="primary" class="ma-2 white--text" v-on="on">
                <v-icon small dark>mdi-settings</v-icon>
              </v-btn>
            </template>
            <span>Pengaturan Akun</span>
          </v-tooltip>
          <v-tooltip right>
            <template v-slot:activator="{ on }">
              <v-btn small color="red darken-2" class="ma-2 white--text" v-on="on" @click="logout">
                <v-icon small dark>mdi-logout</v-icon>
              </v-btn>
            </template>
            <span>Logout</span>
          </v-tooltip>
        </v-card-actions>
      </v-card>
    </v-list-item>
  </div>
</template>

<script>
import LRModal from "../pages/Auth/LRModal";
export default {
  name: "vue-navigation",
  components: {
    LRModal
  },
  methods: {
    logout() {
      this.$store.commit("logout");
      this.$router.push("/");
    }
  },
  computed: {
    currentUser() {
      return this.$store.getters.currentUser;
    }
  }
};
</script>

<style lang="scss" scoped>
</style>