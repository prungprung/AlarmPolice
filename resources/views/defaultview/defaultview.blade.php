<button type="button" onclick="window.location='{{ url("/sendflex") }}'">sendFlex</button>
<button type="button" onclick="window.location='{{ url("/sendnotify") }}'">sendNotify</button>
<button type="button" onclick="window.location='{{ url("/sendrichmenu/login") }}'">sendRichMenuLogin</button>
<button type="button" onclick="logout()">sendRichMenuNonLogin</button>
<button type="button" onclick="window.location='{{ url("/sendchatbot") }}'">sendchatbot</button>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://static.line-scdn.net/liff/edge/versions/2.1.13/sdk.js"></script>
    <script>
        async function logout() {
            const profile = await liff.getProfile()

            var json = {
                "status": "nonlogin",
                "userId": "",
                "displayName": "",
                "accessToken": ""
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
    </script>