
<link rel="stylesheet" href="style.css">
<div type="text" value="Hello World" id="myInput">
<html>
<body>
  <div class=bx2>
    <a href="#" class="b1"> Milky project </a>
    <a class="label"> Гравців онлайн: *Скоро...* </a>
    <a href="#" class="b2"> Головна </a>
    <a href="donate.html" class="b3"> Донат </a>
  </div>
  <div class=bx1>
    <h1 class="t1">Наші сервера:</h1>
    <div class="card">
      <div>
        <div class="class="card"">
          <img src="Assets\milky.jpg" style="width:100%; border-radius: 10px">
          <h1>Milky NoRules</h1>
          <h2 type="text" value="Hello World" id="myInput" style="color: #A9A9A9">146.59.14.109:2323</h2>
          <button class="btn"onclick="copyText()">Copy</button>
            </div>
        </div>
        </div>
      </div>
  </div>
<script src="Assets\api.js"</script>
<script>
  function copyText() {

    /* Copy text into clipboard */
    navigator.clipboard.writeText
    ("146.59.14.109:2323");
    // Alert the copied text
    alert("Адреса сервера скопійована");
  }
</script>
<script src="Assets\copyip2.js"></script>
</body>
</div>
</html>