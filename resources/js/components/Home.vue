<template>
  <dashboard-layout>
    <div class="row">
      <div class="col-md-3">
        <div class="sub top">
          <h3>Challenges</h3>
          <div class="top-value">13</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="sub top">
          <h3>Submissions</h3>
          <div class="top-value">13</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="sub top">
          <h3>Students</h3>
          <div class="top-value">13</div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="sub top">
          <h3>Followers</h3>
          <div class="top-value">13</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <a
          href="#/competitions/new"
          class="sub challenge-sub"
          style="background: url(assets/images/chess-a.jpg)"
        >
          <div class="challenge-sub-sub create">Create Challenge</div>
        </a>
      </div>
      <div class="col-md-6">
        <a
          href="#/submissions"
          class="sub challenge-sub"
          style="background: url(assets/images/chess-b.jpg)"
        >
          <div class="challenge-sub-sub submission">View Submissions</div>
        </a>
      </div>
    </div>
  </dashboard-layout>
</template>

<script>
import DashboardLayout from "./Dashboard";
export default {
  name: "Home",
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