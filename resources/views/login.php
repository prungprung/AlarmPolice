<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
    <title>My LIFF App</title>
</head>
<style>
.center{
    margin-left: 13%;
    margin-top: 95%;
}
.center-button{
    padding-left: 38%;
}
</style>
<body>

<div class="center">
<div>
user:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"></input>
<br>password: <input type="text"></input><br/>
</div><br>
<div class="center-button"><input type="button" value="login" onclick="submits()"></input></div>
</div>
<p id="accessToken"><b>AccessToken:</b> </p>
  <p id="userId"><b>userId:</b> </p>
  <p id="displayName"><b>displayName:</b> </p>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://static.line-scdn.net/liff/edge/versions/2.1.13/sdk.js"></script>
    <script>
function submits(){
    window.location.href = "https://liff.line.me/1654272826-Og8LnyZ6"
    closed();
}
function closed() {
    console.log("55555");
            liff.closeWindow()
        }
        async function main() {
            liff.ready.then(() => {
           i
            })
            await liff.init({
                liffId: "1654272826-Og8LnyZ6"
            })
        }
        main()
    </script>
</body>

</html>