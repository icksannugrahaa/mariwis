<template>
  <div>
    <h1>{{welcome}}</h1>
  </div>
</template>

<script>
export default {
  name: "home",
  computed: {
    welcome() {
      return this.$store.getters.getWelcomeMessages;
    }
  }
};
</script>

<style lang="scss" scoped>
</style>