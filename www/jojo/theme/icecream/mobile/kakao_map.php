<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head.php');
?>
<!--그누보드 헤더부분을 출력합니다.-->



<style>
	#map{
		margin:15px auto;/*지도 가운데배치:margin-top15px;margin-bottom:15pz;margin-left:auto;margin-right:auto; */
		border:solid thin blue;		
	}
</style>


<!--그누보드 헤더와 테일사이에 지도를 출력합니다.-->
<!--지도에 스타일추가 : 전체해상도:1200px, 아웃로그인: 305px; 지도가 표시되는 공간은 900px내에서 적당히 조절하면 됩니다.-->
<div id="map" style="width:600px;height:350px;"></div>

<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=ae00cac1918b9077517e0f80df2e80ec"></script>
<!--https://developers.kakao.com/에서 REST API 키: ***************49dc 발급받아서 입력-->

<!--참고페이지: http://apis.map.daum.net/web/sample/addr2coord/-->
<script>
var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
    mapOption = { 
        center: new daum.maps.LatLng(33.450701, 126.570667), // 지도의 중심좌표
        level: 3 // 지도의 확대 레벨
    };

var map = new daum.maps.Map(mapContainer, mapOption);

// 마커가 표시될 위치입니다 
var markerPosition  = new daum.maps.LatLng(33.450701, 126.570667); 

// 마커를 생성합니다
var marker = new daum.maps.Marker({
    position: markerPosition
});

// 마커가 지도 위에 표시되도록 설정합니다
marker.setMap(map);

var iwContent = '<div style="padding:5px;">Hello Kimchulyong! <br><a href="http://map.daum.net/link/map/Hello World!,33.450701,126.570667" style="color:blue" target="_blank">큰지도보기</a> <a href="http://map.daum.net/link/to/Hello World!,33.450701,126.570667" style="color:blue" target="_blank">길찾기</a></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
    iwPosition = new daum.maps.LatLng(33.450701, 126.570667); //인포윈도우 표시 위치입니다

// 인포윈도우를 생성합니다
var infowindow = new daum.maps.InfoWindow({
    position : iwPosition, 
    content : iwContent 
});
  
// 마커 위에 인포윈도우를 표시합니다. 두번째 파라미터인 marker를 넣어주지 않으면 지도 위에 표시됩니다
infowindow.open(map, marker); 
</script>


<!--그누보드 테일을 출력합니다.-->
<?php
include_once(G5_PATH.'/tail.php');
?>