$(document).ready(function() {

    // Back to Top Button, Function, and Listener
    let mybutton = document.getElementById('btn-back-to-top');
    window.onscroll = function () {
        scrollFunction();
    };
    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = 'block';
        } else {
            mybutton.style.display = 'none';
        }
    }
    mybutton.addEventListener('click', backToTop);
    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

    // Init a ClipboardJS attribute
    new ClipboardJS('.clip');

    // Onclick listener for clip
    $(document).ready(function () {
        $('.clip').click(function () {
            var clipElement = $(this);
            clipElement.popover({
                content: 'Copied',
                placement: 'bottom',
                trigger: 'manual'
            });
            clipElement.popover('show');
            setTimeout(function () {
                clipElement.popover('hide');
            }, 2000);
            $(document).on('click', function (e) {
                if (!clipElement.is(e.target) && clipElement.has(e.target).length === 0) {
                    clipElement.popover('hide');
                }
            });
        });
    });

});
