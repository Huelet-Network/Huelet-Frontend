<script>
    var hamburger = document.querySelector(".hamburger");
    hamburger.addEventListener("click", function openNav() {
        hamburger.classList.toggle("is-active");
        document.getElementById("primarySidenav").style.width = "250px";
    });
</script>
<script>
    var hamburger = document.querySelector(".hamburger");
    var closebtn = document.querySelector(".closebtn");
    closebtn.addEventListener("click", function deactivateHamburger() {
        hamburger.classList.toggle("is-active");
    });
    function closeNav() {
            document.getElementById("primarySidenav").style.width = "0";
        }
</script>
    <div class="nav">
        <div class="flex-parent">
            <button class="hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <a data-tip="Feedback" href="/_noi/userinput/feedback" class="a-2">
            <svg width="20" height="20">
            <path d="M8 0a7.6 7.6 0 012.1.3 6.4 6.4 0 011.9.8 10.4 10.4 0 011.7 1.2A10.4 10.4 0 0114.9 4a6.4 6.4 0 01.8 1.9 7.5 7.5 0 010 4.2 6.4 6.4 0 01-.8 1.9 10.4 10.4 0 01-1.2 1.7 10.4 10.4 0 01-1.7 1.2 6.4 6.4 0 01-1.9.8 7.5 7.5 0 01-4.2 0 6.4 6.4 0 01-1.9-.8 10.4 10.4 0 01-1.7-1.2A10.4 10.4 0 011.1 12a6.4 6.4 0 01-.8-1.9 7.5 7.5 0 010-4.2A6.4 6.4 0 011.1 4a10.4 10.4 0 011.2-1.7A10.4 10.4 0 014 1.1 6.4 6.4 0 015.9.3 7.6 7.6 0 018 0zm0 15l1.9-.2 1.6-.8a4.9 4.9 0 001.4-1.1 4.9 4.9 0 001.1-1.4 8 8 0 00.8-1.6A12.3 12.3 0 0015 8a12.3 12.3 0 00-.2-1.9 8 8 0 00-.8-1.6 4.9 4.9 0 00-1.1-1.4A4.9 4.9 0 0011.5 2a4.6 4.6 0 00-1.6-.7 6.2 6.2 0 00-3.8 0 4.6 4.6 0 00-1.6.7 4.9 4.9 0 00-1.4 1.1A4.9 4.9 0 002 4.5a4.6 4.6 0 00-.7 1.6 6.2 6.2 0 000 3.8 4.6 4.6 0 00.7 1.6 4.9 4.9 0 001.1 1.4A4.9 4.9 0 004.5 14l1.6.8zm0-3l1.1-.2 1-.4a2.7 2.7 0 00.8-.7l.7-.9.9.4-.8 1.2-1.1.9-1.2.5L8 13l-1.4-.2-1.2-.5-1.1-.9-.8-1.2.9-.4.7.9a2.7 2.7 0 00.8.7l1 .4zM5 7h-.4l-.3-.2-.2-.3A.6.6 0 014 6a.6.6 0 01.1-.4l.2-.3.3-.2h.8l.3.2.2.3A.6.6 0 016 6a.6.6 0 01-.1.4l-.2.3-.3.2zm6 0h-.4l-.3-.2-.2-.3A.6.6 0 0110 6a.6.6 0 01.1-.4l.2-.3.3-.2h.8l.3.2.2.3a.6.6 0 01.1.4.6.6 0 01-.1.4l-.2.3-.3.2z"></path>
            </svg>
            </a>
            <div id="triggerBtn" style="cursor:pointer;">
            <svg width="20" height="20">
            <path d="M14 12v1h-4a2.4 2.4 0 01-.2.8l-.4.6-.6.4-.8.2-.8-.2-.6-.4-.4-.6A2.4 2.4 0 016 13H2v-1h1V6a5.9 5.9 0 01.2-1.3 6.1 6.1 0 01.5-1.2 3.9 3.9 0 01.8-1 3.9 3.9 0 011-.8l1.2-.5L8 1l1.3.2 1.2.5a3.9 3.9 0 011 .8 3.9 3.9 0 01.8 1 6.1 6.1 0 01.5 1.2A5.9 5.9 0 0113 6v6zm-2 0V6a4.5 4.5 0 00-.3-1.6 2.7 2.7 0 00-.9-1.2 2.7 2.7 0 00-1.2-.9 4.4 4.4 0 00-3.2 0 2.7 2.7 0 00-1.2.9 2.7 2.7 0 00-.9 1.2A4.5 4.5 0 004 6v6zm-4 2h.4l.3-.2.2-.3A.7.7 0 009 13H7a.6.6 0 00.1.4l.2.3.3.2z"></path>
            </svg>
            </div>
            <div class="d-2">

            </div>
        </div>
    </div>
    </div>
    </div>
    <div id="primarySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/videos/home">Home</a>
        <a href="/videos/home">Videos</a>
        <a href="/legal/home">Legal</a>
    </div>

</div>