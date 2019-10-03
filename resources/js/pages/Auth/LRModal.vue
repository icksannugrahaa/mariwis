<template>
  <div class="login-regis-modal w-100">
    <v-row justify="center">
      <v-dialog v-model="dialog" width="600px">
        <template v-slot:activator="{ on }">
          <v-btn block small color="primary" class="ma-2 white--text b-block" dark v-on="on">Akun</v-btn>
        </template>
        <v-card>
          <v-card-title>
            <!-- <span class="headline">Form Register/Login</span> -->
          </v-card-title>
          <v-card-text>
            <v-card>
              <v-card-title class="text-center justify-center py-6">
                <h1 class="font-weight-bold display-3 basil--text">
                  KUYY !!
                  <br />Masuk / Daftar
                </h1>
              </v-card-title>
              <v-tabs background-color="transparent" color="basil" grow>
                <v-tab>
                  <v-icon left>mdi-account</v-icon>Masuk
                </v-tab>
                <v-tab>
                  <v-icon left>mdi-account-multiple-plus</v-icon>Daftar
                </v-tab>
                <v-tab-item>
                  <!-- <v-card flat> -->
                  <LoginForm></LoginForm>
                  <!-- </v-card> -->
                </v-tab-item>
                <v-tab-item>
                  <!-- <v-card flat color="basil"> -->
                  <RegisterForm></RegisterForm>
                  <!-- </v-card> -->
                </v-tab-item>
              </v-tabs>
            </v-card>
          </v-card-text>
          <v-card-actions>
            <div class="flex-grow-1"></div>
            <v-btn color="green darken-1" text @click="dialog = false">Batal</v-btn>
          </v-card-actions>
        </v-card>
      </v-dialog>
    </v-row>
  </div>
</template>

<script>
import LoginForm from "./form/LoginForm";
import RegisterForm from "./form/RegisterForm";

export default {
  name: "lr-modal",
  data() {
    return {
      dialog: false
    };
  },
  components: {
    LoginForm,
    RegisterForm
  }
};
</script>

<style lang="scss" scoped>
/* Helper classes */
.basil {
  background-color: #fffbe6 !important;
}
.basil--text {
  color: #90caf9 !important;
}
.w-100 {
  width: 100%;
}
.b-block {
  min-width: auto !important;
}
</style>