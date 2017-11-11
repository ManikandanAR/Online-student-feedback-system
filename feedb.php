<html>
<style>
p{
text-align:center;
font-weight: bold;
}
p{
font-size: 20px;
font-family: verdana;
}
body {
  background:#0ED2F7;
  display:block;
}
input[type="radio"] {
    background-color: #ddd;
    cursor: pointer;
    display: inline-block;
    height: 15px;
    margin-right: 1px;
    position: relative;
    width: 15px;
text-align: center;
    
}

.questions1{
 border : 1px solid black;
 padding: 30px 30px;
margin : 30px 200px;
background-color:#fceabb;
}
.questions2{
 border : 1px solid black;
 padding: 30px 30px;
margin : 30px 200px;
background-color:#fceabb;
}
.questions3{
 border : 1px solid black;
 padding: 30px 30px;
margin : 30px 200px;
background-color:#fceabb;
}
.questions4{
 border : 1px solid black;
 padding: 30px 30px;
margin : 30px 200px;
background-color:#fceabb;
}.questions5{
 border : 1px solid black;
 padding: 30px 30px;
margin : 30px 200px;
background-color:#fceabb;
}
.btn {
  position:center;
  width:20%;
  padding:20px;
  margin-left:500px;
  margin-left:500px;
  border-radius:6px;
  border:0;
  background:#f26964;
  font-size:1.2em;
  color:#fff;
  text-shadow:1px 1px 0px rgba(0,0,0,.1);
  box-shadow:0px 3px 0px #c1524e;
}
h1 {
    text-align: center;
    font-family: "Times New Roman", Times, serif;
	font-size: 2.5em;
}



</style>

<body>
<script>
function validateform()
{
var r = document.getElementsByName("q1");
var c = -1;

for(var i=0; i < r.length; i++){
   if(r[i].checked) {
      c = i; 
   }
}
if (c == -1) 
{alert("please select radio");
Window.location.href='feedb.php';
}

 
var r1 = document.getElementsByName("q2");
var c1 = -1;

for(var i=0; i < r1.length; i++){
   if(r1[i].checked) {
      c1 = i; 
   }
}
if (c1 == -1) 
{
	alert("please select radio");
	Window.location.href='feedb.php';
}
 
var r2 = document.getElementsByName("q3");
var c2 = -1;

for(var i=0; i < r2.length; i++){
   if(r2[i].checked) {
      c2 = i; 
   }
}
if (c2 == -1) 
{alert("please select radio");
Window.location.href='feedb.php';
}

var r3 = document.getElementsByName("q4");
var c3 = -1;

for(var i=0; i < r3.length; i++){
   if(r3[i].checked) {
      c3 = i; 
   }
}
if (c3 == -1) 
{alert("please select radio");
Window.location.href='feedb.php';}

var r4 = document.getElementsByName("q5");
var c4 = -1;

for(var i=0; i < r4.length; i++){
   if(r4[i].checked) {
      c4 = i; 
   }
}
if (c4 == -1) 
{alert("please select radio");
Window.location.href='feedb.php';
}

}
</script>
<body>

<form name="myform" onsubmit="return validateform()" method="POST" action="feed1.html">
<h1>Feedback Entry</h1>

<div class="questions1">
<p class="question">1. The teacher explains important concepts/ideas in ways that I can Understand</p>
<ul class="answers">
<input type="radio" name="q1" value="a" id="q1a" required /><label for="q1a"  >Strongly Agree</label><br/>
<input type="radio" name="q1" value="b" id="q1b" required /><label for="q1b"  >Agree</label><br/>
<input type="radio" name="q1" value="c" id="q1c" required /><label for="q1c"  >Disagree</label><br/>
<input type="radio" name="q1" value="d" id="q1d" required /><label for="q1d"  >Strongly disagree</label><br/>
</ul>
</div>

<div class="questions2">
<p class="question">2.The teacher simulates my interest in the subject</p>
<ul class="answers">
<input type="radio" name="q2" value="a" id="q1a" required /><label for="q1a"  >Strong agree</label><br/>
<input type="radio" name="q2" value="b" id="q1b" required /><label for="q1b"  >Agree</label><br/>
<input type="radio" name="q2" value="c" id="q1c" required /><label for="q1c"  >Disagree</label><br/>
<input type="radio" name="q2" value="d" id="q1d" required /><label for="q1d"  >Strongly disagree</label><br/>
</ul>
</div>

<div class="questions3">
<p class="question">3.The teacher demonstrates enthusiasm in teaching the unit</p>
<ul class="answers">
<input type="radio" name="q3" value="a" id="q1a" required /><label for="q1a"  >Strong agree</label><br/>
<input type="radio" name="q3" value="b" id="q1b" required /><label for="q1b"  >Agree</label><br/>
<input type="radio" name="q3" value="c" id="q1c" required /><label for="q1c"  >Disagree</label><br/>
<input type="radio" name="q3" value="d" id="q1d" required /><label for="q1d"  >Strongly disagree</label><br/>
</ul>
</div>

<div class="questions4">
<p class="question">4.The teacher is helpful if I encounter difficulties with the lecture/unit</p>
<ul class="answers">
<input type="radio" name="q4" value="a" id="q1a" required /><label for="q1a"  >Strong agree</label><br/>
<input type="radio" name="q4" value="b" id="q1b" required /><label for="q1b"  >Agree</label><br/>
<input type="radio" name="q4" value="c" id="q1c"required /><label for="q1c"  >Disagree</label><br/>
<input type="radio" name="q4" value="d" id="q1d" required /><label for="q1d"  >Strongly disagree</label><br/>
</ul>
</div>

<div class="questions5">
<p class="question">5.The teacher is available for consultation(eg.email,telephone)</p>
<ul class="answers">
<input type="radio" name="q5" value="a" id="q1a" required /><label for="q1a"  >Strong agree</label><br/>
<input type="radio" name="q5" value="b" id="q1b"required /><label for="q1b"  >Agree</label><br/>
<input type="radio" name="q5" value="c" id="q1c" required /><label for="q1c"  >Disagree</label><br/>
<input type="radio" name="q5" value="d" id="q1d"required /><label for="q1d"  >Strongly disagree</label><br/>
</ul>
</div>

<button type="submit" name="btn" class="btn" ><strong>Submit</strong></button>
</form>



</body>

</html>
