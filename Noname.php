<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>첫번째 홈페이지</title>
  </head>
  <body>
    <table align='center'>
      <tr>
        <td bgcolor="#AC58FA">
          <font size = "100" color = 'white' align='center'><storng>우리의 일기장</strong></font>
        </td>
      </tr>
    </table>
    <table align='center'>
      <tr>
        <td>
          <font size= "5" color="black"><strong>수지가 좋아하는 보라색..</stong></font>
        </td>
      </tr>
    </table>

    <table>
    <div style="text-align : center;">
         <img src="suzy.jpg">
    </div>
    <p align='center'>
        <iframe src="silence.mp3" allow="autoplay" id="audio" style="display:none"></iframe>
    <audio id="audio" autoplay controls>
    <source src="willyoumarryme.mp3">
    </audio>
    </table>

    <form action="Noname1.php" method="post">
    <table align='center'>
      <tr>
        <td width='30%' height='30' align='center'>아이디</td>
        <td width='70%' height='30' align='left'>
          <input type="text" name="id" style="width:150px; height:25px; background-color:#d0cbe5">
        </td>
      </tr>
      <tr>
        <td width='30%' height='30' align='center'>비밀번호</td>
        <td width='70%' height='30' align='left'>
          <input type="password" name="password" style="width:150px; height:25px; background-color:#d0cbe5">
          <input type="submit" value='접속'>
        </td>
      </tr>
    </table>
  </form>

  </body>
</html>
