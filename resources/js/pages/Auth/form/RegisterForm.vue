<template>
  <div class="login-form d-pad">
    <v-form ref="form" v-model="valid" lazy-validation>
      <v-text-field v-model="formData.email" :rules="emailRules" label="E-mail" required></v-text-field>
      <v-text-field v-model="formData.password" :rules="passwordRules" label="Password" required></v-text-field>
      <v-btn :disabled="!valid" color="success" class="mr-4" @click="authenticate">Login</v-btn>
      <v-btn color="error" class="mr-4" @click="reset">Reset Form</v-btn>
    </v-form>
  </div>
</template>

<script>
import {login} from "../../../helpers/auth";

export default {
  name: "login-form",
  data: () => ({
    valid: true,
    formData: {
      email: "",
      password: ""
    },
    error: "",
    passwordRules: [
      v => !!v || "Tolong isi password !",
      v => (v && v.length <= 6) || "Password harus lebih dari 6 karakter !"
    ],
    emailRules: [
      v => !!v || "Tolong isi E-mail !",
      v => /.+@.+\..+/.test(v) || "E-mail harus valid !"
    ]
  }),

  methods: {
    authenticate() {
      this.$store.dispatch("login");
      login(this.formData)
        .then(res => {
          this.$store.commit("loginSuccess", res);
          this.$router.push({ path: "/" });
        })
        .catch(err => {
          this.$store.commit("loginFailed", { err });
        });
    },
    reset() {
      this.$refs.form.reset();
    },
    resetValidation() {
      this.$refs.form.resetValidation();
    }
  }
};
</script>

<style lang="scss" scoped>
.d-pad {
  padding: 10px !important;
}
</style>