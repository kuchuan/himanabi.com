@extends('layout')

@section('title')
メッセージ画面
@endsection



<link rel="stylesheet" type="text/css" href="/css/contact.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>


@section('content')

  <!--Coded With Love By Mutiullah Samim-->
    <div class="container-fluid pt-5 h-100">
      <div class="row justify-content-center h-100">
        <div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
          <div class="card-header">
            <div class="input-group">
              <input type="text" style="text-white" placeholder="Search..." name="" class="form-control search">
              <div class="input-group-prepend">
                <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
              </div>
            </div>
          </div>
          <div class="card-body contacts_body">
            <ui class="contacts">
            <li class="active">
              <div class="d-flex bd-highlight">
                <div class="img_cont">
                  <img src="/img/ごっしー.JPG" class="rounded-circle user_img">
                  <span class="online_icon"></span>
                </div>
                <div class="user_info">
                  <span>五島　晃希</span>
                  <p> is online</p>
                </div>
              </div>
            </li>

            </ui>
          </div>
          <div class="card-footer"></div>
        </div></div>
        <div class="col-md-8 col-xl-6 chat">
          <div class="card">
            <div class="card-header msg_head">
              <div class="d-flex bd-highlight">
                <div class="img_cont">
                  <img src="/img/ごっしー.JPG" class="rounded-circle user_img">
                  <span class="online_icon"></span>
                </div>
                <div class="user_info">
                  <span>Chat with Koki Goshima</span>
                  <p>1767 Messages</p>
                </div>
                <div class="video_cam">

                </div>
              </div>
              <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
              <div class="action_menu">
                <ul>
                  <li><i class="fas fa-user-circle"></i> View profile</li>
                  <li><i class="fas fa-users"></i> Add to close friends</li>
                  <li><i class="fas fa-plus"></i> Add to group</li>
                  <li><i class="fas fa-ban"></i> Block</li>
                </ul>
              </div>
            </div>
            <div class="card-body msg_card_body">
              <div class="d-flex justify-content-start mb-4">
                <div class="img_cont_msg">
                  <img src="/img/ごっしー.JPG" class="rounded-circle user_img_msg">
                </div>
                <div class="msg_cotainer">
                  Hi, how are you yuki?<br>
                  My name is goshima!
                  <span class="msg_time">8:40 AM, Today</span>
                </div>
              </div>
              <div class="d-flex justify-content-end mb-4">
                <div class="msg_cotainer_send">
                  Yes! I'm Yuki! <br>
                  i'm interested in your dancing skill!<br>
                  I want to know more about it!!
                  <span class="msg_time_send">8:55 AM, Today</span>
                </div>
                <div class="img_cont_msg">
              <img src="/img/marusan.jpg" class="rounded-circle user_img_msg">
                </div>
              </div>
              <div class="d-flex justify-content-start mb-4">
                <div class="img_cont_msg">
                  <img src="/img/ごっしー.JPG" class="rounded-circle user_img_msg">
                </div>
                <div class="msg_cotainer">
                  Thank you for your interest.<br>
                  Do you want to know more? about my dancing? 
                  <span class="msg_time">9:00 AM, Today</span>
                </div>
              </div>
              <div class="d-flex justify-content-end mb-4">
                <div class="msg_cotainer_send">
                  Of course! So,Tell me quickly succinctly.
                  <span class="msg_time_send">9:05 AM, Today</span>
                </div>
                <div class="img_cont_msg">
              <img src="/img/marusan.jpg" class="rounded-circle user_img_msg">
                </div>
              </div>
              <div class="d-flex justify-content-start mb-4">
                <div class="img_cont_msg">
                  <img src="/img/ごっしー.JPG" class="rounded-circle user_img_msg">
                </div>
                <div class="msg_cotainer">
                  For now, I'm busy for dancing.
                  <span class="msg_time">9:07 AM, Today</span>
                </div>
              </div>
              <div class="d-flex justify-content-end mb-4">
                <div class="msg_cotainer_send">
                  Ok, Then I'll ask someone else.
                  <span class="msg_time_send">9:10 AM, Today</span>
                </div>
                <div class="img_cont_msg">
            <img src="/img/marusan.jpg" class="rounded-circle user_img_msg">
                </div>
              </div>
              <div class="d-flex justify-content-start mb-4">
                <div class="img_cont_msg">
                  <img src="/img/ごっしー.JPG" class="rounded-circle user_img_msg">
                </div>
                <div class="msg_cotainer">
                  Bye, see you
                  <span class="msg_time">9:12 AM, Today</span>
                </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="input-group">
                <div class="input-group-append">
                  <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                </div>
                <textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
                <div class="input-group-append">
                  <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


@endsection