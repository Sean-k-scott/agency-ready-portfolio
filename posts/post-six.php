<!-- Start Flexible Meta and Title Content variables -->
<?php $metadesc = "Sean Scott is an aspiring front end developer in his third year at MMU studying website development, his blog goes into detail about his place in the industry and the creation of his portfolio site" ?>
<?php $metakeywords = "Sean, Scott, web, website, development, front, end, front-end, blog" ?>
<?php $title = "React.js - Custom Components - Booking Calendar - Front End Web Developer - Sean Scott" ?>
<!-- End Flexible Meta and Title Content variables -->
  <?php include '../template-parts/global/head.php' ?>
  <?php include '../template-parts/global/header.php' ?>
<main id="top">
  <section class="blog-post_one last-section_padding">
    <div class="flex-container">
      <div class="content-container">
        <a href="/blog/" class="blog__return__start">Return to Blogs</a>
        <h2>React.js Custom Component - Booking Calendar</h2>
        <h3>April 2020</h3>
        <h4>by Sean Scott</h4>
        <a href="http://17083372.webdevmmu.uk/react-calendar/" class="blog__link" title="React.js Custom Calendar Component">Demonstrator Two - React.js Calendar Component</a>
        <a href="https://github.com/Sean-k-scott/react-calendar" class="blog__link" title="GitHub Repository for Project">GitHub Repo</a>
        <p>JavaScript has been both the most needed and the quickest growing programming language for years, and it is showing no signs of slowing down in 2020 and beyond.</p>
        <p>It is supported by all modern browsers and is such a widely utilised language that it can be easily bridge front-end and back-end development (DHTMLX, 2019).</p>
        <p>In Stack Overflow’s Developer Survey (StackOverflow, 2019), JavaScript was both the most used language, beating out HTML and CSS, as well as the language that developers would like to learn the most.</p>
        <p>JavaScript Frameworks have evolved continuously alongside JavaScript’s rise in popularity and have become a key element of development for web projects of all sizes. Also part of Stack Overflow’s survey, the top three most wanted web frameworks are React.js, Vue.js and Angular.js, all of which are JavaScript-based (DHTMLX, 2019).</p>
        <p>Wanting to learn a JavaScript framework, I looked at the strengths and weaknesses of each of the three popular libraries and was surprised to discover that all 3 are popular and viable choices. Vue is by far the most popular, being “starred” over 40,000 times on GitHub. Vue is also lauded for its simplicity and easy, gradual learning curve (Morris, 2020).</p>
        <p>Angular’s rapid prototyping and ease of DOM manipulation makes it a solid framework of choice to learn. For projects that rely on quickly building testable products, angular is superior to other choices, however for people unfamiliar with a Model – View – Controller architecture, learning to develop with angular may be too time-consuming (Rajput, 2016).</p>
        <p>React’s popularity has skyrocketed steadily since 2014 (Buna, 2017), and despite not being as popular in 2020 as Vue in some respects, react has a solid foundation in the job market (Morris, 2020). </p>
        <p>An advantage to choosing react is that learning react goes a lot of the way towards learning react native, a popular app programming language. It’s for this double-barrelled advantage that I chose a react-based project.</p>
        <p>For my main project, I am developing a video-game coaching site. As part of that project I hoped to include a calendar component, allowing people to identify timeslots they are available when expressing interest in coaching.</p>
        <h3>React Calendar Component Project</h3>
        <p>Due to the popularity of the JavaScript-based frameworks, there are multitudes of components available on the web that can be integrated into your project and tweaked to fit your needs, however I decided to have a go at creating my own component and building my own functionality into it, in order to better learn the language as I progress.</p>
        <p>To set up the project, I used ‘create-react-app’, an integrated toolchain that sets up my workflow and allows me to use third-party libraries from npm, something which I needed to do for the date/month structure of the calendar (react.js, 2020).</p>
        <pre><code class="language-javascript">npx create-react-app react-calendar
cd react-calendar
npm start</code></pre>
        <p>I also installed Sass via npm to allow me to easily set up the styling of my component in a way that is comfortable for me.</p>
        <p>Once my project was set up, using Mosh Hamedani (2019)’s guide I created my calendar component in a subfolder and imported it into my App.js, and set up the basic structure of my page and calendar (Figure 1 & Code).</p>
        <div class="flex blog__images">
          <div class="image-container">
            <img src="/assets/img/blog/figure1.png" alt="React Project Folder Structure" />
            <span class="figure">Figure 1</span>
          </div>
        </div>
        <pre><code class="language-javascript">import React from "react";
        import Calendar from "./components/Calendar";
        import "./App.scss";

        class App extends React.Component {

          render() {
            return (
              &lt;div className="App"&gt;
                &lt;header&gt;
                  &lt;div id="title"&gt;
                    &lt;h1&gt;
                      Pinnacle Coaching
                    &lt;/h1&gt;
                  &lt;/div&gt;
                &lt;/header&gt;
                &lt;main&gt;
                  &lt;Calendar /&gt;
                &lt;/main&gt;
              &lt;/div&gt;
            );
          }
        }

        export default App;</code></pre>
        <p>Mosh uses moment.js for his calendar component, I decided to instead use date-fns. Whilst moment.js has more functionality, date-fns is more lightweight and fits my needs for this project.</p>
        <p>Once we’ve installed date-fns via npm, we can make a start on our calendar component, importing react and date-fns and extending our component.</p>
        <pre><code class="language-javascript">mport React from "react";
