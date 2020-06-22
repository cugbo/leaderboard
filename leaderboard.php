
<!doctype html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5ef0f923b61c220011098161&product=inline-share-buttons" async="async"></script>

  <title> LeaderBoard</title>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
    <link href="leaderboard.css" rel="stylesheet">
  
</head>

<body>
<span><p> Welcome to the HNGi7 Leaderboard</span><br>
<div class="sharethis-inline-share-buttons"></div>

<center><table id='table' border cellpadding=3>
       <tr><th width=120>Fullname</th><th width=80>Username</th><th width=40>Email</th></th><th width=80>Score</th>
       </tr></table></center>

<script type="text/javascript" src="jquery-3.2.1.js"></script>
<script type="text/javascript" >


  

	$.getJSON("leaderboard.json", function(data){
		var rep = data;
		console.log(rep);
         
         var name = data[0]['FULL NAME'];
          var user = data[0]['USERNAME'];
           var score = data[0]['TOTAL POINTS__1'];

           console.log(name + " " + user +" "+ score);

           $(jQuery.parseJSON(JSON.stringify(rep))).each(function() {  
         var names = this['FULL NAME'];
         var usernames = this['USERNAME'];
         var mail = this['EMAIL'];
         var scores = this['TOTAL POINTS'];

  $("#table").append("<tr>"+"<td>" + names + "</td>"+
      "<td>"+ usernames + "</td>"+
      "<td>" + mail +"</td>"+
      "<td>" + scores + "</td>"+"</tr>"+"<br>"
     );

         console.log(names, usernames, mail,scores);
});
});
        
</script>


</body>
</html>
