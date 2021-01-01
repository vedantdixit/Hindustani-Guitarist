<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://unpkg.com/aos@2.3.0/dist/aos.css">
<script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>

<style type="text/css">

*{
margin: 0;
padding: 0;
color: #f2f5f7;
font-family: sans-serif;
letter-spacing: 1px; //gap between each letter
font-weight: 300;
}
body{
overflow-x: hidden;
background-color: #16151f;
color: white;
scroll-behavior: smooth;
}


nav{
height: 12vh;
width: 100vw;
background-color: #131418;
box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
display: flex;
position: fixed;
z-index: 10;

}
.logo{
padding:1vh 1vw;
text-align: center;
}
.logo img {
height: 10vh;
width: 15vw;}

.nav-links{
display: flex;
list-style: none;
width: 88vw;
padding: 0 0.7vw;
justify-content: space-evenly;
align-items: center;
text-transform: uppercase;
color: white;
}
.nav-links li a{
text-decoration: none;
margin: 0 0.7vw;
}
.nav-links li a:hover {
color: #61DAFB;
}
.nav-links li {
position: relative;
}
.nav-links li a::before {
content: "";
display: block;
height: 3px;
width: 0%;
background-color: #61DAFB;
position: absolute;
transition: all ease-in-out 250ms;
margin: 0 0 0 10%;
}
.nav-links li a:hover::before{
width: 80%;
}
.login-button{
background-color: transparent;
border: 1.5px solid #f2f5f7;
border-radius: 2em;
padding: 2vh 2vw;
margin-left: 2vw;
font-size: 1rem;
cursor: pointer;
}
.login-button:hover {
color: #131418;
background-color: #f2f5f7;
border:1.5px solid #f2f5f7;
transition: all ease-in-out 350ms;
}
.join-button{
color: #131418;
background-color: #61DAFB;
border: 1.5px solid #61DAFB;
border-radius: 2em;
padding: 2vh 2vw;
font-size: 1rem;
cursor: pointer;
}
.join-button:hover {
color: #f2f5f7;
background-color: transparent;
border:1.5px solid #f2f5f7;
transition: all ease-in-out 350ms;
}
.hamburger div{
width: 30px;
height:3px;
background: #f2f5f7;
margin: 5px;
transition: all 0.3s ease;
}
.hamburger{
display: none;
}



@media screen and (max-width: 800px){
nav{
position: fixed;
z-index: 3;
}
.hamburger{
display:block;
position: absolute;
cursor: pointer;
right: 5%;
top: 50%;
transform: translate(-5%, -50%);
z-index: 2;
transition: all 0.7s ease;
}
.nav-links{
position: fixed;
background: #131418;
height: 100vh;
width: 100%;
flex-direction: column;
clip-path: circle(50px at 90% -20%);
-webkit-clip-path: circle(50px at 90% -10%);
transition: all 1s ease-out;
pointer-events: none;
}
.nav-links.open{
clip-path: circle(1000px at 90% -10%);
-webkit-clip-path: circle(1000px at 90% -10%);
pointer-events: all;
}
.landing{
flex-direction: column;
}
.nav-links li{
opacity: 0;
}
.nav-links li:nth-child(1){
transition: all 0.5s ease 0.2s;
}
.nav-links li:nth-child(2){
transition: all 0.5s ease 0.4s;
}
.nav-links li:nth-child(3){
transition: all 0.5s ease 0.6s;
}
.nav-links li:nth-child(4){
transition: all 0.5s ease 0.7s;
}
.nav-links li:nth-child(5){
transition: all 0.5s ease 0.8s;
}
.nav-links li:nth-child(6){
transition: all 0.5s ease 0.9s;
margin: 0;
}
.nav-links li:nth-child(7){
transition: all 0.5s ease 1s;
margin: 0;
}
li.fade{
opacity: 1;
}
}
.toggle .line1{
transform: rotate(-45deg) translate(-5px,6px);
}
.toggle .line2{
transition: all 0.7s ease;
width:0;
}
.toggle .line3{
transform: rotate(45deg) translate(-5px,-6px);
}

.container{

	padding-top: 100px;
	padding-right: 20px;
	padding-left: 20px;
}



.ml6 {
  position: relative;
  font-weight: 900;
  font-size: 3.3em;
}

.ml6 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.2em;
  padding-right: 0.05em;
  padding-bottom: 0.1em;
  overflow: hidden;
}

