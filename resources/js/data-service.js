import http from "./http-common";

class LaratitionDataService {
    createCompetition(form) {
        return http.post('/competition/create');
    }

    getCompetitions() {
        return http.get('/competitions');
    }

}

export default new LaratitionDataService();