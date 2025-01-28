(function (win,doc) {
    'use scrict';

    function confirmDelete(event) {
        event.preventDefault();
        let token = doc.getElementsByName("_token")[0].value;

        if (confirm("Deseja mesmo apagar este projeto?")){
            let ajax = new XMLHttpRequest();
            ajax.open("DELETE", event.target.parentNode.href, true);
            ajax.setRequestHeader('X-CSRF-TOKEN', token);
            ajax.onreadystatechange = function () {
                if (ajax.readyState == 4 && ajax.status == 200) {
                    win.location.href = "/projects";
                }
            }
            ajax.send();
        }
    }

    if(doc.querySelector('.js-delete')){
        let btn = doc.querySelectorAll('.js-delete');
        for (let i = 0; i < btn.length; i++) {
            btn[i].addEventListener('click', confirmDelete, false);
        }
    }

})(window, document);