.ml6 .letter {
  display: inline-block;
  line-height: 1em;
}

.ml5 {
  position: relative;
  font-weight: 300;
  font-size: 4.5em;
  color: #402d2d;
  text-align: center;
  padding-top: 10px;
}

.ml5 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
  line-height: 1em;
}

.ml5 .line {
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  margin: auto;
  height: 3px;
  width: 100%;
  background-color: #402d2d;
  transform-origin: 0.5 0;
}

.ml5 .ampersand {
  font-family: Baskerville, serif;
  font-style: italic;
  font-weight: 400;
  width: 1em;
  margin-right: -0.1em;
  margin-left: -0.1em;
}

.ml5 .letters {
  display: inline-block;
  opacity: 0;
}



.responsive-img {
  width: 80%;
  height: auto;
    display: block;
  margin-left: auto;
  margin-right: auto;
  padding-top: 20px;
  pa
}



* {
  box-sizing: border-box;
}















.dropbtn {
  background-color: #131418;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  transition: 0.5s ease;
  text-align: center;

}

a{

	text-decoration: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropbtn:hover{

background-color: #61DAFB;	
	

}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {

	display: block;
	cursor: pointer;
}

.dropdown:hover .dropbtn {background-color: #61DAFB;}



iframe{
	top: 50%;
}




</style>





</head>
<body>








<!--topnav start-->
<nav>
 <div class="logo">
  <img src="logo new.png" alt="">
 </div>
 <ul class="nav-links" li style="color: white">
  <li><a href="index.html">Home</a></li>
  <li><a href="#">Tabs & Chords</a></li>
  <li><a href="#">Guitar Lessons</a></li>
  <li><a href="library.html">Library</a></li>
  <li><a href="buy.html">Buy</a></li>
  <li><a href="#">Contact Us</a></li>
  <li><button class="login-button" href="#">Login</button></li>
  <li><button class="join-button" href="#">Join</button></li>
 </ul>
</nav>

<!--topnav end-->
<!--topnav btn start-->

<nav>
 <div class="logo">
  <img src="logo new.png" alt="">
 </div>
 <div class="hamburger">
  <div class="line1"></div>
  <div class="line2"></div>
  <div class="line3"></div>
 </div>
 <ul class="nav-links">
  <li><a href="index.html">Home</a></li>
  <li><a href="#">Tabs & Chords</a></li>
  <li><a href="#">Guitar Lessons</a></li>
  <li><a href="library.html">Library</a></li>
  <li><a href="buy.html">Buy</a></li>
  <li><a href="#">About Us</a></li>
  <li><a href="#">Contact Us</a></li>
  <li><button class="login-button" href="#">Login</button></li>
  <li><button class="join-button" href="#">Join</button></li>
 </ul>
</nav>

<!--topnav btn end-->






<script>



//topnav starts

const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");
hamburger.addEventListener('click', ()=>{
//Animate Links
navLinks.classList.toggle("open");
links.forEach(link => {
link.classList.toggle("fade");
});
//Hamburger Animation
hamburger.classList.toggle("toggle");
});

//topnav ends



// Wrap every letter in a span
var textWrapper = document.querySelector('.ml6 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml6 .letter',
    translateY: ["1.1em", 0],
    translateZ: 0,
    duration:2000,
    delay: (el, i) => 50 * i
  }).add({
    targets: '.ml6',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 10000
  });



anime.timeline({loop: true})
  .add({
    targets: '.ml5 .line',
    opacity: [0.5,1],
    scaleX: [0, 1],
    easing: "easeInOutExpo",
    duration: 700
  }).add({
    targets: '.ml5 .line',
    duration: 600,
    easing: "easeOutExpo",
    translateY: (el, i) => (-0.625 + 0.625*2*i) + "em"
  }).add({
    targets: '.ml5 .ampersand',
    opacity: [0,1],
    scaleY: [0.5, 1],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5 .letters-left',
    opacity: [0,1],
    translateX: ["0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=300'
  }).add({
    targets: '.ml5 .letters-right',
    opacity: [0,1],
    translateX: ["-0.5em", 0],
    easing: "easeOutExpo",
    duration: 600,
    offset: '-=600'
  }).add({
    targets: '.ml5',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 10000
  });

AOS.init({
  duration: 1200,
})
</script>


</body>
</html>