<!DOCTYPE html>
<html lang="en">
<?php
$data = session()->get('dataUser');
?>

@include('head')


<body>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <img class="brand-title" src="{{ asset('style/images/logo-text.png') }}" alt="">
                <img class="logo-abbr" src="{{ asset('style/images/logo-POSit!.png') }}" alt="">
                <img class="logo-compact" src="{{ asset('style/images/logo-text.png') }}" alt="">
            </a>
            @if ($data->nama != 'user')
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span
                            class="line"></span>
                    </div>
                </div>
            @endif

        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Chat box start
        ***********************************-->
        {{-- <div class="chatbox">
            <div class="chatbox-close"></div>
            <div class="custom-tab-1">
                <ul class="nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#notes">Notes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#alerts">Alerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#chat">Chat</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="chat" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card dz-chat-user-box">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Chat List</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll  " id="DZ_W_Contacts_Body">
                                <ul class="contacts">
                                    <li class="name-first-letter">A</li>
                                    <li class="active dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="{{ asset('style/images/avatar/1.jpg') }}"
                                                    class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Archie Parker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Alfie Mason</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">B</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Bashid Samim</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Breddie Ronan</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Ceorge Carson</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">D</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Darry Parker</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Denry Hunter</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">J</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jack Ronan</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/1.jpg" class="rounded-circle user_img" alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Jacob Tucker</span>
                                                <p>Kalid is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/2.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>James Logan</span>
                                                <p>Taherah left 7 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/3.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Joshua Weston</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">O</li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/4.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oliver Acker</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dz-chat-user">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont">
                                                <img src="images/avatar/5.jpg" class="rounded-circle user_img"
                                                    alt="" />
                                                <span class="online_icon offline"></span>
                                            </div>
                                            <div class="user_info">
                                                <span>Oscar Weston</span>
                                                <p>Rashid left 50 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card chat dz-chat-history-box d-none">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0)" class="dz-chat-history-back">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="18px" height="18px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) "
                                                x="14" y="7" width="2" height="10" rx="1" />
                                            <path
                                                d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z"
                                                fill="#000000" fill-rule="nonzero"
                                                transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) " />
                                        </g>
                                    </svg>
                                </a>
                                <div>
                                    <h6 class="mb-1">Chat with Khelesh</h6>
                                    <p class="mb-0 text-success">Online</p>
                                </div>
                                <div class="dropdown">
                                    <a href="javascript:void(0)" data-toggle="dropdown"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                            viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <circle fill="#000000" cx="5" cy="12" r="2" />
                                                <circle fill="#000000" cx="12" cy="12" r="2" />
                                                <circle fill="#000000" cx="19" cy="12" r="2" />
                                            </g>
                                        </svg></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i>
                                            View profile</li>
                                        <li class="dropdown-item"><i class="fa fa-users text-primary mr-2"></i> Add
                                            to close friends</li>
                                        <li class="dropdown-item"><i class="fa fa-plus text-primary mr-2"></i> Add to
                                            group
                                        </li>
                                        <li class="dropdown-item"><i class="fa fa-ban text-primary mr-2"></i> Block
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body dz-scroll" id="DZ_W_Contacts_Body3">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Hi, how are you samim?
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Hi Khalid i am good tnx how about you?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am good too, thank you for your chat template
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        You are welcome
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        I am looking for your next templates
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        Ok, thank you have a good day
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/2.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/avatar/1.jpg" class="rounded-circle user_img_msg" alt="" />
                                    </div>
                                    <div class="msg_cotainer">
                                        Bye, see you
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer type_msg">
                                <div class="input-group">
                                    <textarea class="form-control" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-primary"><i
                                                class="fa fa-location-arrow"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="alerts" role="tabpanel">
                        <div class="card mb-sm-3 mb-md-0 contacts_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="5" cy="12" r="2" />
                                            <circle fill="#000000" cx="12" cy="12" r="2" />
                                            <circle fill="#000000" cx="19" cy="12" r="2" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notications</h6>
                                    <p class="mb-0">Show All</p>
                                </div>
                                <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body1">
                                <ul class="contacts">
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">KK</div>
                                            <div class="user_info">
                                                <span>David Nester Birthday</span>
                                                <p class="text-primary">Today</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SOCIAL</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont success">RU<i class="icon fa-birthday-cake"></i>
                                            </div>
                                            <div class="user_info">
                                                <span>Perfection Simplified</span>
                                                <p>Jame Smith commented on your status</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="name-first-letter">SEVER STATUS</li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont primary">AU<i class="icon fa fa-user-plus"></i></div>
                                            <div class="user_info">
                                                <span>AharlieKane</span>
                                                <p>Sami is online</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="img_cont info">MO<i class="icon fa fa-user-plus"></i></div>
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>Nargis left 30 mins ago</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="notes">
                        <div class="card mb-sm-3 mb-md-0 note_card">
                            <div class="card-header chat-list-header text-center">
                                <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                            <rect fill="#000000" opacity="0.3"
                                                transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                                x="4" y="11" width="16" height="2" rx="1" />
                                        </g>
                                    </svg></a>
                                <div>
                                    <h6 class="mb-1">Notes</h6>
                                    <p class="mb-0">Add New Nots</p>
                                </div>
                                <a href="javascript:void(0)"><svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px"
                                        viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path
                                                d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                                fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                            <path
                                                d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                                fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg></a>
                            </div>
                            <div class="card-body contacts_body p-0 dz-scroll" id="DZ_W_Contacts_Body2">
                                <ul class="contacts">
                                    <li class="active">
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>New order placed..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-primary btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Youtube, a video-sharing website..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-primary btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>john just buy your product..</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-primary btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex bd-highlight">
                                            <div class="user_info">
                                                <span>Athan Jacoby</span>
                                                <p>10 Aug 2020</p>
                                            </div>
                                            <div class="ml-auto">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-primary btn-xs sharp mr-1"><i
                                                        class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" class="btn btn-danger btn-xs sharp"><i
                                                        class="fa fa-trash"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!--**********************************
            Chat box End
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->

        @include('header')
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        @if ($data->nama != 'user')
            @include('sidebar')
        @endif
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        @if ($data->nama != 'user')
            <div class="content-body">
                <!-- row -->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-xxl-12">
                            <div class="row">
                                <div class="col-xl-3 col-lg-6 col-sm-6">
                                    <div class="widget-stat card">
                                        <div class="card-body  p-4">
                                            <div class="media ai-icon">
                                                <span class="mr-3 bgl-danger text-danger">
                                                    <svg id="icon-revenue" xmlns="http://www.w3.org/2000/svg" width="30"
                                                        height="30" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-dollar-sign">
                                                        <line x1="12" y1="1" x2="12" y2="23"></line>
                                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6">
                                                        </path>
                                                    </svg>
                                                </span>
                                                <div class="media-body">
                                                    <p class="mb-1">Saldo PosPay</p>
                                                    <h4 class="mb-0"><?= $data->saldo ?></h4>
                                                    <span class="badge badge-danger">Top Up</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6">
                                    <div class="card avtivity-card">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <span class="activity-icon bgl-success mr-md-4 mr-3">
                                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip2)">
                                                            <path
                                                                d="M14.6406 24.384C14.4639 24.1871 14.421 23.904 14.5305 23.6633C15.9635 20.513 14.4092 18.7501 14.564 11.6323C14.5713 11.2944 14.8346 10.9721 15.2564 10.9801C15.6201 10.987 15.905 11.2962 15.8971 11.6598C15.8902 11.9762 15.8871 12.2939 15.8875 12.6123C15.888 12.9813 16.1893 13.2826 16.5583 13.2776C17.6426 13.2628 19.752 12.9057 20.5684 10.4567L20.9744 9.23876C21.7257 6.9847 20.4421 4.55115 18.1335 3.91572L13.9816 2.77294C12.3274 2.31768 10.5363 2.94145 9.52387 4.32498C4.66826 10.9599 1.44452 18.5903 0.0754914 26.6727C-0.300767 28.8937 0.754757 31.1346 2.70222 32.2488C13.6368 38.5051 26.6023 39.1113 38.35 33.6379C39.3524 33.1709 40.0002 32.1534 40.0002 31.0457V19.1321C40.0002 18.182 39.5322 17.2976 38.7484 16.7664C34.5339 13.91 29.1672 14.2521 25.5723 18.0448C25.2519 18.3828 25.3733 18.937 25.8031 19.1166C27.4271 19.7957 28.9625 20.7823 30.2439 21.9475C30.5225 22.2008 30.542 22.6396 30.2654 22.9155C30.0143 23.1658 29.6117 23.1752 29.3485 22.9376C25.9907 19.9053 21.4511 18.5257 16.935 19.9686C16.658 20.0571 16.4725 20.3193 16.477 20.61C16.496 21.8194 16.294 22.9905 15.7421 24.2172C15.5453 24.6544 14.9607 24.7409 14.6406 24.384Z"
                                                                fill="#27BC48" />
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip2">
                                                                <rect width="40" height="40" fill="white" />
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </span>
                                                <div class="media-body">
                                                    <p class="fs-14 mb-2">Available Locker</p>
                                                    <span class="title text-black font-w600">16</span>
                                                </div>
                                            </div>
                                            <div class="progress" style="height:5px;">
                                                <div class="progress-bar bg-success" style="width: 42%; height:5px;"
                                                    role="progressbar">
                                                    <span class="sr-only">42% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="effect bg-success"></div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6">
                                    <div class="card avtivity-card">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <span class="activity-icon bgl-secondary  mr-md-4 mr-3">
                                                    <svg width="40" height="37" viewBox="0 0 40 37" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1.64826 26.5285C0.547125 26.7394 -0.174308 27.8026 0.0366371 28.9038C0.222269 29.8741 1.07449 30.5491 2.02796 30.5491C2.15453 30.5491 2.28531 30.5364 2.41188 30.5112L10.7653 28.908C11.242 28.8152 11.6682 28.5578 11.9719 28.1781L15.558 23.6554L14.3599 23.0437C13.4739 22.5965 12.8579 21.7865 12.6469 20.8035L9.26338 25.0688L1.64826 26.5285Z"
                                                            fill="#A02CFA" />
                                                        <path
                                                            d="M31.3999 8.89345C33.8558 8.89345 35.8467 6.90258 35.8467 4.44673C35.8467 1.99087 33.8558 0 31.3999 0C28.9441 0 26.9532 1.99087 26.9532 4.44673C26.9532 6.90258 28.9441 8.89345 31.3999 8.89345Z"
                                                            fill="#A02CFA" />
                                                        <path
                                                            d="M21.6965 3.33297C21.2282 2.85202 20.7937 2.66217 20.3169 2.66217C20.1439 2.66217 19.971 2.68748 19.7853 2.72967L12.1534 4.53958C11.0986 4.78849 10.4489 5.84744 10.6979 6.89795C10.913 7.80079 11.7146 8.40831 12.6048 8.40831C12.7567 8.40831 12.9086 8.39144 13.0605 8.35347L19.5618 6.81357C19.9837 7.28187 22.0974 9.57273 22.4813 9.97775C19.7938 12.855 17.1064 15.7281 14.4189 18.6054C14.3767 18.6519 14.3388 18.6982 14.3008 18.7446C13.5161 19.7445 13.7566 21.3139 14.9379 21.9088L23.1774 26.1151L18.8994 33.0467C18.313 34.0002 18.6083 35.249 19.5618 35.8396C19.8951 36.0464 20.2621 36.1434 20.6249 36.1434C21.3042 36.1434 21.9707 35.8017 22.3547 35.1815L27.7886 26.3766C28.0882 25.8915 28.1683 25.305 28.0122 24.7608C27.8561 24.2123 27.4806 23.7567 26.9702 23.4993L21.3885 20.66L27.2571 14.3823L31.6869 18.1371C32.0539 18.4493 32.5054 18.6012 32.9526 18.6012C33.4335 18.6012 33.9145 18.424 34.2899 18.078L39.3737 13.3402C40.1669 12.6019 40.2133 11.3615 39.475 10.5684C39.0868 10.1549 38.5637 9.944 38.0406 9.944C37.5638 9.944 37.0829 10.117 36.7074 10.4671L32.9019 14.0068C32.8977 14.011 23.363 5.04163 21.6965 3.33297Z"
                                                            fill="#A02CFA" />
                                                    </svg>
                                                </span>
                                                <div class="media-body">
                                                    <p class="fs-14 mb-2">Reserved Locker</p>
                                                    <span class="title text-black font-w600">2</span>
                                                </div>
                                            </div>
                                            <div class="progress" style="height:5px;">
                                                <div class="progress-bar bg-secondary" style="width: 82%; height:5px;"
                                                    role="progressbar">
                                                    <span class="sr-only">42% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="effect bg-secondary"></div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6 col-sm-6">
                                    <div class="card avtivity-card">
                                        <div class="card-body">
                                            <div class="media align-items-center">
                                                <span class="activity-icon bgl-danger mr-md-4 mr-3">
                                                    <svg width="40" height="39" viewBox="0 0 40 39" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M18.0977 7.90402L9.78535 16.7845C9.17929 17.6683 9.40656 18.872 10.2862 19.4738L18.6574 25.2104V30.787C18.6574 31.8476 19.4992 32.7357 20.5598 32.7568C21.6456 32.7735 22.5295 31.9023 22.5295 30.8207V24.1961C22.5295 23.5564 22.2138 22.9588 21.6877 22.601L16.3174 18.9184L20.8376 14.1246L23.1524 19.3982C23.4596 20.101 24.1582 20.5556 24.9243 20.5556H31.974C33.0346 20.5556 33.9226 19.7139 33.9437 18.6532C33.9605 17.5674 33.0893 16.6835 32.0076 16.6835H26.1953C25.4293 14.9411 24.6128 13.2155 23.9015 11.4478C23.5395 10.5556 23.3376 10.1684 22.6726 9.55389C22.5379 9.42763 21.5993 8.56904 20.7618 7.80305C19.9916 7.10435 18.8047 7.15065 18.0977 7.90402Z"
                                                            fill="#FF3282" />
                                                        <path
                                                            d="M26.0269 8.87206C28.4769 8.87206 30.463 6.88598 30.463 4.43603C30.463 1.98608 28.4769 0 26.0269 0C23.577 0 21.5909 1.98608 21.5909 4.43603C21.5909 6.88598 23.577 8.87206 26.0269 8.87206Z"
                                                            fill="#FF3282" />
                                                        <path
                                                            d="M8.16498 38.388C12.6744 38.388 16.33 34.7325 16.33 30.2231C16.33 25.7137 12.6744 22.0581 8.16498 22.0581C3.65559 22.0581 0 25.7137 0 30.2231C0 34.7325 3.65559 38.388 8.16498 38.388Z"
                                                            fill="#FF3282" />
                                                        <path
                                                            d="M31.835 38.388C36.3444 38.388 40 34.7325 40 30.2231C40 25.7137 36.3444 22.0581 31.835 22.0581C27.3256 22.0581 23.67 25.7137 23.67 30.2231C23.67 34.7325 27.3256 38.388 31.835 38.388Z"
                                                            fill="#FF3282" />
                                                    </svg>
                                                </span>
                                                <div class="media-body">
                                                    <p class="fs-14 mb-2">Active Locker</p>
                                                    <span class="title text-black font-w600">1</span>
                                                </div>
                                            </div>
                                            <div class="progress" style="height:5px;">
                                                <div class="progress-bar bg-danger" style="width: 90%; height:5px;"
                                                    role="progressbar">
                                                    <span class="sr-only">42% Complete</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="effect bg-danger"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-6 col-xxl-12">
                            <div class="card">
                                <div class="card-header d-sm-flex d-block pb-0 border-0">
                                    <div class="mr-auto pr-3 mb-sm-0 mb-3">
                                        <h4 class="text-black fs-20">Daily Usage</h4>
                                        <p class="fs-13 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur</p>
                                    </div>

                                </div>
                                <div class="card-body pt-0 pb-0">
                                    <div id="chartBar"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-xxl-8">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card">
                                        <div class="card-header d-sm-flex d-block pb-0 border-0">
                                            <div class="mr-auto pr-3">
                                                <h4 class="text-black font-w600 fs-20">Recomended for You</h4>
                                                <p class="fs-13 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur
                                                </p>
                                            </div>
                                            <a href="food-menu.html"
                                                class="btn btn-primary rounded d-none d-md-block">View
                                                More</a>
                                        </div>
                                        <div class="card-body pt-2">
                                            <div class="testimonial-one owl-carousel">
                                                <div class="items">
                                                    <div class="card text-center">
                                                        <div class="card-body">
                                                            <img src="{{ asset('style/images/testimonial/1.jpg') }} "
                                                                alt="">
                                                            <h5 class="fs-16 font-w500 mb-1"><a href="app-profile.html"
                                                                    class="text-black">POSit! PVJ</a></h5>
                                                            <p class="fs-14">Jl. Sukajadi BANDUNG</p>
                                                            <div
                                                                class="d-flex align-items-center justify-content-center">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z"
                                                                        fill="#FFAA29" />
                                                                </svg>
                                                                <span
                                                                    class="fs-14 d-block ml-2 pr-2 mr-2 border-right text-black font-w500">4.4</span>
                                                                <a href="app-profile.html" class="btn-link fs-14">Order
                                                                    Locker</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="items">
                                                    <div class="card text-center">
                                                        <div class="card-body">
                                                            <img src="{{ asset('style/images/testimonial/2.jpg') }}"
                                                                alt="">
                                                            <h5 class="fs-16 font-w500 mb-1"><a href="app-profile.html"
                                                                    class="text-black">POSit! Gedung Sate</a></h5>
                                                            <p class="fs-14">Jl. Banda BANDUNG</p>
                                                            <div
                                                                class="d-flex align-items-center justify-content-center">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z"
                                                                        fill="#FFAA29" />
                                                                </svg>
                                                                <span
                                                                    class="fs-14 d-block ml-2 pr-2 mr-2 border-right text-black font-w500">4.4</span>
                                                                <a href="app-profile.html" class="btn-link fs-14">Order
                                                                    Locker</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="items">
                                                    <div class="card text-center">
                                                        <div class="card-body">
                                                            <img src="{{ asset('style/images/testimonial/3.jpg') }}"
                                                                alt="">
                                                            <h5 class="fs-16 font-w500 mb-1"><a href="app-profile.html"
                                                                    class="text-black">POSit! Paskal</a></h5>
                                                            <p class="fs-14">Jl. Pasir Kaliki BANDUNG</p>
                                                            <div
                                                                class="d-flex align-items-center justify-content-center">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z"
                                                                        fill="#FFAA29" />
                                                                </svg>
                                                                <span
                                                                    class="fs-14 d-block ml-2 pr-2 mr-2 border-right text-black font-w500">4.4</span>
                                                                <a href="javascript:void(0)"
                                                                    class="btn-link fs-14">Order
                                                                    Locker</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="items">
                                                    <div class="card text-center">
                                                        <div class="card-body">
                                                            <img src="{{ asset('style/images/testimonial/4.jpg') }}"
                                                                alt="">
                                                            <h5 class="fs-16 font-w500 mb-1"><a href="app-profile.html"
                                                                    class="text-black">POSit! Setia Budi</a></h5>
                                                            <p class="fs-14">Jl. Setia Budi BANDUNG</p>
                                                            <div
                                                                class="d-flex align-items-center justify-content-center">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M5.09569 20C4.80437 19.9988 4.51677 19.9344 4.25273 19.8113C3.98868 19.6881 3.75447 19.5091 3.56624 19.2866C3.37801 19.0641 3.24024 18.8034 3.16243 18.5225C3.08462 18.2415 3.06862 17.9471 3.11554 17.6593L3.88905 12.8902L0.569441 9.45986C0.312024 9.19466 0.132451 8.86374 0.0503661 8.50328C-0.0317185 8.14282 -0.0131526 7.76671 0.104033 7.4161C0.221219 7.06549 0.43251 6.75388 0.714792 6.51537C0.997074 6.27685 1.33947 6.12062 1.70453 6.06376L6.20048 5.37325L8.18158 1.13817C8.34755 0.796915 8.60606 0.509234 8.92762 0.307978C9.24917 0.106721 9.6208 0 10.0001 0C10.3793 0 10.751 0.106721 11.0725 0.307978C11.3941 0.509234 11.6526 0.796915 11.8186 1.13817L13.7931 5.36719L18.2955 6.06376C18.6606 6.12062 19.003 6.27685 19.2852 6.51537C19.5675 6.75388 19.7788 7.06549 19.896 7.4161C20.0132 7.76671 20.0318 8.14282 19.9497 8.50328C19.8676 8.86374 19.688 9.19466 19.4306 9.45986L16.1144 12.8765L16.885 17.66C16.9463 18.0327 16.9014 18.4152 16.7556 18.7635C16.6097 19.1119 16.3687 19.4121 16.0602 19.6297C15.7517 19.8473 15.3882 19.9735 15.0113 19.994C14.6344 20.0144 14.2593 19.9281 13.9292 19.7451L10.0026 17.5635L6.07117 19.7451C5.77302 19.9118 5.43724 19.9996 5.09569 20Z"
                                                                        fill="#FFAA29" />
                                                                </svg>
                                                                <span
                                                                    class="fs-14 d-block ml-2 pr-2 mr-2 border-right text-black font-w500">4.4</span>
                                                                <a href="app-profile.html" class="btn-link fs-14">Order
                                                                    Locker</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-header d-sm-flex d-block pb-0 border-0">
                                        <div class="mr-auto pr-3">
                                            <h4 class="text-black fs-20 font-w600">Calories Chart</h4>
                                            <p class="fs-13 mb-0 text-black">Lorem ipsum dolor sit amet, consectetur</p>
                                        </div>
                                        <div class="dropdown mt-sm-0 mt-3">
                                            <button type="button" class="btn rounded btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                Weekly
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="javascript:void(0);">Link 1</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Link 2</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Link 3</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="chartTimeline"></div>
                                    </div>
                                </div>
                            </div> -->
                            </div>
                        </div>
                        <div class="col-xl-3 col-xxl-4">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="card featuredMenu">
                                        <div class="card-header border-0">
                                            <h4 class="text-black font-w600 fs-20 mb-0">POSit! Nearby You</h4>
                                        </div>
                                        <div class="card-body loadmore-content height750 dz-scroll pt-0"
                                            id="FeaturedMenusContent">
                                            <div class="media mb-4">
                                                <img src="{{ asset('style/images/menus/1.png') }}" width="85" alt=""
                                                    class="rounded mr-3">
                                                <div class="media-body">
                                                    <h5><a href="food-menu.html" class="text-black fs-16">SPBU
                                                            Banda</a>
                                                    </h5>
                                                    <span class="fs-14 text-primary font-w500">Jl Banda BANDUNG</span>
                                                </div>
                                            </div>
                                            <ul
                                                class="d-flex flex-wrap pb-2 border-bottom mb-3 justify-content-between">
                                                <li class="mr-3 mb-2"><i
                                                        class="las la-clock scale5 mr-3"></i><span
                                                        class="fs-14 text-black">4-6 mins </span></li>
                                                <li class="mb-2"><i
                                                        class="fa fa-star-o mr-3 scale5 text-warning"
                                                        aria-hidden="true"></i><span
                                                        class="fs-14 text-black font-w500">176
                                                        Reviews</span></li>
                                            </ul>
                                            <div class="media mb-4">
                                                <img src="{{ asset('style/images/menus/2.png') }}" width="85" alt=""
                                                    class="rounded mr-3">
                                                <div class="media-body">
                                                    <h5><a href="#" class="text-black fs-16">Gedung Sate</a>
                                                    </h5>
                                                    <span class="fs-14 text-primary font-w500">Jl Banda BANDUNG</span>
                                                </div>
                                            </div>
                                            <ul
                                                class="d-flex flex-wrap pb-2 border-bottom mb-3 justify-content-between">
                                                <li class="mr-3 mb-2"><i
                                                        class="las la-clock scale5 mr-3"></i><span
                                                        class="fs-14 text-black">4-6 mins </span></li>
                                                <li class="mb-2"><i
                                                        class="fa fa-star-o mr-3 scale5 text-warning"
                                                        aria-hidden="true"></i><span
                                                        class="fs-14 text-black font-w500">176
                                                        Reviews</span></li>
                                            </ul>
                                            <div class="media mb-4">
                                                <img src="{{ asset('style/images/menus/3.png') }}" width="85" alt=""
                                                    class="rounded mr-3">
                                                <div class="media-body">
                                                    <h5><a href="food-menu.html" class="text-black fs-16">Saparua</a>
                                                    </h5>
                                                    <span class="fs-14 text-primary font-w500">Jl Banda BANDUNG</span>
                                                </div>
                                            </div>
                                            <ul
                                                class="d-flex flex-wrap pb-2 border-bottom mb-3 justify-content-between">
                                                <li class="mr-3 mb-2"><i
                                                        class="las la-clock scale5 mr-3"></i><span
                                                        class="fs-14 text-black">4-6 mins </span></li>
                                                <li class="mb-2"><i
                                                        class="fa fa-star-o mr-3 scale5 text-warning"
                                                        aria-hidden="true"></i><span
                                                        class="fs-14 text-black font-w500">176
                                                        Reviews</span></li>
                                            </ul>
                                            <div class="media mb-4">
                                                <img src="{{ asset('style/images/menus/4.png') }}" width="85" alt=""
                                                    class="rounded mr-3">
                                                <div class="media-body">
                                                    <h5><a href="food-menu.html" class="text-black fs-16">BIP
                                                            Bandung</a>
                                                    </h5>
                                                    <span class="fs-14 text-primary font-w500">Jl Merdeka
                                                        BANDUNG</span>
                                                </div>
                                            </div>
                                            <ul
                                                class="d-flex flex-wrap pb-2 border-bottom mb-3 justify-content-between">
                                                <li class="mr-3 mb-2"><i
                                                        class="las la-clock scale5 mr-3"></i><span
                                                        class="fs-14 text-black">4-6 mins </span></li>
                                                <li class="mb-2"><i
                                                        class="fa fa-star-o mr-3 scale5 text-warning"
                                                        aria-hidden="true"></i><span
                                                        class="fs-14 text-black font-w500">176
                                                        Reviews</span></li>
                                            </ul>
                                        </div>
                                        <div class="card-footer style-1 text-center border-0 pt-0 pb-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            @include('wizard/wizard_page')
        @endif

        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/"
                        target="_blank">DexignZone</a> 2020</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('footer')
    @if (session('status'))
        <script>
            swal("{{ session('status') }}");
        </script>
    @endif

</body>

</html>
