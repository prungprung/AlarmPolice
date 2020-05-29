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
<div class="center-button"><input type="button" value="login" onclick="closed()"></input></div>
</div>
<p id="accessToken"><b>AccessToken:</b> </p>
  <p id="userId"><b>userId:</b> </p>
  <p id="displayName"><b>displayName:</b> </p>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://static.line-scdn.net/liff/edge/versions/2.1.13/sdk.js"></script>
    <script>
        function logOut() {
            liff.logout()
            window.location.reload()
        }

        function closed() {
            liff.closeWindow()
        }

        var userid;
        var displayName;
        var decodedIDToken;
        var utouId;
        var accessToken;
        async function getdata() {
            const profile = await liff.getProfile()

            var json = {
                "userId": profile.userId,
                "displayName": profile.displayName,
                "accessToken": liff.getAccessToken()
            }
                    document.getElementById('userId').append(profile.userId);
                    document.getElementById('displayName').append(profile.displayName);
                    document.getElementById('accessToken').append(liff.getAccessToken());
            console.log(json);
            $.ajax({
                type: "GET",
                url: "/senddata",
                data: {
                    'data': json
                },
                dataType: "json",
                success: function(data) {
                    console.log("success")
                },
                fail: function(data) {
                    console.log("error")
                },
            });
        }
        async function main() {
            liff.ready.then(() => {
                if (liff.isLoggedIn()) {
                    logOut()
                    getdata();
                } else {
                    liff.login()
                    if (liff.isLoggedIn()) {
                        closed();
                    }
                }
            })
            await liff.init({
                liffId: "1654272826-Og8LnyZ6"
            })
        }
        main()
    </script>
</body>

</html>