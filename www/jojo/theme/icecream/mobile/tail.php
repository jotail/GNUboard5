<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
?>




    </div>
</div>

<div id="ft">
    <div id="ft_copy">
        <div id="ft_company">
            <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a>
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">개인정보처리방침</a>
            <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a>
        </div>
        Copyright &copy; <b>소유하신 도메인.</b> All rights reserved.<br>
    </div>
    <button type="button" id="top_btn"><i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span></button>
    <button type="button" id="top_btn_1"><a href="https://www.kakaocorp.com/service/KakaoTalk" target="_blank"><i class="far fa-comment-dots"></i></a></button>
    <div id="top_btn2">

  <div id="top_btn2_1"><a href="https://www.facebook.com/Musicusbooth/%22" target="_blank" </a><img src="/www/jojo/img/"</div>

  <div id="top_btn2_1"><a href="https://www.facebook.com/Musicusbooth/%22" target="_blank" </a><img src="/www/jojo/img/" </div>

  <div id="top_btn2_1"><a href="https://www.facebook.com/Musicusbooth/%22" target="_blank" </a><img src="/www/jojo/img/" </div>
    
    </div>

    <?php
    if(G5_DEVICE_BUTTON_DISPLAY && G5_IS_MOBILE) { ?>
    <a href="<?php echo get_device_change_url(); ?>" id="device_change">PC 버전으로 보기</a>
    <?php
    }

    if ($config['cf_analytics']) {
        echo $config['cf_analytics'];
    }
    ?>
</div>



<script>
jQuery(function($) {

    $( document ).ready( function() {

        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));

        //상단고정
        if( $(".top").length ){
            var jbOffset = $(".top").offset();
            $( window ).scroll( function() {
                if ( $( document ).scrollTop() > jbOffset.top ) {
                    $( '.top' ).addClass( 'fixed' );
                }
                else {
                    $( '.top' ).removeClass( 'fixed' );
                }
            });
        }

        //상단으로
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });

    });
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>
