<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Functions</h2>

<p>This example calls a function which performs a calculation, and returns the result:</p>

<p id="demo"></p>

<script>
function myFunction(p1, p2) {
    return p1 * p2;
}
document.getElementById("demo").innerHTML = myFunction(4, 3);
</script>
<p id1="demo"></p>

<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "Hello World!";
}
myFunction();
</script>
</body>
</html>

