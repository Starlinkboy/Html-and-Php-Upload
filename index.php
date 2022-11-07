<html>
  <head>
    <title>Starlinkboy Images</title>
  </head>
  <link rel="stylesheet" href="style.css" media="screen">
<body>


  <br>
<section id="contact" name="contact">
<a href="img.starlinkboy.cf">Welcome to Starlinkboy Images</a><br><br>
  <script>  
function randomString() {  
            
    var characters = "ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz";  
              
            
    var lenString = 10;  
    var randomstring = '';  
  
           
    for (var i=0; i<lenString; i++) {  
        var rnum = Math.floor(Math.random() * characters.length);  
        randomstring += characters.substring(rnum, rnum+1);  
    }  
  
           
    document.getElementById("randomfield").innerHTML = randomstring;  
}  
</script>  
  <p name="randomfield" id="randomfield"></p>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload" name="submit" onClick="randomString();">
</form>

</section>

</body>
</html>