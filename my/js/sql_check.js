function check(){
    var incheck = document.getElementById("sqlid").value; // sqlid태그에 입력된 값을 incheck에 저장
    if(incheck == ""){ // 입력을 안한 경우
        alert("쿼리를 입력해주십시오"); 
        return;
    }
    else{
        $.ajax({ 
            url: "/test/sql_check", // sql_check.php 컨트롤러로 전송
            type: "POST", // post 전송
            data: {
                "input_sql":incheck // 입력한 SQL문 
            },
            dataType:'json', // json 타입으로 전송
            async : true,
            success:function(data){
                if(data.response == "Success"){
                    $("#Success").append("<p style='color:blue'>select * from sqltest where name "+incheck+"</p>");
                    // 쿼리 공격에 성공하면 id가 Success인 태그에 입력한 쿼리 출력
                }
                else{
                    $("#Failed").append("<p style='color:red'>select * from sqltest where name "+incheck+"</p>"); 
                    // 쿼리 공격에 실패하면 id가 Failed인 태그에 입력한 쿼리 출력
                }
            },
            error:function(xhr, status, error){
                alert("쿼리에러"); 
            }
        });
    }
}