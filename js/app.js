function clearTarget() {
  let target = $('#result');

  target.html('');
}

function alertErrorMessage(message) {
  target.html('<div class="alert alert-danger">' + message + '</div>');
}

function populateResult(response) {
  let template = $('#template').html();
  response.forEach(function(object){
    target.append(template.formatString(object));
  });
}

$(document).ready(function(){
  $('#search').keyup(function(e){
    e.preventDefault();

    let querySearch = $('#search').val();

    if (querySearch.length < 1) {
      return;
    }

    $.ajax({
      url: '/search.php',
      type: 'post',
      dataType: 'json',
      data: {
        query: querySearch
      }
    }).success(function(response){
      clearTarget();

      if (response.length < 1) {
        alertErrorMessage('No results found!');
      }

      populateResult(response);
    });
  });
});
