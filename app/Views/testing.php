<!DOCTYPE html>
<html>
  <head>
    <title>Chat Bot</title>
    <link
      rel="stylesheet"
      href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css"
    />
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
</head>
  <body>
    <div class="col-sm-6 col-sm-offset-3">
      
      <form id="form_ident">
      <h1>Isi Formulir Dulu ya</h1>
        <div id="name-group" class="form-group">
          <label for="name">Name</label>
          <input
            type="text"
            class="form-control"
            id="name"
            name="name"
            placeholder="Full Name"
          >
        </div>

        <div id="email-group" class="form-group">
          <label for="email">Email</label>
          <input
            type="text"
            class="form-control"
            id="email"
            name="email"
            placeholder="email@example.com"
          >
        </div>
        <button type="submit" class="btn btn-success">
          Submit
        </button>
      </form>
      
      <p id="chat_parent">

      </p>

    </div>


    <script>
        $(document).ready(function () {
            $("#form_ident").submit(function (event) {
                var formData = {
                name: $("#name").val(),
                email: $("#email").val()
                };
                    $.ajax({
                    type: "POST",
                    url: "/chatbot_box",
                    data: formData,
                    dataType: "json",
                    encode: true,
                    }).done(function (data) {
                    // console.log(data);
                    $("#form_ident").empty();
                    let text = "";
                    for ( var i = 0; i < data.length; i++ ) {
                        // console.log(data[i]);
                        text += "<form id='form_box'><div id='name-group' class='form-group'><input type='hidden' class='form-control' id='name' name='name' value="+data[i].id_chat+"></div> <button type='submit' class='btn btn-success'>"+data[i].name_chat+"</button></a></form>";
                    }
                    
                    document.getElementById("chat_parent").innerHTML = text;
                });

                event.preventDefault();
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#form_box").submit(function (event) {
                var formData = {
                id_chat: $("#id_chat").val(),
                };
                console.log(formData);
                    $.ajax({
                    type: "POST",
                    url: "/chilchatbot_box/"+$("#id_chat").val(),
                    data: formData,
                    dataType: "json",
                    encode: true,
                    }).done(function (data) {
                    console.log(data);
                    $("#chat_parent").empty();
                    let text = "";
                    for ( var i = 0; i < data.length; i++ ) {
                        // console.log(data[i]);
                        text += "<form id='form_box'><div id='name-group' class='form-group'><input type='hidden' class='form-control' id='id_chat' name='id_chat' value="+data[i].id_chat+"></div> <button type='submit' class='btn btn-success'>"+data[i].name_chat+"</button></a></form>";
                    }
                    document.getElementById("chat_parent").innerHTML = text;
                });

                event.preventDefault();
            });
        });
    </script>
  </body>
</html>