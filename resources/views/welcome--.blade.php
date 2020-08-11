<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<style> 
@import url(https://fonts.googleapis.com/css?family=Roboto:300);
.content:after, .gallery:after {
  content: "";
  display: table;
  clear: both;
}

body {
  background: #eee;
  color: #666;
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-size: 16px;
  line-height: 1.5;
  -webkit-backface-visibility: hidden;
  text-align: center;
  font-weight: 300;
}

h1, h2 {
  font-weight: 200;
  color: #999;
}

h1 {
  font-size: 38px;
  margin-bottom: 2.1739130435%;
}

p {
  color: #666;
}

hr {
  background: none;
  margin: 4.347826087% 0;
  border: none;
  border-bottom: 1px solid #ddd;
}

a {
  text-decoration: none;
  color: #FF0080;
}

.container {
  max-width: 1100px;
  margin-left: auto;
  margin-right: auto;
  margin: 0 auto;
}
.container:after {
  content: " ";
  display: block;
  clear: both;
}

.content {
  padding: 4.347826087%;
}
.content img {
  width: 100%;
}

.gallery {
  margin: 0 auto;
  text-align: center;
  width: 100%;
}
.gallery li {
  width: 21.7391304348%;
  float: left;
  text-align: center;
  position: relative;
  margin-bottom: 4.347826087%;
  display: inline-block;
}
.gallery li:nth-child(4n + 1) {
  margin-left: 0;
  margin-right: -100%;
  clear: both;
  margin-left: 0;
}
.gallery li:nth-child(4n + 2) {
  margin-left: 26.0869565217%;
  margin-right: -100%;
  clear: none;
}
.gallery li:nth-child(4n + 3) {
  margin-left: 52.1739130435%;
  margin-right: -100%;
  clear: none;
}
.gallery li:nth-child(4n + 4) {
  margin-left: 78.2608695652%;
  margin-right: -100%;
  clear: none;
}
@media (max-width: 48rem) {
  .gallery li {
    width: 30.4347826087%;
    float: left;
  }
  .gallery li:nth-child(3n + 1) {
    margin-left: 0;
    margin-right: -100%;
    clear: both;
    margin-left: 0;
  }
  .gallery li:nth-child(3n + 2) {
    margin-left: 34.7826086957%;
    margin-right: -100%;
    clear: none;
  }
  .gallery li:nth-child(3n + 3) {
    margin-left: 69.5652173913%;
    margin-right: -100%;
    clear: none;
  }
}
@media (max-width: 30rem) {
  .gallery li {
    width: 47.8260869565%;
    float: left;
  }
  .gallery li:nth-child(2n + 1) {
    margin-left: 0;
    margin-right: -100%;
    clear: both;
    margin-left: 0;
  }
  .gallery li:nth-child(2n + 2) {
    margin-left: 52.1739130435%;
    margin-right: -100%;
    clear: none;
  }
}
@media (max-width: 20rem) {
  .gallery li {
    width: 100%;
    float: left;
  }
  .gallery li:nth-child(1n + 1) {
    margin-left: 0;
    margin-right: -100%;
    clear: both;
    margin-left: 0;
  }
}
.gallery li h2 {
  color: #999;
  font-size: 13.5px;
  letter-spacing: 1px;
  margin-top: 2.1739130435%;
  text-transform: uppercase;
}
.gallery li .imgwrap {
  background-color: #fff;
  padding: 8px;
  position: relative;
  border-radius: 2px;
  box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
}
.gallery li .imgmask {
  background: url("https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Plus_font_awesome.svg/2000px-Plus_font_awesome.svg.png") 50%/25px no-repeat;
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  opacity: 0;
  z-index: 1;
  vertical-align: bottom;
  text-align: center;
  -webkit-transition: all .25s ease-out;
  transition: all .25s ease-out;
}
.gallery li img {
  width: 100%;
  vertical-align: top;
  -webkit-transition: all .25s ease-out;
  transition: all .25s ease-out;
}
@media (max-width: 20rem) {
  .gallery li img {
    width: 100%;
  }
}
.gallery li:hover img {
  opacity: 0;
  -webkit-transition: all .25s ease-out;
  transition: all .25s ease-out;
}
.gallery li:hover .imgmask {
  background: url("https://upload.wikimedia.org/wikipedia/commons/thumb/c/ce/Plus_font_awesome.svg/2000px-Plus_font_awesome.svg.png") 50%/85px no-repeat;
  opacity: .5;
  -webkit-transition: all .25s ease-out;
  transition: all .25s ease-out;
}

footer {
  font-size: 14.5px;
  text-transform: uppercase;
}
</style>
</head>
<body>

<div class="container">
  <main class="content">
    <h1>CSS only Responsive Image gallery | Susy</h1>
    <p>A demonstration on how to quickly make a responsive image gallery with <a href="http://susy.oddbird.net/">Susy</a> using SCSS only. Switch to responsive design view to see the action happen. Only three different breakpoint are used in this demo.</p>

    <hr>

    <ul class="gallery">

      <li>
        <div class="imgwrap">
          <a href="#">
            <img src="https://unsplash.it/300/300/?random" alt="image">
            <span class="imgmask"></span>
          </a>
        </div>
        <a href="#">
          <h2>Awesome</h2>
        </a>
      </li>

      <li>
        <div class="imgwrap">
          <a href="#">
            <img src="https://unsplash.it/301/301/?random" alt="image">
            <span class="imgmask"></span>
          </a>
        </div>
        <a href="#">
          <h2>Amazing</h2>
        </a>
      </li>

      <li>
        <div class="imgwrap">
          <a href="#">
            <img src="https://unsplash.it/302/302/?random" alt="image">
            <span class="imgmask"></span>
          </a>
        </div>
        <a href="#">
          <h2>Nice Pic</h2>
        </a>
      </li>

      <li>
        <div class="imgwrap">
          <a href="#">
            <img src="https://unsplash.it/303/303/?random" alt="image">
            <span class="imgmask"></span>
          </a>
        </div>
        <a href="#">
          <h2>Sweet</h2>
        </a>
      </li>

      <li>
        <div class="imgwrap">
          <a href="#">
            <img src="https://unsplash.it/304/304/?random" alt="image">
            <span class="imgmask"></span>
          </a>
        </div>
        <a href="#">
          <h2>Cute Image</h2>
        </a>
      </li>

      <li>
        <div class="imgwrap">
          <a href="#">
            <img src="https://unsplash.it/305/305/?random" alt="image">
            <span class="imgmask"></span>
          </a>
        </div>
        <a href="#">
          <h2>Excellent</h2>
        </a>
      </li>

      <li>
        <div class="imgwrap">
          <a href="#">
            <img src="https://unsplash.it/306/306/?random" alt="image">
            <span class="imgmask"></span>
          </a>
        </div>
        <a href="#">
          <h2>Tasty</h2>
        </a>
      </li>

      <li>
        <div class="imgwrap">
          <a href="#">
            <img src="https://unsplash.it/307/307/?random" alt="image">
            <span class="imgmask"></span>
          </a>
        </div>
        <a href="#">
          <h2>Good Stuff</h2>
        </a>
      </li>

      <li>
        <div class="imgwrap">
          <a href="#">
            <img src="https://unsplash.it/308/308/?random" alt="image">
            <span class="imgmask"></span>
          </a>
        </div>
        <a href="#">
          <h2>Pretty</h2>
        </a>
      </li>

      <li>
        <div class="imgwrap">
          <a href="#">
            <img src="https://unsplash.it/309/309/?random" alt="image">
            <span class="imgmask"></span>
          </a>
        </div>
        <a href="#">
          <h2>Fine Art</h2>
        </a>
      </li>

      <li>
        <div class="imgwrap">
          <a href="#">
            <img src="https://unsplash.it/310/310/?random" alt="image">
            <span class="imgmask"></span>
          </a>
        </div>
        <a href="#">
          <h2>Super Duper</h2>
        </a>
      </li>

      <li>
        <div class="imgwrap">
          <a href="#">
            <img src="https://unsplash.it/311/311/?random" alt="image">
            <span class="imgmask"></span>
          </a>
        </div>
        <a href="#">
          <h2>Sexy Stuff</h2>
        </a>
      </li>
    </ul>
    <hr>

    <footer>
      Made by <a href="http://www.devopix.co">Devopix</a>
    </footer>
  </main>
</div>

</body>
</html>