import * as dateFns from 'date-fns';

class Calendar extends React.Component {</code></pre>
        <p>After this we set our states for the currentMonth, and selectedDate, and render our header. For the basic calendar skeleton, lopping through months, weeks and days, I combined Matej Kovač (2018)’s excellent blog post with date-fns’ documentation. I also really liked the selectedDate styling, so I kept this; altering it slightly and using my project’s colours.</p>
        <p>Now in new territory, it was time to add the extra functionality I wanted to my calendar, to begin I needed to add three timeslots to each date in my loop.</p>
        <p>I wanted the dates in the format of date(st/nd/rd/th), month (3 digits) then my timeslot, in order to do this I created a variable for my date format using date-fns, some empty variables for my formattedDate and formattedTimeslot, as well as three variables for my timeslot strings, and three for the combined formatted dates and slots:</p>
        <pre><code class="language-javascript">const timeslotFormat = "do MMM";

let formattedDate = "";
let formatTimeslot = "";
let timeslotOne = "12am - 3pm";
let timeslotTwo = "4pm - 7pm";
let timeslotThree = "8pm - 11pm";
let fullslotOne = "";
let fullslotTwo = "";
let fullslotThree = "";</pre></code>
        <p>Inside my loop, I used dateFns to format these timeslots and create the three full timeslots:</p>
        <pre><code class="language-javascript">formatTimeslot = dateFns.format(day, timeslotFormat);
fullslotOne = formatTimeslot + " " + timeslotOne;
fullslotTwo = formatTimeslot + " " + timeslotTwo;
fullslotThree = formatTimeslot + " " + timeslotThree;</code></pre>
        <p>Finally, I added the HTML to build up the timeslots that would go into each date and pulled in the necessary variables (Code Snippet), I didn’t want timeslots to be accidentally selectable when clicking between dates, and as the “selected” class already existed I just added display:none to the timeslots when parent class wasn’t “.selected” (Figure 7).</p>
        <pre><code class="language-javascript">&lt;span className="timeslotOne"&gt;{formatTimeslot} {timeslotOne}&lt;/span&gt;
        &lt;span className="timeslotTwo"&gt;{formatTimeslot} {timeslotTwo}&lt;/span&gt;
        &lt;span className="timeslotThree"&gt;{formatTimeslot} {timeslotThree}&lt;/span&gt;</code></pre>
        <div class="flex blog__images">
          <div class="image-container">
            <img src="/assets/img/blog/figure2.png" alt="Calendar Date with added Timeslot" />
            <span class="figure">Figure 2</span>
          </div>
        </div>
        <p>Now that we have our timeslots, it’s time to create the selecting functionality. Building an onClick function, we create three extra states (one for each date) and pull in the date information on each one.</p>
        <p>This is where I struggled, I couldn’t pass the date from my loop back through to my state, so I just used a test string to get the functionality working to return to it later.</p>
        <p>I also wanted to include functionality to clear dates, so I added three extra true/false states for if a date had been selected. I included an if statement to go through each state, so that for each added date, the state was toggled from false to true, so the next clicked date will ignore that field and move to the next:</p>
        <pre><code class="language-javascript">  handleClick = () => {
    if (this.state.selectedOne === false) {
      this.setState({
        selectedOne: true,
        dateOne: "Test One"
      });
    } if (this.state.selectedOne === true && this.state.selectedTwo === false) {
      this.setState({
        selectedTwo: true,
        dateTwo: "Test Two"
      });
    } if (this.state.selectedTwo === true && this.state.selectedThree === false) {
      this.setState({
        selectedThree: true,
        dateThree: "Test Three"
      });
    }
  }</code></pre>
        <p>Next step is to create our render function to display our selected dates, along with our clear date buttons (Code Snippet), which output below our calendar (Figure 3).</p>
        <pre><code class="language-javascript">renderSelected() {
          return (
            &lt;div className="calendar__selected"&gt;
              &lt;div className="calendar__selected__wrapper"&gt;
                &lt;span className="calendar__selected__date"&gt;Timeslot One: {this.state.dateOne}&lt;/span&gt;&lt;button className="clear-button" onClick={this.clearClickOne}&gt;Clear Choice&lt;/button&gt;
              &lt;/div&gt;
              &lt;div className="calendar__selected__wrapper"&gt;
                &lt;span className="calendar__selected__date"&gt;Timeslot Two: {this.state.dateTwo}&lt;/span&gt;&lt;button className="clear-button" onClick={this.clearClickTwo}&gt;Clear Choice&lt;/button&gt;
              &lt;/div&gt;
              &lt;div className="calendar__selected__wrapper"&gt;
                &lt;span className="calendar__selected__date"&gt;Timeslot Three: {this.state.dateThree}&lt;/span&gt;&lt;button className="clear-button" onClick={this.clearClickThree}&gt;Clear Choice&lt;/button&gt;
              &lt;/div&gt;
            &lt;/div&gt;
          )
        }</code></pre>
        <div class="flex blog__images">
          <div class="image-container">
            <img src="/assets/img/blog/figure3.png" alt="Selected Timeslots and Clear Slot Buttons" />
            <span class="figure">Figure 3</span>
          </div>
        </div>
        <p>Finally, we create our onClick’s for our clear date buttons. This time, I created three separate functions, as we need to set the state of the specific choices based on which button is clicked. We clear the field, and we also set the state of the slot back to false.</p>
        <p>This means that when we select a new date, the cleared field results in false and can be chosen to populate with the new date:</p>
        <pre><code class="language-javascript">  clearClickOne = () => {
    this.setState({
      selectedOne: false,
      dateOne: ""
    });
  }

