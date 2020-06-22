

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

      var arr = [];
     for (var i = 1; i <= scores; i++) arr.push(""+i);


  $("#table").append("<tr>"+"<td>" + names + "</td>"+
      "<td>"+ usernames + "</td>"+
      "<td>" + mail +"</td>"+
      "<td>" + scores + "</td>"+"</tr>"+"<br>"
     );

});

});



/**$.ajax({
  url: 'HNGi7 Central Leaderboard (Sorted) - Sheet1.csv',
  dataType: 'text',
}).done(successFunction);


function successFunction(data) {
  var allRows = data.split(/\r?\n|\r/);
  var table = '<table>';
  for (var singleRow = 0; singleRow < allRows.length; singleRow++) {
    if (singleRow === 0) {
      table += '<thead>';
      table += '<tr>';
    } else {
      table += '<tr>';
    }
    var rowCells = allRows[singleRow].split(',');
    for (var rowCell = 0; rowCell < rowCells.length; rowCell++) {
      if (singleRow === 0) {
        table += '<th>';
        table += rowCells[rowCell];
        table += '</th>';
      } else {
        table += '<td>';
        table += rowCells[rowCell];
        table += '</td>';
      }
    }
    if (singleRow === 0) {
      table += '</tr>';
      table += '</thead>';
      table += '<tbody>';
    } else {
      table += '</tr>';
    }
  } 
  table += '</tbody>';
  table += '</table>';
  $('body').append(table);


$.getJSON("leaderboard.json", function(data){
    var rep = data;

  $(jQuery.parseJSON(JSON.stringify(rep))).each(function() {  
         var names = this['FULL NAME'];
         var usernames = this['USERNAME'];
         var mail = this['EMAIL__1'];
         var scores = this['TOTAL POINTS__1'];

         console.log(scores);
       });

});
}
**/