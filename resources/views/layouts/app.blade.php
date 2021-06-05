<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
  <link rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
  <style>
    input[type=text], select {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }
    textarea, select {
        width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  resize: none;
    }

    input[type=submit] {
      width: 100%;
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    div {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
    form {
      margin-left: 350px;
      margin-top: 50px;
      width: 50%;
    }
    h1,h2{
        text-align: center;
        padding-top: 50px;
    }

  </style>
</head>
<body>
    <h1 >Welcome </h1>
<h2> Fill this form Please !
</h2>
<form name="submitform" method="post" action="/add">
  <input type="text" id="title" name="title" placeholder="title"/>
  <input type="text" id="name" name="name" placeholder="name"/>
  <textarea id="description" name="description" placeholder="description"></textarea>

  <a href="#"> <input  type="submit" value="Submit"> </a>



</form>
</body>
</html>