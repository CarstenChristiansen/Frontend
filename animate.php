<!DOCTYPE html>
<html>
<style>
#myContainer {
  width: 400px;
  height: 400px;
  position: relative;
  background: yellow;
}
#myAnimation {
  width: 50px;
  height: 50px;
  position: absolute;
  background-color: red;
  
 
#rotater {
  transition: all ease;
  border: 0.0625em solid black;
  border-radius: 3.75em; 
}

}
</style>
<body>

<p>
<button onclick="myMove()">Click Me</button> 
</p>

<div id ="myAnimation">
  <img src="blaa.jpg" alt="udsigt"  image.setAttribute("style", "transform: rotate(" + rotateAngle + "deg)");
  rotateAngle = rotateAngle + 90;
} >
	</div>

<script>
function myMove() {
  var elem = document.getElementById("myAnimation");   
  var pos = 0;
  var rotateAngle = 0;
  var id = setInterval(frame, 5);
  function frame() {
    if (pos == 1000) {
      clearInterval(id);
    } else {
      pos=pos + Math.random()*50*pos/500; 
       
    rotateAngle = rotateAngle + Math.random()*5;   
	  elem.setAttribute("style", "transform: rotate(" + rotateAngle + "deg)"); 
      elem.style.left = pos + 'px';
	  
	}
  }
}
</script>

</body>
</html>
