$(document).ready(function() {
    const nextBtn = document.getElementById("nextBtn");
    const radioAnzahlPersonen = document.getElementsByName("Anzahl Personen");
    
    // Event Listener for Radio Buttons. If Radio Button is clicked, Next Button is clicked.
    radioAnzahlPersonen.forEach(function(radioButton) {
        radioButton.addEventListener("change", function() {
            nextPrev(1);
        });
    });
    
    const radioAnzahlKaffeeautomaten = document.getElementsByName("Anzahl Kaffeeautomaten");
    
    // Event Listener for Radio Buttons. If Radio Button is clicked, Next Button is clicked.
    radioAnzahlKaffeeautomaten.forEach(function(radioButton) {
        radioButton.addEventListener("change", function() {
            nextPrev(1);
        });
    });
    
    // Get all the indicator span elements
    var indicatorElements = document.querySelectorAll(".step");
    
    // Loop through the indicator elements and add an onclick event listener
    indicatorElements.forEach(function(element, index) {
        element.onclick = function() {
            // Check if step is completed
            if(currentTab > index){
                var x = document.getElementsByClassName("tab");
                x[currentTab].style.display = "none";
                // Set the current tab based on the index of the clicked indicator
                currentTab = index;
                // Display the current tab
                showTab(currentTab);
                radioButtons.forEach(radio => {
                    radio.checked = false;
                });
            }
        }
    });
    
    var currentTab = 0; // Current tab is set to be the first tab (0)
    
    showTab(currentTab); // Display the current tab
    
    function showTab(n) {
        var x = document.getElementsByClassName("tab");
        if (n >= x.length) {
          return; // exit the function if the index is out of range
        }
        x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        }
        else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        }
        else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        // ... and run a function that displays the correct step indicator:
        fixStepIndicator(n)
    }
    
    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        x[currentTab].style.display = "none";
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form... :
        if (currentTab >= x.length) {
            //...the form gets submitted:
            //document.getElementById("leadform").submit();
            //return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }
    
    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }
    
    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class to the current step:
        x[n].className += " active";
    }
    });
    
    $(document).on('submit', '#leadform', function(event){
        event.preventDefault(); // Verhindert das Standardverhalten des Formulars
    
        var form = $('#leadform');
    
        //console.log(form.serialize());
    
        var form_data = new FormData();
        form_data.append('inputs', form.serialize());
        form_data.append('nonce', leadform_data.nonce);
        form_data.append('action', leadform_data.action);
    
        $.ajax({
            url: leadform_data.ajaxurl,
            type: 'POST',
            contentType: false,
            processData: false,
            data: form_data,
            beforeSend: function(xhr) {
                // $('.send-form').text('wird gesendet...');
                // $(".send-form").attr("disabled", true);
                $('#leadform-response').removeClass('alert alert-success').html('')
            },
            success: function(response) {
                if (response.success == true) {
                    // Handle success response
                    $('#leadform-response').addClass('alert alert-success').html(response.data);
                    $('#leadform').hide();
                } else {
                    // Handle error response
                    $('#leadform-response').addClass('alert alert-warning').html(response.data);
                }
            }
        }).done(function() {
            //console.log('done function', form.serialize());
        }).always(function() {
            //console.log('always function', form.serialize());
        });
    });