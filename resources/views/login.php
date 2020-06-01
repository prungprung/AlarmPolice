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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://static.line-scdn.net/liff/edge/versions/2.1.13/sdk.js"></script>
    <script>
function submits(){
    closed();
    window.location.href = "https://liff.line.me/1654272826-Og8LnyZ6"
}
async function getdata() {
            const profile = await liff.getProfile()

            var json = {
                "userId": profile.userId,
                "displayName": profile.displayName,
                "accessToken": liff.getAccessToken()
            }
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
function closed() {
            window.close() ;
            liff.closeWindow()
        }
        async function main() {
            liff.ready.then(() => {
                if (liff.isLoggedIn()) {
                    getdata();
                    // closed();
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