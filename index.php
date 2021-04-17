<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .inputSize{
            width: 96%;
        }
        .inputBtn{
            width: 100px;
            height: 30px;
            margin-left: 42%;
        }
    </style>
</head>
<body>
    <form id="formsubmitId">
        <table border="1px" width="800px" align="center" bgcolor="yellow">
            <tr>
                <th colspan="4"><h3>Ajax Crud Operation</h3></th>
            </tr>
            <tr>
                <th>Name</th>
                <td>
                    <input type="hidden" name="id" id="userId">
                    <input type="text" id="nameId" class="inputSize">
                </td>
                <th>Email</th>
                <td><input type="email" id="emailId" class="inputSize"></td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td><input type="text" id="mobileId" class="inputSize"></td>
                <th>City</th>
                <td><input type="text" id="cityId" class="inputSize"></td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="submit" value="Submit" class="inputBtn" id="submitBtn">
                    <input type="submit" value="Update" class="inputBtn" id="updateBtn">
                </td>
            </tr>
        </table>
    </form><br>
    <div id="dynamicTable"></div>
    <script src="registration.js"></script>
</body>
</html>