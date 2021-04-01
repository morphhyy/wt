function validate() {
    var name = document.getElementById('name').value;
    var age = document.getElementById('age').value;
    var email = document.getElementById('email').value;

    if (name == "" ) {
      alert("Please fill the name field.");
      document.getElementById('name').focus();
    }

    if (age == "") {
      alert("Please fill the age field.");
      document.getElementById('age').focus();
    }

    if (age == "") {
      alert("Please fill the email field.");
      document.getElementById('email').focus();
    }

  }