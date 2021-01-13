<template>
  <div class="container-fluid content">
        <div class="container">
            <h1>Admin Dashboard</h1>
            <div class="row">
                  <router-link class="create-competition create-card" to="/create-competition">
                    <div class="create-card-sub">
                        <h3>Create Competition</h3>
                        <p>Here you can create a competition for your students or for all users to see</p>
                    </div>
                 </router-link>
                  <router-link class="view-submissions create-card" to="/view-competition">
                    <div class="create-card-sub">
                        <h3>View Submissions</h3>
                        <p>view yhe submitted solutions to your challenges</p>
                    </div>
                  </router-link>
            </div>
        </div>
    </div>
</template>

<script>
    import LaratitionDataService from "../data-service";
    export default {
        async mounted() {

        }
    }
</script>