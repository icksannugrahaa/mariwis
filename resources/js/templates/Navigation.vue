<template>
  <div class="vue-nav">
    <v-list-item>
      <v-card class="mx-auto">
        <v-img
          class="white--text"
          height="150px"
          src="https://cdn.vuetifyjs.com/images/cards/docks.jpg"
        >
          <!-- <v-card-title class="align-end fill-height">Icksan Nugraha</v-card-title> -->
        </v-img>
        <v-card-text>
          <h1>Icksan Nugraha</h1>
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
              <v-btn small color="red darken-2" class="ma-2 white--text" v-on="on">
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
export default {
  name: "vue-navigation"
};
</script>

<style lang="scss" scoped>
</style>