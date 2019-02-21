old_element = 'CM-AD';

$('.land').click(function(){
    // this is to reload the departments in a region
    region_id = $(this).attr('title').toUpperCase();
    $.ajax({
        type: "POST",
        url: "scripts/dropdown.php",
        data: { region_id: region_id},
        success : function(response) {
        	format_response = response.replace(/^\s+|\s+$/g, '')
        	if(format_response != ''){
	            $('#dept').html(response);
        	}
        	else {
	        	$('#dept').html('<option value="All" selected>Selectioner Region</option>');
	        	console.log('error happened ', error);
	    	}
	    }
     });

    // toggle class active 
    if (old_element != $(this).attr('id')){

    	document.getElementById(old_element).classList.remove("active_region");
    	document.getElementById($(this).attr('id')).classList.add("active_region");
    	old_element = $(this).attr('id');
    }
})

// filter by criterias
function filter() {
	// filters through the criterias which arent selected as all
	var searchTerms = [];
	var dept = $('#dept').val();
	var parti = $('#parti').val();
	var sex = $('#sex').val();

	$('#filter_table select').filter(
	  function(){
	    if($(this).val()!="All"){
	      searchTerms.push($(this).attr('id'));
	    }
	  });
	if(typeof eval(searchTerms[2]) != 'undefined'){
	  table.search(eval(searchTerms[0]) + ' ' + eval(searchTerms[1]) + ' ' + eval(searchTerms[2])).draw();
	}
	else if(typeof eval(searchTerms[1]) != 'undefined'){
	  table.search(eval(searchTerms[0]) + ' ' + eval(searchTerms[1])).draw();
	}
	else if(typeof eval(searchTerms[0]) != 'undefined'){
	  table.search(eval(searchTerms[0])).draw();
	}
	else{
	  table.search('').draw();
	}
	// query = searchTerms.join(' ');
	// console.log(query);
	// console.log(eval(query));
}
