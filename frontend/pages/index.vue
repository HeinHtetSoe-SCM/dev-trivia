<template>
  <div class="container">
    <ol>
      <li v-for="quiz of quizzes" :key="quiz">
        {{ quiz.title }}
      </li>
    </ol>
  </div>
</template>

<script>
export default {
  name: 'IndexPage',
  data: () => {
    return {
      responses: [],
      quizzes: [],
      records: [],
    }
  },
  async fetch({ $axios }) {
    this.responses = await $axios.$get(`http://localhost:8000/api/v1/quiz`);
    console.log(this.responses.quizzes)
    for(let i = 0; i < responses.quizzes.length; i++) {
      this.quizzes.push(responses.quizzes[i]);
    }
  },
}
</script>
