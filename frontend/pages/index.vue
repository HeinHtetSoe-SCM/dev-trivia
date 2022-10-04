<template>
  <b-container fluid class="container">
    <b-row>
      <b-col>
        <b-button type="button" block variant="primary" tag="nuxt-link" :to="`/quiz-quiz/1`">
        Start Quiz
      </b-button>
      </b-col>
    </b-row>
    <b-row class="mt-3">
      <b-col>
        <b-table striped hover :items="data" :fields="fields">
        <template #cell(details)="row">
          <b-button
            size="sm"
            class="mr-2"
            tag="nuxt-link"
            :to="`/record/${row.item.id}`"
          >
          Details
          </b-button>
        </template>
      </b-table>
      </b-col>
    </b-row>
    <b-row>
      <b-col>
        {{ $store.state.languages }}
      </b-col>
    </b-row>
  </b-container>
</template>

<script>
import moment from "moment";
export default {
  name: 'IndexPage',
  data: () => {
    return {
      responses: [],
      quizzes: [],
      records: [],
    }
  },
  async fetch({ $axios, store }) {
    try {
      const response = await $axios.$get(`/api/v1/quiz`);
    store.commit("SET_LANGUAGES", response.quizzes);
    store.commit("SET_RECORDS", response.records);
    const tempData = [];
    response.quizzes.map((element) => {
      tempData.push({
        language_id: element.id,
        answers: element.children ? Array.from({ length: element.children.length }, () => "") : null,
      });
      return 1;
    });
    store.commit("SET_INIT_ANSWERS", tempData);
    const items = response.records.map((record, index) => {
      return {
        id: record.id,
        "no.": index +1,
        date: moment(record.created_at).format("DD-MM-YYYY"),
        correct_answers: record.details_answer.filter(
          (ans) => ans.status === 1
        ).length,
      };
    });
    return {
      data: items,
      fields: ["no.", "date", "correct_answers", "details"],
    };
    } catch (error) {
      console.log(error);
    }
  },
};
</script>
<style>
  .container {
    padding: 10px 0;
  }
</style>
