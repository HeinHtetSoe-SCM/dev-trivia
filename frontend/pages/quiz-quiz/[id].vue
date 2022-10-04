<template>
  <div v-if="childData">
    <div v-for="(d, i) in childData.children" :key="d.id">
      <b-card>
        <span>Question {{ i + 1 }}</span>
        <br />
        <span>{{ d.title }} </span>
        <div v-for="cd in d.children" :key="cd.id">
          <b-form-radio
            :value="cd.id"
            v-model="answers[currentLanIndex].answers[i]"
            @change="
              $store.commit('UPDATE_ANSWER', {
                p_index: currentLanIndex,
                c_index: i,
                value: cd.id,
              })
            "
          >
            {{ cd.title }}
          </b-form-radio>
        </div>
      </b-card>
    </div>
  </div>
</template>
<script>
import * as _ from "lodash";
export default {
  props: ["data"],
  data() {
    return {
      answers: [],
    };
  },
  asyncData({ store }) {
    if (process.client) {
      return { answers: _.cloneDeep(store.state.answers) };
    }
  },
  created() {
    this.answers = _.cloneDeep(this.$store.state.answers);
  },
  computed: {
    childData() {
      return this.data.find((d) => d.id === this.$route.params.id);
    },
    currentLanIndex() {
      return this.$store.state.answers.findIndex(
        (ans) => ans.language_id === this.$route.params.id
      );
    },
  },
};
</script>
