<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    include "../connect/sessionCheck.php";
    
    $sql = "SELECT count(swEventID) FROM swEvent";
    $result = $connect -> query($sql);
    $eventTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
    $eventTotalCount = $eventTotalCount['count(swEventID)'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>이벤트</title>
    <?php include "../include/head.php" ?>
</head>
<body>
    <?php include "../include/skip.php" ?>
    <!-- //skip -->
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <div class="tab__menu">
        <div class="tab__inner">
            <h1>자주 묻는 질문</h1>
            <p>하루 한 지문에 자주 묻는 내용을 모았습니다.</p>
        </div>
    </div>
    <!-- tab -->

    <main>
        <div class="boardView__inner container mb100">
            <div class="view__head">
                <a href="notice.php"><img src="../html/assets/img/list.png" alt="리스트"></a>
                <h2><a href="notice.php">공지사항</a></h2><em>></em>
                <h2><a href="faq.php"><span>자주 묻는 질문</span></a></h2>
            </div>
            <div class="board__inner container">
                <div class="faq-list__content">
                    <ul class="faq-list__list faqContentsUl" data-js="accordion">
                        <li class="faq-list__item " data-js="accordion_item">
                            <a href="#c" class="faq-list__question" ntmtsrno="291426" data-js="accordion_title" aria-controls="answerId1" aria-expanded="false">
                                <span class="faq__icon"><i aria-hidden="true"></i><em>Q</em></span>
                                <span class="faq__title"><span class="blind">질문 분류</span> 회원 관련</span>
                                <strong class="faq__text">회원 탈퇴</strong>
                                <!-- <p><img src="assets/img/faq__Arrow01.svg" alt="화살표"></p> -->
                                <span class="blind" data-js="accordion_state">접기</span>
                            </a>
                            <div class="faq-list__answer" data-js="accordion_content" id="answerId1" style="">
                                <div class="answer__wrap">
                                    <span class="answer__icon">
                                        <i aria-hidden="true"></i>
                                        <em class="blind">답변</em>
                                    </span>
                                    <div class="answer__box">회원 탈퇴시에는 동일 ID로 재가입이 불가하며,고객정보 등이 모두 삭제됩니다.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="faq-list__list faqContentsUl" data-js="accordion">
                        <li class="faq-list__item " data-js="accordion_item">
                            <a href="#c" class="faq-list__question" ntmtsrno="291426" data-js="accordion_title" aria-controls="answerId1" aria-expanded="false">
                                <span class="faq__icon"><i aria-hidden="true"></i><em>Q</em></span>
                                <span class="faq__title"><span class="blind">질문 분류</span> 회원 관련</span>
                                <strong class="faq__text">아이디/비밀번호 찾기</strong>
                                <!-- <p><img src="assets/img/faq__Arrow01.svg" alt="화살표"></p> -->
                                <span class="blind" data-js="accordion_state">접기</span>
                            </a>
                            <div class="faq-list__answer" data-js="accordion_content" id="answerId1" style="">
                                <div class="answer__wrap">
                                    <span class="answer__icon">
                                        <i aria-hidden="true"></i>
                                        <em class="blind">답변</em>
                                    </span>
                                    <div class="answer__box">아이디와 비밀번호를 잃어버렸을 경우<br>
                                        홈페이지 상단에 로그인 클릭하신 후 아이디찾기 또는 비밀번호 찾기를 선택하여 간단한 확인절차 후 조회해주시기 바랍니다.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="faq-list__list faqContentsUl" data-js="accordion">
                        <li class="faq-list__item " data-js="accordion_item">
                            <a href="#c" class="faq-list__question" ntmtsrno="291426" data-js="accordion_title" aria-controls="answerId1" aria-expanded="false">
                                <span class="faq__icon"><i aria-hidden="true"></i><em>Q</em></span>
                                <span class="faq__title"><span class="blind">질문 분류</span> 회원 관련</span>
                                <strong class="faq__text">회원 정보 수정</strong>
                                <!-- <p><img src="assets/img/faq__Arrow01.svg" alt="화살표"></p> -->
                                <span class="blind" data-js="accordion_state">접기</span>
                            </a>
                            <div class="faq-list__answer" data-js="accordion_content" id="answerId1" style="">
                                <div class="answer__wrap">
                                    <span class="answer__icon">
                                        <i aria-hidden="true"></i>
                                        <em class="blind">답변</em>
                                    </span>
                                    <div class="answer__box">회원정보 수정은 메인 > MY 페이지 > MY 회원정보 > 기본정보수정 을 통해 수정 가능합니다.<br>
                                        1. 개명 하였을 경우에도 기본정보수정을 통해 이름 수정이 가능합니다.<br>
                                        2. 한번 등록된 아이디는 수정 또는 변경이 어렵습니다.<br>
                                        [개인정보수정 바로가기]
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="faq-list__list faqContentsUl" data-js="accordion">
                        <li class="faq-list__item " data-js="accordion_item">
                            <a href="#c" class="faq-list__question" ntmtsrno="291426" data-js="accordion_title" aria-controls="answerId1" aria-expanded="false">
                                <span class="faq__icon"><i aria-hidden="true"></i><em>Q</em></span>
                                <span class="faq__title"><span class="blind">질문 분류</span> 회원 관련</span>
                                <strong class="faq__text">회원 가입 방법</strong>
                                <!-- <p><img src="assets/img/faq__Arrow01.svg" alt="화살표"></p> -->
                                <span class="blind" data-js="accordion_state">접기</span>
                            </a>
                            <div class="faq-list__answer" data-js="accordion_content" id="answerId1" style="">
                                <div class="answer__wrap">
                                    <span class="answer__icon">
                                        <i aria-hidden="true"></i>
                                        <em class="blind">답변</em>
                                    </span>
                                    <div class="answer__box">홈페이지 상단에 로그인 클릭하신 후 개인정보 이용약관에 동의하신 후<br>
                                        사용할 이미지와 간단한 개인정보를 입력하여 가입하신 후 서비스를 이용하실 수 있습니다.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="faq-list__list faqContentsUl" data-js="accordion">
                        <li class="faq-list__item " data-js="accordion_item">
                            <a href="#c" class="faq-list__question" ntmtsrno="291426" data-js="accordion_title" aria-controls="answerId1" aria-expanded="false">
                                <span class="faq__icon"><i aria-hidden="true"></i><em>Q</em></span>
                                <span class="faq__title"><span class="blind">질문 분류</span> 회원 관련</span>
                                <strong class="faq__text">시스템 장애</strong>
                                <!-- <p><img src="assets/img/faq__Arrow01.svg" alt="화살표"></p> -->
                                <span class="blind" data-js="accordion_state">접기</span>
                            </a>
                            <div class="faq-list__answer" data-js="accordion_content" id="answerId1" style="">
                                <div class="answer__wrap">
                                    <span class="answer__icon">
                                        <i aria-hidden="true"></i>
                                        <em class="blind">답변</em>
                                    </span>
                                    <div class="answer__box">사진 첨부시 파일 업로드 장애 발생<br>
                                        1. 파일 업로드시 "HTTP 404 - 파일을 찾을 수 없습니다" 오류가 납니다.<br>
                                        2. 첨부파일에 한글로된 파일명(맥에서 작성된 또는 특수문자가 들어가 있는 파일명)이 있는 경우,<br>
                                        파일의 용량이 크거나(5MB 이하), 파일명의 길이가 너무 긴경우, 오류가 발생됩니다.<br>
                                        3. 첨부파일을 영문 또는 숫자로 만들어 업로드 부탁 드립니다.
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="faq-list__list faqContentsUl" data-js="accordion">
                        <li class="faq-list__item " data-js="accordion_item">
                            <a href="#c" class="faq-list__question" ntmtsrno="291426" data-js="accordion_title" aria-controls="answerId1" aria-expanded="false">
                                <span class="faq__icon"><i aria-hidden="true"></i><em>Q</em></span>
                                <span class="faq__title"><span class="blind">질문 분류</span> 회원 관련</span>
                                <strong class="faq__text">이벤트 당첨</strong>
                                <!-- <p><img src="assets/img/faq__Arrow01.svg" alt="화살표"></p> -->
                                <span class="blind" data-js="accordion_state">접기</span>
                            </a>
                            <div class="faq-list__answer" data-js="accordion_content" id="answerId1" style="">
                                <div class="answer__wrap">
                                    <span class="answer__icon">
                                        <i aria-hidden="true"></i>
                                        <em class="blind">답변</em>
                                    </span>
                                    <div class="answer__box">1. 이벤트는 이벤트 응모 후 사이트내 당첨공지가 진행되는 이벤트가 있습니다.<br>
                                        2. 이벤트 응모 후 당첨 확인은 사이트내 메인 > MY 페이지에서 확인 가능합니다.<br>
                                        3. 당첨공지 후 해당 이벤트 확인 기간 내에 [확인]을 꼭 해주세요.<br>
                                        4. 이벤트 당첨안내 바로가기
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="faq-list__list faqContentsUl" data-js="accordion">
                        <li class="faq-list__item " data-js="accordion_item">
                            <a href="#c" class="faq-list__question" ntmtsrno="291426" data-js="accordion_title" aria-controls="answerId1" aria-expanded="false">
                                <span class="faq__icon"><i aria-hidden="true"></i><em>Q</em></span>
                                <span class="faq__title"><span class="blind">질문 분류</span> 회원 관련</span>
                                <strong class="faq__text">지문은 어디서 가져오는 건가요?</strong>
                                <!-- <p><img src="assets/img/faq__Arrow01.svg" alt="화살표"></p> -->
                                <span class="blind" data-js="accordion_state">접기</span>
                            </a>
                            <div class="faq-list__answer" data-js="accordion_content" id="answerId1" style="">
                                <div class="answer__wrap">
                                    <span class="answer__icon">
                                        <i aria-hidden="true"></i>
                                        <em class="blind">답변</em>
                                    </span>
                                    <div class="answer__box">하루 한 지문의 모든 지문은 한국교육원에서 가져옵니다.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="faq-list__list faqContentsUl" data-js="accordion">
                        <li class="faq-list__item " data-js="accordion_item">
                            <a href="#c" class="faq-list__question" ntmtsrno="291426" data-js="accordion_title" aria-controls="answerId1" aria-expanded="false">
                                <span class="faq__icon"><i aria-hidden="true"></i><em>Q</em></span>
                                <span class="faq__title"><span class="blind">질문 분류</span> 회원 관련</span>
                                <strong class="faq__text">하루 한 지문 사이트 설립 연도는?</strong>
                                <!-- <p><img src="assets/img/faq__Arrow01.svg" alt="화살표"></p> -->
                                <span class="blind" data-js="accordion_state">접기</span>
                            </a>
                            <div class="faq-list__answer" data-js="accordion_content" id="answerId1" style="">
                                <div class="answer__wrap">
                                    <span class="answer__icon">
                                        <i aria-hidden="true"></i>
                                        <em class="blind">답변</em>
                                    </span>
                                    <div class="answer__box">하루 한 지문은 2023년 학원에서 조별작업을 통해 만들어지게 되었으며 현재 5월에도 운영, 보수중입니다.</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="faq-list__list faqContentsUl" data-js="accordion">
                        <li class="faq-list__item " data-js="accordion_item">
                            <a href="#c" class="faq-list__question" ntmtsrno="291426" data-js="accordion_title" aria-controls="answerId1" aria-expanded="false">
                                <span class="faq__icon"><i aria-hidden="true"></i><em>Q</em></span>
                                <span class="faq__title"><span class="blind">질문 분류</span> 회원 관련</span>
                                <strong class="faq__text">오답노트는 평생 저장이 가능한가요?</strong>
                                <!-- <p><img src="assets/img/faq__Arrow01.svg" alt="화살표"></p> -->
                                <span class="blind" data-js="accordion_state">접기</span>
                            </a>
                            <div class="faq-list__answer" data-js="accordion_content" id="answerId1" style="">
                                <div class="answer__wrap">
                                    <span class="answer__icon">
                                        <i aria-hidden="true"></i>
                                        <em class="blind">답변</em>
                                    </span>
                                    <div class="answer__box">오답노트는 평생 저장이 가능하며, 회원 탈퇴시에 고객정보 등과 함께 모두 삭제됩니다.</div>
                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php"?>
    <!-- //footer -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(function() {
            $('.faq-list__answer').hide(); // FAQ 답변을 숨기는 부분 추가
            $('.faq-list__question').on('click', function() {
                $(this).attr('aria-expanded', function(index, attr) {
                    return attr == 'true' ? 'false' : 'true';
                }).toggleClass('active').next('.faq-list__answer').slideToggle();
            });
        });
    </script>
</body>
</html>