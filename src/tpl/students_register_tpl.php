<!DOCTYPE html>
<html>
<head>
  <title>Click to Show Content</title>
</head>
<body>
  <h1>Click the button to reveal content!</h1>
  <button id="myButton">Show Content</button>
  <div id="hiddenContent" style="display: none;">
    This is the hidden content that will be shown when you click the button.
  </div>
  <script>
    
//　下の部分にトグルで学生のデータの表示

// 各学生は写真と名前があり
// また、各修正ボタンと削除ボタンがあり

// 下の部分に追加・全部削除のボタンを入れる
// 順番変わるボタンも入れる

const button = document.getElementById("myButton");
const hiddenContent = document.getElementById("hiddenContent");

button.addEventListener("click", function() {
  if (hiddenContent.style.display === "none") {
    hiddenContent.style.display = "block";
  } else {
    hiddenContent.style.display = "none";
  }
});
</script>

</body>
</html>