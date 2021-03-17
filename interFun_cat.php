<!DOCTYPE html>
<html lang="pt-br" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>
    Casa Móveis
  </title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/styleinter_ifc.css">
  <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
  <!-- JS -->
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.slider').slick({
        dots: true,
        // $('.single-item').slick();
      });
    });
  </script>
  <!---->
  <!-- Menu -->

  <nav class="menuvertical">

    <!-- Logo -->
    <div class="logo">
      <a href="index.php"><img src="img/Logo.png" alt="Logo"></a>
    </div>
    <!---->

    <div class="menuopcoes">
      <ul>
        <a href="interFun_cat.php">
          <li id="selecionado">
            <i class="large material-icons">assignment_ind</i>
            Catálogo
        </a>
        </li>
      </ul>
      <ul>
        <a href="interFun_reservas.php">
          <li>
            <i class="large material-icons">dashboard</i>
            Reserva
        </a>
        </li>
      </ul>
      <ul>
        <a href="Interface_Funcionário_Entrega.php">
          <li>
            <i class="large material-icons">dashboard</i>
            Entregas
        </a>
        </li>
      </ul>
      <ul>
        <a href="interFun_montagem.php">
          <li>
            <i class="large material-icons">dashboard</i>
            Montagem
        </a>
        </li>
      </ul>
    </div>
    <footer class="footer">
      <a href="https://www.facebook.com/casamoveisvr/">
        <i class="fa fa-facebook-square" style="font-size:24px"></i>
      </a>
      <p>
        Site desenvolvido pela equipe La Casa Muables, 2020.</p>
    </footer>
  </nav>
  <!---->
  <main>
    <div class="nav_tabs">
      <ul>
        <li>
          <input type="radio" id="tab1" class="rd_tab" name="tabs" checked="checked">
          <label for="tab1" class="tab_label">Adicionar Item</label>
          <div class="tab-content">
            <article>
              <form action="php/crud_Moveis.php" method="POST">
                <fieldset>
                  <br>
                  <label for="imgmovel">
                    Imagens do Produto:</label>
                  <input type="url" id="img" name="img" accept="image/*" multiple="multiple">
                  <br>
                  <label for="pcmovel">
                    Cod do Produto:
                  </label>
                  <input type="number" name="cod">
                  <br>
                  <label for="tipomovel">
                    Tipo de Móvel:
                  </label>
                  <select name="type">
                    <option value="1">
                      Cadeira/Bancos
                    </option>
                    <option value="2">
                      Mesa
                    </option>
                    <option value="3">
                      Sofá
                    </option>
                    <option value="4">
                      Armário
                    </option>
                    <option value="5">
                      Cama
                    </option>
                    <option value="6">
                      Poltrona
                    </option>
                  </select>

                  <br>
                  <label for="pcmovel">
                    Descrição do Produto:</label>
                  <input type="text" name="desc" id="desc">

                  <br>
                  <label for="pcmovel">
                    Preço do Produto:</label>
                  <input type="number" name="price">
                  <br>

                  <label for="pcmovel">
                    Quantidade no estoque:</label>
                  <input type="number" name="qtd">
                  <br>

                  <input type="hidden" name="acao" value="criar_mov">

                  <br>
                  <button type="submit" id="submit" value="Cadastrar">
                    Cadastrar
                  </button>
              </form>
              </fieldset>
              <br>
              <a href="admcatalogo.html">
                <button>
                  < </button> </a> </article> </div> </li> <li>
                    <input type="radio" name="tabs" class="rd_tab" id="tab2">
                    <label for="tab2" class="tab_label">
                      Modificar Item
                    </label>
                    <div class="tab-content">
                      <article>
                        <div class="form" align="center">

                          <form action="php/crud_Moveis.php" method="POST">
                            <fieldset>
                              <br>
                              <label for="imgmovel">
                                Imagens do Produto:</label>
                              <input type="url" id="img" name="img" accept="image/*" multiple="multiple">
                              <br>
                              <label for="pcmovel">
                                Código do Produto:
                              </label>
                              <input type="number" name="cod">
                              <br>
                              <label for="tipomovel">
                                Tipo de Móvel:
                              </label>
                              <select name="type">
                                <option value="1">
                                  Cadeira/Bancos
                                </option>
                                <option value="2">
                                  Mesa
                                </option>
                                <option value="3">
                                  Sofá
                                </option>
                                <option value="4">
                                  Armário
                                </option>
                                <option value="5">
                                  Cama
                                </option>
                                <option value="6">
                                  Poltrona
                                </option>
                              </select>
                              <br>
                              <label for="pcmovel">
                                Descrição do Produto:</label>
                              <input type="text" name="desc" id="desc">

                              <br>
                              <label for="pcmovel">
                                Preço do Produto:</label>
                              <input type="number" name="price">
                              <br>

                              <label for="pcmovel">
                                Quantidade no estoque:</label>
                              <input type="number" name="qtd">
                              <br>

                              <button type="submit" id="submit" value="Salvar Alterações">
                                Salvar
                              </button>
                            </fieldset>

                            <input type="hidden" name="acao" value="atualizar_mov">
                          </form>

                          <br>
                          <a href="admcatalogo.html">
                            <button>
                              < </button> </a> </div> </article> </div> </li> <li>
                                <input type="radio" name="tabs" class="rd_tab" id="tab3">
                                <label for="tab3" class="tab_label">Excluir Item</label>
                                <div class="tab-content">
                                  <article>
                                    <div id="selectmoveis" align="center">

                                      <form action="php/crud_Moveis.php" method="POST">
                                        <label for="pcmovel">
                                          Cod do Produto:
                                        </label>
                                        <input type="number" name="cod">
                                        <br>

                                        <br>

                                        <button type="submit">
                                          -->
                                        </button>
                                        <input type="hidden" name="acao" value="excluir_mov">
                                      </form>
                                    </div>
                                  </article>
                                </div>
        </li>
        <li>
          <input type="radio" id="tab4" class="rd_tab" name="tabs" checked="checked">
          <label for="tab4" class="tab_label">Banner Promocional</label>
          <div class="tab-content">
            <article>
              <form action="Catalogo.php" method="POST">
                <fieldset>
                  <br>
                  <label for="imgbanner">
                    Imagem do Banner:</label>
                  <input type="file" id="img" name="img" accept="image/*" multiple="multiple">
                  <br>

                  <br>
                  <button type="submit" id="submit" value="Cadastrar">
                    Cadastrar
                  </button>
              </form>
              </fieldset>
              <br>
              <a href="admcatalogo.html">
                <button>
                  < </button>voltar </a> </article> </div> </li> </ul> </div> <!-- Slide -->
                    <header>
                      <div class="slider">
                        <img src="img/promoc1.png" alt="imagem01" title="imagem01" />
                        <img src="img/promoc2.png" alt="imagem02" title="imagem02" />
                      </div>
                      <!--FIM DIV IMAGENS-->
                    </header>
                    <!---->
                    <!-- Grid -->

                    <section class='grid'>
                      <?php
                      include "php/dao.php";
                      $dao = new Dao();
                      $moveis = $dao->get_all();

                      foreach ($moveis as $moveis) {


                        echo "<div class='item-grid' >";
                        echo "<img src='" . $moveis["mov_img"] . "'>";
                        echo "<strong>R$ " . $moveis["mov_price"] . "</strong><br>";
                        echo "<strong>Código do produto: " . $moveis["mov_cod"] . "</strong><br>";
                        echo $moveis["mov_desc"];
                        echo "</div>";
                      }
                      ?>
                    </section>
  </main>
  <!---->
</body>

</html>