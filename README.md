# SQL injection check

>사용한 프레임워크 : codeigniter 3, bootstrap 4<br>
>사용한 언어 : php5, css3, jquery, javascript, SQL<br>
>사용한 DB : MariaDB<br>
>사용한 DBMS : MySQL<br>
>사용한 서버 : Apache2 server<br>
>개발 Tool : Visual Studio Code<br>
>테스트한 OS : Window<br>
<br>

### 프로젝트 분류 : 개인 프로젝트

<ul>
  <li><b>제작한 목적</b> : 특정 쿼리를 입력하면 입력한 쿼리가 SQL Injection 공격을 일으키는지 확인합니다.</li>
</ul>
<br>

### 주의사항
<ul>
  <li>이 프로젝트를 실행하기 위해서는 my 이름의 폴더가 있어야 합니다.</li>
  <kbd>
    <img src="https://user-images.githubusercontent.com/74585673/153512814-370120a3-735b-4730-869e-a6f7a24387e0.PNG">
  </kbd><br><br>
  <li>/config/database.php 에서 데이터베이스를 새로 설정해주시기 바랍니다.</li>
  <li>데이터베이스의 데이터 정렬방식은 utf8_general_ci로 통일했습니다.</li>
  <li>codeIgniter3 에서 Index 죽이기 작업을 하고 진행했습니다. 위의 코드를 실행시키려면 먼저 Index 죽이기 작업을 하셔야 합니다.</li>
   <li><a href="https://gold9ine.tistory.com/entry/CodeIgniter-%EC%BD%94%EB%93%9C%EC%9D%B4%EA%B7%B8%EB%82%98%EC%9D%B4%ED%84%B0-indexphp-%EC%A3%BD%EC%9D%B4%EA%B8%B0-Not-Found-error">index.php remove 방법 블로그 글</a></li>
</ul>
<br>

### 사용 결과
<kbd>
    <img src="https://user-images.githubusercontent.com/74585673/174460463-056108a0-f1f5-46ce-b8d1-0e7f75e378d5.PNG">
</kbd>
<br><br>
<kbd>
    <img src="https://user-images.githubusercontent.com/74585673/174460467-ed092471-9b74-46c2-93e0-74ab9ae977a1.PNG">
</kbd>
<br><br>
