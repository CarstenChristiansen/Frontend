/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function findCurrentTime(){
  var d = new Date();
  var date_time_local = d.toLocaleString();
  var date_time_utc = d.toUTCString();
  $("#site-time").html(date_time_local + "(lokal tid) " + date_time_utc + " (UTC)");
}

findCurrentTime();
console.log("site-footer.js was executed");