<?php include("/TopComm/login/views/header.php"); ?>
      <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Busque uma empresa pelo nome">
            </div>

          <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Platanção</h3>
              </div>
              <div class="panel-body">
                  <table>
                      <tr>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Cana de Açúcar
                                  </label>
                              </div>
                          </td>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Batata
                                  </label>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Milho
                                  </label>
                              </div>
                          </td>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Trigo
                                  </label>
                              </div>
                          </td>
                      </tr>
                      <tr>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Café
                                  </label>
                              </div>
                          </td>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Maconha
                                  </label>
                              </div>
                          </td>
                      </tr>
                  </table>
              </div>
              <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Serviço</h3>
              </div>
              <div class="panel-body">
                  <table>
                      <tr>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Plantação
                                  </label>
                              </div>
                          </td>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Colheita
                                  </label>
                              </div>
                          </td>
                          <td>
                              <div class="checkbox">
                                  <label>
                                    <input type="checkbox" value="" >
                                    Transporte
                                  </label>
                              </div>
                          </td>
                      </tr>
                  </table>
              </div>
          </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title">Estado</h3>
              </div>
              <div class="panel-body">
                  <select name="estado">
                    <option value="estado">Selecione o Estado</option>
                    <option value="ac">Acre</option>
                    <option value="al">Alagoas</option>
                    <option value="am">Amazonas</option>
                    <option value="ap">Amapá</option>
                    <option value="ba">Bahia</option>
                    <option value="ce">Ceará</option>
                    <option value="df">Distrito Federal</option>
                    <option value="es">Espírito Santo</option>
                    <option value="go">Goiás</option>
                    <option value="ma">Maranhão</option>
                    <option value="mt">Mato Grosso</option>
                    <option value="ms">Mato Grosso do Sul</option>
                    <option value="mg">Minas Gerais</option>
                    <option value="pa">Pará</option>
                    <option value="pb">Paraíba</option>
                    <option value="pr">Paraná</option>
                    <option value="pe">Pernambuco</option>
                    <option value="pi">Piauí</option>
                    <option value="rj">Rio de Janeiro</option>
                    <option value="rn">Rio Grande do Norte</option>
                    <option value="ro">Rondônia</option>
                    <option value="rs">Rio Grande do Sul</option>
                    <option value="rr">Roraima</option>
                    <option value="sc">Santa Catarina</option>
                    <option value="se">Sergipe</option>
                    <option value="sp">São Paulo</option>
                    <option value="to">Tocantins</option>
                </select>
                </div>
              </div>


            <br><button type="submit" class="btn btn-primary btn-lg btn-block">Buscar</button>
        </form>



<?php include("/TopComm/login/views/footer.php"); ?>
