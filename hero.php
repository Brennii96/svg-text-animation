<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
  
/* animate the intro text on scroll */
  .intro-text {
    opacity: 0;
    transform: translateY(20px);
    transition: 0.5s all ease-in-out;
  }
  
  .intro-appear {
    opacity: 1;
    transform: translateY(0px);
  }

/* make the button animated so it stands out */
button {
  animation: alertPulse 2s ease-out;
  animation-iteration-count: infinite;
  opacity: 1;
  background: #9A2727;
  animation: alertPulse 2s ease-out;
  animation-iteration-count: infinite;
}
@keyframes alertPulse {
  from {
    background-color: red;
  } to {
    background-color: #b70d0d;
  }
}
article {
  font-family: "Lato", sans-serif;
  font-size: 1.2em;
  line-height: 1.4;
}
article h1 {
  font-size: 1.8em;
  line-height: 1.5;
}
article h2 {
  font-size: 1.6em;
  line-height: 1.4;
}
article p {
  font-size: 1.1em;
  line-height: 1.2;
}
.container {
  height: 100%;
  font-family: "Lato", sans-serif;
}
.hero-container {
  position: relative;
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  background-color: linear;
}
.hero-container > .hero-item {
  z-index: 2;
  flex-grow: 1;
  flex: 1 1 75%;
  height: 500px;
}
.hero-container > .hero-item article {
  padding: 50px;
  margin: 10px;
  vertical-align: center;
}
.hero-main {
  z-index: 1;
  color: #fff;
  position: relative;
  padding: 2rem 2rem 5.2rem;
}
.hero-main:after {
  z-index: 1;
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: radial-gradient(ellipse closest-side,rgba(15, 14, 22, 0.5),#100e17), url(https://s3-eu-west-1.amazonaws.com/bonacia-sites/book-printing-uk/images/2018/writingmarketing.png);
  background-size: cover;
  background-repeat: no-repeat;
  opacity: 0.75;
  border-bottom-right-radius: 200px;
}
.cta button {
  bottom: 0;
  align: center;
  left: 40px;
}
.btn {
  border-radius: 5px;
  padding: 15px 25px;
  font-size: 22px;
  text-decoration: none;
  margin: 20px;
  color: #fff;
  position: relative;
  display: inline-block;
  z-index: 999;
}

.btn:active {
  transform: translate(0px, 5px);
  -webkit-transform: translate(0px, 5px);
  box-shadow: 0px 1px 0px 0px;
}

.pink-branding {
  background-color: #ec008c;
}

.pink-branding:hover {
  background-color: #dfaecb;
}
</style>
<main class="container">
  <div class="hero-main">
    <section class="hero-container">
      <div class="hero-item">
        <article>
          <h1>The most important text on the website for SEO</h1>
          <h2>Not as important as h1 but still pretty important</h2>
          <div class="padding"></div>
          <p>Text to either get user to end goal or explain a bit about the company. Get a quote below.</p>
        </article>
        <div class="cta">
          <button class="btn pink-branding">
          Get a FREE Quote
        </button>
        </div>
      </div>
    </section>
  </div>
  </div>
</main>
