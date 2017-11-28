function clearTarget() {
  let target = $('#result');

  target.html('');
}

function alertErrorMessage(message) {
  let target = $('#result');
  target.html('<div class="alert alert-danger">' + message + '</div>');
}

function populateResult(response) {
  let template = $('#template').html();
  let target = $('#result');
  response.forEach(function(object){
    target.append(template.formatString(object));
  });
}

function doSearch() {
  let querySearch = $('#search').val();

  if (querySearch.length < 1) {
    return;
  }

  $.ajax({
      url: '/search.php',
      type: 'post',
      dataType: 'json',
      data: {
        query: querySearch,
        pname: $('#check-pname').prop('checked'),
        pdesc: $('#check-pdesc').prop('checked'),
        sort: $('#sort').val(),
        param: $('#parameter').val()
      }
    }).success(function(response){
      clearTarget();

      if (response.length < 1) {
        alertErrorMessage('No results found!');
      }

      populateResult(response);
  });
}

$(document).ready(function(){
  $('#search').keyup(function(e){
    e.preventDefault();

    doSearch();
  });
  $('.filter-element, .filter-checkbox').change(function(e){
    e.preventDefault();

    doSearch();
  });
});
