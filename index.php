<?php

echo '<head><script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>'.
	 '<script src="js/main.js"></script>'.
	 '<link rel="stylesheet" href="css/grid.css"></link>'.
	 '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head><body style="background-color:black">';
echo '<div id="menu"><div class="box2 vazio">Nenhum selecionado</div><div class="box2 vazio">Nenhum selecionado</div><div class="box2 vazio">Nenhum selecionado</div><button class="gerar">Gerar 5 histórias</button></div>';
echo '<div class="input-group input-group-lg">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-lg">Pesquise um Herói</span>
  </div>
  <input placeholder="spider" id ="pesquisa" type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
</div>';
echo '<div id="herois" class="wrapper"></div>';