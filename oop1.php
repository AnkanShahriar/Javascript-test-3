<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Object Properties</h2>

<p>You can add new properties to existing objects.</p>

<p id="demo"></p>

<script>
var person = {
  firstname:"Jack",
  lastname:"Hobbs",
  age:50,
  eyecolor:"blue",
  nationality:"English"
};

document.getElementById("demo").innerHTML =
person.firstname + " is " + person.nationality + ".";
</script>

</body>
</html>
