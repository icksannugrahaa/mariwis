<template>
  <div class="login-form d-pad">
    <v-form ref="form" v-model="valid" lazy-validation>
      <v-text-field v-model="formData.email" :rules="emailRules" label="E-mail" required></v-text-field>
      <v-text-field
        v-model="formData.password"
        :rules="passwordRules"
        label="Password"
        :append-icon="show ? 'mdi-eye-outline' : 'mdi-eye-off-outline'"
        :type="show ? 'text' : 'password'"
        counter
        @click:append="show = !show"
        required
      ></v-text-field>
      <v-btn :disabled="!valid" color="success" class="mr-4" @click="authenticate">Login</v-btn>
      <v-btn color="error" class="mr-4" @click="reset">Reset Form</v-btn>
      <br />
      <v-progress-linear
        :active="loading"
        :indeterminate="loading"
        absolute
        bottom
        color="blue lighten-1"
      ></v-progress-linear>
      <br />
      <v-alert v-if="authError" close-text="Tutup" type="error" dismissible>{{ authError }}</v-alert>
    </v-form>
  </div>
</template>

<script>
import { login } from "../../../helpers/auth";

export default {
  name: "login-form",
  data: () => ({
    valid: true,
    show: false,
    loading: false,
    formData: {
      email: "",
      password: ""
    },
    error: "",
    passwordRules: [
      v => !!v || "Tolong isi password !",
      v => (v && v.length >= 6) || "Password harus lebih dari 6 karakter !"
    ],
    emailRules: [
      v => !!v || "Tolong isi E-mail !",
      v => /.+@.+\..+/.test(v) || "E-mail harus valid !"
    ]
  }),

  methods: {
    authenticate() {
      this.loading = true;
      this.$store.dispatch("login");
      login(this.formData)
        .then(res => {
          this.loading = false;
          this.$store.commit("loginSuccess", res);
          this.$router.push({ path: "/home" });
        })
        .catch(error => {
          this.loading = false;
          this.$store.commit("loginFailed", { error });
        });
    },
    reset() {
      this.$refs.form.reset();
    },
    resetValidation() {
      this.$refs.form.resetValidation();
    }
  },
  computed: {
    authError() {
      return this.$store.getters.authError;
    }
  }
};
</script>

<style lang="scss" scoped>
.d-pad {
  padding: 10px !important;
}
</style>