<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h1  align="center" style="background-color:#aa66cc">Feed back</h1>

<div class="container">
  <form action="/action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="fname">Student Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="sname" name="firstname" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Id.No:</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder="Enter Your Id..">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="lname">Faculty Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder=" Enter Name...">
      </div>
    </div>
   
    <div class="row">
      <div class="col-25">
        <label for="district">Branch</label>
      </div>
      <div class="col-75">
        <select id="branch" name="branch">
          <option value="cse">C.S.E</option>
          <option value="ece">E.C.E</option>
          <option value="mech">MECH</option>
		  <option value="civil">Civil</option>
		  
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Feedback</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
	<h2> Rating</h2>
	<div class="container">
  <div class="row">
      <div class="col-25">
        <label for="lname">Faculty Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder=" Enter Name...">
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="lname">Subject</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lastname" placeholder=" Enter Name...">
      </div>
    </div>
 
  <form>
    <label class="radio-inline">
      <input type="radio" name="optradio" checked>Average
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Good
    </label>
    <label class="radio-inline">
      <input type="radio" name="optradio">Best
    </label>
  </form>
</div>

    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
 
</div>

</body>
</html>
