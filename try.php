<?php

            $conn = mysqli_connect('localhost', 'root', '2015142011', 'chandb');
            if ( !$conn ) die('DB Error');
 
            /* Set to UTF-8 Encoding */
            mysqli_query($conn, 'set session character_set_connection=utf8;');
            mysqli_query($conn, 'set session character_set_results=utf8;');
            mysqli_query($conn, 'set session character_set_client=utf8;');
              
            /* Load data */
            $query = 'SELECT * FROM exam';
            $result = mysqli_query($conn, $query);
              

            while( $row = mysqli_fetch_array($result) ) 
			{
				
				$id = $row[0];
				$state = $row[1];
				$time = $row[2];

				echo "    ";
				echo $id;
				echo " - 상태 : ";
				echo $state;
				echo ", 시간 : ";
				echo $time;
				
				//웹에서 보기위한 enter <- 어플 실행시 삭제할 코드
				//echo "</br><br/>"; 
				
				//안드로이드 스튜디오에서 확인하기 위한 코드 php에서 출력시 오류는 아니다.
				echo "\n";
            }


		//mysqli_close($con);

?>