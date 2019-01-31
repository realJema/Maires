// wait for the DOM to be loaded
$(document).ready(function() {
  // ajax submit for the record form(page doesn't get reloaded, works with js/jquery.form.js plugin)
  $('#recordForm').ajaxForm(function() {
    // variables
    var data = document.forms.recordForm;
    var first_name = data.first_name.value;
    var last_name = data.last_name.value;
    var matricule = data.matricule.value;
    var gender = $("input[name='gender_radio']:checked").val();
    var level = data.level.value;
    var ca_result = data.ca_result.value;
    var exam_result = data.exam_result.value;
    var result = [];
    result.push(first_name, last_name, matricule, gender, level, ca_result, exam_result);

    // printing the values for confirmation
    Swal({
      title: 'Are you sure?',
          text: "You won't be able to revert this!" + result.value,
          type: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!',
          html:
          '<h2>' + first_name + ' ' + last_name + '</h2>'+
          '<p style="text-align:left">Matricule: ' + matricule + '<p>' +
          '<p style="text-align:left">Gender: ' + gender + '<p>' +
          '<p style="text-align:left">Level: ' + level + '<p>' +
          '<p style="text-align:left;">CA Result: ' + ca_result + '<p>' +
          '<p style="text-align:left;">Exam Result: ' + exam_result + '<p>',
          preConfirm: () => {
            return [
              $.ajax({
                type: "POST",
                url: "addRecord.php",
                data: { record_data: result},
                cache: false,
                success: function(response) {
                  if(response == 'successful'){
                    // ajax reload of datatables
                    $('#datatable-responsive').DataTable().ajax.reload();
                    $("#recordForm")[0].reset(); // reset form
                    swal(
                      "Sccess!",
                    "Your note has been saved!",
                    "success"
                    )
                  } else {
                    swal(
                      "Failed!",
                      "Error: " + response,
                      "error"
                      )
                  }
                },
                failure: function (response) {
                  swal(
                    "Internal Error",
                    "Oops, your note was not saved.", // had a missing comma
                    "error"
                    )
                  }
            })
          ]
        }
        })
      });


    });

  // This filters the table according to the information inputed as matricule
  $('#mat_input').on( 'keyup', function () {
    table.search( $(this).val() ).draw();
  } );
