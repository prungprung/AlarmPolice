<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0,viewport-fit=cover">
    <title>My LIFF App</title>
</head>
<style>
    table
    {       
         border: 1px solid black;
        width: 100%;
    }
    tr,td,th{
        text-align: center;
        border: 1px solid black;
        width: 33%;
    }
</style>

<body>
    <div>
        ค้นหารถ<br>
        <input type="text"></input><input type="button" value="ค้นหา"></input><br><br>
        <table>
            <tr>
                <th>เลขที่</th>
                <th><a href="/car">ทะเบียน</a></th>
                <th>ยี่ห้อ</th>
            </tr>
            <tr>
                <td>1</td>
                <td><a href="url">4คค1</a></td>
                <td>Toyota</td>
            </tr>
            <tr>
                <td>2</td>
                <td>4กน7789</td>
                <td>Honda</td>
            </tr>
            <tr>
                <td>3</td>
                <td>9นช413</td>
                <td>Izuzu</td>
            </tr>
            <tr>
                <td>4</td>
                <td>กก11111</td>
                <td>Mazda</td>
            </tr>
            <tr>
                <td>5</td>
                <td>สง9696</td>
                <td>Bmw</td>
            </tr>
            <tr>
                <td>6</td>
                <td>8กล7789</td>
                <td>Suzuki</td>
            </tr>
        </table>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://static.line-scdn.net/liff/edge/versions/2.1.13/sdk.js"></script>
    <script>
        async function main() {
            await liff.init({
                liffId: "1654272826-Rw6k9XEd"
            })
        }
        main()
    </script>
</body>

</html>