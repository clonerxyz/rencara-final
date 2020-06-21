<!DOCTYPE html>
<html>
<style>
#myProgress {
  width: 100%;
  background-color: #ddd;
}

#myBar {
  width: 1%;
  height: 30px;
  background-color: #4CAF50;
}

</style>
<link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://store.rencara.com/ct/css/admin.css">
<body>
<div class="progress sm-progress-bar" id="myProgress">
  <div id="myBar" class="progress-bar bg-primary"></div>
</div>
<script>
var i = 0;
window.onload=function(){
  if (i == 0) {
    i = 1;
    var elem = document.getElementById("myBar");
    var width = 1;
    var id = setInterval(frame, 100);
    function frame() {
      if (width >= 100) {
        clearInterval(id);
        i = 0;
        window.location.href = 'https://store.rencara.com/admin/trans';
      } else {
        width++;
        elem.style.width = width + "%";
      }
    }
  }
}
</script>

</body>
</html>
