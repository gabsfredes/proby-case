(function (win, doc) {
    "use scrict";

    function confirmDelete(event) {
        event.preventDefault();
        let token = doc.getElementsByName("_token")[0].value;

        Swal.fire({
            title: "Você quer mesmo deletar este projeto?",
            text: "Você não poderá reverter isso!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Deletar!",
            cancelButtonText: "Cancelar",
        }).then((result) => {
            if (result.isConfirmed) {
                let ajax = new XMLHttpRequest();
                ajax.open("DELETE", event.target.parentNode.href, true);
                ajax.setRequestHeader("X-CSRF-TOKEN", token);
                ajax.onreadystatechange = function () {
                    if (ajax.readyState == 4 && ajax.status == 200) {
                        Swal.fire(
                            "Deletado!",
                            "O projeto foi deletado com sucesso.",
                            "success"
                        ).then(() => {
                            win.location.href = "/projects";
                        });
                    }
                };
                ajax.send();
            }
        });
    }

    if (doc.querySelector(".js-delete")) {
        let btn = doc.querySelectorAll(".js-delete");
        for (let i = 0; i < btn.length; i++) {
            btn[i].addEventListener("click", confirmDelete, false);
        }
    }
})(window, document);
