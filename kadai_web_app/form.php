<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>課題</title>
</head>

<body>
    <h2>社員情報入力フォーム</h2>
    <form action="confirm.php" method="post">
        <table>
            <tr>
                <th>社員名</th>
                <td>
                    <input type="textbox" name="name">
                </td>
            </tr>
            <tr>
                <th>年齢</th>
                <td>
                    <input type="textbox" name="age">
                </td>
            </tr>
            <tr>
                <th>所属部署</th>
                <td>
                    <select name="div">
                        <option>開発部</option>
                        <option>営業部</option>
                        <option>人事部</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" value="送信">
    </form>

</body>

</html>