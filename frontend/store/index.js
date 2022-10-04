import Vue from 'vue';

export const state = () =>({
    answers: [],
    languages: [],
    records: [],
});

export const mutations = {
    SET_INIT_ANSWERS(state, ans) {
        state.answers = ans;
    },
    SET_RECORDS(state, records) {
        state.records = records;
    },
    UPDATE_ANSWER(state, context) {
        Vue.set(
            state.answers[context.p_index].answers,
            context.c_index,
            context.value
        );
    },
    SET_LANGUAGES(state, languages) {
        state.languages = languages;
    },
};