<h1>Sorry This page doesn't exist!</h1>
<h2 id = 'message'>Returning to home page in <span id='countdown'>10</span> seconds. Click <a href="index.php">Here</a> to redirect now.</h2>
<!-- The following is a simple script that will countdown to zero, and if the sever doesn't redirect, will provide a link to redirect. -->
<script type="text/javascript">
  var timeRemaining = 10;
  var timer = setInterval(function(){
    timeRemaining--;
    document.getElementById('countdown').innerHTML = timeRemaining;
    if (timeRemaining <= 0) {
      clearInterval(timer);
      document.getElementById('message').innerHTML = "Redirecting Now. Click <a href='index.php'>here</a> if not redirected.";
    }
  }, 1000)
</script>
