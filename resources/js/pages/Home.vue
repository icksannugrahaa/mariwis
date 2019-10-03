<template>
  <div>
    <h1>Selamat Datang {{ currentUser.firstname +' '+currentUser.lastname }}</h1>
  </div>
</template>

<script>
export default {
  name: "home",
  computed: {
    currentUser() {
      return this.$store.getters.currentUser;
    }
  }
};
</script>

<style lang="scss" scoped>
</style>