
<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_MOBILE_PATH.'/head.php');

?>


<?php
// 이 함수가 바로 최신글을 추출하는 역할을 합니다.
// 사용방법 : latest(스킨, 게시판아이디, 출력라인, 글자수);
// 테마의 스킨을 사용하려면 theme/basic 과 같이 지정
echo latest('theme/notice', 'notice', 6, 43);
?>








<!--그누보드 테일을 출력합니다.-->
<?php
include_once(G5_PATH.'/tail.php');
?>

<?php
include_once(G5_THEME_MOBILE_PATH.'/tail.php');
?>