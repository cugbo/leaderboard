
<!doctype html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> LeaderBoard</title>
    <link href="https://fonts.googleapis.com/css2?family=Zilla+Slab:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Paaji+2&display=swap" rel="stylesheet">
  
</head>

<style type="text/css">

body{
   font-size: 22px;
    font-family: 'Zilla Slab', serif;
    background: url(images/101994-OM0XMB-226.jpg);
      background-color: coral;
    background-size: cover;
    margin: 0;
}

	 #table{
    	background-color: white;
        width: 70%;
         border-collapse: collapse;
}
th{
	background-color:#4CAF50;
}
th, td {
  padding: 15px;
  text-align: left;
  border-bottom: 3px solid #ddd;
}
  
tr:hover {
	background-color: #f5f5f5;

}
</style>

<body>

	<br><br>
	<div id="show">Hi</div>

<center><table id='table' border cellpadding=2><h4>
       <tr><th width=100>Fullname</th><th width=80>Username</th><th width=80>Email</th></th><th width=80>Score</th>

      
<tr>

      
   
</tr></table></center><br>



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
         var usernames = this['USERNAME'];
         var mail = this['EMAIL__1'];
         var scores = this['TOTAL POINTS__1'];

  $("#table").append("<td>" + names + "</td>"+
      "<td>"+ usernames + "</td>"+
      "<td>" + names + "</td>"+
      "<td>" + mail +"</td>"+
      "<td>" + scores + "</td>"+"<br>"
     );

         console.log(names, usernames, mail,scores);

});
        



});


	var datas = $.csv.toObjects("HNGi7 Central Leaderboard (Sorted) - Sheet1.csv");
	console.log(datas);


</script>

</body>
</html>
