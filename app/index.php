<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tyrones form</title>
  </head>
  <body>
    <form name="tyrones_form" class="" action="#" method="post" onsubmit="return validateForm()">
      <br><br>
      Name: <input type="text" name="name" value="tyrone">
      <br><br>
      Surname: <input type="text" name="surname" value="verburgt">
      <br><br>
      Age: <input type="text" name="age" value="30">
      <br><br>
      Comment: <textarea type="text" name="comment" >Enter a comment here...</textarea>
     <br><br>

      Gender:
      <br>
      Female: <input type="radio" name="gender" value="female"><br>
      Male: <input type="radio" name="gender" value="male"><br>
      Other: <input type="radio" name="gender" value="other"><br>
      <br><br>

      <input type="submit" name="submit" value="Submit">
    </form>
  </body>
   <script type="text/javascript" src="./js/form_validation.js"></script>
</html>
