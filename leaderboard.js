$.ajax({
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
