function showPrintModal() {
    var printModal = document.getElementById('printModal');
    printModal.style.display = 'block';
}

function hidePrintModal() {
    var printModal = document.getElementById('printModal');
    printModal.style.display = 'none';
}

function performPrint() {
    // Add your printing logic here
    // For example, you can use the window.print() function to trigger the print dialog

    // Show the "Successfully Printed!" modal
    var successModal = document.getElementById('successModal');
    successModal.style.display = 'block';
}

function showModal(imageUrl) {
    var modal = document.getElementById('myModal');
    var popupImage = document.getElementById('popupImage');
    popupImage.src = imageUrl;
    modal.style.display = 'block';
}

function hideModal() {
    var modal = document.getElementById('myModal');
    modal.style.display = 'none';
}

function hideSuccessModal() {
    var successModal = document.getElementById('successModal');
    successModal.style.display = 'none';
}