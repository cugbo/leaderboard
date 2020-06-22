
<!doctype html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> LeaderBoard</title>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
  
</head>

<style type="text/css">


</style>

<body>

	<br><br>
	<div id="show">Hi</div>

<script type="text/javascript" src="jquery-3.2.1.js"></script>
<script type="text/javascript">



	$.getJSON("leaderboard.json", function(data){
		var rep = data;
		console.log(rep);
         
         var name = data[0]['FULL NAME'];
          var user = data[0]['USERNAME'];
           var score = data[0]['TOTAL POINTS__1'];

           console.log(name + " " + user +" "+ score);

           $(jQuery.parseJSON(JSON.stringify(rep))).each(function() {  
         var names = this['FULL NAME'];
         var scores = this['TOTAL POINTS__1'];



         console.log(names, scores);
});
        



});


</script>

</body>
</html>
