jQuery(document).ready(function ($) {

    function triggerAdd() {
        let add = document.getElementById("myDIV");
        if (add.style.display !== "none") {
            add.style.display = "block";
            } else {
                add.style.display = "none";
            }
        }
    }

    // ==== CONTENT CLOSE TRIGGER ====

        // var scrollPos = 0;
        // window.addEventListener('scroll', function(){
        //     if ((document.body.getBoundingClientRect()).top > scrollPos) {
        //         document.querySelector(".toplink-arti").style.display = "none";
        //     } else {
        //         document.addEventListener("scroll",function(){
        //             if (document.querySelector(".toplink-arti").getAttribute("class").includes("arti-select")) {
        //                 document.querySelector(".toplink-arti").style.display = "none";
        //             } else if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
        //                 document.querySelector(".toplink-arti").style.display = "block";
        //             }
        //         });
        //     };
        //     scrollPos = (document.body.getBoundingClientRect()).top;
        // });
        // document.querySelector(".toplink-arti").addEventListener("click",function() {
        //     document.querySelector(".toplink-arti").style.display = "none";
        // })
        // console.log(document.body.getBoundingClientRect().bottom);
        // console.log(window.innerHeight);

);