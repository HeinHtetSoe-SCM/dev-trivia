<template>
    <div>
      <client-only>
        <b-nav tabs fill class="b-color">
          <button class="btn btn-secondary next-btn">
            <NuxtLink to="/" class="next-route">Exit</NuxtLink>
          </button>
          <b-nav-item
            tag="nuxt-link"
            v-for="(item, index) in data"
            :key="item.id"
            :to="`/quiz-quiz/${item.id}`"
            exact
            exact-active-class="active"
          >
            {{ index + 1 }}. {{ item.title }}
          </b-nav-item>
        </b-nav>
      </client-only>
      <nuxt-child :data="data" />
  
      <div class="b-color footer">
        <span class="ans-count"
          >{{ choiceAns.choosen }} / {{ choiceAns.total }}</span
        >
        <div v-if="nextRoute">
          <button class="btn btn-secondary next-btn">
            <NuxtLink :to="nextRoute" class="next-route">Next</NuxtLink>
          </button>
        </div>
        <div v-else>
          <button class="btn btn-secondary" @click="submitAns()">Submit</button>
        </div>
      </div>
    </div>
  </template>

<script>

import { mapState } from 'vuex'
export default {
  async asyncData({ axios, store, rediret }) {
    let data
    if (process.client) {
      data = await store.state.languages
    } else {
      rediret('/')
    }

    return { data }
  },
  computed: {
    ...mapState(['answers']),
    nextRoute() {
      const id = this.$route.params.id
      const index = this.$store.state.languages.findIndex((lan) => lan.id === id)
      if (index + 1 === this.$store.state.languages.length) {
        return null
      }
      const nextId = this.$store.state.languages[index + 1].id
      return `/quiz-quiz/${nextId}`
    },
    choiceAns() {
      let total = 0;
      let choosen = 0;
      this.$store.state.answers.map((ans) => {
        total += ans.answers ? ans.answers.length : 0;
        choosen += ans.answers ? ans.answers.filter((a) => a !== "").length : 0;
        return 1;
      });
      return { total, choosen };
    },
  },
  methods: {
    async submitAns() {
      let chooseAns = [];
      this.answers.map((ans) => {
        if (ans.answers) {
          chooseAns = chooseAns.concat(ans.answers.filter((a) => a !== ""));
        }
        return 1;
      });
      try {
        const res = await this.$axios.post("/api/v1/quiz", {
          answer: chooseAns.join(","),
        });
        if (res) {
          this.$router.push("/");
        }
      } catch (error) {
        console.error(error);
      }
    },
  },
}
</script>

<style>
</style>