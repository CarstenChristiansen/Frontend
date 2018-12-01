/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function cases() {
  
  
  //alert("Document loaded, including graphics and embedded documents (like SVG)");
  var a = document.getElementById("dk-map");

  if( a == null) {
    alert("hallo er 0");
  }
  a.addEventListener("click",
          function () {
            alert('hello map!');
          }, false);

  //get the inner DOM of alpha.svg
  var svgDoc = a.contentDocument;

  //get the inner element by id
  var delta = svgDoc.getElementById("e11_circle");

  var delta = a;
  delta.addEventListener("mousedown",
          function () {
            alert('hello e11_circle!');
          }, false);
}
;

cases();
console.log("cases.js was executed");
