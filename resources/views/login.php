<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
    <title>Alarm-Police</title>
</head>

<body>
    <style>
        .center {
            margin-left: 13%;
            margin-top: 95%;
        }

        .center-button {
            padding-left: 38%;
        }
    </style>
    <div class="center">
        <div>
            user:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text"></input>
            <br>password: <input type="text"></input><br />
        </div><br>
        <div class="center-button"><input type="button" value="login" onclick="submits()"></input></div>
    </div>

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

        function submits() {
            $.ajax({
                type: "GET",
                url: "/listData/login",
                success: function(data) {
                    console.log("success")
                },
                fail: function(data) {
                    console.log("error")
                },
            });
            closed();
        }
        var userid;
        var displayName;
        var decodedIDToken;
        var utouId;
        var accessToken;
        async function getdata() {
            const profile = await liff.getProfile()

            var json = {
                "status": "login",
                "userId": profile.userId,
                "displayName": profile.displayName,
                "accessToken": liff.getAccessToken()
            }
            console.log(json);
            $.ajax({
                type: "GET",
                url: "/listData",
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
                    getdata();
                } else {
                    liff.login()
                    if (liff.isLoggedIn()) {}
                }
            })
            await liff.init({
                liffId: "1654272826-aG6Wkoq8"
            })
        }
        main()
    </script>
</body>

</html>