$(document).ready(function() {
  
  $('#btn').on('click', function() {
    
    // add options to manipulate confirm dialog
    UIkit.modal.confirm('My message!', {
      labels: {
        cancel: 'Abort mission',
        ok: 'Everthing is fine'
      }
    });
    
  });
  
});