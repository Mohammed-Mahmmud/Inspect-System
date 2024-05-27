function getSelectedValue() {
    var selectedValue = document.getElementById('newlist').value.trim();
    var checklist = ['wheel_loader_checklist', 'manlift_checklist', 'mobile_crane_checklist'];
    document.getElementById('checklist_type').value = selectedValue;

    checklist.forEach(function (id) {
        var element = document.getElementById(id);
        if (id === selectedValue) {
            element.style.display = 'block';
            enableInputs(element);
        } else {
            element.style.display = 'none';
            disableInputs(element);
        }
    });
}

function enableInputs(container) {
    var inputs = container.getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].disabled = false;
    }
}

function disableInputs(container) {
    var inputs = container.getElementsByTagName('input');
    for (var i = 0; i < inputs.length; i++) {
        inputs[i].disabled = true;
    }
}
