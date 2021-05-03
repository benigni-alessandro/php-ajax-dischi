<?php
 include_once __DIR__ .'/../db.php';
 include_once __DIR__ .'/../functions.php';
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="./dist/css/master.css">
    <title>list</title>
  </head>
  <body>
    <div id="root">
      <div class="container filtri">
        <div class="row">
          <div class="col-12">
            <select class="form-select" @change="onChange($event)" aria-label="Default select example">
              <option selected value="all">tutti</option>
              <option value="Jazz">Jazz</option>
              <option value="Metal">Metal</option>
              <option value="Pop">Pop</option>
              <option value="Rock">Rock</option>
            </select>
            <button @click="ordina" type="button" name="button">Ordina per anno</button>
          </div>
        </div>
      </div>
