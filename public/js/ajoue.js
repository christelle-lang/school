function cliquer() {
  const elements = document.querySelectorAll('.champ');

  elements.forEach(element => {
    element.addEventListener('click', () => {
      element.style.borderBottomColor = 'purple';
      element.style.borderRightColor = 'purple';
    });

    element.addEventListener('mouseout', () => {
      element.style.borderBottomColor = '';
      element.style.borderRightColor = '';
    });
  });
}
function previewImage(event) {
  var input = event.target;
  var preview = document.getElementById('preview');
  var reader = new FileReader();
  
  reader.onload = function() {
    preview.src = reader.result;
  }
  
  reader.readAsDataURL(input.files[0]);
}

 
