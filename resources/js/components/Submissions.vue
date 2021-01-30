<template>
  <dashboard-layout>
    <div class="container-fluid main-content">
      <div class="row">
        <div class="col-md-12">
          <h1>Submissions</h1>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Challenge</th>
                <th scope="col">User</th>
                <th scope="col">Score</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>This is challenge one</td>
                <td>Flovet Asong</td>
                <td>32</td>
                <td>
                    <router-link to="/competitions/review/1">
                        <button>Review</button>
                    </router-link>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </dashboard-layout>
</template>


<script>
import DashboardLayout from "./Dashboard";
export default {
  name: "Submissions",
  data: function () {
    return {};
  },
  components: {
    DashboardLayout,
  },
  methods: {
    init: function () {},
  },
  mounted() {},
};
</script>