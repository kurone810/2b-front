<html>
<head>
  <script type="text/javascript">
(function(){
var xhr = new XMLHttpRequest();
xhr.onreadystatechange = function(){
  console.log("2xhr.onreadystatechange is starting...");
  if (this.readyState==4 && this.status==200) {
    console.log("200 is returned.");
  }
};
xhr.responseType = 'json';
xhr.open('GET',"http://<?= getenv("BACKEND_HOST_NAME") ?>/api/authors",true);
xhr.send();
})();
  </script>
</head>
<body>
This is the frontend test page! okazaki Edit!!
</body>
</html>
