    <div id="Material">
        <?php if (empty($this->session->userdata('usuario')['isLogado']) || $this->session->userdata('usuario')['isLogado'] == false): ?>
            <div id="Error">
                <span>Você precisa estar logado para ver este material!</span>
            </div>
        <?php else: ?>               
            <section id="materiais" class="service-item">
               <div class="container">

                <div class="row">
                    <?php if ($this->session->flashdata('sucesso') == 'true'): ?>
                        <?php $this->session->set_flashdata('sucesso', ''); ?>
                        <div class="col-md-12 col-xs-12 wow fadeInDown">
                            <div class="alert alert-success">
                                <strong>Sucesso!</strong> Um email foi enviado com sua solicitação, em breve retornaremos o contato.
                            </div>
                        </div>
                    <?php elseif($this->session->flashdata('sucesso') == 'false'): ?>
                        <?php $this->session->set_flashdata('sucesso', ''); ?>
                        <div class="col-md-12 col-xs-12 wow fadeInDown">
                            <div class="alert alert-danger">
                                <strong>Erro!</strong> Houve um problema ao enviar o email, por favor tente novamente.
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php if (!empty($this->session->userdata('usuario')) && $this->session->userdata('usuario')['nivel'] == 1): ?>
                        <a class="btn btn-success selector-btn-add-arquivos" data-toggle="modal" href='#modalAddArquivo'>Adicionar Arquivos</a>
                    <?php endif ?>
                    
                    <div role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#Curso1" aria-controls="Curso1" role="tab" data-toggle="tab">Coaching Profissional</a>
                            </li>
                            <li role="presentation">
                                <a href="#Curso2" aria-controls="Curso2" role="tab" data-toggle="tab">Coaching Para Empresários</a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="Curso1">
                                <table id="tabela-anexos" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Formato</th>
                                            <th>Data</th>
                                            <th><span class="pull-right" style="margin-right: 10px;">Opções</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Teste</td>
                                            <td>.pdf</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Teste 82</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Teste 128</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Teste 72</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Teste 26</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Teste 452</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Teste 24</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                            <div role="tabpanel" class="tab-pane" id="Curso2">
                                <table id="tabela-anexos" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Nome</th>
                                            <th>Formato</th>
                                            <th>Data</th>
                                            <th><span class="pull-right" style="margin-right: 10px;">Opções</span></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Segunda aba</td>
                                            <td>.pdf</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Segunda aba 2</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Segunda aba 3</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Segunda aba 4</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Segunda aba 6</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Segunda aba 6</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Segunda aba 5</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Segunda aba 8</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Segunda aba 9</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Segunda aba 21</td>
                                            <td>.docx</td>
                                            <td>09/04/2018</td>
                                            <td>
                                                <a href="<?php echo base_url('index.php/site/downloadArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-cloud-download-alt"></i></a>
                                                <a href="<?php echo base_url('index.php/site/visualizarArquivo/1'); ?>" target="_blank" class="btn btn-default pull-right"><i class="fas fa-eye"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </div>
                        </div>

                    </div>

                </div><!--/.row-->
            </div><!--/.container-->
        </section><!--/#services-->
    </div>

    <!-- Modal para adicionar arquivos -->
    <?php if (!empty($this->session->userdata('usuario')) && $this->session->userdata('usuario')['nivel'] == 1): ?>
        <div class="modal fade modal-lg" id="modalAddArquivo">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Adicionar Arquivos</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-xs-6">
                                <label>Nome *</label>
                                <input type="text" name="arquivo-nome" class="form-control">
                            </div>
                            <div class="col-md-6 col-xs-6">
                                <label>Curso *</label>
                                <select class="form-control" name="arquivo-curso">
                                    <option>Selecione</option>
                                    <option value="1">Curso 1</option>
                                    <option value="2">Curso 2</option>
                                    <option value="3">Curso 3</option>
                                    <option value="4">Curso 3</option>
                                </select>
                            </div>
                            <div class="col-md-12 col-xs-12">
                                <input type="file" name="userfile" class="hidden selector-arquivo-hidden">
                                <button class="btn btn-primary selector-arquivo">Escolher Arquivo</button>
                                <label id="selector-nome-arquivo"></label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-success selector-btn-salvar-arquivos">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

<?php endif ?>

