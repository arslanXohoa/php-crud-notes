<!-- edit and delete script -->
<script>
document.addEventListener("DOMContentLoaded", function() {
    const editButtons = document.getElementsByClassName('edit');
    Array.from(editButtons).forEach((element) => {
        element.addEventListener("click", (e) => {
            console.log(e.target.parentNode.parentNode);
            const tr = e.target.parentNode.parentNode;
            const title = tr.getElementsByTagName('td')[0].innerText;
            const descript = tr.getElementsByTagName('td')[1].innerText;

            document.getElementById('exampleInputTitle').value = title;
            document.getElementById('exampleInputDesc').value = descript;
            document.getElementById('idEdit').value = e.target.id;
        });
    });

    const delButtons = document.getElementsByClassName('delete');
    Array.from(delButtons).forEach((element) => {
        element.addEventListener("click", (e) => {
            const sno = e.target.id;
            console.log(sno);
            window.location = `/notes(copy)/index.php/?delete=${sno}`;
        });
    });
});
</script>


<!-- bootsrtap modal script -->

<script>
    $(document).ready(function(){
        const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = `New message to ${recipient}`
    modalBodyInput.value = recipient
  })
}
    });
</script>
