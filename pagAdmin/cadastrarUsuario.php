<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <link rel="shortcut icon" href="../images/gallery/icone.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta charset="utf-8" />
        <title>Cadastro de Usuário</title>

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

        <!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

        <!--[if lte IE 8]>
        <script src="assets/js/html5shiv.min.js"></script>
        <script src="assets/js/respond.min.js"></script>
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
                                                <h3 class="header smaller lighter blue container"><i class="ace-icon fa fa-check-square-o bigger-200"></i>&nbsp;&nbsp;&nbsp; Cadastro de Acesso</h3>
                                                <div class="clearfix">
                                                    <div class="pull-right tableTools-container"></div>
                                                </div>

                                                <div class="container">
                                                    <!--<h1>Corpo do Cadastro de login e senha aqui</h1>-->
                                                    <form class="form form-group" action="../Controller/usuarioControler.php?action=insertAcesso" method="POST">
                                                        <div class="form-row">
                                                            <div class="form-group col-md-6">
                                                                <label for="inputName" class="col-form-label">Login:</label><span class="red">*</span>
                                                                <input type="text" class="form-control" name="nameLogin" required="true" id="inputName" placeholder="enter your login" autofocus="true">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label for="inputcpf" class="col-form-label">Password:</label><span class="red">*</span>
                                                                <input type="password" class="form-control" name="namePassword" required="true" id="inputcpf" placeholder="enter your password">
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
                                                            <div class="form-row">
                                                                <input type="submit" class="btn btn-primary" name="Salvar" value="Salvar"/>
                                                                <input type="reset" class="btn btn-warning" name="Limpar" value="Limpar"/>
                                                                <a href="./" type="button" class="btn btn-danger" name="reset" value="Limpar">Voltar</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                        
                                </div><!-- /.col -->
                            </div><!-- /.row -->
                        </div><!-- /.page-content -->
                    </div>
                </div>
            </div><!-- /.page-content -->
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
      <?php if (isset($_GET['msg'])) { ?>

            <!--Mensagem Sucesso-->
            <?php if ($_GET['msg'] == 'sucessAcesso') { ?>             
                <script type="text/javascript">
                    alert('Usuário cadastrado com Sucesso!');
                </script>
            <?php } elseif ($_GET['msg'] == 'errorAcesso') { ?>
                <script type="text/javascript">
                    alert('Erro ao cadastrar usuário, tente novamente.');
                </script>  
            <?php } ?><!--FIM Mensagem Sucesso-->
                <?php } ?>
</body>
</html>