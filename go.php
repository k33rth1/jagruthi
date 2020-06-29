<html>
<head>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
<h1 class="text-center" style="color:darkorange">STUDENT FEEDBACK</h1>
<form>
<div class="form-group">
<label for="usr">NAME :</label>
<input type="text" class="form-control" id="usr">
</div>
<div class="form-group">
<label for="idno">ID NO. :</label>
<input type="text" class="form-control" id="idno">
</div>
<p style="font-size:20px">How do you rate for the Web Development workshop?</p>
<div class="radio">
<label><input type="radio" name="optradio">BAD</label>
</div>
<div class="radio">
<label><input type="radio" name="optradio">AVERAGE</label>
</div>
<div class="radio disabled">
<label><input type="radio" name="optradio">GOOD</label>
</div>
<div class="form-group">
<label for="comment">Comment:</label>
<textarea class="form-control" rows="5" id="comment"></textarea>
</div>
</form>
<button type="button" class="btn btn-success">SUBMIT</button>
</div>
</body>
</html>