  clearClickTwo = () => {
    this.setState({
      selectedTwo: false,
      dateTwo: ""
    });
  }

  clearClickThree = () => {
    this.setState({
      selectedThree: false,
      dateThree: ""
    });
  }</code></pre>
        <h3 class="extra-mt">Reflection</h3>
        <p>Despite not quite getting the functionality exactly how I wanted it, experimenting with react and making a component was a thoroughly enjoyable experience. It took a lot longer to add functionality than I thought it would, and it made me realise I need to brush up on my base JavaScript skills as well as continue to learn react.</p>
        <h2>References</h2>
        <ul>
          <li>Buna, S. (2017) <i>Yes, React is taking over front-end development. The question is why.</i> FreeCodeCamp [Online] [Accessed on 29<sup>th</sup> March 2020] <a href="https://www.freecodecamp.org/news/yes-react-is-taking-over-front-end-development-the-question-is-why-40837af8ab76/" title="FreeCodeCamp">https://www.freecodecamp.org/news/yes-react-is-taking-over-front-end-development-the-question-is-why-40837af8ab76/</a></li>
          <li>DHTMLX. (2019) <i>JavaScript Trends in 2020 – codeburst.</i> Codeburst [Online] [Accessed on 29<sup>th</sup> March 2020] <a href="https://codeburst.io/javascript-trends-in-2020-b194bebc5ef8" title="Codeburst">https://codeburst.io/javascript-trends-in-2020-b194bebc5ef8</a></li>
          <li>Hamedani, S. (2019) <i>Build a React Calendar Component from scratch – Programming with Mosh.</i> Programming with Mosh [Online] [Accessed on 29<sup>th</sup> March 2020] <a href="https://programmingwithmosh.com/react/build-a-react-calendar-component-from-scratch/" title="Programming with Mosh">https://programmingwithmosh.com/react/build-a-react-calendar-component-from-scratch/</a></li>
          <li>Kovač, M. (2018) <i>Create a custom calendar in React.</i> Flowandform [Online] [Accessed on 29<sup>th</sup> March 2020] <a href="https://blog.flowandform.agency/create-a-custom-calendar-in-react-3df1bfd0b728" title="Flowandform">https://blog.flowandform.agency/create-a-custom-calendar-in-react-3df1bfd0b728</a></li>
          <li>Morris, S. (2020) <i>Which JavaScript Framework Should You Learn First? – Skillcrush.</i> Skillcrush [Online] [Accessed on 29<sup>th</sup> March 2020] <a href="https://skillcrush.com/blog/which-javascript-framework-should-you-learn-first/" title="Skillcrush">https://skillcrush.com/blog/which-javascript-framework-should-you-learn-first/</a></li>
          <li>Rajput, M. (2016) <i>The pros and cons of choosing AngularJS – JAXenter.</i> JAXenter [Online] [Accessed on 29<sup>th</sup> March 2020] <a href="https://jaxenter.com/the-pros-and-cons-of-choosing-angularjs-124850.html" title="JAXenter">https://jaxenter.com/the-pros-and-cons-of-choosing-angularjs-124850.html</a></li>
          <li>ReactJS.org (2020) <i>Create a new React App – React.</i> ReactJS.org [Online] [Accessed on 29<sup>th</sup> March 2020] <a href="https://reactjs.org/docs/create-a-new-react-app.html" title="ReactJS.org">https://reactjs.org/docs/create-a-new-react-app.html</a></li>
          <li>StackOverflow. (2019) <i>Stack Overflow Developer Survey 2019.</i> StackOverflow [Online] [Accessed on 29<sup>th</sup> March 2020] <a href="https://insights.stackoverflow.com/survey/2019/#technology-_-programming-scripting-and-markup-languages" title="Stack Overflow">https://insights.stackoverflow.com/survey/2019/#technology-_-programming-scripting-and-markup-languages</a></li>
        </ul>
        <a href="/blog/" class="blog__return__end">Return to Blogs</a>
      </div>
    </div>
  </section>
</main>
  <?php include '../template-parts/global/footer.php' ?>
  <?php include '../template-parts/global/slideout.php' ?>
</body>
</html>
