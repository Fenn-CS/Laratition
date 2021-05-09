import http from "./http-common";

class LaratitionDataService {

    createCompetition(form) {
        return http.post('/competition/create', form).catch(this.errorHandler);;
    }
    
    updateCompetition(form) {
       return http.post('/competitions/update/', form).catch(this.errorHandler);
    }

    getCompetitions() {
        return http.get('/competitions').catch(this.errorHandler);
    }

    errorHandler(error) {
        if (error.response) {
            console.log(error.response.data);
            console.log(error.response.status);
            console.log(error.response.headers);
        }
    }

}

export default new LaratitionDataService();