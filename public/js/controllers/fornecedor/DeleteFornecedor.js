let tableContent = $("#tbody-content");

tableContent.addEventListener("click", async (e) => {
    let id = e.target;
    if (id.classList.contains("btnDelete")) {
        let tdtarget = $(`.data-id-${id.value}`);
        tdtarget.classList.add("fadeOut");

        setTimeout(function() {
            tdtarget.remove();
        },500);
    }
})

