<template>
  <div id="main">
    <div id="side-nav" :class="{ hide: hideSideNav }">
      <div id="logo-con">
        <a href="#/" id="logo"> LARATITION </a>
      </div>
      <div class="sub-nav">
        <div class="sub-nav-title">Competitions</div>
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-h header" id="headingOne">
              <a
                href="#"
                v-on:click="expandCompetitionLinks = !expandCompetitionLinks"
                class="accordion-button"
                :class="{ collapsed: expandCompetitionLinks }"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="false"
                aria-controls="collapseOne"
              >
                <i class="fas fa-user"></i>Competitions
              </a>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse"
              :class="{ show: expandCompetitionLinks }"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <a href="#/competitions/new">
                  <i class="fas fa-user"></i>New Competiton</a
                >
                <a href="#/competitions">
                  <i class="fas fa-user"></i>Competition List</a
                >
              </div>
            </div>
          </div>
        </div>
        <a href="#/submissions"> <i class="fas fa-user"></i>Submissions</a>
      </div>
    </div>
    <div class="side-nav-overlay"></div>
    <div id="dashboard-content" :class="{ expand: hideSideNav }">
      <header :class="{ expand: hideSideNav }">
        <div id="side-nav-toggle-btn" @click="toggleNav">
          <i class="fas fa-bars"></i>
        </div>
        <div class="header-sub">
          <nav id="header-navigator">
            <a href="#/">Dashboard</a>
            <a href="#">Users</a>
            <a href="#">Settings</a>
          </nav>
          <div class="user-board">
            <a href="#"><i class="fas fa-bell"></i></a>
            <a href="#"><i class="fas fa-list"></i></a>
            <a href="#"><i class="fas fa-envelope"></i></a>
            <button style="background: url(assets/images/chess-a.jpg)"></button>
          </div>
        </div>
      </header>
      <div class="breadcrumb-bar" :class="{ expand: hideSideNav }">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">
              Dashboard
            </li>
          </ol>
        </nav>
      </div>
      <div class="container-fluid main-content">
        <slot />
      </div>
    </div>
  </div>
</template>

<script>
import "../../css/app.css";
export default {
  data: () => {
    return {
      hideSideNav: false,
      showDropdown: false,
      expandCompetitionLinks: false,
      categories: [],
      csrf: window.csrf,
      user: "",
    };
  },
  methods: {
    toggleNav: function () {
      this.hideSideNav = !this.hideSideNav;
    },
    toggleDropdown: function () {
      this.showDropdown = !this.showDropdown;
    },
    logout: function () {
      this.$refs.logoutButton.click();
    },
  },
  mounted: function () {
    //this.user = JSON.parse(window.user.replaceAll("&quot;", '"'));
  },
};
</script>