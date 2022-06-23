<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SQL Injection Test</title>
        <!--bootstrap 4.5 css-->
        <link rel="stylesheet" href="/my/css/bootstrap.css">
        <link rel="stylesheet" href="/my/css/bootstrap.css.map">
    </head>
    <body>
        <br><br>
        <!--입력받는 부분, 테이블 출력-->
        <div style="padding-left:20px"> 
            <div style="padding-left:20px">
                <div class="row" style="padding-left:20px">
                    <label for="sqlid" class="col-form-label" style="padding-right:10px">select * from sqltest where name</label>
                    <div class="col-sm-6" style="padding-left:0px">
                        <div class="input-group">
                            <input type="test" class="form-control" id="sqlid" name="sql" aria-describedby="sql-button">
                            <div class="input-group-append" id="sql-button">
                                <button class="btn btn-outline-secondary" type="button" onclick="check()">SQL Injection Check</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><br><br>
        <div class="row" style="padding-left:40px">
            <div class="col-sm-6">
                <p style="font-weight: 600" id="Success">SQL Injection Success</p>
            </div>
            <div class="col-sm-6">
                <p style="font-weight: 600" id="Failed">SQL Injection Failed</p>
            </div>
        </div>
    </body>
    <!--bootstrap 4.5 Javascript-->
    <script src="/my/js/jquery-3.6.0.js"></script>
    <script src="/my/js/bootstrap.js"></script>
    <script src="/my/js/sql_check.js"></script>
</html>