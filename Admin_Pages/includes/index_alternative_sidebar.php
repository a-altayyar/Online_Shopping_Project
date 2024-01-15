<div id="sidebar-alt">
    <!-- Wrapper for scrolling functionality -->
    <div id="sidebar-alt-scroll">
        <!-- Sidebar Content -->
        <div class="sidebar-content">
            <!-- Chat -->
            <!-- Chat demo functionality initialized in js/app.js -> chatUi() -->
            <a href="page_ready_chat.html" class="sidebar-title">
                <i class="gi gi-comments pull-right"></i> <strong>Chat</strong>UI
            </a>
            <!-- Chat Users -->
            <ul class="chat-users clearfix">
                <li>
                    <a href="javascript:void(0)" class="chat-user-online">
                        <span></span>
                        <img src="img/placeholders/avatars/avatar4.jpg" alt="avatar" class="img-circle">
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="chat-user-away">
                        <span></span>
                        <img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle">
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0)" class="chat-user-busy">
                        <span></span>
                        <img src="img/placeholders/avatars/avatar16.jpg" alt="avatar" class="img-circle">
                    </a>
                </li>
            </ul>
            <!-- END Chat Users -->

            <!-- Chat Talk -->
            <div class="chat-talk display-none">
                <!-- Chat Info -->
                <div class="chat-talk-info sidebar-section">
                    <button id="chat-talk-close-btn" class="btn btn-xs btn-default pull-right">
                        <i class="fa fa-times"></i>
                    </button>
                    <img src="img/placeholders/avatars/avatar5.jpg" alt="avatar" class="img-circle pull-left">
                    <strong>John</strong> Doe
                </div>
                <!-- END Chat Info -->

                <!-- Chat Messages -->
                <ul class="chat-talk-messages">
                    <li class="text-center"><small>Yesterday, 18:35</small></li>
                    <li class="chat-talk-msg animation-slideRight">Hey admin?</li>
                    <li class="chat-talk-msg animation-slideRight">How are you?</li>
                    <li class="text-center"><small>Today, 7:10</small></li>
                    <li class="chat-talk-msg chat-talk-msg-highlight themed-border animation-slideLeft">I'm fine,
                        thanks!</li>
                </ul>
                <!-- END Chat Messages -->

                <!-- Chat Input -->
                <form action="index.html" method="post" id="sidebar-chat-form" class="chat-form">
                    <input type="text" id="sidebar-chat-message" name="sidebar-chat-message"
                        class="form-control form-control-borderless" placeholder="Type a message..">
                </form>
                <!-- END Chat Input -->
            </div>
            <!--  END Chat Talk -->
            <!-- END Chat -->

        </div>
        <!-- END Sidebar Content -->
    </div>
    <!-- END Wrapper for scrolling functionality -->
</div>