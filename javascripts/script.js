(function () {

    document.getElementsByClassName("dropbtn")[0].onclick = function (event) {

        var dropdowns = document.getElementsByClassName("dropdown-content")[0];

        if (dropdowns.classList.contains('show')) {
            dropdowns.classList.remove('show');
        } else {
            dropdowns.classList.add('show');
        }
    }
})();


