<template>
  <dashboard-layout>
    <div class="container-fluid main-content">
      <!-- this is the create a challenge section -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h1>Review Submission</h1>
            <form class="rate-submission">
              <ol>
                <li>
                  <fieldset>
                    <label>Submitter Summary</label>
                    <br />
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                      Esse pariatur veritatis similique excepturi quisquam, unde
                      doloremque earum distinctio blanditiis corporis commodi
                      saepe repellendus molestiae soluta eos veniam maiores quia
                      rem?
                    </p>
                    <ul>
                      <li>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Tenetur, quos.
                      </li>
                      <li>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Tenetur, quos.
                      </li>
                      <li>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Tenetur, quos.
                      </li>
                      <li>
                        Lorem ipsum, dolor sit amet consectetur adipisicing
                        elit. Tenetur, quos.
                      </li>
                    </ul>
                  </fieldset>
                </li>
                <li>
                  <label>Submitted on</label>
                  <div class="submission-time">
                    <span>00 / 00 / 00 , 00:00</span>
                    <div class="early-or-late">
                      <div class="early">On time</div>
                      <div class="late">Late</div>
                    </div>
                  </div>
                </li>
                <li>
                  <fieldset class="">
                    <label>Files &amp; Links</label>
                    <div>
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <a href="" class="file-card">
                            <div class="file-icon">
                              <i class="fas fa-file"></i>
                            </div>
                            <div class="file-info">
                              <span class="file-name"
                                >This is the file name</span
                              >
                              <span class="file-size">3.46 MB</span>
                            </div>
                          </a>
                        </div>
                        <div class="col-md-6 col-sm-12 links">
                          <a
                            href="http://127.0.0.1:5500/dashboard/rate-submission.html"
                            >http://127.0.0.1:5500/dashboard/rate-submission.html</a
                          >
                          <a
                            href="http://127.0.0.1:5500/dashboard/rate-submission.html"
                            >http://127.0.0.1:5500/dashboard/rate-submission.html</a
                          >
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </li>
                <li>
                  <label>Give your final rating on the challenge</label>
                  <form class="final-rating-form">
                    <fieldset id="final-rating">
                      <div class="row">
                        <div class="col-md-6 col-sm-12">
                          <input
                            class="very-poor"
                            type="radio"
                            name="rating-1"
                            id="rating-1"
                          />
                          <label for="rating-1">1</label>
                          <input
                            class="very-poor"
                            type="radio"
                            name="rating-1"
                            id="rating-2"
                          />
                          <label for="rating-2">2</label>
                          <input
                            class="poor"
                            type="radio"
                            name="rating-1"
                            id="rating-3"
                          />
                          <label for="rating-3">3</label>
                          <input
                            class="poor"
                            type="radio"
                            name="rating-1"
                            id="rating-4"
                          />
                          <label for="rating-4">4</label>
                          <input
                            class="average"
                            type="radio"
                            name="rating-1"
                            id="rating-5"
                          />
                          <label for="rating-5">5</label>
                          <input
                            class="average"
                            type="radio"
                            name="rating-1"
                            id="rating-6"
                          />
                          <label for="rating-6">6</label>
                          <input
                            class="good"
                            type="radio"
                            name="rating-1"
                            id="rating-7"
                          />
                          <label for="rating-7">7</label>
                          <input
                            class="good"
                            type="radio"
                            name="rating-1"
                            id="rating-8"
                          />
                          <label for="rating-8">8</label>
                          <input
                            class="very-good"
                            type="radio"
                            name="rating-1"
                            id="rating-9"
                          />
                          <label for="rating-9">9</label>
                          <input
                            class="very-good"
                            type="radio"
                            name="rating-1"
                            id="rating-10"
                          />
                          <label for="rating-10">10</label>
                          <div class="final-rating-result col-md-6 col-sm-12">
                            <div class="very-poor-result">Very Poor</div>
                            <div class="poor-result">Poor</div>
                            <div class="average-result">Average</div>
                            <div class="good-result">Good</div>
                            <div class="very-good-result">Very-good</div>
                          </div>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </li>

                <h4>NOTES:</h4>
                <li>
                  <fieldset>
                    <label for="challenge-details"
                      >Enter your review on the challenge</label
                    >
                    <br />
                    <textarea
                      type="text"
                      id="challenge-details"
                      placeholder="Challenge review goes here"
                    ></textarea>
                  </fieldset>
                </li>
                <li>
                  <fieldset>
                    <label>Skills that need improvement</label>
                    <div class="skill-con">
                      <input type="checkbox" name="" id="testing" /><label
                        for="testing"
                        class="chip"
                        >Testing</label
                      >
                      <input
                        type="checkbox"
                        name=""
                        id="responsive-design"
                      /><label for="responsive-design" class="chip"
                        >Responsive Design</label
                      >
                      <input type="checkbox" name="" id="api" /><label
                        for="api"
                        class="chip"
                        >Api</label
                      >
                      <input type="checkbox" name="" id="front-end" /><label
                        for="front-end"
                        class="chip"
                        >Front-end</label
                      >
                      <input type="checkbox" name="" id="back-end" /><label
                        for="back-end"
                        class="chip"
                        >Back-end</label
                      >
                      <input type="checkbox" name="" id="full-stack" /><label
                        for="full-stack"
                        class="chip"
                        >Full-stack</label
                      >
                      <input type="checkbox" name="" id="design-system" /><label
                        for="design-system"
                        class="chip"
                        >Design-system</label
                      >
                      <input type="checkbox" name="" id="analytical" /><label
                        for="analytical"
                        class="chip"
                        >Analytical</label
                      >
                      <input type="checkbox" name="" id="interpersonal" /><label
                        for="interpersonal"
                        class="chip"
                        >Interpersonal</label
                      >
                      <input type="checkbox" name="" id="debugging" /><label
                        for="debugging"
                        class="chip"
                        >Debugging</label
                      >
                      <input type="checkbox" name="" id="SEO" /><label
                        for="SEO"
                        class="chip"
                        >SEO</label
                      >
                      <input type="checkbox" name="" id="ui/ux" /><label
                        for="ui/ux"
                        class="chip"
                        >UI/UX</label
                      >
                    </div>
                  </fieldset>
                </li>
                <li>
                  <fieldset>
                    <label>Technologies that need improvement</label>
                    <div class="tech-con">
                      <input type="checkbox" name="" id="css" /><label
                        for="css"
                        class="skill css"
                        ><i class="fab fa-css3-alt"></i>
                        <p>CSS3</p></label
                      >
                      <input type="checkbox" name="" id="html" /><label
                        for="html"
                        class="skill html"
                        ><i class="fab fa-html5"></i>
                        <p>HTML</p></label
                      >
                      <input type="checkbox" name="" id="javascript" /><label
                        for="javascript"
                        class="skill js"
                        ><i class="fab fa-js"></i>
                        <p>Javascript</p></label
                      >
                      <input type="checkbox" name="" id="node-js" /><label
                        for="node-js"
                        class="skill node-js"
                        ><i class="fab fa-node-js"></i>
                        <p>Node JS</p></label
                      >
                      <input type="checkbox" name="" id="angular-js" /><label
                        for="angular-js"
                        class="skill angular-js"
                        ><i class="fab fa-angular"></i>
                        <p>Angular JS</p></label
                      >
                      <input type="checkbox" name="" id="react-js" /><label
                        for="react-js"
                        class="skill react-js"
                        ><i class="fab fa-react"></i>
                        <p>React JS</p></label
                      >
                      <input type="checkbox" name="" id="vue-js" /><label
                        for="vue-js"
                        class="skill vue-js"
                        ><i class="fab fa-vuejs"></i>
                        <p>Vue JS</p></label
                      >
                    </div>
                  </fieldset>
                </li>
              </ol>

              <button type="submit">Submit</button>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="sub"></div>
        </div>
        <div class="col-md-4">
          <div class="sub"></div>
        </div>
        <div class="col-md-4">
          <div class="sub"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="sub"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="sub"></div>
        </div>
        <div class="col-md-6">
          <div class="sub"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="sub"></div>
        </div>
        <div class="col-md-4">
          <div class="sub"></div>
        </div>
        <div class="col-md-4">
          <div class="sub"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="sub"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="sub"></div>
        </div>
        <div class="col-md-6">
          <div class="sub"></div>
        </div>
      </div>
    </div>
  </dashboard-layout>
</template>

<script>
import DashboardLayout from "./Dashboard";
export default {
  name: "ReviewCompetition",
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