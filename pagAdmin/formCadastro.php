<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="../images/gallery/icone.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="ISO-8859-1" />
        <title>Cadastrar usuarios</title>
        <meta name="description" content="Static &amp; Dynamic Tables" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <!-- bootstrap & fontawesome -->
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="../assets/font-awesome/4.5.0/css/font-awesome.min.css" />
        <!-- page specific plugin styles -->
        <!-- text fonts -->
        <link rel="stylesheet" href="../assets/css/fonts.googleapis.com.css" />
        <!-- ace styles -->
        <link rel="stylesheet" href="../assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />
        <!--[if lte IE 9]>
                <link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
        <![endif]-->
        <link rel="stylesheet" href="../assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="../assets/css/ace-rtl.min.css" />
        <!--[if lte IE 9]>
          <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        <![endif]-->
        <!-- inline styles related to this page -->
        <!-- ace settings handler -->
        <script src="../assets/js/ace-extra.min.js"></script>
        <!-- basic scripts -->
        <!--[if !IE]> -->
        <script src="../assets/js/jquery-1.11.3.min.js"></script>
        <!-- <![endif]-->
        <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    </head>
    <body class="no-skin">
        <div class="main-container ace-save-state" id="main-container">

            <?php include_once '../template/menu.php'; ?>     

            <div class="main-content">
                <div class="main-content-inner">
                    <div class="main-content">
                        <div class="main-content-inner">
                            <div class="page-content">
                                <div class="row">
                                    <div class="col-xs-12">								
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <h3 class="header smaller lighter blue container"><i class="ace-icon fa fa-check-square-o bigger-200"></i>&nbsp;&nbsp;&nbsp; Cadastrar Usuários</h3>
                                                <div class="clearfix">
                                                    <div class="pull-right tableTools-container"></div>
                                                </div>
                                                <div class="container">
                                                    <form action="../Controller/usuarioControler.php?action=insertUser" method="post" name="formUser">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputName" class="col-form-label">Nome:</label><span class="red">*</span>
                                                                <input type="text" class="form-control" name="nomeUsuario" required="true" id="inputName" placeholder="enter your name" autofocus="true">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputcpf" class="col-form-label">CPF:</label><span class="red">*</span>
                                                                <input type="text" class="form-control" name="cpf" required="true" id="inputcpf" placeholder="000.000.000-00">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputEmail4" class="col-form-label">Email:</label>
                                                                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="enter your email">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputtelefone" class="col-form-label">Telefone:</label><span class="red">*</span>
                                                                <input type="tel" class="form-control" required="true" name="telefone" id="inputtelefone" placeholder="enter your phone number">
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12">
                                                            <div class="form-row">
                                                                <label for="inputPerfil" class="col-form-label">Perfil</label><span class="red">*</span>
                                                                <div class="checkbox">
                                                                    <label><input type="radio" name="perfil" value="1" checked="true">Administrador</label>
                                                                </div>
                                                                <div class="checkbox">
                                                                    <label><input type="radio" name="perfil" value="2" checked="true">Funcionario</label>
                                                                </div>
                                                                <div class="checkbox disabled">
                                                                    <label><input type="radio" name="perfil" value="3" disabled>Usuário</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="cep" class="col-form-label">CEP:</label><span class="red">*</span>
                                                                <input type="number" class="form-control" id="cep" placeholder="Enter your zip code" required="true">
                                                                <input class="btn btn-info btn-sm" type="submit" id="IdBuscarCep" value="Buscar CEP">
                                                                <span> <a href="http://www.buscacep.correios.com.br/sistemas/buscacep/" target="_blank">Não sei meu CEP</a></span>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="endereco" class="col-form-label">Endereço:</label>
                                                                <input type="text" class="form-control" id="endereco" placeholder="Enter your address">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="casa" class="col-form-label">Casa:</label><span class="red">*</span>
                                                                <input type="text" class="form-control" id="casa" placeholder="Enter your home" required="true">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="cidade" class="col-form-label">Cidade:</label>
                                                                <input type="text" class="form-control" id="cidade" placeholder="Enter your city">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="bairro" class="col-form-label">Bairro:</label>
                                                                <input type="text" class="form-control" id="bairro" placeholder="Inform your neighborhood">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="uf" class="col-form-label">Estado:</label>
                                                                <input type="text" class="form-control" id="uf" placeholder="Enter your country">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="uf" class="col-form-label">Complemento:</label>
                                                                <input type="text" class="form-control" id="uf" placeholder="Report your add-on">
                                                            </div>
                                                        </div>
                                                        <br><br><br>
                                                        <div class="form-row">
                                                            <input type="submit" class="btn btn-primary" name="Salvar" value="Salvar"/>
                                                            <input type="reset" class="btn btn-warning" name="Limpar" value="Limpar"/>
                                                            <a href="./" type="button" class="btn btn-danger" name="reset" value="Limpar">Voltar</a>
                                                        </div>
                                                    </form>
                                                </div><!-- class-->
                                            </div><!-- /.row -->
                                        </div><!-- /.page-content -->
                                    </div><!-- /.col -->
                                </div>
                                <?php include_once '../template/footer.html'; ?>
                            </div><!-- /.main-content -->
                            <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
                                <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
                            </a>
                            <script type="text/javascript">
                                if ('ontouchstart' in document.documentElement)
                                    document.write("<script src='../assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
                            </script>
                            <script src="../assets/js/bootstrap.min.js"></script>
                            <!-- page specific plugin scripts -->
                            <script src="../assets/js/jquery.dataTables.min.js"></script>
                            <script src="../assets/js/jquery.dataTables.bootstrap.min.js"></script>
                            <script src="../assets/js/dataTables.buttons.min.js"></script>
                            <script src="../assets/js/buttons.flash.min.js"></script>
                            <script src="../assets/js/buttons.html5.min.js"></script>
                            <script src="../assets/js/buttons.print.min.js"></script>
                            <script src="../assets/js/buttons.colVis.min.js"></script>
                            <script src="../assets/js/dataTables.select.min.js"></script>
                            <!-- ace scripts -->
                            <script src="../assets/js/ace-elements.min.js"></script>
                            <script src="../assets/js/ace.min.js"></script>
                            <script type="text/javascript">
                                jQuery(function ($) {
                                    //initiate dataTables plugin
                                    var myTable =
                                            $('#dynamic-table')
                                            //.wrap("<div class='dataTables_borderWrap' />")   //if you are applying horizontal scrolling (sScrollX)
                                            .DataTable({

                                                bAutoWidth: false,
                                                "aoColumns": [
                                                    {"bSortable": true},
                                                    null, null, null, null, null,
                                                    {"bSortable": false}
                                                ],
                                                "aaSorting": [],
                                                select: {
                                                    style: 'multi'
                                                }
                                            });
                                    $.fn.dataTable.Buttons.defaults.dom.container.className = 'dt-buttons btn-overlap btn-group btn-overlap';

                                    new $.fn.dataTable.Buttons(myTable, {
                                        buttons: [
                                            {
                                                "extend": "colvis",
                                                "text": "<i class='fa fa-search bigger-110 blue'></i> <span class='hidden'>Show/hide columns</span>",
                                                "className": "btn btn-white btn-primary btn-bold",
                                                columns: ':not(:first):not(:last)'
                                            },
                                            {
                                                "extend": "copy",
                                                "text": "<i class='fa fa-copy bigger-110 pink'></i> <span class='hidden'>Copy to clipboard</span>",
                                                "className": "btn btn-white btn-primary btn-bold"
                                            },
                                            {
                                                "extend": "csv",
                                                "text": "<i class='fa fa-database bigger-110 orange'></i> <span class='hidden'>Export to CSV</span>",
                                                "className": "btn btn-white btn-primary btn-bold"
                                            },
                                            {
                                                "extend": "excel",
                                                "text": "<i class='fa fa-file-excel-o bigger-110 green'></i> <span class='hidden'>Export to Excel</span>",
                                                "className": "btn btn-white btn-primary btn-bold"
                                            },
                                            {
                                                "extend": "pdf",
                                                "text": "<i class='fa fa-file-pdf-o bigger-110 red'></i> <span class='hidden'>Export to PDF</span>",
                                                "className": "btn btn-white btn-primary btn-bold"
                                            },
                                            {
                                                "extend": "print",
                                                "text": "<i class='fa fa-print bigger-110 grey'></i> <span class='hidden'>Print</span>",
                                                "className": "btn btn-white btn-primary btn-bold",
                                                autoPrint: false,
                                                message: 'This print was produced using the Print button for DataTables'
                                            }
                                        ]
                                    });
                                    myTable.buttons().container().appendTo($('.tableTools-container'));

                                    //style the message box
                                    var defaultCopyAction = myTable.button(1).action();
                                    myTable.button(1).action(function (e, dt, button, config) {
                                        defaultCopyAction(e, dt, button, config);
                                        $('.dt-button-info').addClass('gritter-item-wrapper gritter-info gritter-center white');
                                    });


                                    var defaultColvisAction = myTable.button(0).action();
                                    myTable.button(0).action(function (e, dt, button, config) {

                                        defaultColvisAction(e, dt, button, config);


                                        if ($('.dt-button-collection > .dropdown-menu').length == 0) {
                                            $('.dt-button-collection')
                                                    .wrapInner('<ul class="dropdown-menu dropdown-light dropdown-caret dropdown-caret" />')
                                                    .find('a').attr('href', '#').wrap("<li />")
                                        }
                                        $('.dt-button-collection').appendTo('.tableTools-container .dt-buttons')
                                    });

                                    ////

                                    setTimeout(function () {
                                        $($('.tableTools-container')).find('a.dt-button').each(function () {
                                            var div = $(this).find(' > div').first();
                                            if (div.length == 1)
                                                div.tooltip({container: 'body', title: div.parent().text()});
                                            else
                                                $(this).tooltip({container: 'body', title: $(this).text()});
                                        });
                                    }, 500);

                                    myTable.on('select', function (e, dt, type, index) {
                                        if (type === 'row') {
                                            $(myTable.row(index).node()).find('input:checkbox').prop('checked', true);
                                        }
                                    });
                                    myTable.on('deselect', function (e, dt, type, index) {
                                        if (type === 'row') {
                                            $(myTable.row(index).node()).find('input:checkbox').prop('checked', false);
                                        }
                                    });
                                    $('th input[type=checkbox], td input[type=checkbox]').prop('checked', false);

                                    //select/deselect all rows according to table header checkbox
                                    $('#dynamic-table > thead > tr > th input[type=checkbox], #dynamic-table_wrapper input[type=checkbox]').eq(0).on('click', function () {
                                        var th_checked = this.checked;//checkbox inside "TH" table header

                                        $('#dynamic-table').find('tbody > tr').each(function () {
                                            var row = this;
                                            if (th_checked)
                                                myTable.row(row).select();
                                            else
                                                myTable.row(row).deselect();
                                        });
                                    });

                                    //select/deselect a row when the checkbox is checked/unchecked
                                    $('#dynamic-table').on('click', 'td input[type=checkbox]', function () {
                                        var row = $(this).closest('tr').get(0);
                                        if (this.checked)
                                            myTable.row(row).deselect();
                                        else
                                            myTable.row(row).select();
                                    });



                                    $(document).on('click', '#dynamic-table .dropdown-toggle', function (e) {
                                        e.stopImmediatePropagation();
                                        e.stopPropagation();
                                        e.preventDefault();
                                    });

                                    var active_class = 'active';
                                    $('#simple-table > thead > tr > th input[type=checkbox]').eq(0).on('click', function () {
                                        var th_checked = this.checked;//checkbox inside "TH" table header

                                        $(this).closest('table').find('tbody > tr').each(function () {
                                            var row = this;
                                            if (th_checked)
                                                $(row).addClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', true);
                                            else
                                                $(row).removeClass(active_class).find('input[type=checkbox]').eq(0).prop('checked', false);
                                        });
                                    });

                                    //select/deselect a row when the checkbox is checked/unchecked
                                    $('#simple-table').on('click', 'td input[type=checkbox]', function () {
                                        var $row = $(this).closest('tr');
                                        if ($row.is('.detail-row '))
                                            return;
                                        if (this.checked)
                                            $row.addClass(active_class);
                                        else
                                            $row.removeClass(active_class);
                                    });
                                    $('[data-rel="tooltip"]').tooltip({placement: tooltip_placement});

                                    //tooltip placement on right or left
                                    function tooltip_placement(context, source) {
                                        var $source = $(source);
                                        var $parent = $source.closest('table')
                                        var off1 = $parent.offset();
                                        var w1 = $parent.width();

                                        var off2 = $source.offset();
                                        //var w2 = $source.width();

                                        if (parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2))
                                            return 'right';
                                        return 'left';
                                    }
                                    $('.show-details-btn').on('click', function (e) {
                                        e.preventDefault();
                                        $(this).closest('tr').next().toggleClass('open');
                                        $(this).find(ace.vars['.icon']).toggleClass('fa-angle-double-down').toggleClass('fa-angle-double-up');
                                    });

                                })
                            </script>
                            <!--DADOS DO CEP-->
                            <!-- Adicionando JQuery -->
                            <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>

                            <!-- Adicionando Javascript -->
                            <script type="text/javascript" >

                                $(document).ready(function () {

                                    function limpa_formulário_cep() {
                                        // Limpa valores do formulário de cep.
                                        $("#rua").val("");
                                        $("#bairro").val("");
                                        $("#cidade").val("");
                                        $("#uf").val("");
                                        $("#ibge").val("");
                                    }

                                    //Quando o campo cep perde o foco.
                                    $("#cep").blur(function () {

                                        //Nova variável "cep" somente com dígitos.
                                        var cep = $(this).val().replace(/\D/g, '');

                                        //Verifica se campo cep possui valor informado.
                                        if (cep != "") {

                                            //Expressão regular para validar o CEP.
                                            var validacep = /^[0-9]{8}$/;

                                            //Valida o formato do CEP.
                                            if (validacep.test(cep)) {

                                                //Preenche os campos com "..." enquanto consulta webservice.
                                                $("#rua").val("...");
                                                $("#bairro").val("...");
                                                $("#cidade").val("...");
                                                $("#uf").val("...");
                                                $("#ibge").val("...");

                                                //Consulta o webservice viacep.com.br/
                                                $.getJSON("//viacep.com.br/ws/" + cep + "/json/?callback=?", function (dados) {

                                                    if (!("erro" in dados)) {
                                                        //Atualiza os campos com os valores da consulta.
                                                        $("#endereco").val(dados.logradouro);
                                                        $("#bairro").val(dados.bairro);
                                                        $("#cidade").val(dados.localidade);
                                                        $("#uf").val(dados.uf);
                                                        $("#ibge").val(dados.ibge);
                                                    } //end if.
                                                    else {
                                                        //CEP pesquisado não foi encontrado.
                                                        limpa_formulário_cep();
                                                        alert("CEP não encontrado.");
                                                    }
                                                });
                                            } //end if.
                                            else {
                                                //cep é inválido.
                                                limpa_formulário_cep();
                                                alert("Formato de CEP inválido.");
                                            }
                                        } //end if.
                                        else {
                                            //cep sem valor, limpa formulário.
                                            limpa_formulário_cep();
                                        }
                                    });
                                });

                            </script>
                            <!--FIM DADOS CEP-->
                            </body>
                            </html>